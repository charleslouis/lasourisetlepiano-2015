
function writeCookie( name, value, days ) {
	var date, expires;
	if (days) {
			date = new Date();
			date.setTime( date.getTime()+( days*24*60*60*1000 ) );
			expires = '; expires=' + date.toGMTString();
	} else {
		expires = '';
	}
	document.cookie = name + '=' + value + expires + '; path=/';
}

function readCookie(cookie_name)
// see http://www.w3schools.com/js/js_cookies.asp
	{
	var cookieValue = document.cookie;
	var cookieStart = cookieValue.indexOf('' + cookie_name + '=');
	if (cookieStart === -1)
	  {
	  cookieStart = cookieValue.indexOf(cookie_name + '=');
	  }
	if (cookieStart === -1)
	  {
	  cookieValue = null;
	  }
	else
	  {
	  cookieStart = cookieValue.indexOf('=', cookieStart) + 1;
	  var cookieEnd = cookieValue.indexOf(';', cookieStart);
	  if (cookieEnd === -1)
	  {
	cookieEnd = cookieValue.length;
	}
	cookieValue = unescape(cookieValue.substring(cookieStart,cookieEnd));
	}
	return cookieValue;
}

function setCookieOnCloseAlert(alertBox, myCooky){
	// we set a cooky to avoid showing the alert box all the time if the reader has already closed it
	if( document.getElementById(alertBox) ){
		if(readCookie(alertBox) === myCooky){
			$('#' + alertBox).hide();
		} else {
			$('#' + alertBox +' .close').click(function(){
				writeCookie(alertBox, myCooky, 1);		
			});
		}
	}
}