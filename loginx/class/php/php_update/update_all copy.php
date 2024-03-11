<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
 
 
 



 
 
$liste_projet_id_sha1  = $_POST["liste_projet_id_sha1"] ; 
$liste_projet_description1 = $_POST["liste_projet_description1"] ; 
$liste_projet_name = $_POST["liste_projet_name"] ; 
 



 
 //$liste_projet_description1 =   $_POST["liste_projet_description1"] ; 


 $string = $liste_projet_description1 ;
 $valeur_final = "" ; 

 for($i = 0 ; $i <strlen($string) ; $i ++ )  {
                    
      if(ord($string[$i])>13 && ord($string[$i])<255 ){
         

          if(ord($string[$i])!=92){
            $valeur_final = $valeur_final.$string[$i] ; 
         }
         else {
            $valeur_final = $valeur_final."[92]" ; 
         }
      }
  
  }
  



  $liste_projet_description1 =$valeur_final ; 


  $string = $liste_projet_name ;
  $valeur_final = "" ; 
 
  for($i = 0 ; $i <strlen($string) ; $i ++ )  {
                     
       if(ord($string[$i])>13 && ord($string[$i])<255 ){
         

           if(ord($string[$i])!=92){
              $valeur_final = $valeur_final.$string[$i] ; 
           }
       }
   
   }
  
   


   $liste_projet_name =$valeur_final ; 


 

$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_name` = "'.$liste_projet_name.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
      $apple->execution() ;









      $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            $apple->set_msg_valudation("up ok") ;  
            $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_description1` = "'.$liste_projet_description1.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
            $apple->execution() ;     


?>