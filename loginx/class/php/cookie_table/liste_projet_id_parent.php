<?php 
session_start() ;  
 $_SESSION["liste_projet_id_parent"]  = $_POST["liste_projet_id_parent"]; 

 echo  $_SESSION["liste_projet_id_parent"]  ; 
?>