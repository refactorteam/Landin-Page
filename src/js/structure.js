$(document).ready(function() {

    // function backgroundMovement(element, background) {
    //     element = $(element);
    //     background = $(background);
    //     element.mousemove(function(e) {
    //     	background.removeClass('hovered-out');
    //         var movementStrength = 100;
    //         var height = movementStrength / $('.structure').height();
    //         var width = movementStrength / $('.structure').width();
    //         var pageX = e.pageX - element.width() / 2;
    //         var pageY = e.pageY - element.height() / 2;
    //         var newValueX = width * pageX + 150;
    //         var newValueY = height * pageY - 500;
    //         background.css('background-position', newValueX + 'px ' + newValueY + 'px');
    //     });
    //     element.mouseout(function() {
    //     	background.addClass('hovered-out')
    //         background.css('background-position', 'center center');
    //     });
    // }

   function shrinkBackground(background) {
       background = $(background);
       background.css('transform', 'scale(0)');
   }

   function releaseBackground(background) {
       background = $(background);
       background.css('transform', 'scale(1)');
   }

    // backgroundMovement($('.structure'), $('#bgStructure'));

    $('.structure .keeper').hover(function() {
       shrinkBackground($('#bgStructure'));
        var desc = this.getAttribute('data-desc');
        $('#' + desc).addClass('bolder');
        $('#' + desc + ' .structure-list_item__pointer').addClass('pointing');
    }, function() {
       releaseBackground($('#bgStructure'));
        var desc = this.getAttribute('data-desc');
        $('#' + desc).removeClass('bolder');
        $('#' + desc + ' .structure-list_item__pointer').removeClass('pointing');

    });
});