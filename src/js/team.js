$(document).ready(function(){

    var slick = $('#personModal .team-members').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.team-modal .arrow.arrow-left'),
        nextArrow: $('.team-modal .arrow.arrow-right'),
        infinite: false,
        // variableWidth: true,
        // adaptiveHeight: true,
    });
    slick.slick('slickGoTo', 1);

    $('#team-slider .team-members').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.team-top .arrow.arrow-left'),
        nextArrow: $('.team-top .arrow.arrow-right'),
        infinite: false,
        // variableWidth: true,
        // adaptiveHeight: true,
    });
    $('#personModal').on('show.bs.modal', function(){
    	$('#personModal .team-members').css('display', 'block');
    });

    function showSlide(card){
        card = $(card);
        var number = parseInt(card.attr('team-member')) - 1;
        slick.slick('slickGoTo', number);
    }

    // function setWidth(){
    // 	var length = $('.team-modal-card').toArray().length;
    // 	// var width = parseInt($('.team-modal-card').css('width'));
    // 	var width = 560;
    // 	var width = width * length;
    // 	$('#personModal .team-members .slick-track').css('width', width + 'px');
    // }

    $('#team-slider .team-top-card').width($('#team-slider .team-members').width());

    $('.team-card').click(function(){
        showSlide(this);
        $('#personModal').modal('show');
    });

    $('.close').click(function(){
        $(this).parents('.modal').modal('hide');
    });
});

