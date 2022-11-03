<?php

use app\assets\AppAsset;
use app\widgets\langswitcher\LangSwitcher;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

$currentUrl = Yii::$app->request->url;
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
        'label' => Yii::t('app', 'Команда'),
        'url' => ['/site/index', '#' => 'team'],
    ],
    [
        'label' => Yii::t('app', 'Новости'),
        'url' => ['/site/index', '#' => 'news'],
    ],
    [
        'label' => 'lang',
        'url' => null,
    ],
];

?>

<?php $this->beginContent('@app/views/layouts/main.php') ?>

<header class="header-new">
    <div class="app-nav">
        <?= Html::a(Html::img(Url::to('@web/front/img/logo.svg?v=1'), ['class' => 'app-nav__logo-img']), ['/main/site'], ['class' => 'app-nav__logo']) ?>
        <nav class="app-nav__nav">
            <?= str_replace('lang', LangSwitcher::widget(), Menu::widget([
                'items' => $menu,
                'options' => [
                    'id' => 'menu',
                    'class' => 'app-nav__nav-menu menu',
                ],
                'activeCssClass' => 'active',
                'encodeLabels' => false,
            ])); ?>
        </nav>
    </div>
</header>

<?= $content ?>

<footer class="footer-new">

</footer>

<?php $this->endContent() ?>
