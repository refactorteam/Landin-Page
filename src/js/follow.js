$(document).ready(function() {
    var width = $(window).width();
    if(width > 991){
        var $follow = $('#follow');
        var $header = $('#follow .navbar');
        var $buttons = $('#fixedButtons');
        $follow.waypoint(function() {
            $header.addClass('fixed-top');
            $buttons.removeClass('d-none fadeOutDown');
            $buttons.addClass('d-flex fadeInUp');
        }, {
            offset: '0px',
        });
        $follow.waypoint(function() {
            $header.removeClass('fixed-top');
            $buttons.addClass('fadeOutDown');
            $buttons.removeClass('d-flex fadeInUp');
            setTimeout(function(){
                $buttons.addClass('d-none');            
            }, 250);
        }, {
            offset: '1px',
        });

        $('.about').waypoint(function(){
            $('#tr1').removeClass('putDown');
            $('#tr1 .line').addClass('animated fadeIn');
            $('#tr1 .between-c').addClass('animated fadeIn');
        }, {
            offset: '50%',
        });

        $('.about .idea').waypoint(function(){
            $('#complex2 .idea-show-card:not(.idea-between)').css('transform','translateY(180px)');
            $('#complex2 .line').addClass('animated fadeIn');
            setTimeout(function(){
                $('#complex2 .center-text').addClass('animated fadeIn');
                $('#complex2 .idea-between_bg').css('opacity', '1');
            }, 500);
        }, {
            offset: '50%',
        });
    }
});