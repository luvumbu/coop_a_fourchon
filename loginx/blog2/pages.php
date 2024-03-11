<?php
session_start() ; 
include("../class/php/php_select_data/give_url.php") ; 
include("pages_json.php") ; 
include("pages_css.php") ;   



if(count($apple->list_row)!=0){

include("add_log.php") ; 
 


 

$src = "../../src/img/all/qr_code/".give_url().".png" ; 
?>
 <img src="<?php echo $src ; ?>" alt="" srcset="">

<?php 
}


?>
 
 

 

 

