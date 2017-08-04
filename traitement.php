<?php
  include 'include/connexion.php';
  require 'include/phpmailer/PHPMailerAutoload.php';

  error_reporting(0);

  // Nettoyage
  $safe = array_map('strip_tags', $_POST);

  $answer = array();

  //Vérification des données
  if (!filter_var($safe['mail'], FILTER_VALIDATE_EMAIL)) {
      $answer['err'] = 'Adresse mail invalide';
      echo json_encode($answer);
      return;
  }

  // On enleve les espaces
  $name = str_replace(' ', '', $safe['name']);
  $msg = str_replace(' ', '', $safe['msg']);

  if (!strlen($name) > 0) {
      $answer['err'] = 'Les champs ne peuvent être vides';
      echo json_encode($answer);
      return;
  }

  if (!strlen($msg) > 0) {
      $answer['err'] = 'Les champs ne peuvent être vides';
      echo json_encode($answer);
      return;
  }

  //  envoi du mail
  $mail = new PHPMailer;
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP(); // connexion directe au serveur SMTP
  $mail->isHTML(true); //utilisation HTML
  $mail->Host = 'smtp.orange.fr'; //serveur de messagerie
  $mail->Port = 465; //port orange
  $mail->SMTPAuth = true; //on fournit login/password
  $mail->SMTPSecure = 'ssl'; //certificat ssl
  $mail->Username = 'lgallay@orange.fr'; //utilisateur SMTP
  $mail->Password = 'luciol16'; //mdp
  $mail->SetFrom($safe['mail'], $safe['name']); //expediteur du mail
  $mail->addAddress('lgallay@orange.fr'); //le destinataire
  $mail->Subject = 'Message de ' . $safe['name'];
  $mail->Body =
                '<html lang="fr">
                 <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <meta http-equiv="X-UA-Compatible" content="ie=edge">
                  <title>Mail</title>
                  </head>
                  <body>
                  <h1>
                    Message de ' . $safe['name']. '
                  </h1>
                  <p> ' . $safe['msg'] . '
                  </p>
                </body>
                </html>';

  if (!$mail->send()) {
      $answer['err'] = 'Erreur lors de l\'envoi du mail.';
      echo json_encode($answer);
      return;
  } else {
      // requete insertion contact
    $rqContact = "INSERT INTO contacts(nomContact, mailContact, msgContact, dateContact)
                         VALUES (:nomContact, :mailContact, :msgContact, NOW())";

    // préparation
    $stmtContact = $dbh->prepare($rqContact);

    // parametres
    $params = array(
                ':nomContact' => $safe['name'],
                ':mailContact' => $safe['mail'],
                ':msgContact' => $safe['msg']
                    );

    // execution
    $stmtContact->execute($params);
      // message de confirmation
      $answer['ok'] = 'Votre message a bien été envoyé.';
      echo json_encode($answer);
  }
