<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 


 


$liste_projet_text_margin_1_11_= $_POST["liste_projet_text_margin_1_11_"] ; 
// Total 
$liste_projet_text_margin_1_1_= $_POST["liste_projet_text_margin_1_1_"] ; 
// margin Top
$liste_projet_text_margin_1_2_= $_POST["liste_projet_text_margin_1_2_"] ; 
// margin left
$liste_projet_text_margin_1_3_= $_POST["liste_projet_text_margin_1_3_"] ; 
// margin right
$liste_projet_text_margin_1_4_= $_POST["liste_projet_text_margin_1_4_"] ; 
// margin bottom


 
 $liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 
 
 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  

 
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_text_margin_all_1` = "'.$liste_projet_text_margin_1_11_.'", `liste_projet_text_margin_top_1` = "'.$liste_projet_text_margin_1_1_.'", `liste_projet_text_margin_left_1` = "'.$liste_projet_text_margin_1_2_.'", `liste_projet_text_margin_right_1` = "'.$liste_projet_text_margin_1_3_.'", `liste_projet_text_margin_bottom_1` = "'.$liste_projet_text_margin_1_4_.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
      $apple->execution() ;
 
 




?>