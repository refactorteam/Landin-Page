function createMedia(){
    if($('.media-top-slider').hasClass('slick-initialized')){
        $('.media-top-slider').slick('unslick');
    }
    if($(window).width() > 991){
        $('.media-top-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.media-articles-slider',
            prevArrow: $('.media-top .arrow-left'),
            nextArrow: $('.media-top .arrow-right'),
            infinite: false,
        });
        $('.media-articles-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.media-top-slider',
            prevArrow: $('.media-articles .arrow-left'),
            nextArrow: $('.media-articles .arrow-right'),
            infinite: false,
        });
        $('.media-articles-slider').slick('refresh');
        $('.media-top-slider').slick('refresh');
    } else {
        $('.media-articles-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            center: true,
            prevArrow: $('.media-articles .arrow-left'),
            nextArrow: $('.media-articles .arrow-right'),
            infinite: true,
        });
        $('.media-top .arrow').hide();
        $('.media-articles-slider').slick('refresh');
    }
}

$(document).ready(function() {
    createMedia();
});