<?php

/************************************************************
 * Fonction affichant une icone                             *
 * @param  [string] $icon [nom de l'icone, e.g :'star']     *
 * @param  [integer] $nb   [nombre d'icone à afficher]      *
 * @param  [string] $option [option, e.g: 'right']          *
 * @return [html code]      [code html affichant une icone] *
 ************************************************************/


  function setIcon($icon, $nb, $option=null){
    if (is_null($option)) {
      for ($i=0; $i < $nb ; $i++) {
        echo '<i class="material-icons">' . $icon . '</i>';
      }
    }
    else {
      for ($i=0; $i < $nb ; $i++) {
        echo '<i class="material-icons ' . $option . '">' . $icon . '</i>';
      }
    }
  }


  /*********************************************************
   * Creation d'une carte à partir d'un tableau de données *
   * @param  array  $data [tableau]                        *
   * @return [html code]       [carte materialize]         *
   *********************************************************/


  function createCard(array $data){
    ?>
    <div class="card hoverable">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="<?= $data['src']; ?>" alt="<?= $data['alt']; ?>">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4"><?php echo $data['title']; echo setIcon('more_vert', 1, 'right'); ?></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><?php echo $data['title']; echo setIcon('close', 1, 'right'); ?></span>
        <p><?= $data['description']; ?></p>
        <p><a href="<?= $data['href']; ?>" target="_blank">Lien</a></p>
      </div>
    </div>
  <?php
  }
 ?>
