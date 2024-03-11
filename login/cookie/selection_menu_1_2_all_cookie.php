<?php 

session_start();
header("Access-Control-Allow-Origin: *"); 
$_SESSION["selection_menu_1_2_all_cookie"] = $_POST["selection_menu_1_2_all_cookie"] ; 
echo $_SESSION["selection_menu_1_2_all_cookie"] ; 
?>