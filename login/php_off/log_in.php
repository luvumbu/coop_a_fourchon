<?php 
include("path.php") ; 
$t = time(date_default_timezone_set('Europe/Paris')) ; 
 
 

$information_user_adresse_mail =  $_POST["adress_mail"] ; 
$_SESSION["information_user_adresse_mail"] =  $_POST["adress_mail"] ; 

$information_user_password =  $_POST["password"] ; 
 

 $_SESSION["info_login_verif"]= false ; 
 
$apple = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple->row,
  'information_user_id',
  'information_user_adresse_mail'
 



);


$apple->sql = 'SELECT * FROM `information_user` WHERE `information_user_adresse_mail`="'.$information_user_adresse_mail.'"';
$apple->execution();
$myJSON = json_encode($apple->list_row);



 
 


if(count($apple->list_row)==0){

 
  $apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
        
   
    $apple->set_msg_valudation("inserttion ok ") ;  
    $apple->set_sql("INSERT INTO `information_user` (`information_user_id_sha1`,`information_user_adresse_mail`)
            
    VALUES ('$t','$information_user_adresse_mail')") ; 
    $apple->execution() ;


 
}
else {

  $number = 0 ; 


  $information_user_id_array = $apple->add_array_element($number);
  $number++;
  $information_user_adresse_mail = $apple->add_array_element($number);
  $number++;
 
  $_SESSION["info_login"] = $information_user_adresse_mail ;

  $_SESSION["info_login_verif"]= true ; 

  $_SESSION["information_user_id_sha1"] = $t ; 
  $_SESSION["t"] = $t ; 



}

 
  
/*
if (in_array($information_user_adresse_mail, $information_user_adresse_mail_))
  {
  echo "Match found";
  }
else
  {

    
  }








  /*
 /*
   var_dump($liste_projet_id_sha1 ) ; 
   var_dump($liste_projet_name ) ; 
   var_dump($liste_projet_id ) ; 
*/
  


/*

$apple = new Insertion_Bdd(
  $servername,
  $username,
  $password,
  $dbname
  
  );
      
 
  $apple->set_msg_valudation("inserttion ok ") ;  
  $apple->set_sql("INSERT INTO `information_user` (`information_user_id_sha1`,`information_user_adresse`)
          
  VALUES ('$t','$information_user_adresse_mail')") ; 
  $apple->execution() ;



  */ 
?>
 