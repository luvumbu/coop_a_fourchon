<?php 
include("path.php") ; 
$t = time(date_default_timezone_set('Europe/Paris')) ; 



$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 
$liste_projet_name = $_POST["liste_projet_name"] ; 
 
 

$liste_projet_user_name = $_SESSION["liste_projet_user_name"] ; 
$liste_projet_user_prenom = $_SESSION["liste_projet_user_prenom"] ; 

$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
        
   
    $apple->set_msg_valudation("inserttion ok ") ;  
    $apple->set_sql("INSERT INTO `liste_projet` (`liste_projet_id_sha1`,`liste_projet_name`,`liste_projet_description3`,`information_user_id_sha1`,`liste_projet_user_name`,`liste_projet_user_prenom`)
            
    VALUES ('$t','$liste_projet_name','$array_setting[0]','$information_user_id_sha1','$liste_projet_user_name','$liste_projet_user_prenom')") ; 
    $apple->execution() ;

 
 

 
 

 
?>
 