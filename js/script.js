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
			// si regex non validée
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
			// si le champs est vide
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

	$('#contactForm').on('submit', function(e){
		e.preventDefault();
		// var formData = $(this).serialize();
		// alert(formData);
		var verif = 0;

		if(checkInput($('#nom'))) verif++;

		if(checkInput($('#mail')) && checkInput($('#message'))) verif++;

		if(checkInput($('#message'))) verif++;

		if(verif == 3){
			// si le formulaire est valide, on fait la requête ajax
			$.ajax({
				url: 'traitement.php',
				method: 'POST',
				dataType: 'json',
				data: $(this).serialize(),

				error: function(xhr, msg){
					$('#messageAjax').html('<p class="center-align red white-text">Erreur: ' + xhr.status + ' ' + msg + '</p>');
				},

				success: function(data){
					alert(data);
				}
			});
		}

	});
});
