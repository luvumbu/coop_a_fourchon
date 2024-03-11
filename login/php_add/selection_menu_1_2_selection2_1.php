<?php 
include("path.php") ; 
$t = time(date_default_timezone_set('Europe/Paris')) ; 
$liste_projet_id_parent = $_POST["liste_projet_id_parent"] ; 
$selection_menu_1_2_selection2_add = $_POST["selection_menu_1_2_selection2_add"] ; 
 
$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
        
   
    $apple->set_msg_valudation("inserttion ok ") ;  
    $apple->set_sql("INSERT INTO `liste_projet` (`liste_projet_id_sha1`,`liste_projet_id_parent`,`liste_projet_name`)
            
    VALUES ('$t','$liste_projet_id_parent','$selection_menu_1_2_selection2_add')") ; 
    $apple->execution() ;

 
 

 
 

 
?>
 