<?php

use app\widgets\langswitcher\LangSwitcher;
use yii\helpers\Url;
use app\assets\AppOldAsset;
use yii\web\View;

$url = '@web/storage/project/white/';

$this->title = 'SESSIA. GET IT RIGHT';

?>

<div class="header">
    <div class="container">
        <div class="wrapper" style="position: relative; padding-top: 12px;">
            <div class="logo">
                <img src="<?= Url::to('@web/front/img/logo.svg?v=1') ?>" alt="logo" class="logo wow fadeIn">
            </div>
            <div class="header__nav">
                <div class="header__logo wow fadeInUp"><span class="blue">SESSIA.</span> GET <span class="blue">IT</span> RIGHT</div>
                <ul class="header__list wow fadeInUp">
                    <li><a href="#about"><?= Yii::t('app', 'О нас') ?></a></li>
                    <li><a href="#projects"><?= Yii::t('app', 'Проекты') ?></a></li>
                    <li><a href="<?= Url::to(['/project/view', 'project' => 'white']) ?>"><?= Yii::t('app', 'White Label') ?></a></li>
                    <li><a href="#team"><?= Yii::t('app', 'Команда') ?></a></li>
                    <li><a href="#news"><?= Yii::t('app', 'Новости') ?></a></li>
                    <li class="lang">
                        <?= LangSwitcher::widget() ?>
                    </li>
                </ul>
            </div>
            <img class="dotted" src="<?= Url::to('@web/front/img-main/dotted-bg.png?v=1') ?>" alt=""/>
            <div id="particles-header" class="particles"></div>
        </div>
    </div>
    <img class="circle" src="<?= Url::to('@web/front/img-main/ellipse.png?v=1') ?>" alt=""/>
</div>

