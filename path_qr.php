<?php 
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
 
$stc= "/login/blogx/pages.php/".give_url() ; 
$x = give_url() ; 
 header("Location: $stc"); 
 echo $_SERVER['SERVER_NAME'] ;   
?>