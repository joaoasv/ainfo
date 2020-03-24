

$(window).scroll(function () {
    var g = $(window).scrollTop();
    var wapp = $('.data').offset().top;
    if (g >= (wapp - 150)) {
        $('.wapp').fadeIn();
    } else {
        $('.wapp').fadeOut();
    }
})

