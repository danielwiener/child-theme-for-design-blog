jQuery(document).ready(function($) { 
	    $('.slideshow').show();
	    $('.slideshow').cycle({
			fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc... 
			speed: 2500,
			timeout: 8000
		});
	});