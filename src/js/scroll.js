$(document).ready(function() {
    var scroll = function(elem) {
        //elem - объект, который вызывает скролл, а не объект, до которого идет скролл. У elem должен быть установлен href.
        var goto = $(elem).attr('href');
        if (goto.length !== 0) {
            $('html, body').animate({
                scrollTop: $(goto).offset().top - 56
            }, 500);
        }
        return false;
    };
    $('.header-link, .nav-link, .follow .navbar-brand').click(function(e) {
        e.preventDefault();
        scroll(e.currentTarget);
    });
    $('#scrollTop').click(function(e){
        e.preventDefault();
        scroll(e.currentTarget);
    });
});