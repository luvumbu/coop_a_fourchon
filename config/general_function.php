<?php 
session_start() ; 

header("Access-Control-Allow-Origin: *");
 

require_once "../Class/dbCheck.php" ; 
require_once "../Class/DatabaseHandler.php" ; 



 

$general_function =  $_POST["general_function"] ; // const
$id_sha1_projet_time = time().rand(10,99) ; 
$id_user_projet = $_POST["id_user_projet"] ; //3
$id_sha1_user_projet = $_POST["id_sha1_user_projet"] ; // 4
$id_sha1_projet = $_POST["id_sha1_projet"] ; 

$value = $_POST["value"] ; 

$tagName = $_POST["tagName"] ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
  
switch ($general_function) {
    case "insert":

        $databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_user_projet,id_user_projet,id_sha1_projet) VALUES ('$id_sha1_user_projet','$id_user_projet','$id_sha1_projet_time')") ;
        $_SESSION["home"] = "insert" ;
    
        break;
    case "update":

  $_SESSION["home"] = "update" ;
  $_SESSION["id_sha1_projet"] = $id_sha1_projet ;
  
 if($tagName=="INPUT") {
   $databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "'.$value.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');

 }
 else {
 
   $databaseHandler->action_sql('UPDATE  `projet` SET `description_projet` = "'.$value.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');

 }

      break;
    case "all":
      $_SESSION["home"] = "all" ;
      break;
      case "remove": 
       $databaseHandler->action_sql("DELETE FROM  `projet` WHERE   `id_sha1_projet` = '$id_sha1_projet'") ;

        break;
    default:
      //code block
  }



?>