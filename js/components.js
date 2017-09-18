// script
/*jslint browser: true*/ /*global  $*/

$(document).ready(function(){
	// initialisation scrollSPy
	$('.scrollspy').scrollSpy({
		scrollOffset: 400
	});

	// initialisation modal pour le slider
	$('.modal').modal({
		dismissible: true,
		opacity: .5
	});

	// initialisation slider + option
	$('.slider').slider({
		height: 525,
		interval: 10000
	});
});
