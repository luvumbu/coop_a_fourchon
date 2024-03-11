<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 



echo $_POST["input_"] ; 

echo $_POST["textarea_"];


$_this_name = $_POST["_this_name"] ; 
$input_ = $_POST["input_"] ; 
$textarea_ = $_POST["textarea_"] ; 



$liste_projet_id_sha1 = $_POST["liste_projet_id_sha1"] ; 

$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  

if($_this_name==1){
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_name_font_size` = "'.$input_.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 


 }
 else {
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_description1_font_size` = "'.$textarea_.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 

 }
 


 
 

 
 
 
 

 


      $apple->execution() ;
 
 
 




?>