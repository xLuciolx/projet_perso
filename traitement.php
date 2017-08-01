<?php
  include 'include/connexion.php';
  require 'include/phpmailer/PHPMailerAutoload.php';

  // Nettoyage
  $safe = array_map('strip_tags', $_POST);

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
  if($stmtContact->execute($params)){
    //si succes envoi du mail
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

    if(!$mail->send()){
      echo 0;
    }
    else {
      echo 1;
    }

  }


 ?>
