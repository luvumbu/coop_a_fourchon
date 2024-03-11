<?php

session_start()  ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$name =$_POST["name"] ;
 





$_SESSION["name"] =  $name ; 
include("add_bdd.php"); 
 



?>