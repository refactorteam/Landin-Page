$(document).ready(function() {
    var paramsTop = {
        dotColor: 'rgba(255, 255, 255, 0.59)',
        lineColor: 'rgba(255, 255, 255, 0.29)',
        minSpeedX: .1,
        maxSpeedX: .6,
        minSpeedY: .1,
        maxSpeedY: .6,
        lineWidth: .5,
        density: 13400,         // One particle every 12100 pixels
        curvedLines: false,
        proximity: 150,         // How close two dots need to be before they join
        parallaxMultiplier: 10, // Lower the number is more extreme parallax
        parallax: true,
        particleRadius: 2       // Dot size
    };

    /*  
        For some reason, this plugin freaks out on the bottom of the page, and it is no longer maintained.
        So I did this little trick to make it calm, but now the parallax is not that very sensitive.
        This plugin isn't really that flexible so I'll stick to this for now, 
        or maybe I change to another plugin in the future.
    */

    var paramsBottom =      {
        dotColor: 'rgba(255, 255, 255, 0.59)',
        lineColor: 'rgba(255, 255, 255, 0.29)',
        minSpeedX: .1,
        maxSpeedX: .6,
        minSpeedY: .1,
        maxSpeedY: 1,
        lineWidth: .5,
        density: 13400, // One particle every 12100 pixels
        curvedLines: false,
        directionY: 'top',
        proximity: 150, // How close two dots need to be before they join
        parallaxMultiplier: 50, // Lower the number is more extreme parallax
        parallax: true,
        particleRadius: 2 // Dot size
    }

    $('#particleBackground').particleground(paramsTop);
    $('#bottomParticles').particleground(paramsBottom)

    // $('#bottomParticles').particleground('pause');
    // $('.bottom').waypoint(function() {
    //     $('#bottomParticles').particleground('start');
    // }, {
    //     offset: '1px'
    // });
});
