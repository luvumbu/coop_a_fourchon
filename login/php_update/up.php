<?php 
include("path.php") ; 
 

/*
$array_setting[1] 
est sittuer dans path 
*/

$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 



$liste_projet_user_name = $_POST["liste_projet_user_name"] ; 
$liste_projet_user_prenom = $_POST["liste_projet_user_prenom"] ; 
 
echo $information_user_id_sha1 ; 
$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
    $apple->set_msg_valudation("") ;  
    $apple->set_sql('UPDATE `information_user` SET `information_user_name` = "'.$liste_projet_user_name.'"   WHERE  `information_user_id_sha1` = "'.$information_user_id_sha1.'"') ; 
    $apple->execution() ;

 

 
 
    $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
        $apple->set_msg_valudation("") ;  
        $apple->set_sql('UPDATE `information_user` SET `information_user_prenom` = "'.$liste_projet_user_prenom.'"   WHERE  `information_user_id_sha1` = "'.$information_user_id_sha1.'"') ; 
        $apple->execution() ;
 
?>
 