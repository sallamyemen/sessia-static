<?php

$projects = [
    (object) [
        'id' => 1,
        'header' => 'Project V',
        'subtitle' => __('мобильное приложение'),
        'description' => __('Онлайн-магазин продуктов для красоты и здоровья из Франции и Швейцарии с продвинутой программой привилегий и интегрированной соцсетью'),
        'link' => getOs() === 'ios' ? 'https://apps.apple.com/app/project-v/id1220488838' : 'https://play.google.com/store/apps/details?id=com.sessia',
        'img' => 'phone1.png?v=1',
    ],
    (object) [
        'id' => 2,
        'header' => 'COFFEECELL',
        'subtitle' => __('мобильное приложение'),
        'description' => __('Онлайн-магазин продуктов и напитков с белым императорским женьшенем с продвинутой программой привилегий и интегрированной соцсетью'),
        'link' => getOs() === 'ios' ? 'https://apps.apple.com/app/coffeecell/id1643537836' : 'https://play.google.com/store/apps/details?id=com.sessia.coffeecell',
        'img' => 'phone2.png?v=1',
    ],
    (object) [
        'id' => 3,
        'header' => 'Kicksback',
        'subtitle' => __('мобильное приложение'),
        'description' => __('Кэшбэк-сервис, помогающий получать подарки и совершать выгодные покупки в ресторанах и магазинах Москвы, а также зарабатывать на рекомендациях'),
        'link' => getOs() === 'ios' ? 'https://apps.apple.com/app/kicksback-cashback-and-gifts/id1546115424' : 'https://play.google.com/store/apps/details?id=com.sessia.kickbacks',
        'img' => 'phone3.png?v=1',
    ],
    (object) [
        'id' => 4,
        'header' => 'Kicksback <br>for Business',
        'subtitle' => __('мобильное приложение'),
        'description' => __('AdTech-продукт на основе ИИ, позволяющий малому и среднему бизнесу использовать кассовые чеки и своих клиентов для роста лояльной аудитории и продаж'),
        'link' => getOs() === 'ios' ? 'https://apps.apple.com/app/kicksback-business/id1414883041' : 'https://play.google.com/store/apps/details?id=com.sessia.business',
        'img' => 'phone4.png?v=1',
    ],
    (object) [
        'id' => 5,
        'header' => 'Sessia CRM 2.0',
        'subtitle' => __('web-версия'),
        'description' => __('CRM-система, ориентированная на комплексную поддержку малого и среднего бизнеса, пострадавшего в результате ковидных ограничений'),
        'link' => null,
        'img' => 'phone5.png?v=1',
    ],
    (object) [
        'id' => 6,
        'header' => 'NRK87.',
        'subtitle' => __('мобильное приложение'),
        'description' => __('Проект личной безопасности: благодаря интегрированному в одежду NRK87. GPS-трекеру вы не потеряетесь и в любой точке мира сможете вызвать помощь'),
        'link' => getOs() === 'ios' ? 'https://play.google.com/store/apps/details?id=com.sessia.nrk87' : '',
        'img' => 'phone6.png?v=1',
    ],
    (object) [
        'id' => 7,
        'header' => 'UME',
        'subtitle' => __('мобильное приложение'),
        'description' => __('Универсальный сервис для животных и их владельцев: вы сможете покупать премиальную продукцию UME, а ваши питомцы — зарабатывать деньги по программе привилегий'),
        'link' => null,
        'img' => 'phone7.png?v=1',
    ],
    (object) [
        'id' => 8,
        'header' => __('Добро.Будильник'),
        'subtitle' => __('web-версия'),
        'description' => __('Социальный проект, который помогает делать первые шаги в благотворительности и совершать добровольные пожертвования на регулярной основе'),
        'link' => null,
        'img' => 'phone8.png?v=1',
    ],
];

?>

<div class="projects" id="projects">
    <div class="wrapper wrapper_block">
        <div class="projects__header wow fadeIn"><?= __('Проекты Sessia') ?></div>
        <div class="gallery owl-carousel owl-theme">
        <?php foreach ($projects as $key => $project) { ?>
            <div class="gallery-item item">
                <div class="gallery__text">
                    <?php if (!empty($project->link)) { ?>
                    <a class="gallery-header" href="<?= $project->link ?>" target="_blank" rel="nofollow"><?= $project->header ?></a>
                    <?php } else { ?>
                    <div class="gallery-header"><?= $project->header ?></div>
                    <?php } ?>
                    <div class="gallery-subtitle"><?= $project->subtitle ?></div>
                    <div class="gallery-description"><?= $project->description ?></div>
                    <?php if (!empty($project->link)) { ?>
                    <a class="gallery-btn" href="<?= $project->link ?>" target="_blank" rel="nofollow"><?= __('Скачать') ?></a>
                    <?php } ?>
                </div>
                <div class="gallery__img gallery__img_<?= $project->id ?>">
                    <img class="" src="<?= setPath('img/' . $project->img) ?>" alt="phone">
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
