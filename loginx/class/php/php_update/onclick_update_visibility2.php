<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 


$onclick_update_visibility =  $_POST["onclick_update_visibility"] ; 
$liste_projet_visibilite2 = $_POST["liste_projet_visibilite2"] ; 
 
 



 
 
 
 
 

$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_visibilite2` = "'.$liste_projet_visibilite2.'" WHERE  `liste_projet_id_sha1` = "'.$onclick_update_visibility.'"') ; 
      $apple->execution() ;

 



?>