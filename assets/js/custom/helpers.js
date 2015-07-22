function removePhoneHref($phoneLinkClass){
	//we don't need cliquable phone link on no-touch screens I guess
	if ($('html').hasClass('no-touch')) {
		var $this = $($phoneLinkClass);
		var tel = $this.html();
		$this.parent().append(tel);
		$this.remove();
	}
}

// String.prototype.capitalize = function() {
//     return this.charAt(0).toUpperCase() + this.slice(1);
// };

function sameSize($divModel, $divTarget, $usedProperty, $coef){
	$($divTarget).css($usedProperty, $($divModel).outerHeight()*$coef);
}

function hideClass($myClass) {
	$($myClass).hide();
}

function toggleBullet($myList) {
	var element = $($myList).find('li');
	var i = 0;
	var speed = 1300;
	var timer = [];
	
	element.addClass('hidden-diapo-list');

	jQuery(element).each(function($) {			
		var thiz = jQuery(this);
		timer[i] = setTimeout(function() {
			element.addClass('hidden-diapo-list').removeClass('visible-diapo-list');
			thiz.removeClass('hidden-diapo-list').addClass('visible-diapo-list');
		},i * speed);
		i++;
	});
}