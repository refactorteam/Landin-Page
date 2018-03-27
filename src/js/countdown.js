$(document).ready(function(){
    
    function countDown(date, clock){
        $(clock).countdown(date, function(event) {
            var result = event.strftime('%D:%H:%M');
            $(this).text(result);
        });
    }

    (function main(){
    	var stringDate = "2018-03-31T03:00:00+03:00";
    	var until = moment(stringDate).toDate();
    	countDown(until, $('.topper-clock'));
    }());
    
});