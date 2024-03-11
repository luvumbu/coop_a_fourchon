<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 


$liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 

echo $liste_projet_id_sha1  ; 
 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  

 
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_name_font_size` = "" ,`liste_projet_description1_font_size`="",`liste_projet_color_1`="",`liste_projet_color_2`="",`liste_projet_background_color`="" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
      $apple->execution() ;
?>