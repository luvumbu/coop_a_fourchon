<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php" ; 
require_once "../Class/DatabaseHandler.php" ;
require_once "../Class/AsciiConverter.php" ;


 

$general_function =  $_POST["general_function"] ; // const
$id_sha1_projet_time = time().rand(10,99) ; 
  $id_user_projet = $_POST["id_user_projet"] ; //3
  $id_sha1_user_projet = $_POST["id_sha1_user_projet"] ; // 4
  $id_sha1_projet = $_POST["id_sha1_projet"] ; 


$_SESSION["id_user_projet"]  = $_POST["id_user_projet"] ; //3
$_SESSION["id_sha1_user_projet"] = $_POST["id_sha1_user_projet"] ; // 4
 
$_SESSION["id_sha1_projet"] = $id_sha1_projet ;
 
$value = $_POST["value"] ; 



  
$tagName = $_POST["tagName"] ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$_SESSION["home"] ="" ;   

echo $general_function ; 
 
switch ($general_function) {
    case "insert":

        $databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_user_projet,id_user_projet,id_sha1_projet) VALUES ('$id_sha1_user_projet','$id_user_projet','$id_sha1_projet_time')") ;
        $_SESSION["home"] = "insert" ;
    
        break;
    case "update":
 

 $value = AsciiConverter::stringToAscii($value); // Affiche "72,101,108,108,111"

      $databaseHandler->action_sql('UPDATE  `projet` SET `description_projet` = "'.$value.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
/*
 if($tagName=="INPUT") {
   $databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "'.$value.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');

 }
 else {
 
   $databaseHandler->action_sql('UPDATE  `projet` SET `description_projet` = "'.$value.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');

 }

 */

      break;
    case "all":
      $_SESSION["home"] = "all" ;
      break;
      case "remove": 
       $databaseHandler->action_sql("DELETE FROM  `projet` WHERE   `id_sha1_projet` = '$id_sha1_projet'") ;

        break;
        case "img": 
         $_SESSION["img"] = time() ;


     
// Chemin du dossier à créer
$cheminDossier = '../src/img/'.$id_sha1_user_projet;
$_SESSION["cheminDossier"] = $cheminDossier ;
    // Vérification si le dossier existe
    if (!is_dir($cheminDossier)) {
        // Création du dossier avec des permissions 0755
        if (mkdir($cheminDossier, 0755, true)) {
          //  echo "Dossier '$cheminDossier' créé avec succès.";
        } else {
            echo "Erreur : impossible de créer le dossier '$cheminDossier'.";
        }
    } else {
      //  echo "Le dossier '$cheminDossier' existe déjà.";
    }
    




 
           break;




        
    default:
      //code block
  }



?>