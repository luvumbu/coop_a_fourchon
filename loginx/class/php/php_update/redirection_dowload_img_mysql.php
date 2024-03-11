<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 


$onclick_update_visibility =  "1699822531400" ; 
$liste_projet_visibilite1 = "1699822531400" ; 


 
 

//echo $onclick_update_visibility ; 

 
 
$redirection_dowload_img =$_SESSION["redirection_dowload_img"]  ; 

$name = $_SESSION["name2"]  ; 

$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation($redirection_dowload_img." : ok ") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_img` = "'.$name.'" WHERE  `liste_projet_id_sha1` = "'.$redirection_dowload_img.'"') ; 
      $apple->execution() ;
 

 




?>