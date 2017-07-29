<?php

/************************************************************
 * Fonction affichant un icone                              *
 * @param  [string] $icon [nom de l'icon, e.g :'star']      *
 * @param  [integer] $nb   [nombre d'icone à afficher]      *
 * @return [html code]       [code html affichant un icone] *
 ************************************************************/


  function setIcon($icon, $nb){
    for ($i=0; $i < $nb ; $i++) {
      echo '<i class="material-icons">' . $icon . '</i>';
    }
  }
 ?>
