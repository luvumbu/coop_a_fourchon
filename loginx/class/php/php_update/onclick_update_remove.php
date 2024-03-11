<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
$onclick_update_visibility =  $_POST["onclick_update_visibility"] ; 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('DELETE FROM  `liste_projet` WHERE  `liste_projet_id_sha1` = "'.$onclick_update_visibility.'"') ; 
      $apple->execution() ;

      $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            $apple->set_msg_valudation("up ok") ;  
            $apple->set_sql('DELETE FROM  `liste_projet` WHERE  `liste_projet_id_parent` = "'.$onclick_update_visibility.'"') ; 
            $apple->execution() ;
      
?>