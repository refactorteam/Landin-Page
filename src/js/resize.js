/* 
	This file handles window resizes and refreshing the content (sliders, etc.) accordingly to the new size.
*/

$(window).resize(function() {

    function refreshTeamTopper() {
        // Refreshes team slider
        $('#team-slider .team-members')[0].slick.refresh();
        $('#team-slider .team-top-card').width($('#team-slider .team-members').width());
        console.log($('#team-slider .team-members').width());
    }

    function resizePartners() {
        //
        if ($(window).width() < 992) {
            if (!$('#pt1').hasClass('slick-initialized')) {
                slidePartners();
            } else {
                $('#pt1').slick('refresh');
                $('#pt2').slick('refresh');
            }
        }else{
        	if ($('#pt1').hasClass('slick-initialized')) {
        		$('#pt1').slick('unslick');
        		$('#pt2').slick('unslick');
        	}
        }
    }

    function resizeMedia(){
        createMedia();
    }

    function main() {
        refreshTeamTopper();
        resizePartners();
        resizeMedia();
    }
    main();
});