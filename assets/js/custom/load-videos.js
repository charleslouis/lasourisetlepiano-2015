/**
*
* load video
* Videos are represented by an image
* and are loaded on click on the image
*
* Dependency : Advanced Custom Fields
* See Template : loop_single-rubriques.php
*
**/

	function loadVideo($videoWrapper){
		if (document.getElementsByClassName($videoWrapper)){

			// create the video player if any video is to be displayed on this page
			$('.video-player').append('<div class="embed-video"></div>');

			$('.video-player').click(function(e){
				e.stopPropagation();

				var video 		= document.getElementById(this.id),
				// get video host ie vimeo/youtube...
				videoHost		= $(video).attr('data-videohost'),
				//get the videoSource ie : the url provided by the host
				videoSource		= $(video).attr('data-source'),
				//get video dimensions
				videoW			= $(video).children('figure').width(),
				videoH			= $(video).children('figure').height();				

				//depending on host, build a specific frame
				if (videoHost == 'youtube') {
					videoId = (videoSource.replace('http://youtu.be/', ''));
					iframe = "<iframe width='" + videoW + " 'height='" + videoH + "' src='http://www.youtube.com/embed/" + videoId + "?autoplay=1&amp;rel=0' frameborder='0' allowfullscreen></iframe>";
					$(video).children('.embed-video').html(iframe);

				} else if (videoHost == 'vimeo') {
					videoId = (videoSource.replace('http://vimeo.com/', ''));
					iframe = "<iframe src='http://player.vimeo.com/video/" + videoId + "?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1' width='" + videoW + "' height='" + videoH + "'' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>";
					$(video).children('.embed-video').html(iframe);

				} else {
					$(video).children('.embed-video').html("<h1>Impossible de jouer la vidéo pour le moment");
				}
			});
		}
	}
