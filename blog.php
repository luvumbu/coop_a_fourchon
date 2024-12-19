<!DOCTYPE html>
<html lang="en">


<title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

<?php
  $grande_image__ = "https://i.pinimg.com/236x/46/51/27/465127dc4dad2655628bd36e0e3c088a.jpg" ; 

require_once "Class/Give_url.php" ; 
require_once "Class/DatabaseHandler.php" ; 
require_once "Class/dbCheck.php" ; 
require_once 'Class/AsciiConverter.php';


 
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel

// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('_');
 





$id_sha1_projet = $url->get_basename() ; 

$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM projet WHERE id_sha1_projet ='$id_sha1_projet'   ";
 
  


$databaseHandler->getListOfTables_Child("projet");
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();






$id_projet_dynamic_1 = $dynamicVariables['id_projet'];
$activation_projet_dynamic_1 = $dynamicVariables['activation_projet'];
$id_general_dynamic_1 = $dynamicVariables['id_general'];
$id_user_projet_dynamic_1 = $dynamicVariables['id_user_projet'];
$id_sha1_user_projet_dynamic_1 = $dynamicVariables['id_sha1_user_projet'];
$id_sha1_projet_dynamic_1 = $dynamicVariables['id_sha1_projet'];
$id_sha1_parent_projet_dynamic_1 = $dynamicVariables['id_sha1_parent_projet'];
$id_sha1_parent_projet2_dynamic_1 = $dynamicVariables['id_sha1_parent_projet2'];
$cryptage_projet_dynamic_1 = $dynamicVariables['cryptage_projet'];
$input_cryptage_projet_dynamic_1 = $dynamicVariables['input_cryptage_projet'];
$name_projet_dynamic_1 = $dynamicVariables['name_projet'];
$name_extention_projet_dynamic_1 = $dynamicVariables['name_extention_projet'];
$statue_projet_dynamic_1 = $dynamicVariables['statue_projet'];
$title_projet_dynamic_1 = $dynamicVariables['title_projet'];
$description_projet_dynamic_1 = $dynamicVariables['description_projet'];
$password_projet_dynamic_1 = $dynamicVariables['password_projet'];
$visibility_1_projet_dynamic_1 = $dynamicVariables['visibility_1_projet'];
$visibility_2_projet_dynamic_1 = $dynamicVariables['visibility_2_projet'];
$screen_shoot_projet_dynamic_1 = $dynamicVariables['screen_shoot_projet'];
$img_projet_src1_dynamic_1 = $dynamicVariables['img_projet_src1'];
$img_projet_src2_dynamic_1 = $dynamicVariables['img_projet_src2'];
$img_projet_visibility_dynamic_1 = $dynamicVariables['img_projet_visibility'];
$group_projet_dynamic_1 = $dynamicVariables['group_projet'];
$heure_debut_projet_dynamic_1 = $dynamicVariables['heure_debut_projet'];
$date_debut_projet_dynamic_1 = $dynamicVariables['date_debut_projet'];
$dure_projet_dynamic_1 = $dynamicVariables['dure_projet'];
$publication_date_j_projet_dynamic_1 = $dynamicVariables['publication_date_j_projet'];
$publication_date_h_projet_dynamic_1 = $dynamicVariables['publication_date_h_projet'];
$shop_projet_dynamic_1 = $dynamicVariables['shop_projet'];
$date_inscription_projet_dynamic_1 = $dynamicVariables['date_inscription_projet'];

$count = count($id_sha1_projet_dynamic_1 );


 

$count = count($date_inscription_projet_dynamic_1) ; 

if  ($count <1){
   ?>
<div class="image_">
   <img src="../src/img/01.webp" alt=""> 
</div>


<style>
    body{
        margin: 0;

    }
    .image_{
        width: 100%;
        margin: auto;
    }
    .image_ img {
        width: 100%;
    }
</style>
   <?php 
} 
else {
   require_once "view/blog_articles.php" ; 
}
 
?>
</body>
</html>