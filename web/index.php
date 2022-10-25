<?php

$lang_default = 'en';
$lang = $_GET['lang'] ?? $lang_default;
$langs = [
    'en' => 'En',
    'de' => 'De',
    //'vi' => 'Vi',
    'ru' => 'Ru',
];

$GLOBALS['arr'] = require_once($_SERVER['DOCUMENT_ROOT'] . '/langs/' . (isset($langs[$lang]) ? $lang : $lang_default) . '.php');

function __($message, $params = []) {
    $message = $GLOBALS['arr'][$message] ?? $message;

    $placeholders = [];
    foreach ((array) $params as $name => $value) {
        $placeholders['{' . $name . '}'] = $value;
    }

    return ($placeholders === []) ? $message : strtr($message, $placeholders);
}

function setPath($url) {
    $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
    $domain = $_SERVER['SERVER_NAME'];
    return $protocol . '://' . $domain . '/' . $url;
}

function getOs() {
    $oss = [
        'android' => 'Android',
        'ios' => '(Mac_PowerPC)|(Macintosh)|(Linux)|(X11)|(SunOS)|(OpenBSD)|(QNX)|(BeOS)|(OS/2)|(Win)',
    ];

    $os = 'mac';
    foreach ($oss as $key => $val) {
        if (preg_match('#' . $val . '#i', $_SERVER['HTTP_USER_AGENT'])) {
            $os = $key;
            break;
        }
    }

    return $os;
}

