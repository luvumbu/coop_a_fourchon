<?php

session_start()  ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost"; 
$_SESSION["name2"] =  $_POST["name"]; 

 

$_SESSION["name"] = time() ; 

?>