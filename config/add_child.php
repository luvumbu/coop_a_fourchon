<?php 

session_start();
header("Access-Control-Allow-Origin: *");

require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';
 
$index = $_SESSION["index"][2] ; 
 
$id_sha1_parent_projet = time() ; 
$texteFormatte = $_POST["texteFormatte_3"] ;
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_sha1_parent_projet,id_user_projet) VALUES ('$texteFormatte','$id_sha1_parent_projet','$index')") ;



?>