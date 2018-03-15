$(document).ready(function() {
    var button = $('.navbar-toggler');
    $(button).click(function() {
        $('.menu-m').toggleClass('outer-menu');
        if (button.attr('aria-expanded') === 'true') {
            button.attr('aria-expanded', 'false');
        } else {
            button.attr('aria-expanded', 'true');
        }
    });

    function slidePartners() {
        $('#pt1').slick({
            slidesToScroll: 1,
            slidesToShow: 2,
            arrows: false,
            infinite: false,
            asNavFor: $('#pt2'),
            speed: 300,
        });
        $('#pt2').slick({
            slidesToScroll: 1,
            slidesToShow: 2,
            infinite: false,
            nextArrow: $('#ptNext'),
            prevArrow: $('#ptPrev'),
            asNavFor: $('#pt1'),
            speed: 300,
        });
    }

    if ($(window).width() < 992) {
        slidePartners();
    }
});