<?php

namespace app\services\tools;

use app\entities\tools\SeoMetadata;
use app\repositories\SeoMetadataRepository;
use Yii;
use yii\helpers\Url;

class SeoMetadataService
{
    private $seoMetadataRepository;

    public function __construct(
        SeoMetadataRepository $seoMetadataRepository
    )
    {
        $this->seoMetadataRepository = $seoMetadataRepository;
    }

    public function create()
    {
        $seoRedirect = SeoMetadata::create();
        return $this->seoMetadataRepository->save($seoRedirect);
    }

    public function edit(
        $id,
        $link,
        $title,
        $description,
        $h1,
        $text
    )
    {
        $seoRedirect = $this->seoMetadataRepository->get($id);
        $seoRedirect->edit(
            $link,
            $title,
            $description,
            $h1,
            $text
        );
        $this->seoMetadataRepository->save($seoRedirect);
    }

    public function remove($id): void
    {
        $seoRedirect = $this->seoMetadataRepository->get((int)$id);
        $this->seoMetadataRepository->remove($seoRedirect);
    }

    public function get($params = [])
    {
        $title = '';
        $description = '';
        $h1 = '';
        $text = '';
        $image = isset($params['image']) ? Url::to($params['image'], true) : Url::to('@web/front/img/share.jpg?v=1', true);
        $robots = isset($params['robots']) && $params['robots'] === false ? false : true;

        $link = str_replace("?_pjax=", "", Url::current(['_pjax' => ''], true));

        $seoMetadataRepository = new SeoMetadataRepository();
        $seoMedatada = $seoMetadataRepository->getByLink($link);
        if ($seoMedatada) {
            if (!empty($seoMedatada->title)) {
                $title = $seoMedatada->title;
            }
            if (!empty($seoMedatada->description)) {
                $description = $seoMedatada->description;
            }
            if (!empty($seoMedatada->h1)) {
                $h1 = nl2br($seoMedatada->h1);
            }
            if (!empty($seoMedatada->text)) {
                $text = nl2br($seoMedatada->text);
            }
        } else {
            if (isset($params['title'])) {
                $title = strip_tags($params['title']);
            }
            if (isset($params['description'])) {
                $description = strip_tags($params['description']);
            }
            if (isset($params['h1'])) {
                $h1 = $params['h1'];
            }
            if (isset($params['text'])) {
                $text = $params['text'];
            }
        }

        $description = str_replace("<br />", " ", $description);

        $seoMedatada = SeoMetadata::currentPage(
            $title,
            $description,
            $h1,
            $text
        );

        $view = Yii::$app->view;
        $view->title = $seoMedatada->title;
        $view->registerMetaTag(['name' => 'description', 'content' => $seoMedatada->description]);

        if ($robots) {
            $view->registerMetaTag(['name' => 'robots', 'content' => 'index, follow']);
        } else {
            $view->registerMetaTag(['name' => 'robots', 'content' => 'noindex, nofollow']);
        }

        // Open graph
        $view->registerMetaTag(['property' => 'og:url', 'content' => !isset($_GET['page'])
            ? Url::current(['lang_id' => 1], true)
            : str_replace('page-1/', '', Url::current(array_filter(['lang_id' => 1, 'page' => 1]), true))], 'og:url');
        $view->registerMetaTag(['property' => 'og:type', 'content' => isset($params['og_type']) ? $params['og_type'] : 'website']);
        $view->registerMetaTag(['property' => 'og:title', 'content' => $title]);
        $view->registerMetaTag(['property' => 'og:description', 'content' => $description]);
        $view->registerMetaTag(['property' => 'og:image', 'content' => $image]);
        $view->registerMetaTag(['property' => 'og:locale', 'content' => str_replace('-', '_', Yii::$app->language)]);
        $view->registerMetaTag(['property' => 'og:site_name', 'content' => Yii::$app->params['name']]);

        //$this->getBreadcrumbs($view, $params);
        //$this->getSiteOrganization($params);
        //$this->getOrganization($params);

        $view->registerJs('
        $(document).ready(function() {
            $(document).on("pjax:end", function() {
                $("meta[name=description]").attr("content", "' . $seoMedatada->description . '");
            });
        });
        ');

        return $seoMedatada;
    }

    public function getBreadcrumbs($view, $params = [])
    {
        if (isset($params['breadcrumbs'])) {
            foreach ($params['breadcrumbs'] as $key => $breadcrumbs) {
                $view->params['breadcrumbs'][$key] = [
                    'url' => Url::to($breadcrumbs['url'], true),
                    'label' => strip_tags($breadcrumbs['label']),
                ];
            }
            return JsonLDHelper::addBreadcrumbList();
        }
    }

    public function getSiteOrganization($params = [])
    {
        if (isset($params['site-organization']) && $params['site-organization']) {
            $context = (object)[
                "@type" => "http://schema.org/Organization",
                "http://schema.org/name" => Yii::$app->params['name'],
                "http://schema.org/email" => Yii::$app->params['email-info'],
                "http://schema.org/telephone" => Yii::$app->params['phone'],
                "http://schema.org/url" => Url::to(['/site/index'], true),
                "http://schema.org/logo" => Url::to('@web/front/img/logo.svg?v=1', true),
                "http://schema.org/description" => $this->setClearRow(Yii::$app->params['description']),
            ];
            JsonLDHelper::add($context);
        }
    }

    public function getNewsList($params = [])
    {
        if (isset($params['news-list']) && $params['news-list']) {
            $itemListElement = [];
            $position = 1;
            foreach ($params['news-list'] as $key => $model) {
                $itemListElement[] = (object)[
                    "@type" => "http://schema.org/NewsArticle",
                    "http://schema.org/position" => $position,
                    "http://schema.org/url" => Url::to($model->getLink(), true),
                    "http://schema.org/publisher" => (object)[
                        "@type" => "http://schema.org/Organization",
                        "http://schema.org/name" => Yii::$app->params['name'],
                        "http://schema.org/logo" => Url::to('@web/front/img/logo.svg?v=1', true),
                    ],
                    "http://schema.org/headline" => $this->setClearRow($model->getTitle()),
                ];
                $position++;
            }
            $context = (object)[
                "@type" => "http://schema.org/ItemList",
                "http://schema.org/name" => Yii::t('app', 'Новости'),
                "http://schema.org/itemListElement" => $itemListElement,
            ];
            JsonLDHelper::add($context);
        }
    }

    public function getNews($params = [])
    {
        if (isset($params['news']) && $params['news']) {
            $model = $params['news'];
            $context = (object)[
                "@type" => "http://schema.org/NewsArticle",
                "http://schema.org/url" => Url::to($model->getLink(), true),
                "http://schema.org/publisher" => (object)[
                    "@type" => "http://schema.org/Organization",
                    "http://schema.org/name" => Yii::$app->params['name'],
                    "http://schema.org/logo" => Url::to('@web/front/img/logo.svg?v=1', true),
                ],
                "http://schema.org/headline" => $this->setClearRow($model->getTitle()),
                "http://schema.org/mainEntityOfPage" => Url::to($model->getLink(), true),
                "http://schema.org/articleBody" => strip_tags($model->getText()),
                "http://schema.org/datePublished" => gmdate('Y-m-dTH:i:s+03:00', strtotime($model->date_created)),
            ];
            JsonLDHelper::add($context);
        }
    }

    public function getProjectList($params = [])
    {
        if (isset($params['project-list']) && $params['project-list']) {
            $itemListElement = [];
            $position = 1;
            foreach ($params['project-list'] as $key => $model) {
                $itemListElement[] = (object)[
                    "@type" => "http://schema.org/ListItem",
                    "http://schema.org/position" => $position,
                    "http://schema.org/item" => (object)[
                        "@type" => "http://schema.org/Organization",
                        "http://schema.org/image" => Url::to($model->getCoverItem(), true),
                        "http://schema.org/name" => $model->title,
                        "http://schema.org/url" => $model->link,
                        "http://schema.org/description" => $this->setClearRow($model->description),
                    ],
                ];
                $position++;
            }
            $context = (object)[
                "@type" => "http://schema.org/ItemList",
                "http://schema.org/name" => Yii::t('app', 'Проекты'),
                "http://schema.org/itemListElement" => $itemListElement,
            ];
            JsonLDHelper::add($context);
        }
    }

    public function getProject($params = [])
    {
        if (isset($params['project']) && $params['project']) {
            $model = $params['project'];
            $context = (object)[
                "@type" => "http://schema.org/Organization",
                "http://schema.org/aggregateRating" => (object)[
                    "@type" => "http://schema.org/AggregateRating",
                    "http://schema.org/ratingValue" => 4.8,
                    "http://schema.org/bestRating" => 5,
                    "http://schema.org/reviewCount" => 1536,
                ],
                "http://schema.org/logo" => Url::to($model->getLogoImg(), true),
                "http://schema.org/name" => $model->title,
                "http://schema.org/url" => $model->link,
                "http://schema.org/foundingDate" => $model->foundation_date,
                "http://schema.org/member" => (object)[
                    "@type" => "http://schema.org/OrganizationRole",
                    "http://schema.org/member" => (object)[
                        "@type" => "http://schema.org/Person",
                        "http://schema.org/name" => $model->project_manager,
                    ],
                    "http://schema.org/roleName" => $model->getPosition(),
                ],
                "http://schema.org/description" => $this->setClearRow($model->description),
            ];
            JsonLDHelper::add($context);
        }
    }

    public function getOrganization($params = [])
    {
        if (isset($params['organization']) && $params['organization']) {
            $model = $params['organization'];
            $context = (object)[
                "@type" => "http://schema.org/Organization",
                "http://schema.org/name" => Yii::$app->params['name'],
                "http://schema.org/address" => (object)[
                    "@type" => "http://schema.org/PostalAddress",
                    "http://schema.org/addressLocality" => Yii::t('app', '{country}, {city}', ['city' => $model->city, 'country' => $model->country]),
                    "http://schema.org/streetAddress" => $model->address,
                ],
                "http://schema.org/email" => $model->email,
                "http://schema.org/telephone" => $model->phone,
            ];
            JsonLDHelper::add($context);
        }
    }

    public function setClearRow($row)
    {
        return strip_tags(
            str_replace('&mdash;', '—',
                str_replace('&#8470;', '№',
                    str_replace('&nbsp;', ' ', $row)
                )
            )
        );
    }
}
