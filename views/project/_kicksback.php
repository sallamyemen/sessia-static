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
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <div class="project-kicksback-1__text-1 wow fadeInDown">
                    <?= Yii::t('app', '{s}FIRSTLINE&nbsp;&mdash;{e} диджитал-прoстранство, где бизнес соревнуется за&nbsp;клиентов', ['s' => '<span>', 'e' => '</span><br>']) ?>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="project-kicksback-1__text-2 wow fadeInDown">
                            <?= Yii::t('app', 'В&nbsp;FIRSTLINE автоматически размещаются рекламные предложения бизнеса с&nbsp;качественными фото и&nbsp;видео товаров и&nbsp;услуг, которые они предлагают.') ?>
                            <br><br>
                            <?= Yii::t('app', 'На&nbsp;основе умных алгоритмов KICKSBACK реклама бизнеса доставляется наиболее релевантной аудитории приложения, а&nbsp;клиенты получают самые актуальные предложения.') ?>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 offset-lg-0 col-md-3 offset-md-1 col-8 offset-2">
                        <div class="project-kicksback-1__image-container desktop laptop tablet">
                            <div class="project-kicksback-1__image project-kicksback-1__image_1 wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/image-1.png?v=1') ?>')"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mobile">
                <div class="project-kicksback-1__image-container">
                    <div class="project-kicksback-1__image project-kicksback-1__image_1 wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/image-1.png?v=1') ?>')"></div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-6">
                <div class="project-kicksback-1__image-container">
                    <div class="project-kicksback-1__image project-kicksback-1__image_2 wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/image-2.png?v=1') ?>')"></div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-0 col-md-7 offset-md-1">
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

<section class="project-kicksback-2" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/bg-2.jpg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="project-kicksback-2__title wow fadeInDown">
                    <?= Yii::t('app', 'Больше друзей —') ?>
                </div>
                <div class="project-kicksback-2__subtitle wow fadeInDown">
                    <?= Yii::t('app', 'выше доход') ?>
                </div>
            </div>
            <div class="col-xl-3 offset-xl-3 col-lg-4 offset-lg-3 col-md-5 offset-md-3">
                <div class="project-kicksback-2__caption wow fadeInDown">
                    <?= Yii::t('app', 'Друзья дороже. {br}Когда есть Kicksback.', ['br' => '<br>']) ?>
                </div>
                <div class="project-kicksback-2__text wow fadeInDown">
                    <?= Yii::t('app', 'Чем больше у&nbsp;тебя друзей в&nbsp;приложении, тем больше бонусов летит в&nbsp;твой кошелек. Чтобы пригласить нового друга, просто поделись с&nbsp;ним ссылкой.') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-kicksback-3">
    <div class="container project-kicksback-3__container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <div class="project-kicksback-3__title wow fadeInDown">
                    <?= Yii::t('app', 'Подарки каждый день&nbsp;&mdash; {br}без условий', ['br' => '<br>']) ?>
                </div>
            </div>
            <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                <div class="project-kicksback-3__text wow fadeInDown">
                    <?= Yii::t('app', 'Любой пользователь приложения ежедневно может получать в&nbsp;подарок один новый кикс. Заглядывай почаще на&nbsp;карту Kicksback, выбирай понравившийся кикс&nbsp;&mdash; например, блюдо в&nbsp;ресторане, бокал пива, маникюр или стрижку&nbsp;&mdash; и&nbsp;отправляйся за&nbsp;подарком.') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="project-kicksback-3__bg" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/bg-3.png?v=1') ?>')"></div>
</section>

<section class="project-kicksback-4" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/bg-4.png?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-6">
                <div class="project-kicksback-4__title wow fadeInDown">
                    <?= Yii::t('app', 'В&nbsp;Kicksback много возможностей&nbsp;&mdash; открывай их&nbsp;все!', ['br' => '<br>']) ?>
                </div>
                <div class="project">
                    <div class="project-kicksback-4__links project__links wow fadeInDown">
                        <?= Html::a('', 'https://kicksback.app/', ['class' => 'project__link project__link_site', 'target' => '_blank']) ?>
                        <div class="project__hr"></div>
                        <?= Html::a('', 'https://play.google.com/store/apps/details?id=com.sessia.kickbacks', ['class' => 'project__link project__link_google', 'target' => '_blank']) ?>
                        <div class="project__hr"></div>
                        <?= Html::a('', 'https://apps.apple.com/app/kicksback-cashback-and-gifts/id1546115424', ['class' => 'project__link project__link_apple', 'target' => '_blank']) ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 offset-xl-1 col-md-5 offset-md-1">
                <ul class="project-kicksback-4__list wow fadeInDown">
                    <li><?= Yii::t('app', 'Новостная Лента с&nbsp;анонсами выгодных акций и&nbsp;скидок') ?></li>
                    <li><?= Yii::t('app', 'Возможность бронирования через чаты с&nbsp;ресторанами и&nbsp;салонами') ?></li>
                    <li><?= Yii::t('app', 'Онлайн-отчеты по&nbsp;всем покупкам и&nbsp;бонусам') ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?= Html::jsFile("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js") ?>
<?= Html::jsFile("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js") ?>

<?php

$js = <<<JS

gsap.registerPlugin(ScrollTrigger);

var item = $(".project-kicksback-3");
var pic = $(".project-kicksback-3__bg");

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
