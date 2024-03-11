<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
 
      $t = time(date_default_timezone_set('Europe/Paris')) ; 
      $tiempo = date("Y-m-d",$t);


   $SERVER_NAME =   $_SERVER['SERVER_NAME'];
 $liste_projet_id_parent = "123456"; 
 $liste_projet_id_parent = $_POST["liste_projet_id_parent"] ; 

  $information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 



        $apple = new Insertion_Bdd(
          $servername,
          $username,
          $password,
          $dbname
          
          );
              
         
          $apple->set_msg_valudation("inserttion ok ") ;  
          $apple->set_sql("INSERT INTO liste_projet (liste_projet_id_sha1,liste_projet_id_parent,liste_projet_ip,information_user_id_sha1)
                  
          VALUES ('$t','$liste_projet_id_parent','$SERVER_NAME','$information_user_id_sha1')") ; 
          $apple->execution() ;
        
?>