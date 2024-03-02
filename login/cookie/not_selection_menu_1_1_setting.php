<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
unset($_SESSION["selection_menu_1_1_setting"]);
 

function give_url(){

    // url == $_SERVER['PHP_SELF'] ; 
    $reverse_el =strrev($_SERVER['PHP_SELF'])  ; 
    $val_final ="" ; 
     for($a = 0 ; $a<strlen($_SERVER['PHP_SELF']) ; $a ++){
       
     
        if($reverse_el[$a]=="/"){
            break ; 
        } 
        else {
            $val_final = $val_final.$reverse_el[$a] ; 
        }
     }
    
     $val_final =strrev($val_final)  ; 
     return  $val_final ; 
}
/*

echo give_url() ; 

*/



?>





<div id="url_page"><?php echo give_url();?></div>


<script>
 var url_page =   document.getElementById("url_page").innerHTML ;  

   window.location.replace("index.php");
</script>