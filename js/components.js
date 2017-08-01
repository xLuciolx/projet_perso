// script
/*jslint browser: true*/ /*global  $*/

$(document).ready(function(){
	// initialisation scrollSPy
	$('.scrollspy').scrollSpy({
		scrollOffset: 300
	});

	// initialisation modal pour le slider
	$('.modal').modal({
		dismissible: true,
		opacity: .5,
	});

	// initialisation slider + option
	$('.slider').slider({
		height: 415,
	});
});
