$(document).ready(function(){
    
    function countDown(date, clock){
        $(clock).countdown(date, function(event) {
            var result = event.strftime('%D:%H:%M');
            $(this).text(result);
        });
    }
    
    countDown('2018/03/31', $('.topper-clock'));
    
});