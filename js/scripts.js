new WOW().init();

jQuery(document).ready(function($) {
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
    particlesJS.load('particles-header', 'js/particlesjs-header.json');
    particlesJS.load('particles-team', 'js/particlesjs-team.json');
    particlesJS.load('particles-company', 'js/particlesjs-company.json');

    // MAIN MENU
    $('body').prepend('<nav><div class="wrapper"><div class="logo"><img src="' + $('.logo img').attr('src') + '"></div><span class="btn-menu"></span><ul class="header__list">' + $('.header__list').html() + '</ul></div></nav>');

    $(document).on('click', '.btn-menu', function () {
        $(this).toggleClass('open');
        $('nav').find('.header__list').slideToggle();
    });

    mainMenuScroll = function () {
        $('nav').toggleClass('show', $(window).scrollTop() > $('.header').height()*.5);
        $('.header__nav').css('opacity', (1 - ($(window).scrollTop() / $(window).height())*2));
        // var navScroll = ($(window).height() / 2) - $(window).scrollTop() - ($('nav').height() / 2);
// console.log($(window).scrollTop() + ' - ' + navScroll + ' - ' + ($(window).scrollTop() / navScroll));
        // $('nav').css({
            // 'top': navScroll > 0 ? navScroll : 0,
            // 'background': 'rgba(0, 0, 0, ' + (navScroll > 0 ? navScroll / $(window).scrollTop() : 1) + ')',
        // });
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
                            now = Number(Math.ceil(now)).toLocaleString('ru');
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

