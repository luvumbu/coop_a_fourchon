<?php 

session_start();
header("Access-Control-Allow-Origin: *");

 

echo $_POST["sel1"] ; 
$_SESSION["sel1"] = $_POST["sel1"] ; 
?>