<?php
  include 'include/tool.php';
  include 'include/connexion.php';
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="CV développeur intégrateur web: html, css, javascript, php, sql.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CV Développeur / Intégrateur Web - Loïc Gallay </title>
  <!--Import Google Icon Font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- normalize -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/timeline.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <header>
      <div class="container">
        <div class="center-align">
          <p>
            Loïc Gallay
          </p>
          <h1>
            Développeur / Intégrateur Web
          </h1>
        </div>
      </div>
    </header>

    <nav class="hide-on-small-only blue-grey lighten-1">
        <div class="container">
          <div class="col m12 l12">
            <ul class="table-of-contents">
              <li>
                <a href="#about" class="active">A propos</a>
              </li>
              <li>
                <a href="#skill">Compétences</a>
              </li>
              <li>
                <a href="#work">Réalisations</a>
              </li>
              <li>
                <a href="#resume">CV express</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- navigation small screen -->
    <div class="fixed-action-btn click-to-toggle show-on-small hide-on-med-and-up" >
      <a class="btn-floating btn-large blue-grey lighten-1 waves-effect waves-light"><?= setIcon('menu',1); ?></a>
      <ul>
        <li><a href="#about" class="btn-floating deep-orange lighten-1"><?= setIcon('person_outline',1); ?></a></li>
        <li><a href="#skill" class="btn-floating blue-grey lighten-1"><?= setIcon('school',1); ?></a></li>
        <li><a href="#work" class="btn-floating deep-orange lighten-1"><?= setIcon('build',1); ?></a></li>
        <li><a href="#resume" class="btn-floating blue-grey lighten-1"><?= setIcon('insert_drive_file',1); ?></a></li>
        <li><a href="#contact" class="btn-floating deep-orange lighten-1"><?= setIcon('mail_outline',1); ?></a></li>
      </ul>
    </div>

    <main>

      <div class="container">

        <section id="about" class="scrollspy">
          <div class="row">
            <div class="col s12 m12 l12 center-align">
              <h2>
                A propos
              </h2>
              <p class="grey-text darken-1">
                Quelques mots pour me décrire
              </p>
            </div>
            <div class="row">
              <div class="col s6 offset-s3 m4 l4 push-m8 push-l8">
                <img src="img/avatar.jpg" alt="avatar" class="responsive-img circle center-block" id="avatar">
              </div>
              <div class="col s12 m8 pull-m4 l8 pull-l4">
                <p class="righ-align">
                  Développeur / Intégrateur web curieux, autonome et rigoureux, j'aime les applications simples, rapides et efficaces.
                  Un sens de l'écoute et du service, une expertise technique en constante progression grâce à une formation continue. Motivé par le besoin de toujours mieux faire et appuyé par des bases acquises au cours de mon parcours, je prend plaisir à relever de nouveaux challenges.
                </p>
              </div>
            </div>
          </div>
        </section>

        <div class="divider"></div>

        <section id="skill" class="scrollspy">
          <div class="row">
            <div class="col s12 center-align">
              <h2>
                Compétences
              </h2>
              <p class="grey-text darken-1">
                En formation continue.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s10 offset-s1 m4 l4">
              <div class="flip-container">
                  <div class="flipper">
                    <div class="front">
                      <!-- front content -->
                      <div class="card medium">
                        <div class="card-content">
                          <h3 class="center-align">
                            Front-end
                          </h3>
                          <span class="fa-stack fa-4x center-block">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-television fa-stack-1x"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="back">
                      <!-- back content -->
                      <div class="card medium z-depth-4">
                        <div class="card-content">
                          <span class="card-title">Front-end</span>
                          <ul>
                            <li>
                              <p>
                                HTML
                              </p>
                              <?php setIcon('star', 5); ?>
                            </li>
                            <li>
                              <p>
                                CSS
                              </p>
                              <?php
                                setIcon('star', 4);
                                setIcon('star_half', 1);
                               ?>
                            </li>
                            <li>
                              <p>
                                Javascript
                              </p>
                              <?php
                                setIcon('star', 4);
                                setIcon('star_border', 1);
                              ?>
                            </li>
                            <li>
                              <p>
                                jQuery
                              </p>
                              <?php
                                setIcon('star',4);
                                setIcon('star_border', 1);
                               ?>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front">
                    <!-- front content -->
                    <div class="card medium">
                      <div class="card-content">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h3 class="center-align">
                              Back-end
                            </h3>
                          </div>
                          <div class="col s12 m12 l12 ">
                            <span class="fa-stack fa-4x center-block">
                              <i class="fa fa-circle-thin fa-stack-2x"></i>
                              <i class="fa fa-server fa-stack-1x"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <!-- back content -->
                    <div class="card medium z-depth-4">
                      <div class="card-content">
                        <span class="card-title">Back-end</span>
                        <ul>
                          <li>
                            <p>
                              PHP
                            </p>
                            <?php setIcon('star', 4); ?>
                            <?php setIcon('star_border', 1); ?>
                          </li>
                          <li>
                            <p>
                              PHP orienté objet
                            </p>
                            <?php
                              setIcon('star_border', 5);
                             ?>
                          </li>
                          <li>
                            <p>
                              SQL
                            </p>
                            <?php
                              setIcon('star', 4);
                              setIcon('star_border', 1);
                             ?>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front">
                    <!-- front content -->
                    <div class="card medium">
                      <div class="card-content">
                        <h3 class="center-align">
                          Divers
                        </h3>
                        <span class="fa-stack fa-4x center-block">
                          <i class="fa fa-circle-thin fa-stack-2x"></i>
                          <i class="fa fa-gears fa-stack-1x"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <!-- back content -->
                    <div class="card medium z-depth-4">
                      <div class="card-content">
                        <span class="card-title">Divers</span>
                        <ul>
                          <li>
                            <p>
                              Maîtrise de l'éditeur de texte Atom
                            </p>
                          </li>
                          <li>
                            <p>
                              Framework CSS: bootstrap, materialize
                            </p>
                          </li>
                          <li>
                            <p>
                              Framework PHP: silex
                            </p>
                          </li>
                          <li>
                            <p>
                              Architectures AJAX, MVC
                            </p>
                          </li>
                          <li>
                            <p>
                              Langues: Anglais (courant + professionnel), Allemand (lu)
                            </p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="divider"></div>

        <section id="work" class="scrollspy">
          <div class="row">
            <div class="col s12 center-align">
              <h2>
                Réalisations
              </h2>
              <p class="grey-text darken-1">
                Une selection de travaux effectués jusqu'ici.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s10 offset-s1 m4 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/banane.png" alt="site Banana-shop">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Banana-Shop<?= setIcon('more_vert', 1, 'right'); ?></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Banana-shop<?= setIcon('close', 1, 'right'); ?></span>
                  <p>Magasin de vente de bananes. Utilisation de flexbox, slider et onglet réalisés avec javascript.</p>
                  <p><a href="sites/banana-shop/index.html" target="_blank">Lien</a></p>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/facebook.png" alt="site facebook">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Facebook<?= setIcon('more_vert', 1, 'right'); ?></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Facebook<?= setIcon('close', 1, 'right'); ?></span>
                  <p>Reproduction de l'interface de Facebook. Utilisation de flexbox, version responsive par le biais de media query.</p>
                  <p><a href="sites/Facebook/index.html" target="_blank">Lien</a></p>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/scotland.png" alt="site Visit Scotland">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Visit Scotland<?= setIcon('more_vert', 1, 'right'); ?></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Visit Scotland<?= setIcon('close', 1, 'right'); ?></span>
                  <p>Site de réservation pour des séjours en Ecosse. Slideshow réalisé en javascript, utilisation de jQuery UI et du plugin datepicker pour la gestion des dates.</p>
                  <p><a href="sites/scotland/index.html" target="_blank">Lien</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s10 offset-s1 m4 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/cats.png" alt="site OhMyCats">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">OhMyCats<?= setIcon('more_vert', 1, 'right'); ?></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">OhMyCats<?= setIcon('close', 1, 'right'); ?></span>
                  <p>
                    Evaluation finale front-end. Utilisation de bootstrap, vérification du formulaire avec jQuery.
                  </p>
                  <p><a href="sites/Chat/index.html" target="_blank">Lien</a></p>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <!-- merci Laura pour la maquette :) -->
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/cars.png" alt="site Old Schools Cars">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Old Schools Cars<?= setIcon('more_vert', 1, 'right'); ?></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Old Schools Cars<?= setIcon('close', 1, 'right'); ?></span>
                  <p>
                    Page de sélection d'un véhicule, utilisaton de flexbox et de javascript.
                  </p>
                  <p><a href="sites/Cars/index/index.html" target="_blank">Lien</a></p>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m4 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/biovillefranche.png" alt="site OhMyCats">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Bio Villefranche<?= setIcon('more_vert', 1, 'right'); ?></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Bio Villefranche<?= setIcon('close', 1, 'right'); ?></span>
                  <p>
                    Site de vente d'une épicerie bio. Génération dynamique du contenu grâce à PHP et SQL, vérification de formulaires et partie administration du site.
                  </p>
                  <p>
                    <p><a href="sites/biovillefranche/index.php" target="_blank" class="left">Lien</a></p>
                    <a class="btn-floating fab waves-effect waves-light deep-orange lighten-1 modal-trigger right hide-on-small-only" href="#modal"><?= setIcon('add',1); ?></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- modal -->
            <div id="modal" class="modal modal-fixed-footer">
              <div class="modal-content">

                <div class="slider">
                  <ul class="slides">
                    <li>
                      <img src="img/biovillefranche.png" alt="accueil">
                      <p class="center-align">
                        Accueil
                      </p>
                    <li>
                      <img src="img/inscription.png">
                      <p class="center-align">
                        Inscription
                      </p>
                    </li>
                    <li>
                      <img src="img/produits.png">
                      <p class="center-align">
                        Produits
                      </p>
                    </li>
                    <li>
                      <img src="img/panier.png">
                      <p class="center-align">
                        Panier
                      </p>
                    </li>
                    <li>
                      <img src="img/admin.png">
                      <p class="center-align">
                        Administration
                      </p>
                    </li>
                    <li>
                      <img src="img/stat.png">
                      <p class="center-align">
                        Statistiques
                      </p>
                    </li>
                  </ul>
                </div>

              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-bluegrey-lighten-1 btn-flat ">Fermer</a>
              </div>
             </div>
          </div>

        </section>

        <div class="divider"></div>

        <section id="resume" class="scrollspy">
          <div class="row">
            <div class="col s12 center-align">
              <h2>
                CV
              </h2>
              <p class="grey-text darken-1">
                Mon parcours professionnel et ma formation.
              </p>
            </div>
          </div>
          <div class="row">
              <?php
                include 'include/timeline.php';
               ?>
            <div class="col s10 offset-s1 m4 l4">
              <div class="card">
              <div class="card-content">
                <span class="card-title center-align">Diplomes</span>
                <ul>
                  <li>
                    <p>
                      Licence de Biologie des Organismes
                    </p>
                    <p>
                      Université Claude Bernard Lyon 1
                    </p>
                  </li>
                  <li>
                    <p>
                      <abbr title="Diplome d'Etudes Universitaires Générales">DEUG</abbr> Sciences de la Vie
                    </p>
                    <p>
                      Université Claude Bernard Lyon 1
                    </p>
                  </li>
                </ul>
                  <span> Télécharger le CV version pdf: </span><a class="btn-floating fab waves-effect waves-light deep-orange lighten-1" href="docs/CV_DW.pdf" download><?= setIcon('attach_file', 1); ?></a>
              </div>
              </div>
            </div>
          </div>
        </section>

        <div class="divider"></div>

        <section id="contact" class="scrollspy">
          <div class="row">
            <div class="col s12 m12 l12 center-align">
              <h2>
                Contact
              </h2>
              <p class="grey-text darken-1">
                N'hésitez pas.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6 l6">
              <form id="contactForm">
                <div class="input-field">
                  <?= setIcon('person', 1, 'prefix'); ?>
                  <label for="name">Nom:</label>
                  <input type="text" name="name" id="nom">
                </div>
                <div class="input-field">
                  <?= setIcon('mail', 1, 'prefix'); ?>
                  <label for="mail">Email:</label>
                  <input type="email" name="mail" id="mail">
                </div>
                <div class="input-field">
                  <?= setIcon('edit', 1, 'prefix'); ?>
                  <label for="msg">Message:</label>
                  <textarea name="msg" class="materialize-textarea" id="message"></textarea>
                </div>
                <div class="row">
                  <div class="col s5 offset-s1 m5 offset-m1 l5 offset-l1">
                    <button class="btn waves-effect waves-light deep-orange lighten-1" type="submit">Envoyer
                      <?= setIcon('send', 1, 'right'); ?>
                    </button>
                  </div>
                  <div class="col s5 offset-s1 m5 offset-m1 l5 offset-l1">
                    <button class="btn waves-effect waves-light deep-orange lighten-1" type="button" id="erase">Effacer
                      <?= setIcon('clear', 1, 'right'); ?>
                    </button>
                  </div>
                </div>
              </form>
              <div id="messageAjax"></div>
            </div>
            <div class="col s12 m4 offset-m2 l4 offset-l2 ">
              <div id="phone">
                <h4>
                  Téléphone:
                </h4>
                <p>
                  Fixe: 04 78 43 74 78
                </p>
                <p>
                  Portable : 06 33 21 98 89
                </p>
              </div>
              <div id="address">
                <h4>
                  Adresse:
                </h4>
                <p>
                  11 Allée le Coteau 69380 Lozanne
                </p>
              </div>
              <div id="social">
                <h4>
                  Réseaux sociaux:
                </h4>
                <a href="https://github.com/xLuciolx" target="_blank"><i class="fa fa-github fa-3x"></i></a>
                <a href="https://stackoverflow.com/users/8404641/luciol?tab=profile" target="_blank"><i class="fa fa-stack-overflow fa-3x"></i></a>
                <a href="https://www.linkedin.com/in/loïc-gallay-7a2844148" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>
              </div>
            </div>
          </div>
        </section>
      </div>

    </main>

    <footer class="blue-grey lighten-1">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12 center-align">
            <p class="white-text">
              Luciol prod. &copy; 2017
            </p>
            <a class="modal-trigger" href="#modal2">Mentions légales</a>
            <div id="modal2" class="modal">
              <div class="modal-content">
                <?php
                  include 'include/mentions.php';
                 ?>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Javascript Materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  <!-- scripts js -->
  <script src="js/components.js" charset="utf-8"></script>
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
