<?php 
$width = 40;
$verification_id =false ; 
include("../../model/class/php/Insertion_Bdd.php") ;  
include("../../model/class/php/Select_datas.php") ;  
include("../../model/class/php/connexion.php") ;  
include("../../model/class/php/Get_anne.php") ;    
include("pages_json_1.php") ; 
 
$replace_el = str_replace("blog","blog1", $_SERVER['PHP_SELF']);
?>
 


<style>
   /* #body,.class_qr_code{
        display: none;
    }
    */
</style>