<div class="services" id="about">
    <div class="wrapper wrapper_block" style="position: relative;">
        <div class="services__block">
            <div>
                <div class="services__header wow fadeIn"><?= Yii::t('app', 'Правильные {br}IT-решения {br}любой сложности', ['br' => '<br>']) ?></div>
                <div class="services__item-header services__sub-header wow fadeIn" style="font-size: 40px; line-height: 42px; padding: 50px 0; text-transform: uppercase; font-weight: 600"><?= Yii::t('app', 'We offer{br} White label solutions &reg;	', ['br' => '<br>']) ?></div>
            </div>
            <div class="services__items">
                <div class="services__item wow fadeIn" data-wow-delay="0.5s">
                    <ul class="services__bull">
                        <li><div class="services__item-header"><?= Yii::t('app', 'Мобильная разработка') ?></div>
                            <span class="services__text">
                                <?= Yii::t('app', 'Создание с нуля нативных и кроссплатформенных приложений') ?>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="services__item wow fadeIn" data-wow-delay="1s">
                    <ul class="services__bull">
                        <li><div class="services__item-header"><?= Yii::t('app', 'Аудит и IT-консалтинг') ?></div>
                            <span class="services__text">
                                <?= Yii::t('app', 'Обновление кода и архитектуры, помощь в устранении технического долга') ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="services__block" style="align-items:flex-start;">
            <div class="services__items">
                <div class="services__item wow fadeIn" data-wow-delay="1.5s">
                    <ul class="services__bull">
                        <li>
                            <div class="services__item-header"><?= Yii::t('app', 'Кибербезопасность компаний в разных отраслях') ?></div>
                            <span class="services__text"><?= Yii::t('app', 'Комплексные решения для защиты инфраструктуры и баз данных') ?></span>
                        </li>
                    </ul>
                </div>
                <div class="services__item wow fadeIn" data-wow-delay="2s">
                    <ul class="services__bull">
                        <li>
                            <div class="services__item-header"><?= Yii::t('app', 'Комплексные {br}IT-проекты', ['br' => '<br>']) ?></div>
                            <span class="services__text"><?= Yii::t('app', 'Проектирование, разработка, внедрение и поддержка') ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="services__items">
                <div class="services__item wow fadeIn" data-wow-delay="2.5s">
                    <ul class="services__bull">
                        <li>
                            <div class="services__item-header"><?= Yii::t('app', 'Интеграция платежных {br}и CRM- систем', ['br' => '<br>']) ?></div>
                            <span class="services__text"><?= Yii::t('app', 'Подключение внешних сервисов к IT-ресурсам вашей компании') ?></span>
                        </li>
                    </ul>
                </div>
                <div class="services__item wow fadeIn" data-wow-delay="3s">
                    <ul class="services__bull">
                        <li>
                            <div class="services__item-header"><?= Yii::t('app', 'Искусственный интеллект') ?></div>
                            <span class="services__text"><?= Yii::t('app', 'Создание решений под ключ, автоматизирующих операций, основанных на простых когнитивных функциях') ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="company" id="team">
    <div class="wrapper wrapper_block">
        <div class="company__header-block">
            <div class="wow fadeIn">
                <div class="company__header"><?= Yii::t('app', 'Sessia — команда разработчиков программного обеспечения и мобильных приложений') ?></div>
                <div class="company__subtitle">
                    <?= Yii::t('app', 'Наши IT-продукты помогают компаниям автоматизировать процессы управления, финансирования, продаж и логистики, повысить их эффективность и прозрачность.') ?>
                </div>
            </div>
            <div class="rhombus">
                <img src="<?= Url::to('@web/front/img-main/rhombus2.png?v=1') ?>" alt="" />
                <div id="particles-team" class="particles"></div>
            </div>
        </div>
        <div class="company__items">
            <div class="company__item">
                <div class="company__elem wow fadeIn">
                    <div class="company__elem-header"><?= Yii::t('app', '{number} лет', ['number' => '<span class="counter" data-count="6">0</span>']) ?></div>
                    <?= Yii::t('app', 'экспертный опыт {br}в разработке', ['br' => '<br>']) ?>
                </div>
                <div class="company__elem wow fadeIn">
                    <div class="company__elem-header"><?= Yii::t('app', '{number} проектов', ['number' => '<span class="counter" data-count="9">0</span>']) ?></div>
                    <?= Yii::t('app', 'которые мы придумали {br}и реализовали самостоятельно', ['br' => '<br>']) ?>
                </div>
                <div class="company__elem wow fadeIn">
                    <div class="company__elem-header"><?= Yii::t('app', '{number} стран', ['number' => '<span class="counter" data-count="17">0</span>']) ?></div>
                    <?= Yii::t('app', 'где работают {br}с нашими продуктами', ['br' => '<br>']) ?>
                </div>
            </div>
            <div class="company__item">
                <div class="company__elem wow fadeIn">
                    <div class="company__elem-header"><span class="counter" data-count="100">0</span>+</div>
                    <?= Yii::t('app', 'сотрудников в штате, {br} из которых 10%{br}тестировщиков', ['br' => '<br>']) ?>
                </div>
                <div class="company__elem wow fadeIn">
                    <div class="company__elem-header"><?= Yii::t('app', '{number}+ млн', ['number' => '<span class="counter" data-count="500">0</span>']) ?></div>
                    <?= Yii::t('app', 'рублей составил {br} оборот средств через{br}наши приложения', ['br' => '<br>']) ?>
                </div>
                <div class="company__elem wow fadeIn">
                    <div class="company__elem-header"><?= Yii::t('app', '{number}+ млн', ['number' => '<span class="counter" data-count="6">0</span>']) ?></div>
                    <?= Yii::t('app', 'строк кода было написано {br} нашими программистами{br}за 6 лет', ['br' => '<br>']) ?>
                </div>
            </div>

            <div class="company__item company__item_last" style="">
                <div class="company__img">
                    <img src="<?= Url::to('@web/front/img-main/rhombus.png?v=1') ?>" alt="" />
                    <div id="particles-company" class="particles"></div>
                </div>
                <div class="company__description wow fadeIn">
                    <?//= Yii::t('app', '') ?>
                    <div class="company__description-small">
                        <?//= Yii::t('app', '') ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company__hr"></div>
