<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");

$time =  $_POST["time"] ; 



$_SERVER['time'] = $time ; 






 


$_SERVER['test'] =  $time  ; 


echo $_SERVER['test']  ; 
include("link.php") ; 
 
  //$_SESSION["information_user_info"] = 200;
 

 /*

   $_SESSION["information_user_id"]= $apple->list_row[$n_plus] ;
  $n_plus ++ ;  
  $_SESSION["information_user_id_sha1"]= $apple->list_row[$n_plus] ;
  $n_plus ++ ;  

  $_SESSION["information_user_ip"]= $apple->list_row[$n_plus] ;
  $n_plus ++ ;  
  $_SESSION["information_user_login"]= $apple->list_row[$n_plus] ;
  $n_plus ++ ;  
  $_SESSION["information_user_password"]= $apple->list_row[$n_plus] ;
  $n_plus ++ ;  
  $_SESSION["information_user_new_file"]= $apple->list_row[$n_plus] ;
  $n_plus ++ ;  
  $_SESSION["information_user_reg_date"]= $apple->list_row[$n_plus] ;
  $n_plus ++ ;  


  */


 
 $information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ;
 $information_user_ip = $_SERVER['SERVER_NAME'] ;

 $_SESSION["time"] = $time  ; 
 $_SESSION["qr_code"] = $time  ; 
 
      
      $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("inserttion ok ") ;  
        $apple->set_sql("INSERT INTO liste_projet (liste_projet_id_sha1,information_user_id_sha1,liste_projet_ip)
                
        VALUES ('$time','$information_user_id_sha1','$information_user_ip')") ; 
        $apple->execution() ;




 
?> 