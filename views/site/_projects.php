<?php

use yii\helpers\Url;

function getOs() {
    $oss = [
        'android' => 'Android',
        'ios' => '(Mac_PowerPC)|(Macintosh)|(Linux)|(X11)|(SunOS)|(OpenBSD)|(QNX)|(BeOS)|(OS/2)|(Win)',
    ];

    $os = 'mac';
    foreach ($oss as $key => $val) {
        if (preg_match('#' . $val . '#i', $_SERVER['HTTP_USER_AGENT'])) {
            $os = $key;
            break;
        }
    }

    return $os;
}

$projects = [
    (object) [
        'id' => 1,
        'header' => 'Project V',
        'subtitle' => Yii::t('app', 'мобильное приложение'),
        'description' => Yii::t('app', 'Онлайн-магазин продуктов для красоты и здоровья из Франции и Швейцарии с продвинутой программой привилегий и интегрированной соцсетью'),
        'link' => ['/project/view', 'project' => 'project-v'],
        'store_link' => getOs() === 'ios' ? 'https://apps.apple.com/app/project-v/id1220488838' : 'https://play.google.com/store/apps/details?id=com.sessia',
        'img' => 'phone1.png?v=1',
    ],
    (object) [
        'id' => 2,
        'header' => 'COFFEECELL',
        'subtitle' => Yii::t('app', 'мобильное приложение'),
        'description' => Yii::t('app', 'Онлайн-магазин продуктов и напитков с белым императорским женьшенем с продвинутой программой привилегий и интегрированной соцсетью'),
        'link' => ['/project/view', 'project' => 'coffeecell'],
        'store_link' => getOs() === 'ios' ? 'https://apps.apple.com/app/coffeecell/id1643537836' : 'https://play.google.com/store/apps/details?id=com.sessia.coffeecell',
        'img' => 'phone2.png?v=1',
    ],
    (object) [
        'id' => 3,
        'header' => 'Kicksback',
        'subtitle' => Yii::t('app', 'мобильное приложение'),
        'description' => Yii::t('app', 'Кэшбэк-сервис, помогающий получать подарки и совершать выгодные покупки в ресторанах и магазинах Москвы, а также зарабатывать на рекомендациях'),
        'link' => ['/project/view', 'project' => 'kicksback'],
        'store_link' => getOs() === 'ios' ? 'https://apps.apple.com/app/kicksback-cashback-and-gifts/id1546115424' : 'https://play.google.com/store/apps/details?id=com.sessia.kickbacks',
        'img' => 'phone3.png?v=1',
    ],
    (object) [
        'id' => 4,
        'header' => 'Kicksback <br>Business',
        'subtitle' => Yii::t('app', 'мобильное приложение'),
        'description' => Yii::t('app', 'AdTech-продукт на основе ИИ, позволяющий малому и среднему бизнесу использовать кассовые чеки и своих клиентов для роста лояльной аудитории и продаж'),
        'link' => ['/project/view', 'project' => 'kicksback-business'],
        'store_link' => getOs() === 'ios' ? 'https://apps.apple.com/app/kicksback-business/id1414883041' : 'https://play.google.com/store/apps/details?id=com.sessia.business',
        'img' => 'phone4.png?v=1',
    ],
    (object) [
        'id' => 5,
        'header' => 'Sessia CRM 2.0',
        'subtitle' => Yii::t('app', 'web-версия'),
        'description' => Yii::t('app', 'CRM-система, ориентированная на комплексную поддержку малого и среднего бизнеса, пострадавшего в результате ковидных ограничений'),
        'link' => null,
        'store_link' => null,
        'img' => 'phone5.png?v=1',
    ],
    (object) [
        'id' => 6,
        'header' => 'NRK87.',
        'subtitle' => Yii::t('app', 'мобильное приложение'),
        'description' => Yii::t('app', 'Проект личной безопасности: благодаря интегрированному в одежду NRK87. GPS-трекеру вы не потеряетесь и в любой точке мира сможете вызвать помощь'),
        'link' => ['/project/view', 'project' => 'nrk'],
        'store_link' => getOs() === 'ios' ? 'https://play.google.com/store/apps/details?id=com.sessia.nrk87' : '',
        'img' => 'phone6.png?v=1',
    ],
    (object) [
        'id' => 7,
        'header' => 'UME',
        'subtitle' => Yii::t('app', 'мобильное приложение'),
        'description' => Yii::t('app', 'Универсальный сервис для животных и их владельцев: вы сможете покупать премиальную продукцию UME, а ваши питомцы — зарабатывать деньги по программе привилегий'),
        'link' => ['/project/view', 'project' => 'ume'],
        'store_link' => null,
        'img' => 'phone7.png?v=1',
    ],
    (object) [
        'id' => 8,
        'header' => Yii::t('app', 'Добро.Будильник'),
        'subtitle' => Yii::t('app', 'web-версия'),
        'description' => Yii::t('app', 'Социальный проект, который помогает делать первые шаги в благотворительности и совершать добровольные пожертвования на регулярной основе'),
        'link' => null,
        'store_link' => 'https://play.google.com/store/apps/details?id=com.sessia.alarm',
        'img' => 'phone8.png?v=1',
    ],
];

?>

<div class="projects" id="projects">
    <div class="wrapper wrapper_block">
        <div class="projects__header wow fadeIn"><?= Yii::t('app', 'Проекты Sessia') ?></div>
        <div class="gallery owl-carousel owl-theme">
        <?php foreach ($projects as $key => $project) { ?>
            <div class="gallery-item item">
                <div class="gallery__text">
                    <?php if (!empty($project->link)) { ?>
                    <a class="gallery-header" href="<?= Url::to($project->link) ?>"><?= $project->header ?></a>
                    <?php } else { ?>
                    <div class="gallery-header"><?= $project->header ?></div>
                    <?php } ?>
                    <div class="gallery-subtitle"><?= $project->subtitle ?></div>
                    <div class="gallery-description"><?= $project->description ?></div>
                    <?php if (!empty($project->store_link)) { ?>
                    <a class="gallery-btn" href="<?= $project->store_link ?>" target="_blank" rel="nofollow"><?= Yii::t('app', 'Скачать') ?></a>
                    <?php } else { ?>
                    <div class="gallery-btn inactive"><?= Yii::t('app', 'Совсем скоро...') ?></div>
                    <?php } ?>
                </div>
                <div class="gallery__img gallery__img_<?= $project->id ?>">
                    <img class="" src="<?= Url::to('@web/front/img-main/' . $project->img) ?>" alt="phone">
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
