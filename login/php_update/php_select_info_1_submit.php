<?php 
include("path.php") ; 
 

echo "test ok 01" ; 


$liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 
$liste_projet_name = $_POST["liste_projet_name"] ; 
$liste_projet_name_tittle = $_POST["liste_projet_name_tittle"] ; 
$liste_projet_date = $_POST["liste_projet_date"] ; 
$liste_projet_date_1 = $_POST["liste_projet_date_1"] ; 
$liste_projet_date_2 = $_POST["liste_projet_date_2"] ;  






$liste_projet_date_ = $_POST["liste_projet_date"]." ".$liste_projet_date_1.":".$liste_projet_date_2 ; 

echo $liste_projet_id_sha1 ; 


 
$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
    $apple->set_msg_valudation("") ;  
    $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_name` = "'.$liste_projet_name.'",`liste_projet_name_tittle` = "'.$liste_projet_name_tittle.'",`liste_projet_date` = "'.$liste_projet_date_.'"   WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
    $apple->execution() ;
 







?>