<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

switch(Yii::$app->language) {
    case "en-US": $path = "@web/storage/project/translate/project-v-en/"; $class = "eng-lang";break;
    case "de-DE": $path = "@web/storage/project/translate/project-v-en/"; $class = "eng-lang";break;
    case "vi-VN": $path = "@web/storage/project/translate/project-v-en/"; $class = "eng-lang";break;
    default: $path = "@web/storage/project/project-v/"; break;
}
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
               <div class="project-project-v-1__image project-project-v-1__image_1 wow fadeInDown"
                    style="background-image: url('<?= Url::to($path . 'image-1.png?v=1') ?>')"></div>
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
                <div class="project-project-v-2__image wow fadeInDown" style="background-image: url('<?= Url::to($path . 'image-2.png?v=1') ?>')"></div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="project-project-v-2__info">
                    <div class="project-project-v-2__text wow fadeInDown">
                        <?= Yii::t('app', 'Project V&nbsp;&mdash; международный бренд инновационных натуральных продуктов для красоты и&nbsp;здоровья с&nbsp;производством во&nbsp;Франции и&nbsp;Швейцарии') ?>
                    </div>
                    <div class="project-project-v-2__caption wow fadeInDown">
                        <b><?= Yii::t('app', 'Работает в&nbsp;17&nbsp;странах:') ?></b><br>
                        <?= Yii::t('app', 'США, Вьетнаме, Германии, Австрии, Польше Болгарии, Узбекистане, Казахстане, Армении, Сингапуре и&nbsp;др.') ?>
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
        <div class="project-project-v-3__title ">
            <?= Yii::t('app', 'Функционал и&nbsp;возможности') ?>
        </div>
        <div class="project-project-v-3__list">
        <?php foreach ($arr as $key => $val) { ?>
            <div class="project-project-v-3__item block<?=$key?> wow fadeInDown">
                <div class="row">
                    <div class="col-lg-4 <?//= (4 + $key) ?> wow fadeInDown">
                        <div class="project-project-v-3__item-title "><?= $val->title ?></div>
                        <div class="project-project-v-3__item-hr"></div>
                        <div class="project-project-v-3__item-text"><?= $val->text ?></div>
                    </div>
                    <div class="col-lg-8 <?//= (8 - $key) ?> wow fadeInDown">
                        <div class="project-project-v-3__item-image-container">
                            <div class="project-project-v-3__item-image " style="background-image: url('<?= Url::to($path . 'image-3-' . ($key + 1) . '.png?v=1') ?>'); z-index: <?= (9 - $key) ?>"></div>
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
                                <?= Html::a('', 'https://projectvint.ru/', ['class' => 'project__link project__link_site', 'target' => '_blank']) ?>
                                <div class="project__hr"></div>
                                <?= Html::a('', 'https://play.google.com/store/apps/details?id=com.sessia', ['class' => 'project__link project__link_google', 'target' => '_blank']) ?>
                                <div class="project__hr"></div>
                                <?= Html::a('', 'https://apps.apple.com/app/project-v/id1220488838', ['class' => 'project__link project__link_apple', 'target' => '_blank']) ?>
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

var lastScrollTop = 0;
$(window).scroll(function(){
    
    var st = $(this).scrollTop();
    var one_up = "translateY(" + 20 + "em)";
    var one_down = "translateY(" + 0 + "em)";
    var two_up = "translateY(" + 40 + "em)";
    var two_down = "translateY(" + 0 + "em)";
    var three_up = "translateY(" + 60 + "em)";
    var three_down = "translateY(" + 0 + "em)";
    var four_up = "translateY(" + 80 + "em)";
    var four_down = "translateY(" + 0 + "em)";
    
    var disp_block = "block";
    var disp_none = "none";
   
   if (st > lastScrollTop){       
       if ($(window).width() > 991) {
           $('.block1').css({
             transform : one_up
           });    
            $('.block2').css({
              transform : two_up
            });    
            $('.block3').css({
              transform : three_up
            });    
            $('.block4').css({
              transform : four_up
            });  
            $('.project-project-v-3__item-title').css({
              display : disp_block
            });
            $('.project-project-v-3__item-hr').css({
              display : disp_block
            });
            $('.project-project-v-3__item-text').css({
              display : disp_block
            });
            $('.project-project-v-3').css({
              height : "135em"
            });
       }else{
           $('.block1').css({
             transform :"unset"
           });    
            $('.block2').css({
              transform : "unset"
            });    
            $('.block3').css({
              transform : "unset"
            });    
            $('.block4').css({
              transform : "unset"
            });  
            $('.project-project-v-3__item-title').css({
              display : "inherit"
            });
            $('.project-project-v-3__item-hr').css({
              display : "inherit"
            });
            $('.project-project-v-3__item-text').css({
              display : "inherit"
            });
            $('.project-project-v-3').css({
              height : "unset"
            });
            $('.project-project-v-3__item').css({
              position : "relative"
            });
            $('.project-project-v-3__list').css({
              transform : "unset"
            });
       }       
   } else {
       if ($(window).width() > 991) { 
           $('.block1').css({
              transform : one_down
           });    
           $('.block2').css({
              transform : two_down
           });    
           $('.block3').css({
              transform : three_down
           });    
           $('.block4').css({
              transform : four_down
           });
           $('.project-project-v-3__item-title').css({
              display : disp_none
            });
            $('.project-project-v-3__item-hr').css({
              display : disp_none
            });
            $('.project-project-v-3__item-text').css({
              display : disp_none
            });
           $('.project-project-v-3').css({
              height : "80em"
            });
       } else{
           $('.block1').css({
             transform :"unset"
           });    
            $('.block2').css({
              transform : "unset"
            });    
            $('.block3').css({
              transform : "unset"
            });    
            $('.block4').css({
              transform : "unset"
            });  
            $('.project-project-v-3__item-title').css({
              display : "inherit"
            });
            $('.project-project-v-3__item-hr').css({
              display : "inherit"
            });
            $('.project-project-v-3__item-text').css({
              display : "inherit"
            });
            $('.project-project-v-3').css({
              height : "unset"
            });
            $('.project-project-v-3__item').css({
              position : "relative"
            });
            $('.project-project-v-3__list').css({
              transform : "unset"
            });
       }          
   }
       lastScrollTop = st;
});

JS;
$this->registerJs($js, View::POS_END);
