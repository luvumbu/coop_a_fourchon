<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 


$selection =  $_POST["selection"] ; 
$value = $_POST["value"] ; 


 
 

echo $value ; 

 
 
 
 
 

$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_type` = "'.$selection.'" WHERE  `liste_projet_id_sha1` = "'.$value.'"') ; 
      $apple->execution() ;
 

 

 


?>