<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

?>

<section class="project-kicksback-1" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/bg-1.svg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="project-kicksback-1__title wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/logo.svg?v=1') ?>')"></div>
                <div class="project-kicksback-1__subtitle wow fadeInDown">
                    <svg viewBox="0 0 1088 56" xmlns="http://www.w3.org/2000/svg">
                        <style>.text { font-size: 51px; font-family: Roboto, sans-serif; text-transform: uppercase; }</style>
                        <text fill="currentColor" x="0" y="51" class="text"><?= Yii::t('app', 'Друзья покупают — ты зарабатываешь!') ?></text>
                    </svg>
                </div>
            </div>
        </div>
        <div class="row project-kicksback-1__description">
            <div class="col-xl-5 offset-xl-1">
                <div class="project-kicksback-1__text-1 wow fadeInDown">
                    <?= Yii::t('app', '{s}FIRSTLINE&nbsp;&mdash;{e} диджитал-прoстранство, где бизнес соревнуется за&nbsp;клиентов', ['s' => '<span>', 'e' => '</span><br>']) ?>
                </div>
                <div class="row">
                    <div class="col-xl-7">
                        <div class="project-kicksback-1__text-2 wow fadeInDown">
                            <?= Yii::t('app', 'В FIRSTLINE автоматически размещаются рекламные предложения бизнеса с качественными фото и видео товаров и услуг, которые они предлагают.') ?>
                            <br><br>
                            <?= Yii::t('app', 'На основе умных алгоритмов KICKSBACK реклама бизнеса доставляется наиболее релевантной аудитории приложения, а клиенты получают самые актуальные предложения.') ?>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="project-kicksback-1__image-container">
                            <div class="project-kicksback-1__image wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/image-1.png?v=1') ?>')"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="project-kicksback-1__image-container">
                    <div class="project-kicksback-1__image wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/image-2.png?v=1') ?>')"></div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="project-kicksback-1__text-3 wow fadeInDown">
                    <?= Yii::t('app', 'Кэшбэк и&nbsp;подарки в&nbsp;ресторанах и&nbsp;магазинах') ?>
                </div>
                <div class="project-kicksback-1__text-4 wow fadeInDown">
                    <?= Yii::t('app', 'Kicksback — это:') ?>
                    <ul>
                        <li><?= Yii::t('app', 'Лучшие рестораны и&nbsp;магазины Москвы, а&nbsp;также интернет-магазины и&nbsp;доставка еды') ?></li>
                        <li><?= Yii::t('app', 'Быстрое начисление кэшбэка и&nbsp;киксбэка') ?></li>
                        <li><?= Yii::t('app', 'Ежедневные подарки-киксы по&nbsp;твоему выбору') ?></li>
                        <li><?= Yii::t('app', 'Вывод накопленных денег на&nbsp;карту с&nbsp;минимальной комиссией') ?></li>
                        <li><?= Yii::t('app', 'Приложение, которое заменит тебе все скидочные и&nbsp;дисконтные карты') ?></li>
                        <li><?= Yii::t('app', 'Карты магазинов в&nbsp;телефоне') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?= Html::jsFile("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js") ?>
<?= Html::jsFile("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js") ?>

<?php

$js = <<<JS

gsap.registerPlugin(ScrollTrigger);

var item = $(".project-kicksback-business-2");
var pic = $(".project-kicksback-business-2__bg");

gsap
    .timeline({
        scrollTrigger: {
            trigger: item,
            scrub: true,
            //markers: true,
            start: "0% 100%",
            end: "100% 50%"
        }
    })
    .fromTo(
        pic,
        {
            y: 100
        },
        {
            y: -100,
            ease: "none"
        },
        0
    );

new WOW().init();

JS;
$this->registerJs($js, View::POS_END);
