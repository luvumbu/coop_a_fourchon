<?php 
session_start();

?>
<style>
  .text_center {
    text-align: center;

    width: 100%;
  }

  .selection_menu_4 {
    width: 80%;
    margin: auto;
  }

  .margin_top_100 {
    margin-top: 100px;
  }
</style>
<?php

 $information_user_id_sha1 = $_SESSION["information_user_id_sha1"];
 $liste_projet_user_name = $_SESSION["liste_projet_user_name"];
 $liste_projet_user_prenom = $_SESSION["liste_projet_user_prenom"];

?>
<div class="selection_menu_4 margin_top_100">
  <div class="mb-3">
    <label class="form-label">Entrer votre nom</label>
    <input type="text" class="form-control" id="liste_projet_user_name" placeholder="<?php echo $liste_projet_user_name?>" value="<?php echo $liste_projet_user_name?>">

  </div>
  <div class="mb-3">
    <label class="form-label">Entrer votre prenom</label>
    <input type="text" class="form-control" id="liste_projet_user_prenom" placeholder="<?php echo $liste_projet_user_prenom?>" value="<?php echo $liste_projet_user_prenom?>">
  </div>

  <!--
  <div class="mb-3">
    <label class="form-label">Entrer votre numero d'appartement</label>
    <input type="number" class="form-control" placeholder="Entrer votre numero d'appartement" max="17" min="1">
  </div>
-->

  <div type="submit" title="<?php echo $information_user_id_sha1 ;?>" class="btn btn-primary" onclick="selection_menu_4(this)">Valider</valider>
</div>

