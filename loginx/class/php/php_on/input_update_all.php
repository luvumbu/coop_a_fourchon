<?php 
 
session_start() ; 
header("Access-Control-Allow-Origin: *");

$liste_projet_id_sha1_ =  $_POST["liste_projet_id_sha1"] ; 
$liste_projet_name_ =  $_POST["liste_projet_name"] ; 

$liste_projet_description1 =  $_POST["liste_projet_description1"] ; 
 
 
 
include("link.php") ; 
 
 
 
      
      $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("inserttion ok ") ; 
        $apple->set_sql('UPDATE   `liste_projet` SET `liste_projet_name` = "'.$liste_projet_name_.'" WHERE `liste_projet_id_sha1` = "'.$liste_projet_id_sha1_.'"') ; 

  
        $apple->execution() ;










        $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
                
           
            $apple->set_msg_valudation("inserttion ok ") ; 
            $apple->set_sql('UPDATE   `liste_projet` SET `liste_projet_description1` = "'.$liste_projet_description1.'" WHERE `liste_projet_id_sha1` = "'.$liste_projet_id_sha1_.'"') ; 
    
      
            $apple->execution() ;

 
 
 
 

 
?> 