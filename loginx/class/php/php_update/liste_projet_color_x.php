<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 


$liste_projet_color_x =  $_POST["liste_projet_color_x"] ; 
$liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 


$name = $_POST["name"] ; 



 
 

 
echo $liste_projet_color_x ; 
 
 
 

 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
     
if($name=="liste_projet_color_1"){
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_color_1` = "'.$liste_projet_color_x.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
}
else{
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_color_2` = "'.$liste_projet_color_x.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
}
      $apple->execution() ;
 

 

 


?>