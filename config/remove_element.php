<?php

session_start();
header("Access-Control-Allow-Origin: *");

require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';
 
 
$texteFormatte_3 = $_POST["texteFormatte_3"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("DELETE FROM  `projet` WHERE   `id_sha1_projet` = '$texteFormatte_3'") ;

?>