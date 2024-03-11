<?php 
include("path.php") ; 
 




$liste_projet_id_sha1 =  $_POST["liste_projet_id_sha1"] ; 
 
 
$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
    $apple->set_msg_valudation("") ;  
    $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_name_tittle` = "REMOVE"   WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
    $apple->execution() ;
 






?>