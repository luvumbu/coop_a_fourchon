<?php 

session_start();
header("Access-Control-Allow-Origin: *"); 
$_SESSION["selection_menu_1_1_setting"] = $_POST["selection_menu_1_1_setting"] ; 



echo $_SESSION["selection_menu_1_1_setting"] ; 
?>