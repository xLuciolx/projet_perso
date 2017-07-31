// Script formulaire
/*jslint browser: true*/ /*global  $*/
$(document).ready(function(){

	// fonction réinitialisant le formulaire
	function resetForm($form) {
		$form.find('input, textarea').val('');
		$form.find('input, textarea').removeClass('invalid');
		$form.find('input, textarea').removeAttr('placeholder');
	}

	// fonction vérifiant le formulaire
	function checkInput($input){
		// on recupere le type d'input
		var type = $input.attr('type');
		// si email
		if (type == 'email') {
			var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
			if (! regex.test($input.val())){
				$input.val('');
				$input.addClass('invalid');
				$input.attr('placeholder', 'Adresse mail invalide');
				return false;
			}
			else {
				$input.removeAttr('placeholder');
				$input.removeClass('invalid');
				return true;
			}
		}

		else {
			if ($input.val() == ''){
				$input.addClass('invalid');
				$input.attr('placeholder', 'Veuillez compléter ce champs');
				return false;

			}
			else{
				$input.removeAttr('placeholder');
				$input.removeClass('invalid');
				return true;
			}
		}

	}

	// au clique sur le bouton on efface les champs
	$('#erase').on('click', function(){
		resetForm($('#contact'));
	});

	// Contôles du formulaire
	// $('#nom').on('focusout', function(){
	// 	checkInput($('#nom'));
	// });
	//
	// $('#mail').on('focusout', function(){
	// 	checkInput($('#mail'));
	// });
	//
	//
	// $('#message').on('focusout', function(){
	// 	checkInput($('#message'));
	// });
	$('#contact').on('submit', function(e){
		e.preventDefault();
		var verif = 0;

		if(checkInput($('#nom'))) verif++;

		if(checkInput($('#mail')) && checkInput($('#message'))) verif++;

		if(checkInput($('#message'))) verif++;

		if(verif == 3){
			alert('valide');
		}

		// var formSubmit = $(this).serialize();
		// $(this).serializeArray();
	});
});
