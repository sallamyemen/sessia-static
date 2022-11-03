<?php

namespace app\services\tools;

use app\entities\Contact;
use app\entities\Project;
use app\repositories\LangRepository;
use app\repositories\PostRepository;
use app\repositories\VacancyRepository;
use Yii;
use yii\helpers\FileHelper;
use yii\helpers\Url;

class SeoService
{
    private $postRepository;
    private $vacancyRepository;

    public function __construct(
        PostRepository $postRepository,
        VacancyRepository $vacancyRepository
    )
    {
        $this->postRepository = $postRepository;
        $this->vacancyRepository = $vacancyRepository;
    }

    public static function getCanonicalAndAltLinks()
    {
        $html = Yii::$app->view->registerLinkTag([
            'rel' => 'canonical',
            'href' => !isset($_GET['page'])
                ? Url::current([], true)
                : str_replace('page-1/', '', Url::current(array_filter(['lang_id' => 1, 'page' => 1]), true)),
        ]);

        return $html;
    }

    public function getSitemap()
    {
        $urls = [];
        $i = 1;
        $langs = $this->langRepository->getAllActive();

        /**
         * Главная
         */
        foreach ($langs as $lang) {
            $urls[$i]['url'] = [
                'loc' => Url::to(['/site/index', 'lang_id' => $lang->id], true),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => 1,
            ];
            $i++;
        }
    
        /**
         * О нас
         */
        foreach ($langs as $lang) {
            $urls[$i]['url'] = [
                'loc' => Url::to(['/site/about', 'lang_id' => $lang->id], true),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => 1,
            ];
            $i++;
        }

        /**
         * Проекты
         */
        $projects = new Project();
        foreach ($projects->getList() as $project) {
            foreach ($langs as $lang) {
                $urls[$i]['url'] = [
                    'loc' => Url::to($project->getLink($lang->id), true),
                    'lastmod' => date('Y-m-d', strtotime($project->date_updated)),
                    'changefreq' => 'weekly',
                    'priority' => 0.8,
                ];
                $i++;
            }
        }

        /**
         * Новости
         */
        foreach ($langs as $lang) {
            $urls[$i]['url'] = [
                'loc' => Url::to(['/news/index', 'lang_id' => $lang->id], true),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => 1,
            ];
            $i++;
        }
        foreach ($this->postRepository->getAllByType(1) as $post) {
            foreach ($langs as $lang) {
                if (!empty($post->getTitle($lang->url))) {
                    $urls[$i]['url'] = [
                        'loc' => Url::to($post->getLink($lang->id), true),
                        'lastmod' => date('Y-m-d', strtotime($post->date_updated)),
                        'changefreq' => 'weekly',
                        'priority' => 0.6,
                    ];
                    $i++;
                }
            }
        }

        /**
         * СМИ о нас
         */
        foreach ($langs as $lang) {
            $urls[$i]['url'] = [
                'loc' => Url::to(['/mass-media/index', 'lang_id' => $lang->id], true),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => 1,
            ];
            $i++;
        }

        /**
         * Вакансии
         */
        $urls[$i]['url'] = [
            'loc' => Url::to(['/vacancy/index', 'lang_id' => 1], true),
            'lastmod' => date('Y-m-d'),
            'changefreq' => 'weekly',
            'priority' => 1,
        ];
        $i++;
        foreach ($this->vacancyRepository->getAll() as $vacancy) {
            $urls[$i]['url'] = [
                'loc' => Url::to($vacancy->getLink(1), true),
                'lastmod' => date('Y-m-d', strtotime($vacancy->date_updated)),
                'changefreq' => 'weekly',
                'priority' => 0.6,
            ];
            $i++;
        }
    
        /**
         * Контакты
         */
        $contacts = new Contact();
        foreach ($contacts->getList() as $contact) {
            foreach ($langs as $lang) {
                $urls[$i]['url'] = [
                    'loc' => Url::to($contact->getLink($lang->id), true),
                    'lastmod' => date('Y-m-d'),
                    'changefreq' => 'weekly',
                    'priority' => 1,
                ];
                $i++;
            }
        }

        return $urls;
    }

    /**
     * https://www.sitemaps.org/ru/protocol.html
     */
    public function createSiteMap()
    {
        $urls = $this->getSitemap();

        $sitemap = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
        foreach($urls as $url) {
            if (is_array($url)) {
                $url_tag = $sitemap->addChild("url");
                $url_tag->addChild("loc", $url['url']['loc']);
                $url_tag->addChild("lastmod", $url['url']['lastmod']);
                $url_tag->addChild("changefreq", $url['url']['changefreq']);
                $url_tag->addChild("priority", $url['url']['priority']);
            }
        }

        /*header('Content-Type: text/xml');
        echo $sitemap->asXML();
        exit();*/

        $file = 'sitemap.xml';

        $fileDir = Url::to('@webroot/' . $file);
        if (is_file($fileDir)) FileHelper::unlink($fileDir);

        $current = $sitemap->asXML();
        file_put_contents($file, $current);
    }
}
