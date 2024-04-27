<?php

use app\assets\AppOldAsset;
use app\widgets\langswitcher\LangSwitcher;
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

AppOldAsset::register($this);

$menu = [
    [
        'label' => Yii::t('app', 'О нас'),
        'url' => ['/site/index', '#' => 'about'],
    ],
    [
        'label' => Yii::t('app', 'Проекты'),
        'url' => ['/site/index', '#' => 'projects'],
    ],
//    [
//        'label' => Yii::t('app', 'White Label'),
//        'url' => ['https://wl.sessia.com/', 'project' => 'white'],
//    ],
    [
        'label' => Yii::t('app', 'Команда'),
        'url' => ['/site/index', '#' => 'team'],
    ],
//    [
//        'label' => Yii::t('app', 'Новости'),
//        'url' => ['/site/index', '#' => 'news'],
//    ],
    [
        'label' => 'lang-item',
        'url' => null,
        'options' => ['class' => 'lang'],
    ],
];

$url = '@web/storage/project/white/';

?>

<?php $this->beginContent('@app/views/layouts/main.php') ?>

<div class="app">
    <div class="app__wrapper">
        <div class="app__content">
            <?= $content ?>
        </div>
    </div>
    <footer class="app__footer footer">
        <div class="container">
            <div class="row-nav">
                <?= Html::a(Html::img(Url::to('@web/front/img/logo.svg?v=1'), ['class' => 'row-nav__logo-img']), ['/site/index'], ['class' => 'row-nav__logo']) ?>

                <div class="footer-left">
                    <div class="footer-text">
                        <?= Yii::t('app', 'Мы работаем с системами:') ?>
                    </div>
                    <div class="pay-footer">
                        <div class="pay-footer__sys">
                            <img src="<?= Url::to($url.'up.svg') ?>">
                        </div>
                        <div class="pay-footer__sys">
                            <img src="<?= Url::to($url.'payment__visa.svg') ?>">
                        </div>
                        <div class="pay-footer__sys">
                            <img src="<?= Url::to($url.'payment__mastercard.svg') ?>">
                        </div>
                        <div class="pay-footer__sys pay-footer__paypal">
                            <img src="<?= Url::to($url.'payment__paypal.svg') ?>">
                        </div>
                    </div>
                </div>

                <nav class="row-nav__nav">
                    <ul class='row-nav__menu menu'><li><a href="https://wl.sessia.com/">White Label</a></li></ul>
                    <?php array_pop($menu); ?>
                    <?= Menu::widget([
                        'items' => $menu,
                        'options' => [
                            'id' => 'menu',
                            'class' => 'row-nav__menu menu',
                        ],
                        'activeCssClass' => 'active',
                        'encodeLabels' => false,
                    ]); ?>

                </nav>
            </div>
        </div>
    </footer>
</div>

<?php $this->endContent() ?>
