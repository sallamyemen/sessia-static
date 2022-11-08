function mainMenuScroll() {
    $('.header').toggleClass('header_scroll', $(window).scrollTop() > 0);
}

$(window).scroll(function() {
    mainMenuScroll();
});

mainMenuScroll();


$(document).on('click', '.hum', function() {
    $(this).toggleClass('active');
    $('.row-nav__nav').toggleClass('hum-active');
    $('body').toggleClass('hidden');

    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});