</div>
<div class="narek">
    <div class="wrapper wrapper_narek">
        <div class="narek__flex">
            <div>
                <div class="narek__header wow fadeIn">
                    <?= Yii::t('app', 'Нарек Сираканян, {br}основатель и президент Sessia', ['br' => '</div><div class="narek__subtitle wow fadeIn">']) ?>
                </div>
                <img src="<?= Url::to('@web/front/img-main/quote.svg?v=1') ?>" alt="" class="narek__quote wow fadeIn">
                <div class="narek__text wow fadeIn">
                    <?= Yii::t('app', 'Мы исповедуем инновационность и разрабатываем диджитал-решения на стыке интересов бизнесов и обычных пользователей. С помощью наших продуктов они коммуницируют друг с другом без посредников, легко находят общий язык и устанавливают взаимовыгодное партнерство. Мы за то, чтобы каждый наш проект, каждая разработка были социально значимыми и приносили конкретную пользу людям и обществу.') ?>
                </div>
            </div>
            <img class="narek__img wow fadeIn" src="<?= Url::to('@web/front/img-main/narek.png?v=1') ?>" alt="narek">
        </div>
    </div>
</div>

<?= $this->renderFile('@app/views/site/_projects.php') ?>
<!--    <div class="owl-navi"></div>-->

<div class="services services_advantages">
    <div class="wrapper wrapper_block" style="position: relative;">
        <div class="services__block">
            <div class="services__header wow fadeIn"><?= Yii::t('app', 'Преимущества') ?></div>
            <div class="services__items">
                <div class="services__item wow fadeIn" data-wow-delay="0.5s">
                    <ul class="services__bull">
                        <li><div class="services__item-header"><?= Yii::t('app', 'Опыт создания высоконагруженных IT-платформ') ?></div></li>
                    </ul>
                </div>
                <div class="services__item wow fadeIn" data-wow-delay="1s">
                    <ul class="services__bull">
                        <li><div class="services__item-header"><?= Yii::t('app', 'Полный цикл разработки мобильных приложений') ?></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="services__block">
            <div class="services__items services__items_end">
                <div class="services__item wow fadeIn" data-wow-delay="1.5s">
                    <ul class="services__bull">
                        <li><div class="services__item-header"><?= Yii::t('app', 'Готовые модули для ускорения разработки и интеграции') ?></div></li>
                    </ul>
                </div>
                <div class="services__item wow fadeIn" data-wow-delay="2s">
                    <ul class="services__bull">
                        <li><div class="services__item-header"><?= Yii::t('app', 'Своя CRM-система для внесения быстрых изменений в проект') ?></div></li>
                    </ul>
                </div>
                <div class="services__item wow fadeIn" data-wow-delay="2.5s">
                    <ul class="services__bull">
                        <li><div class="services__item-header"><?= Yii::t('app', 'Фокус на тестирование и контроль кода для обеспечения качества продукта') ?></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact" style="position: relative;">
    <div class="wrapper wrapper_block">
        <div class="contact__header wow fadeIn"><?= Yii::t('app', 'Свяжитесь с нами') ?></div>
        <div class="form wow fadeIn">
            <form class="" action="" method="">
                <input type="text" placeholder="<?= Yii::t('app', 'Как к Вам обращаться') ?>" class="input">
                <input type="text" placeholder="<?= Yii::t('app', 'Как с Вами связаться') ?>" class="input"><br>
                <input type="text" placeholder="<?= Yii::t('app', 'Ваше сообщение') ?>" class="input-text">

                <button class="send"><?= Yii::t('app', 'Отправить') ?></button>
            </form>
        </div>
        <img class="circle" src="<?= Url::to('@web/front/img-main/ellipse.png?v=1') ?>" alt=""/>
    </div>
</div>

<?php

$this->registerCssFile("@web/front/vendor/owl-carousel/owl.carousel.css", ['depends' => [AppOldAsset::class]]);
$this->registerCssFile("@web/front/vendor/owl-carousel/owl.theme.default.css", ['depends' => [AppOldAsset::class]]);
$this->registerCssFile("@web/front/vendor/owl-carousel/owl-carousel/owl.theme.green.css", ['depends' => [AppOldAsset::class]]);
$this->registerCssFile("@web/front/vendor/vendor/animate/animate.min.css", ['depends' => [AppOldAsset::class]]);
$this->registerCssFile("@web/front/css/reset.css", ['depends' => [AppOldAsset::class]]);
$this->registerCssFile("@web/front/css/style.css", ['depends' => [AppOldAsset::class]]);

$this->registerJsFile("@web/front/vendor/owl-carousel/owl.carousel.min.js", ['depends' => [AppOldAsset::class]]);
$this->registerJsFile("@web/front/vendor/particles/particles.min.js", ['depends' => [AppOldAsset::class]]);
$this->registerJsFile("@web/front/vendor/wow/wow.min.js", ['depends' => [AppOldAsset::class]]);