?><!DOCTYPE html>
<html lang="<?= $lang ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <link rel="stylesheet" href="<?= setPath('vendor/owl-carousel/owl.carousel.css?v=1') ?>">
        <link rel="stylesheet" href="<?= setPath('vendor/owl-carousel/owl.theme.default.css?v=1') ?>">
        <link rel="stylesheet" href="<?= setPath('vendor/owl-carousel/owl-carousel/owl.theme.green.css?v=1') ?>">
        <link rel="stylesheet" href="<?= setPath('vendor/vendor/animate/animate.min.css?v=1') ?>">
        <link rel="stylesheet" href="<?= setPath('css/reset.css?v=1') ?>">
        <link rel="stylesheet" href="<?= setPath('css/style.css?v=1') ?>">
        <title>Sessia</title>
    </head>
    <body>
        <div class="header">
            <div class="wrapper" style="position: relative; padding-top: 12px;">
                <div class="logo">
                    <img src="<?= setPath('img/logo.svg?v=1') ?>" alt="logo" class="logo wow fadeIn">
                </div>
                <div class="header__nav">
                    <div class="header__logo wow fadeInUp"><span class="blue">SESSIA.</span> GET <span class="blue">IT</span> RIGHT</div>
                    <ul class="header__list wow fadeInUp">
                        <li><a href="#about"><?= __('О нас') ?></a></li>
                        <li><a href="#projects"><?= __('Проекты') ?></a></li>
                        <li><a href="#team"><?= __('Команда') ?></a></li>
                        <li><a href="#news"><?= __('Новости') ?></a></li>
                        <li class="lang">
                            <a href="javascript:void(0);" tabindex="1"><?= $langs[$lang] ?></a>
                            <div class="lang__list">
                            <?php unset($langs[$lang]); ?>
                            <?php foreach ($langs as $key => $val) { ?>
                                <div><a href="<?= str_replace('/en', '', setPath($key . '/')) ?>"><?= $val ?></a></div>
                            <?php } ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <img class="dotted" src="<?= setPath('img/dotted-bg.png?v=1') ?>" alt=""/>
                <div id="particles-header" class="particles"></div>
            </div>
            <img class="circle" src="<?= setPath('img/ellipse.png?v=1') ?>" alt=""/>
        </div>
        <div class="services" id="about">
            <div class="wrapper wrapper_block" style="position: relative;">
                <div class="services__block">
                    <div class="services__header wow fadeIn"><?= __('Правильные {br}IT-решения {br}любой сложности', ['br' => '<br>']) ?></div>
                    <div class="services__items">
                        <div class="services__item wow fadeIn" data-wow-delay="0.5s">
                            <ul class="services__bull">
                                <li><div class="services__item-header"><?= __('Мобильная разработка') ?></div>
                                    <span class="services__text">
                                        <?= __('Создание с нуля нативных и кроссплатформенных приложений') ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="services__item wow fadeIn" data-wow-delay="1s">
                            <ul class="services__bull">
                                <li><div class="services__item-header"><?= __('Аудит и IT-консалтинг') ?></div>
                                    <span class="services__text">
                                        <?= __('Обновление кода и архитектуры, помощь в устранении технического долга') ?>
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
                                    <div class="services__item-header"><?= __('Кибербезопасность отечественных компаний') ?></div>
                                    <span class="services__text"><?= __('Комплексные решения для защиты инфраструктуры и баз данных') ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="services__item wow fadeIn" data-wow-delay="2s">
                            <ul class="services__bull">
                                <li>
                                    <div class="services__item-header"><?= __('Комплексные {br}IT-проекты', ['br' => '<br>']) ?></div>
                                    <span class="services__text"><?= __('Проектирование, разработка, внедрение и поддержка') ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="services__items">
                        <div class="services__item wow fadeIn" data-wow-delay="2.5s">
                            <ul class="services__bull">
                                <li>
                                    <div class="services__item-header"><?= __('Интеграция платежных {br}и CRM- систем', ['br' => '<br>']) ?></div>
                                    <span class="services__text"><?= __('Подключение внешних сервисов к IT-ресурсам вашей компании') ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="services__item wow fadeIn" data-wow-delay="3s">
                            <ul class="services__bull">
                                <li>
                                    <div class="services__item-header"><?= __('Искусственный интеллект') ?></div>
                                    <span class="services__text"><?= __('Создание решений под ключ, автоматизирующих операций, основанных на простых когнитивных функциях') ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--<img class="dotted2" src="<?= setPath('img/dotted-bg3.png?v=1') ?>" alt=""/>-->
            </div>
        </div>

        <div class="company" id="team">
            <div class="wrapper wrapper_block">
                <div class="company__header-block">
                    <div class="wow fadeIn">
                        <div class="company__header"><?= __('Sessia — команда российских разработчиков программного обеспечения и мобильных приложений') ?></div>
                        <div class="company__subtitle">
                            <?= __('Наши IT-продукты помогают компаниям автоматизировать процессы управления, финансирования, продаж и логистики, повысить их эффективность и прозрачность.') ?>
                        </div>
                    </div>
                    <div class="rhombus">
                        <img src="<?= setPath('img/rhombus2.png?v=1') ?>" alt="" />
                        <div id="particles-team" class="particles"></div>
                    </div>
                </div>
                <div class="company__items">
                    <div class="company__item">
                        <div class="company__elem wow fadeIn">
                            <div class="company__elem-header"><?= __('{number} лет', ['number' => '<span class="counter" data-count="6">0</span>']) ?></div>
                            <?= __('экспертный опыт {br}в разработке', ['br' => '<br>']) ?>
                        </div>
                        <div class="company__elem wow fadeIn">
                            <div class="company__elem-header"><?= __('{number} проектов', ['number' => '<span class="counter" data-count="9">0</span>']) ?></div>
                            <?= __('которые мы придумали {br}и реализовали самостоятельно', ['br' => '<br>']) ?>
                        </div>
                        <div class="company__elem wow fadeIn">
                            <div class="company__elem-header"><?= __('{number} стран', ['number' => '<span class="counter" data-count="17">0</span>']) ?></div>
                            <?= __('стран где работают {br}с нашими продуктами', ['br' => '<br>']) ?>
                        </div>
                    </div>
                    <div class="company__item">
                        <div class="company__elem wow fadeIn">
                            <div class="company__elem-header"><span class="counter" data-count="100">0</span>+</div>
                            <?= __('сотрудников в штате, {br} из которых 10%{br}тестировщиков', ['br' => '<br>']) ?>
                        </div>
                        <div class="company__elem wow fadeIn">
                            <div class="company__elem-header"><?= __('{number}+ млн', ['number' => '<span class="counter" data-count="500">0</span>']) ?></div>
                            <?= __('рублей составил {br} оборот средств через{br}наши приложения', ['br' => '<br>']) ?>
                        </div>
                        <div class="company__elem wow fadeIn">
                            <div class="company__elem-header"><?= __('{number}+ млн', ['number' => '<span class="counter" data-count="6">0</span>']) ?></div>
                            <?= __('строк кода было написано {br} нашими программистами{br}за 6 лет', ['br' => '<br>']) ?>
                        </div>
                    </div>

                    <div class="company__item company__item_last" style="">
                        <div class="company__img">
                            <img src="<?= setPath('img/rhombus.png?v=1') ?>" alt="" />
                            <div id="particles-company" class="particles"></div>
                        </div>
                        <div class="company__description wow fadeIn">
                            <?= __('Мы работаем с 2016 года и входим в список IT-компаний, аккредитованных Министерством цифрового развития, связи и массовых коммуникаций РФ. № рег. 6238 от 10.08.2016.') ?>
                            <div class="company__description-small">
                                <?= __('Все наши сотрудники состоят в штате и работают в офисе по адресу: Москва, Новинский бульвар, 18с1.') ?>
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
                            <?= __('Нарек Сираканян, {br}основатель и президент Sessia', ['br' => '</div><div class="narek__subtitle wow fadeIn">']) ?>
                        </div>
                        <img src="<?= setPath('img/quote.svg?v=1') ?>" alt="" class="narek__quote wow fadeIn">
                        <div class="narek__text wow fadeIn">
                            <?= __('Мы исповедуем инновационность и разрабатываем диджитал-решения на стыке интересов бизнесов и обычных пользователей. С помощью наших продуктов они коммуницируют друг с другом без посредников, легко находят общий язык и устанавливают взаимовыгодное партнерство. Мы за то, чтобы каждый наш проект, каждая разработка были социально значимыми и приносили конкретную пользу людям и обществу.') ?>
                        </div>
                    </div>
                    <img class="narek__img wow fadeIn" src="<?= setPath('img/narek.png?v=1') ?>" alt="narek">
                </div>
            </div>
        </div>

        <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/_projects.php'); ?>

        <div class="services services_advantages">
            <div class="wrapper wrapper_block" style="position: relative;">
                <div class="services__block">
                    <div class="services__header wow fadeIn"><?= __('Преимущества') ?></div>
                    <div class="services__items">
                        <div class="services__item wow fadeIn" data-wow-delay="0.5s">
                            <ul class="services__bull">
                                <li><div class="services__item-header"><?= __('Опыт создания высоконагруженных IT-платформ') ?></div></li>
                            </ul>
                        </div>
                        <div class="services__item wow fadeIn" data-wow-delay="1s">
                            <ul class="services__bull">
                                <li><div class="services__item-header"><?= __('Полный цикл разработки мобильных приложений') ?></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="services__block">
                    <div class="services__items services__items_end">
                        <div class="services__item wow fadeIn" data-wow-delay="1.5s">
                            <ul class="services__bull">
                                <li><div class="services__item-header"><?= __('Готовые модули для ускорения разработки и интеграции') ?></div></li>
                            </ul>
                        </div>
                        <div class="services__item wow fadeIn" data-wow-delay="2s">
                            <ul class="services__bull">
                                <li><div class="services__item-header"><?= __('Своя CRM-система для внесения быстрых изменений в проект') ?></div></li>
                            </ul>
                        </div>
                        <div class="services__item wow fadeIn" data-wow-delay="2.5s">
                            <ul class="services__bull">
                                <li><div class="services__item-header"><?= __('Фокус на тестирование и контроль кода для обеспечения качества продукта') ?></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--<img class="dotted2" src="<?= setPath('img/dotted-bg3.png?v=1') ?>" alt=""/>-->
            </div>
        </div>

        <?php /*
        <!--<div class="advantages">-->
        <!--<div class="wrapper wrapper_block">-->
        <!--<div class="projects__header">Преимущества</div>-->
        <!--<div class="advantages__table">-->
        <!--<div class="advantages__item">-->

        <!--</div>-->
        <!--<div class="advantages__item" style="border: 1px solid rgba(255,255,255,0.3);">-->
        <!--Опыт создания-->
        <!--высоконагруженных-->
        <!--IT-платформ-->
        <!--</div>-->
        <!--<div class="advantages__item">-->

        <!--</div>-->
        <!--</div>-->
        <!--<div class="advantages__table">-->
        <!--<div class="advantages__item" style="border: 1px solid rgba(255,255,255,0.3);">-->
        <!--Полный цикл-->
        <!--разработки мобильных-->
        <!--приложений-->
        <!--</div>-->
        <!--<div class="advantages__item" style="border: 1px solid rgba(255,255,255,0.3);">-->
        <!--Готовые модули-->
        <!--для ускорения-->
        <!--разработки-->
        <!--и интеграции-->
        <!--</div>-->
        <!--<div class="advantages__item">-->

        <!--</div>-->
        <!--</div>-->
        <!--<div class="advantages__table" >-->
        <!--<div class="advantages__item">-->
        <!--</div>-->
        <!--<div class="advantages__item" style="border: 1px solid rgba(255,255,255,0.3);">-->
        <!--Своя CRM-система-->
        <!--для внесения быстрых-->
        <!--изменений в проект-->
        <!--</div>-->
        <!--<div class="advantages__item" style="border: 1px solid rgba(255,255,255,0.3);">-->
        <!--Фокус на тестирование-->
        <!--и контроль кода для-->
        <!--обеспечения качества-->
        <!--продукта-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        */ ?>

        <div class="contact" style="position: relative;">
            <div class="wrapper wrapper_block">
                <div class="contact__header wow fadeIn"><?= __('Свяжитесь с нами') ?></div>
                <div class="form wow fadeIn">
                    <form class="" action="" method="">
                        <input type="text" placeholder="<?= __('Как к Вам обращаться') ?>" class="input">
                        <input type="text" placeholder="<?= __('Как с Вами связаться') ?>" class="input"><br>
                        <input type="text" placeholder="<?= __('Ваше сообщение') ?>" class="input-text">

                        <button class="send"><?= __('Отправить') ?></button>
                    </form>
                </div>
                <img class="circle" src="<?= setPath('img/ellipse.png?v=1') ?>" alt=""/>
            </div>
        </div>
        <div class="footer">
            <div class="wrapper wrapper_footer">
                <div class="footer__block">
                    <div class="footer__logo">
                        <img src="<?= setPath('img/logo.svg?v=1') ?>" alt="">
                    </div>
                    <div class="footer__nav">
                        <ul class="footer__list">
                            <li><a href="#about"><?= __('О нас') ?></a></li>
                            <li><a href="#projects"><?= __('Проекты') ?></a></li>
                            <li><a href="#team"><?= __('Команда') ?></a></li>
                            <li><a href="#news"><?= __('Новости') ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js?v=1"></script>
        <script src="<?= setPath('vendor/owl-carousel/owl.carousel.min.js?v=1') ?>"></script>
        <script src="<?= setPath('vendor/particles/particles.min.js?v=1') ?>"></script>
        <script src="<?= setPath('vendor/wow/wow.min.js?v=1') ?>"></script>

        <script>
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
            $('.owl-carousel').owlCarousel({
                stagePadding: 120,
                dots: true,
                nav: true,
                margin: 10,
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
                        items: 1
                    }
                }
            });

            // PARTICLES
            particlesJS.load('particles-header', '<?= setPath('js/particlesjs-header.json') ?>');
            particlesJS.load('particles-team', '<?= setPath('js/particlesjs-team.json') ?>');
            particlesJS.load('particles-company', '<?= setPath('js/particlesjs-company.json') ?>');

            // MAIN MENU
            $('body').prepend('<nav><div class="wrapper"><div class="logo"><img src="' + $('.logo img').attr('src') + '"></div><span class="btn-menu"></span><ul class="header__list">' + $('.header__list').html() + '</ul></div></nav>');

            $(document).on('click', '.btn-menu', function () {
                $(this).toggleClass('open');
                $('nav').find('.header__list').slideToggle();
            });

            mainMenuScroll = function () {
                $('nav').toggleClass('show', $(window).scrollTop() > $('.header').height() * .5);
                $('.header__nav').css('opacity', (1 - ($(window).scrollTop() / $(window).height()) * 2));
            }

            $(window).scroll(function () {
                mainMenuScroll();
            });

            mainMenuScroll();

            // COUNTERS
            runCounters = function () {
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
                                    now = Number(Math.ceil(now)).toLocaleString('<?= $lang ?>');
                                    $(this).text(now);
                                },
                            });
                    }
                });
            }

            $(window).scroll(function () {
                runCounters();
            });

            runCounters();
        });
        </script>

    </body>
</html>