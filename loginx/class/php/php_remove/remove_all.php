<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 
//methode a changer totalement

include("link.php") ; 
 
 
 


 
 



$liste_projet_id_sha1  = "1699695761383" ; 

 $liste_projet_id_sha1  = $_POST["liste_projet_id_sha1"] ; 


      $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            $apple->set_msg_valudation("remove ok ") ;  
            $apple->set_sql('DELETE FROM  `liste_projet` WHERE `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
            $apple->execution() ;
 
 
?>