<?php

session_start();
header("Access-Control-Allow-Origin: *");

require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php'; 
$id_sha1_parent_projet = $_POST["texteFormatte_3"] ; 
 


$operation_general_nom = $_POST["operation_general_nom"] ;  
$databaseHandler = new DatabaseHandler($dbname, $username);
$index = $_SESSION["index"][2] ; 

$time = time() ; 


switch ($operation_general_nom) {
    case "remove":
        $databaseHandler->action_sql("DELETE FROM  `projet` WHERE   `id_sha1_projet` = '$texteFormatte_3'") ;

      break;
    case "add":
        $databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_sha1_parent_projet,id_user_projet) VALUES ('$time','$id_sha1_parent_projet','$index')") ;

      break;
    case "":
      
      break;
    default:
      
  }



?>