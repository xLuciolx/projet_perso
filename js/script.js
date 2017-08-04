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

	// fonction pour les messages d'erreur
	function errorMsg($elt, message){
		$('#messageAjax').show();
		$('#messageAjax').addClass('card-panel red lighten-1');
		$('#messageAjax').append('<p class="center-align white-text">Erreur: ' + message + '</p>');
		setTimeout(function(){
			$('#messageAjax').hide();
			$('#messageAjax').html('');
		}, 5000);
	}

	// fonction message de confirmation
	function successMsg($elt, message){
		$('#contactForm').slideUp();
		$('#messageAjax').addClass('card-panel teal lighten-1');
		$('#messageAjax').append('<p class="center-align white-text">' + message + '</p>');
		$('#messageAjax').slideDown(1000);
	}

	// au clique sur le bouton on efface les champs
	$('#erase').on('click', function(){
		resetForm($('#contact'));
	});

	$('#contactForm').on('submit', function(e){
		e.preventDefault();

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
					var errorAjax = xhr.status + ' ' + msg;
					errorMsg($('#messageAjax'), errorAjax);
				},

				success: function(data){
					if(data.err){
						// si le mail n'est pas envoyé
						errorMsg($('#messageAjax'), data.err);
					}

					else {
						// Mail envoyé, message de succes
						successMsg($('#messageAjax'), data.ok);
					}
				}
			});
		}

	});
	
});
