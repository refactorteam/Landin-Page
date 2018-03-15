/*eslint no-unused-vars: ["off"]*/

$(document).ready(function() {

    function pulse(button, seconds) {
        button = $(button);
        button.addClass('animated pulse');
        setTimeout(function() {
            button.removeClass('animated pulse');
        }, 1000);
        var timeout = setTimeout(function draw() {
            button.addClass('animated pulse');
            setTimeout(function() {
                button.removeClass('animated pulse');
            }, 1000);
            timeout = setTimeout(draw, seconds * 1000);
        }, seconds * 1000);
    }
    (function main() {
        var pulsatingButtons = [
            $('#pulsatingButton'),
            $('#pulseBottomButton')
        ];
        $.each(pulsatingButtons, function(index, value){
            pulse(value, 5);
        });
    }())
});