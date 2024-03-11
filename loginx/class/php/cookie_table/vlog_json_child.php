<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 
 
 
 $_SESSION["liste_projet_id_parent"] = $_POST["liste_projet_id_parent"] ; 

 
?>