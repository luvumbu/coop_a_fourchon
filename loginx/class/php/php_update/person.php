<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
$information_user_name =  $_POST["information_user_name"] ; 
$information_user_prenom =  $_POST["information_user_prenom"] ; 
$information_user_adresse =  $_POST["information_user_adresse"] ; 
$information_user_code_postale =  $_POST["information_user_code_postale"] ; 
$information_user_adresse_mail =  $_POST["information_user_adresse_mail"] ; 
$information_user_tel =  $_POST["information_user_tel"] ; 
 
$information_user_id_sha1  = $_SESSION["information_user_id_sha1"]; 
echo $information_user_id_sha1 ; 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `information_user` SET `information_user_name` = "'.$information_user_name.'", `information_user_prenom`="'.$information_user_prenom.'" , `information_user_adresse`="'.$information_user_adresse.'",`information_user_code_postale`="'.$information_user_code_postale.'", `information_user_adresse_mail`="'.$information_user_adresse_mail.'",`information_user_tel`="'.$information_user_tel.'"   WHERE  `information_user_id_sha1` = "'.$information_user_id_sha1.'"') ; 
      $apple->execution() ;
?>