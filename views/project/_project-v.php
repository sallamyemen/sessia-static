<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

?>

<section class="project-project-v-1" style="background-image: url('<?= Url::to('@web/storage/project/project-v/bg-1.svg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="project-project-v-1__title wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/project-v/logo.svg?v=1') ?>')"></div>
            </div>
        </div>
        <div class="row project-project-v-1__info">
            <div class="col-lg-4 offset-lg-4">
                <div class="project-project-v-1__image project-project-v-1__image_1 wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/project-v/image-1.png?v=1') ?>')"></div>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="project-project-v-1__text wow fadeInDown">
                    <?= Yii::t('app', 'Мобильная платформа, объединяющая маркетплейс, кэшбэк-сервис, систему отчетности и&nbsp;социальную сеть') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-project-v-2" style="background-image: url('<?= Url::to('@web/storage/project/project-v/bg-2.svg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="project-project-v-2__image wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/project-v/image-2.png?v=1') ?>')"></div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="project-project-v-2__info">
                    <div class="project-project-v-2__text wow fadeInDown">
                        <?= Yii::t('app', 'Project V&nbsp;&mdash; международный бренд инновационных натуральных продуктов для красоты и&nbsp;здоровья с&nbsp;производством во&nbsp;Франции и&nbsp;Швейцарии') ?>
                    </div>
                    <div class="project-project-v-2__caption wow fadeInDown">
                        <b><?= Yii::t('app', 'Работает в&nbsp;17&nbsp;странах:') ?></b><br>
                        <?= Yii::t('app', 'США, России, Вьетнаме, Германии, Австрии, Польше Болгарии, Узбекистане, Казахстане, Армении, Сингапуре и&nbsp;др.') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$arr = [
    (object) [
        'title' => Yii::t('app', 'Онлайн-магазин'),
        'text' => Yii::t('app', 'Приобретайте продукцию напрямую у&nbsp;производителя'),
    ],
    (object) [
        'title' => Yii::t('app', 'Рейтинг клиентов'),
        'text' => Yii::t('app', 'Копите баллы и&nbsp;получайте подарки от&nbsp;компании'),
    ],
    (object) [
        'title' => Yii::t('app', 'Кошелек'),
        'text' => Yii::t('app', 'Оплачивайте покупки, выводите накопленные средства'),
    ],
    (object) [
        'title' => Yii::t('app', 'Кэшбэк-система'),
        'text' => Yii::t('app', 'Получайте кэшбэк и&nbsp;бонусы за&nbsp;свои покупки'),
    ],
    (object) [
        'title' => Yii::t('app', 'Лента и&nbsp;чат'),
        'text' => Yii::t('app', 'Узнавайте новости и&nbsp;общайтесь с&nbsp;другими пользователями'),
    ],
];

?>
<section class="project-project-v-3">
    <div class="container">
        <div class="project-project-v-3__title wow fadeInDown">
            <?= Yii::t('app', 'Функционал и&nbsp;возможности') ?>
        </div>
        <div class="project-project-v-3__list">
        <?php foreach ($arr as $key => $val) { ?>
            <div class="project-project-v-3__item">
                <div class="row">
                    <div class="col-lg-<?= (4 + $key) ?> wow fadeInDown">
                        <div class="project-project-v-3__item-title"><?= $val->title ?></div>
                        <div class="project-project-v-3__item-hr"></div>
                        <div class="project-project-v-3__item-text"><?= $val->text ?></div>
                    </div>
                    <div class="col-lg-<?= (8 - $key) ?>">
                        <div class="project-project-v-3__item-image-container">
                            <div class="project-project-v-3__item-image wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/project-v/image-3-' . ($key + 1) . '.png?v=1') ?>'); z-index: <?= (9 - $key) ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>

<section class="project-project-v-4" style="background-image: url('<?= Url::to('@web/storage/project/project-v/bg-4.svg?v=1') ?>')">
    <div class="container">
        <div class="project-coffeecell-4__container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="project-project-v-4__title wow fadeInDown">
                        <?= Yii::t('app', 'Универсальный помощник для&nbsp;покупок и&nbsp;общения') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="project-project-v-4__text wow fadeInDown">
                        <?= Yii::t('app', 'Приложение COFFEECELL помогает клиентам бренда покупать с&nbsp;максимальной выгодой продукты с&nbsp;белым императорским женьшенем, пользоваться преимуществами программы лояльности и&nbsp;раскрывать таланты') ?>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="project-project-v-4__links">
                        <div class="project">
                            <div class="project__links wow fadeInDown">
                                <?= Html::a('', 'https://apps.apple.com/app/project-v/id1220488838', ['class' => 'project__link project__link_google', 'target' => '_blank']) ?>
                                <div class="project__hr"></div>
                                <?= Html::a('', 'https://play.google.com/store/apps/details?id=com.sessia', ['class' => 'project__link project__link_apple', 'target' => '_blank']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$js = <<<JS

new WOW().init();

JS;
$this->registerJs($js, View::POS_END);
