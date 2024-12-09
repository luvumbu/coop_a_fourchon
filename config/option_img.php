<?php

session_start();
header("Access-Control-Allow-Origin: *");

$index =  $_SESSION["index"][2];

require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";


require_once "../Class/delete_file.php";
require_once "../Class/checkFileExists.php";





$projet =  $_POST["projet"];
$id_sha1_projet = $_POST["id_sha1_projet"];
$img_projet_src =  $_POST["img_projet_src"];




$option_img =  $_POST["option_img"];
$nom_dossier = $_POST["nom_dossier"] ; 


 
$databaseHandler = new DatabaseHandler($dbname, $username);


switch ($option_img) {
  case ' remove_img':
    $databaseHandler->action_sql("DELETE FROM  `$projet` WHERE   `img_projet_src` = '$img_projet_src'");
    // Example usage
    $path =  $id_sha1_projet;
    if (checkFileExists($path)) {
      delete_file($path);
    } else {
    }


    break;
  case " select_img ":
  
    $id_sha1_projet = str_replace("../","",$id_sha1_projet);
    $databaseHandler->action_sql('UPDATE  `projet` SET `img_projet_src` = "'.$id_sha1_projet.'" WHERE `id_sha1_projet` = "'.$nom_dossier.'"') ;


    break;
  case "":
    //code block
    break;
  default:
  
    echo "!!!".$option_img ; 
}
