<?php 
include("path.php") ; 
$t = time(date_default_timezone_set('Europe/Paris')) ; 

/*
$array_setting[1] 
est sittuer dans path 
*/

$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 

$selection_menu_1_3_info_1 = $_POST["selection_menu_1_3_info_1"] ; 
$selection_menu_1_3_info_2 = $_POST["selection_menu_1_3_info_2"] ; 
$selection_menu_1_3_info_3 = $_POST["selection_menu_1_3_info_3"] ; 
$selection_menu_1_3_info_4 = $_POST["selection_menu_1_3_info_4"] ; 
$selection_menu_1_3_info_select = $_POST["selection_menu_1_3_info_select"] ; 
 

$selection_menu_1_3_info_2 = $selection_menu_1_3_info_2. " " .$selection_menu_1_3_info_3.":".$selection_menu_1_3_info_4;

$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
        
   
    $apple->set_msg_valudation("inserttion ok ") ;  
    $apple->set_sql("INSERT INTO `liste_projet` (`liste_projet_id_sha1`,`information_user_id_sha1`,`liste_projet_name`,`liste_projet_date`,`liste_projet_name_tittle`,`liste_projet_description3`)
            
    VALUES ('$t','$information_user_id_sha1','$selection_menu_1_3_info_1','$selection_menu_1_3_info_2','$selection_menu_1_3_info_select','$array_setting[1]')") ; 
    $apple->execution() ;

 
 

 
 

 
?>
 