$(document).on('click', '.footer__btn-scroll-to-top', function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});

$(document).on('click', '.hum', function() {
    $(this).toggleClass('active');
    $('.nav').toggleClass('hum-active');
    $('body').toggleClass('hum-active');

    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});

$(window).on('scroll', function() {
    showBlock();
});
showBlock();

function showBlock() {
    var scroll = $(window).scrollTop() + $(window).height();

    var offsetHeight = 300;
    if ($(window).width() < 1500) {
        offsetHeight = 350;
    } else if ($(window).width() < 1500) {
        offsetHeight = 400;
    }

    var items = $('.animation-block');
    $.each(items, function(index, value) {
        var offset = $(value).offset().top - offsetHeight;
        if (scroll > offset) {
            $(value).addClass('active');
        } else {
            $(value).removeClass('active');
        }
    });
}

function myCopyText(caption) {
    var target_text = window.getSelection(),
        add_text = '<br><br>' + caption + ' ' + document.location.href,
        out_text = target_text + add_text,
        fake = document.createElement('div');
    fake.style.position = 'absolute';
    fake.style.left = '-99999px';
    document.body.appendChild(fake);
    fake.innerHTML = out_text;
    target_text.selectAllChildren(fake);
    window.setTimeout(function() {
        document.body.removeChild(fake);
    }, 100);
}

$('.inputfile').on('change', function(e) {
    var fileName = e.target.value.split('\\').pop();
    $(this).parents('.form-group').find('label').text(fileName);
});
