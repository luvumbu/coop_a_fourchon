<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php"; 
$nom_user =             $_POST["nom_user"] ; 
$password_user =        $_POST["password_user"] ; 
$id_user_projet =       $_POST["id_user_projet"] ; 
$id_sha1_user_projet = $_SESSION["index"][3] ; 
$general_function =     $_POST["general_function"] ; 
$tagName =              $_POST["tagName"] ; 
$id_sha1_projet =      time();  
 $id_sha1_parent_projet = $id_sha1_projet ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("INSERT INTO `projet` (id_user_projet,id_sha1_user_projet,id_sha1_projet,id_sha1_parent_projet) VALUES ('$id_user_projet','$id_sha1_user_projet','$id_sha1_projet','$id_sha1_parent_projet')");
 
?>