<?php
  include 'include/tool.php';
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container">
    <header>
      <div class="center-align">
        <p>
          Loïc Gallay
        </p>
        <h1>
          Développeur / Intégrateur Web
        </h1>
      </div>
    </header>

    <nav class="hide-on-small-only col m12 l12 blue-grey lihghten-1">
        <!-- <ul class="table-of-contents"> -->
        <ul>
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
    </nav>

    <div class="fixed-action-btn horizontal click-to-toggle show-on-small hide-on-med-and-up" >
      <a class="btn-floating btn-large blue-grey lighten-1 waves-effect waves-light"><i class="material-icons">menu</i></a>
      <ul>
        <li><a href="#about" class="btn-floating red"><i class="material-icons">person_outline</i></a></li>
        <li><a href="#skill" class="btn-floating yellow darken-1"><i class="material-icons">school</i></a></li>
        <li><a href="#work" class="btn-floating deep-orange"><i class="material-icons">build</i></a></li>
        <li><a href="#resume" class="btn-floating green"><i class="material-icons">insert_drive_file</i></a></li>
        <li><a href="#contact" class="btn-floating blue"><i class="material-icons">mail_outline</i></a></li>
      </ul>
    </div>
    <div class="divider hide-om-med-and-up show-on-small"></div>
    <main>

      <section id="about" class="scrollspy">
        <div class="row">
          <div class="col s12 m12 l12 center-align">
            <h2>
              A propos
            </h2>
            <p>
              Quelques mots pour me décrire
            </p>
          </div>
          <div class="row">
            <div class="col s6 offset-s3 m4 l4 push-m8 push-l8">
              <img src="img/avatar.jpg" alt="avatar" class="responsive-img circle center-block" id="avatar">
            </div>
            <div class="col s12 m8 l8 pull-m4 pull-l4">
              <p>
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
            <p>
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
                      <span class="fa-stack fa-5x center-block">
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
                          <?php starIcon('star', 5); ?>
                        </li>
                        <li>
                          <p>
                            CSS
                          </p>
                          <?php
                            starIcon('star', 4);
                            starIcon('star_half', 1);
                           ?>
                        </li>
                        <li>
                          <p>
                            Javascript
                          </p>
                          <?php
                            starIcon('star', 4);
                            starIcon('star_border', 1);
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
                          <span class="fa-stack fa-5x center-block">
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
                          <?php starIcon('star', 4); ?>
                          <?php starIcon('star_border', 1); ?>
                        </li>
                        <li>
                          <p>
                            PHP orienté objet
                          </p>
                          <?php
                            starIcon('star_border', 5);
                           ?>
                        </li>
                        <li>
                          <p>
                            SQL
                          </p>
                          <?php
                            starIcon('star', 4);
                            starIcon('star_border', 1);
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
                      <span class="fa-stack fa-5x center-block">
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
                            Framework PHP: silex, W
                          </p>
                        </li>
                        <li>
                          <p>
                            Langues: Anglais (courant + professionnel), Allemand (lu)
                          </p>
                        </li>
                        <li>
                          <p>
                            Certifié 0 Opquast <i class="material-icons">sentiment_very_satisfied</i>
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
            <p>
              Une selection de travaux effectués jusqu'ici.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col s10 offset-s1 m4 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/banane.png" alt="site Banana-shop">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Banana-Shop<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Banana-shop<i class="material-icons right">close</i></span>
                <p>Magasin de vente de bananes. Utilisation de flexbox, slider et onglet réalisés avec javascript.</p>
                <p><a href="#">Lien</a></p>
              </div>
            </div>
          </div>
          <div class="col s10 offset-s1 m4 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/facebook.png" alt="site facebook">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Facebook<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Facebook<i class="material-icons right">close</i></span>
                <p>Reproduction de l'interface de Facebook. Utilisation de flexbox, version responsive par le biais de media query.</p>
                <p><a href="#">Lien</a></p>
              </div>
            </div>
          </div>
          <div class="col s10 offset-s1 m4 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/scotland.png" alt="site Visit Scotland">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Visit Scotland<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Visit Scotland<i class="material-icons right">close</i></span>
                <p>Site de réservation pour des séjours en Ecosse. Slideshow réalisé en javascript, utilisation de jQuery UI et du plugin datepicker pour la gestion des dates.</p>
                <p><a href="#">Lien</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s10 offset-s1 m4 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/cats.png" alt="site OhMyCats">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">OhMyCats<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">OhMyCats<i class="material-icons right">close</i></span>
                <p>
                  Evaluation finale front-end. Utilisation de bootstrap, vérification du formulaire avec jQuery.
                </p>
                <p><a href="#">Lien</a></p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <div class="divider"></div>

      <section id="resume" class="scrollspy">
        CV express
      </section>

      <div class="divider"></div>

      <section id="contact" class="scrollspy">
        Contact
      </section>

    </main>

    <footer>
    </footer>
  </div>






  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Javascript Materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
