class Header {

    constructor() {
        this.activeMenuWhenScrolling();
        this.clickOnMenu();
        this.menuHamburger();
    }

    activeMenuWhenScrolling() {
        window.addEventListener('scroll', () => {
            let scrollDistance = window.scrollY;

            if (window.innerWidth > 768) {
                document.querySelectorAll('.section').forEach((el, i) => {
                    if (el.offsetTop - document.querySelector('.menu').clientHeight <= scrollDistance) {
                        document.querySelectorAll('.nav span').forEach((el) => {
                            if (el.classList.contains('active')) {
                                el.classList.remove('active');
                            }
                        });

                        document.querySelectorAll('.nav li')[i].querySelector('span').classList.add('active');
                    }
                });
            }
        });
    }

    clickOnMenu() {
        $(document).on('click', '.nav__link', function() {

            $('.hum').removeClass('active');
            $('.nav').removeClass('hum-active');
            $('body').removeClass('hum-active');

            let id = $(this).data('id');

            $('html, body').animate({
                scrollTop: $('#' + id).offset().top - document.querySelector('.menu').clientHeight
            }, {
                duration: 400,   // по умолчанию «400»
                easing: "linear" // по умолчанию «swing»
            });

            $('.nav__link').removeClass('active');
            $(this).addClass('active');

            return false;
        });
    }

    menuHamburger() {
        $(document).on('click', '.hum', function() {
            $(this).toggleClass('active');
            $('.nav').toggleClass('hum-active');
            $('body').toggleClass('hum-active');
        });
    }
}

let header = new Header();


class Popup {

    constructor() {
        this.open();
        this.close();
    }

    open() {
        $(document).on('click', '.popup-open', function(e) {
            $('body').addClass('popup-active');
            var key = $(this).data('key');
            $('.popup[data-key=' + key + ']').addClass('active');
        });
    }

    close() {
        var self = this;

        $(document).on('click', '.popup-close', function(e) {
            self.setClose();
        });

        $(document).on('click', '.popup.active', function(e) {
            if($(e.target).closest('.popup__inner').length) {
                return true;
            }
            self.setClose();
        });
    }

    setClose() {
        $('body').removeClass('popup-active');
        $('.popup-close').parents('.popup').removeClass('active');
    }
}

let popup = new Popup();
