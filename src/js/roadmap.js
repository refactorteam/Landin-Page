$(document).ready(function() {

    function parseDate(string) {
        var dateArray = string.split('-');
        var year = parseInt(dateArray[0]);
        var month = parseInt(dateArray[1]) - 1;
        return new Date(year, month);
    }

    function setRoadMap() {
        var objects = $('div[data-date]').toArray();
        objects.forEach(function(element) {
            var dataDate = element.getAttribute('data-date');
            var date = parseDate(dataDate);
            if (date < new Date()) {
                $(element).addClass('before');
            } else {
                $(element).addClass('future');
            }
        });
    }

    function scrollNowadays() {
        var array = $('.roadmap-bottom-thing').toArray();
        var goTo = 1;
        array.forEach(function(element, index) {
            var dataDate = element.getAttribute('data-date');
            var date = parseDate(dataDate);
            if (date <= new Date()) {
                goTo = index;
            }
        });
        $('.roadmap-top-slider').slick('slickGoTo', goTo);
        $('.roadmap-bottom-wrapper').slick('slickGoTo', goTo);
    }

    function responsiveTopSlider() {
        var topSlider = $('.roadmap-top-slider');
        if (topSlider.hasClass('slick-slider')) {
            topSlider.slick('unslick');
        }
        var width = screen.width;
        var showSlides = 4;
        if (width < 480) {
            showSlides = 1;
        } else if (width < 768) {
            showSlides = 2;
        } else if (width < 992) {
            showSlides = 3;
        }
        var settings = {
            slidesToScroll: 1,
            slidesToShow: showSlides,
            prevArrow: $('.roadmap-top .arrow-left'),
            nextArrow: $('.roadmap-top .arrow-right'),
            speed: 300,
            draggable: false,
            infinite: false,
            touchMove: false,
            asNavFor: $('.roadmap-bottom-wrapper'),
        };
        topSlider.slick(settings);
    }

    function responsiveBottomSlider() {
        var slider = $('.roadmap-bottom-wrapper');
        var width = screen.width;
        if (slider.hasClass('slick-slider')) {
            slider.slick('unslick');
        }
        var showSlides = 4;
        if (width < 480) {
            showSlides = 1;
        } else if (width < 768) {
            showSlides = 2;
        } else if (width < 992) {
            showSlides = 3;
        }
        slider.slick({
            slidesToScroll: 1,
            slidesToShow: showSlides,
            arrows: false,
            speed: 300,
            draggable: false,
            infinite: false,
            touchMove: false,
        });
    }



    responsiveTopSlider();
    responsiveBottomSlider();
    setRoadMap();
    scrollNowadays();

    $(window).resize(function() {
        responsiveTopSlider();
        responsiveBottomSlider();
        setRoadMap();
        scrollNowadays();
    });

});