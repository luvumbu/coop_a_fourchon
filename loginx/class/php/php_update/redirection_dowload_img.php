<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *"); 
 $_SESSION["redirection_dowload_img"] = $_POST["redirection_dowload_img"] ;  
 echo  $_SESSION["redirection_dowload_img"]  ; 
 
 ?>

 