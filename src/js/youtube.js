$(document).ready(function() {
    $('#modalVideo').on('show.bs.modal', loadModalVideo);
    $('#modalVideo').on('hide.bs.modal', pauseModalVideo);

    function loadModalVideo() {
        var modalVideo = document.getElementById('modalVideo');
        var created = modalVideo.getAttribute('video-created');
        if (created === 'true') {
        	// playModalVideo();
        } else {
            modalVideo.setAttribute('video-created', 'true');
            var iframe = document.createElement("iframe");
            var embed = "https://www.youtube.com/embed/ID?autoplay=1&version=3&enablejsapi=1";
            iframe.setAttribute("src", embed.replace("ID", this.getAttribute('video-id')));
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("width", "100%");
            iframe.setAttribute("height", "100%");
            iframe.setAttribute("allowfullscreen", "1");
            iframe.id = "iframeModal";
            var frame = document.getElementById('modalFrame');
            frame.parentNode.replaceChild(iframe, frame);
        }
    }

    function pauseModalVideo() {
        document.getElementById('iframeModal').contentWindow
            .postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    }

    // function playModalVideo() {
    //     document.getElementById('iframeModal').contentWindow
    //         .postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
    // }

    function loadVideo(videoBlock){
    	var iframe = document.createElement('iframe');
        var embed = "https://www.youtube.com/embed/ID?autoplay=1&version=3&enablejsapi=1";
        iframe.setAttribute('src', embed.replace('ID', videoBlock.getAttribute('video-id')));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("width", "100%");
        iframe.setAttribute("height", "100%");
        iframe.setAttribute("allowfullscreen", "1");
        iframe.classList.add('video-block')
        videoBlock.parentNode.replaceChild(iframe, videoBlock);
    }


	var videoBlock = document.getElementById('videoBlock');
	videoBlock.parentNode.onclick = function(){
		loadVideo(videoBlock);
	};

});