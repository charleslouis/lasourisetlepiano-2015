(function ($) {

	$('document').ready(function(){
		
		toggleBullet('#creation-diapo-list');
		
		removePhoneHref('.phone-link');
		removePhoneHref('.skype-link');

		initialisationGMap('map');//Google Map
		resizeMap('map');//resize google Map
		
		// COOKIES for ALERT BOXES
		readCookie('alert-development');
		
		setCookieOnCloseAlert('alert-development', 'already-seen'); //set a cooky that last 1 day to avoid being disturbed by the alert box that call for a contact
		
		loadVideo('video-wrapper');

		$("#top").headroom();
		$("#brand").headroom();
		$("#menu").headroom();

	});
}(jQuery));