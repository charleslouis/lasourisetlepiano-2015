
function resizeMap($map){
	if (document.getElementById($map)){
		$(window).resize(function(event) {
			setTimeout(initialisationGMap($map), 1000);
		});
	}
}

	function displayInfoWindow($map, $marker, $infowindow, $myEvent){
	google.maps.event.addListener($marker, $myEvent,
    function(){
      $infowindow.setContent($marker.messageContent);//update the content for this marker
      $infowindow.open($map, $marker);//"move" the info window to the clicked marker and open it
	  }
	);		
}

//GOOGLEMAP
//dependency : sameSize($divModel, $divTarget), displayInfoWindow($map, $marker, $infowindow, $myEvent)
function initialisationGMap($map){//include google map in the proper div
	if (document.getElementById($map)){

		// append a loader
		$('#'+ $map).css('background', 'url(' + imageFolder + 'map/loader.gif) center center no-repeat');

		if ($('html').hasClass('no-touch')){

			$('#mapWrapperLink').removeAttr('href', ''); //we don't need to provide access to google map through the map itself
			
			//we want the map to be the same height as the vcard and we know #map height is due to padding-top
			sameSize('#hcard-la_souris_et_le_piano', '#'+ $map, 'padding-top', 1.3);

			var centreCarte = new google.maps.LatLng(48.8655,2.3920),
				pAdresse = new google.maps.LatLng(48.86615,2.39425),
				pMetroNadaud = new google.maps.LatLng(48.86480,2.394655),
				pMetroGambetta = new google.maps.LatLng(48.86482,2.398335);
			
			var iSprite = imageFolder,
					$mapZoom;
		
			// adapt icons for no-svg using modernizr html classes
			iSprite += ($('html').hasClass('no-svg')) ? 'map/location-coordonnees.png' : 'map/location-coordonnees.svg';

			//adapt zoom for responsive cases
			$mapZoom = (($('#'+ $map).width())<650) ? 15 : 16;

			//icons
			var iAdresse = new google.maps.MarkerImage(iSprite, new google.maps.Size(70, 70), new google.maps.Point(0, 0)),
				iMetro = new google.maps.MarkerImage(iSprite, new google.maps.Size(40, 40), new google.maps.Point(10, 75));

			//map options
			var optionsCarte = {
				zoom: $mapZoom,
				center: centreCarte,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			// map
			var maCarte = new google.maps.Map(document.getElementById($map), optionsCarte);
			var adresse, metroGambetta, metroNadaud;
			var infowindow = new google.maps.InfoWindow();

			// Markers
			adresse = new google.maps.Marker({
				icon: iAdresse,
				position: pAdresse,
				map: maCarte,
				messageTitle: 'La souris et le piano',
				messageContent: 'C\'est ici!'
			});
			metroGambetta = new google.maps.Marker({
				icon: iMetro,
				position: pMetroGambetta,
				map: maCarte,
				messageTitle: 'Métro 3 et 3bis Gambetta',
				messageContent: 'Sortie place Gambetta ou Mairie du 20ème'
			});
			metroNadaud = new google.maps.Marker({
				icon: iMetro,
				position: pMetroNadaud,
				map: maCarte,
				messageTitle: 'Métro 3 et 3bis Gambetta',
				messageContent: 'Sortie place Martin Nadaud'
			});

			// infoWindows
			var markers=[adresse, metroGambetta, metroNadaud], i;
			var messageTitle, messageContent;
			for (i = markers.length - 1; i >= 0; i--) {
				// built the infoWindow content
				messageContent = '<div class="infowindow"><span><strong>' + markers[i].messageTitle +'</strong><br/></span>';
				markers[i].messageContent = messageContent + '<span>' + markers[i].messageContent +'</span></div>';					
				// fire the eventListener
				displayInfoWindow(maCarte, markers[i], infowindow, 'mouseover');
			}

		} else {
			$('#'+ $map).css('background-image', 'url(' + imageFolder + 'map/mapHd.png)');
			// as we're on TOUCH we rather provide an image with a link to google map
			$('#'+ $map).click(function() {//rebuilt the div ID > on click on the map div ID, open a new tab with the full map
				 window.open('http://goo.gl/maps/RgCDv');
			});
			// we may dont't need access via the text link 
			// $('#gooleMapLink').remove();
		}				
	}
}//end of initialisationGMap -google map-