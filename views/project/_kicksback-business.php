<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

switch(Yii::$app->language) {
    case "en-US": $class = "eng-lang";break;
    case "de-DE": $class = "eng-lang";break;
    case "vi-VN": $class = "eng-lang";break;
    default: $class =""; break;
}

?>
<div class="sections">
    <section class="project-kicksback-business-1 section" style="background-image: url('<?= Url::to('@web/storage/project/kicksback-business/bg-1.svg?v=1') ?>')">
        <div class="container" data-content >
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="project-kicksback-business-1__title wow fadeInUp" style="background-image: url('<?=
                    Url::to('@web/storage/project/kicksback-business/logo.svg?v=1') ?>')"></div>
                    <div class="project-kicksback-business-1__subtitle wow fadeInUp">
                        <?= Yii::t('admin', 'Business') ?>
                    </div>
                </div>
            </div>
            <div class="row project-kicksback-business-1__description" data-content>
                <div class="col-xl-3 offset-xl-1 col-lg-4">
                    <div class="project-kicksback-business-1__text-1 <?= $class ?> wow fadeInUp">
                        <?= Yii::t('app', 'Больше {br}никаких {br}посредников {br}и&nbsp;предоплаты {br}за&nbsp;рекламу', ['br' => '<br>']) ?>
                    </div>
                </div>
                <div class="col-lg-4" data-content>
                    <div class="project-kicksback-business-1__image-container">
                        <div class="project-kicksback-business-1__image wow fadeInUp" style="background-image: url('<?= Url::to('@web/storage/project/kicksback-business/image-1.png?v=1') ?>')"></div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4" data-content>
                    <div class="project-kicksback-business-1__text-2 wow fadeInUp">
                        <?= Yii::t('app', 'На&nbsp;основе умных алгоритмов {firstline} угадывает желания клиентов и&nbsp;показывает заведения, товары и&nbsp;услуги, которые интересны именно&nbsp;иму', [
                            'firstline' => '<span>FIRSTLINE</span>',
                        ]) ?>
                    </div>
                    <div class="project-kicksback-business-1__text-3 wow fadeInUp" data-content>
                        <?= Yii::t('app', 'KICKSBACK дает возможность каждому бизнесу легально получить аналитические данные конкурентов, использовать собственные кассовые чеки для сохранения текущих клиентов и&nbsp;получения новых с&nbsp;уникальной платформой рекомендаций FIRSTLINE') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-kicksback-business-2 section">
        <div class="container project-kicksback-business-2__container" data-content>
            <div class="row">
                <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                    <div class="project-kicksback-business-2__title wow fadeInUp">
                        <?= Yii::t('app', 'Что такое кикcбэк?') ?>
                    </div>
                    <div class="project-kicksback-business-2__text wow fadeInUp">
                        <?= Yii::t('app', 'Это бонус, который выплачивается клиенту за&nbsp;приведенного друга. Вы&nbsp;создаете в&nbsp;нашем приложении программу лояльности, и&nbsp;число ваших постоянных клиентов начинает быстро расти.') ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (Yii::$app->language != "ru-RU"): ?>
            <div class="project-kicksback-business-2__bg" style="background-image: url('<?= Url::to('@web/storage/project/kicksback-business/big-2.png?v=1') ?>')
                    "></div>
        <?php else :?>
            <div class="project-kicksback-business-2__bg" style="background-image: url('<?= Url::to('@web/storage/project/kicksback-business/bg-2.png?v=1') ?>')
                    "></div>
        <?php endif ?>

    </section>

    <section class="project-kicksback-business-3 section" style="background-image: url('<?= Url::to('@web/storage/project/kicksback-business/bg-3.jpg?v=1') ?>')">
        <div class="container" data-content>
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="project-kicksback-business-3__subtitle wow fadeInUp">
                        <?= Yii::t('app', 'Успешный бизнес {br}вместе с&nbsp;приложением', ['br' => '<br>']) ?>
                    </div>
                    <div class="project-kicksback-business-3__title wow fadeInUp" style="background-image: url('<?= Url::to('@web/storage/project/kicksback-business/image-3.svg?v=1') ?>')"></div>
                    <div class="project-kicksback-business-3__info project">
                        <div class="project__links wow zoomIn">
                            <?= Html::a('', 'https://kicksback.app/', ['class' => 'project__link project__link_site', 'target' => '_blank']) ?>
                            <div class="project__hr"></div>
                            <?= Html::a('', 'https://play.google.com/store/apps/details?id=com.sessia.business', ['class' => 'project__link project__link_google', 'target' => '_blank']) ?>
                            <div class="project__hr"></div>
                            <?= Html::a('', 'https://apps.apple.com/app/kicksback-business/id1414883041', ['class' => 'project__link project__link_apple', 'target' => '_blank']) ?>
                        </div>
                        <div class="project-kicksback-business-3__text wow fadeInUp">
                            <?= Yii::t('app', 'Бесплатное приложение для&nbsp;привлечения новых клиентов и&nbsp;увеличения лояльной аудитории') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


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

// $(".main").onepage_scroll();

// const sections = [...document.querySelectorAll("section")];
//
// let options = {
//   rootMargin: "0px",
//   threshold: 0.75,
// };
//
// const callback = (entries, observer) => {
//   entries.forEach((entry) => {
//     const { target } = entry;
//
//     if (entry.intersectionRatio >= 0.75) {
//       target.classList.add("is-visible");
//     } else {
//       target.classList.remove("is-visible");
//     }
//   });
// };
//
// const observer = new IntersectionObserver(callback, options);
//
// sections.forEach((section, index) => {
//   const sectionChildren = [...section.querySelector("[data-content]").children];
//
//   sectionChildren.forEach((el, index) => {
//     el.style.setProperty("--delay", index * 25000);
//   });
//
//   observer.observe(section);
// });

$('html, body').scrollTop($('.section').offset().top);

$('html, body').animate({
    'scrollTop': $('.section').offset().top
}, 1500);

JS;
$this->registerJs($js, View::POS_END);
