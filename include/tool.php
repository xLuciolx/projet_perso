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
 ?>
