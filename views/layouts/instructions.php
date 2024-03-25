<?php
use app\widgets\langswitcher\LangSwitcher;
use yii\widgets\Menu;
use yii\web\View;
$languages = LangSwitcher::widget();

//$list = [];
//foreach ($languages as $key => $item){
//    if (($item == 'Ru') || ($item == 'En'))
//        $list[$key] = $item;
//}


$menu = [
    [
        'label' => 'lang-item',
        'url' => null,
        'options' => ['class' => 'lang'],
    ],
];
$lang = Yii::$app->language;
$jslang = $lang;
?>

<?php $this->beginContent('@app/views/layouts/main.php') ?>

    <div class="app">
        <header class="header">
<!--            <nav class="row-nav__nav">-->
<!--                --><?php //= str_replace('lang-item', LangSwitcher::widget(), Menu::widget([
//                    'items' => $menu,
//                    'options' => [
//                        'id' => 'menu',
//                        'class' => 'row-nav__menu menu',
//                    ],
//                    'activeCssClass' => 'active',
//                    'encodeLabels' => false,
//                ])); ?>
<!--            </nav>-->
<!--            <button class="header__lang-button">EN</button>-->
<!--            <div class="tab tab_place_header"></div>-->
        </header>
        <main class="main">
            <?= $content ?>
        </main>

        <footer class="footer">
        </footer>
    </div>


<?php $this->endContent() ?>
<!---->
<?php
//$js = <<< JS
//let lang= '$jslang'
//if(lang == 'ru-RU') {
//
//}
//JS;
//
//$this->registerJS($js, View:: POS_READY);
