<?php

use app\assets\AppAsset;
use app\widgets\langswitcher\LangSwitcher;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

$menu = [
    [
        'label' => Yii::t('app', 'О нас'),
        'url' => ['/site/index', '#' => 'about'],
    ],
    [
        'label' => Yii::t('app', 'Проекты'),
        'url' => ['/site/index', '#' => 'projects'],
    ],
    [
        'label' => Yii::t('app', 'White Label'),
        'url' => ['/project/view', 'project' => 'white'],
    ],
    [
        'label' => Yii::t('app', 'Команда'),
        'url' => [Url::to('/site/index'), '#' => 'team'],
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


?>

<?php $this->beginContent('@app/views/layouts/main.php') ?>

<div class="app">
    <div class="app__wrapper">
        <header class="app__header header">
            <div class="container">
                <div class="row-nav">
                    <?= Html::a(Html::img(Url::to('@web/front/img/logo.svg?v=1'), ['class' => 'row-nav__logo-img']), ['/site/index'], ['class' => 'row-nav__logo']) ?>
                    <nav class="row-nav__nav">
                        <?= str_replace('lang-item', LangSwitcher::widget(), Menu::widget([
                            'items' => $menu,
                            'options' => [
                                'id' => 'menu',
                                'class' => 'row-nav__menu menu',
                            ],
                            'activeCssClass' => 'active',
                            'encodeLabels' => false,
                        ])); ?>
                    </nav>
                    <div class="hum"><span class="hum__item hum__item_one"></span><span class="hum__item hum__item_second"></span><span class="hum__item hum__item_third"></span></div>
                </div>
            </div>
        </header>
        <div class="app__content">
            <?= $content ?>
        </div>
    </div>
    <footer class="app__footer footer">
        <div class="container">
            <div class="row-nav">
                <?= Html::a(Html::img(Url::to('@web/front/img/logo.svg?v=1'), ['class' => 'row-nav__logo-img']), ['/site/index'], ['class' => 'row-nav__logo']) ?>
                <nav class="row-nav__nav">
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

