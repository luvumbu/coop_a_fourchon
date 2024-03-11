<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 


$liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 

echo $liste_projet_id_sha1  ; 

$_this_value = $_POST["_this_value"] ;
 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok".$liste_projet_id_sha1) ;  

      
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_css_1` = "'.$_this_value.'"  WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
      $apple->execution() ;
?>