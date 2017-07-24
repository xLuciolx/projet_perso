<?php
  /************************************
   * Fonction affichant icone étoile *
   ************************************/

  function starIcon($icon, $nb){
    for ($i=0; $i < $nb ; $i++) {
      echo '<i class="material-icons">' . $icon . '</i>';
    }
  }
 ?>
