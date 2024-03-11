<?php
session_start();
//echo $_SESSION["name"] ; 
if (!isset($_SESSION["welcom_index"])) {
  ?>

  <meta http-equiv="Refresh" content="0; url='blog/index.php'" />
  <?php
} else {

  ?>
  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="src/img/all/favicon.jpg">
  </head>

  <body id="my_body">
    <script src="class/js/js_upload/change_title.js"></script>
    <div id="information_user_info"></div>
    <!-- 
  <body id="my_body"  onmouseover="info_cookie_save(event)"  title="my_body">
-->
    <div id="ip_info_cookie_cool_cook" title="<?php echo $_SERVER["REMOTE_ADDR"]; ?>"></div>
    <div id="info"></div>

    <?php

    if (!isset($_SESSION["information_user_id_sha1"])) {
      include("pages_off/acceuil1.html");

      // si lutilisateur n'est pas connexion
      ?>
      <script>
        document.title = change_title();
        document.getElementById("titre_page1").innerHTML = change_title();
        document.getElementById("titre_page2").innerHTML = change_title();
      </script>
      <?php
    } else {

      include("link_page/link_on.html");
      include("pages_on/login.php");
      //include("index_imgs.php");
//   Ajax("header_action","header/header_action/header_action_1.html");
      ?>
      <script src="class/js/js_on/session_destroy.js"></script>
      <?php
    }
    ?>
    <!--
<script src="class/js/js_off/select_info1.js"></script> 
<script src="class/js/js_off/select_info2.js"></script>
-->
    <script src="class/js/js_off/Information.js"></script>
    <!-- 
toutes les focti
-->
    <script src="class/js/js_off/login_user.js"></script>
    <script src="class/js/js_off/login_user.js"></script>
    <script src="class/js/js_add/dowload_img.js"></script>
    <script src="class/js/js_add/dowload_img2.js"></script>
    <script src="class/js/js_add/dowload_img3.js"></script>
    <!-- -->
    <script src="class/js/js_array_info/add_group_affiche_form.js"></script>
    <script src="class/js/js_array_info/voir_group.js"></script>
    <script src="class/js/js_remove/option_remove.js"></script>
    <script src="class/js/js_on/option_redirection.js"></script>
    <script src="class/js/js_array_info/voir_liste_projet.js"></script>
    <script src="class/js/js_array_info/link.js"></script>
    <script src="class/js/js_upload/update_liste_projet_visibilite1.js"></script>
    <!--
    // document.cookie = "username=John Doe";
  -->
    <link rel="stylesheet" href="src/css/index.css">
    <div id="el"></div>
    <?php
    if (isset($_SESSION["information_user_id"])) {
    }
    include("class/php/php_off/verif.php");
}
?>
  </div>

</body>
<link rel="stylesheet" href="css.css">

</html>