$particlesHeader = Url::to('@web/front/js/particlesjs-header.json');
$particlesTeam = Url::to('@web/front/js/particlesjs-team.json');
$particlesCompany = Url::to('@web/front/js/particlesjs-company.json');

$lang = Yii::$app->language;

$js = <<<JS

jQuery(document).ready(function($) {
    new WOW().init();

    // check is in viewport
    $.fn.isInViewport = function(offset = 0) {
        var elementTop = $(this).offset().top,
            elementBottom = elementTop + $(this).outerHeight(),
            viewportTop = $(window).scrollTop() - offset,
            viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    // OWL CAROUSEL    
    $('.owl-carousel').each(function () {
    var owlStacked = $(this);
    
    owlStacked
        .on('initialized.owl.carousel resized.owl.carousel', function (event) {
            setTimeout(function () {
                owlStacked
                    .width(owlStacked.find('.owl-item').width());
                        
                owlStacked.find('.owl-next').removeClass('disabled');
                        
                owlStacked.find('.owl-item').each(function(k, item) {
                    $(this)
                        .addClass('transition')
                        .css({
                            'z-index': k
                        });
                });                
                owlStacked.trigger('to.owl.carousel', [0, 0]);
            }, 100, owlStacked);
        })
        .on('change.owl.carousel', function (event) {
            if (event.item.index > event.property.value) {
                owlStacked.find('.owl-item.active').eq(0).prev().removeClass('stacked');   
                owlStacked.find('.owl-item.active').eq(0).nextAll().removeClass('stacked');   
            } else if (event.item.index < event.property.value) {
                owlStacked.find('.owl-item.active').eq(0).addClass('stacked');
            }
            if (event.property.value == 0) {
                owlStacked.find('.owl-item').removeClass('stacked');   
            }
            if (owlStacked.is('[data-related]')) {
                owlGoTo(owlStacked.data('related'), event.property.value, 1000);
            }
        });
    
   //owlStacked.imagesLoaded(function () {
        //owlStacked.removeClass('d-none').addClass('owl-carousel owl-theme');
        
        var owlStackedItems = owlStacked.attr('data-items') ? owlStacked.attr('data-items').split('-') : false,
            owlStackedLoop = owlStacked.attr('data-loop') == 'true' ? true : false;
            
        owlStacked.owlCarousel({
            stagePadding: 60,
            center:true,            
			nav: true,
			margin: 10,			
			smartSpeed: 1000,
			responsive: {
				0: {
					items: 1,
					stagePadding: 0,
					nav: false,
					margin:0
				},
				600: {
					items: 1,
					nav: false,
					stagePadding: 0,
					margin: 0
				},
				1000: {
					items: 1,					
				}
			},			
		});    
    //});
});
    
    // PARTICLES
    particlesJS.load('particles-header', '$particlesHeader');
    particlesJS.load('particles-team', '$particlesTeam');
    particlesJS.load('particles-company', '$particlesCompany');

    // MAIN MENU
    $('body').prepend('<nav class="nav"><div class="wrapper"><div class="logo"><img src="' + $('.logo img').attr('src') + '"></div><span class="btn-menu"></span><ul class="header__list">' + $('.header__list').html() + '</ul></div></nav>');

    $(document).on('click', '.btn-menu', function() {
        $(this).toggleClass('open');
        $('nav').find('.header__list').slideToggle();
    });

    mainMenuScroll = function() {
        $('nav').toggleClass('show', $(window).scrollTop() > $('.header').height() * .5);
        $('.header__nav').css('opacity', (1 - ($(window).scrollTop() / $(window).height()) * 2));
    }

    $(window).scroll(function() {
        mainMenuScroll();
    });

    mainMenuScroll();

    // COUNTERS
    runCounters = function() {
        $('.counter').each(function () {
            if ($(this).isInViewport()) {
                $(this)
                    .prop('Counter', 0)
                    .animate({
                        Counter: $(this).data('count'),
                    }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function (now) {
                            now = Number(Math.ceil(now)).toLocaleString('$lang');
                            $(this).text(now);
                        }
                    });
            }
        });
    }

    $(window).scroll(function() {
        runCounters();
    });

    runCounters();
});

JS;
$this->registerJs($js, View::POS_END);
