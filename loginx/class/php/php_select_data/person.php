<?php 


session_start() ; 
  
$information_user_id_sha1_x1 =  $_SESSION["information_user_id_sha1"]; 
 
// sont deja declare dans 
//        include("class/php/php_select_data/select_menu_principal.php") ; 
include("../../../../model/class/php/Select_datas.php") ; 
include("../../../../model/class/php/connexion.php") ;  
 
$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

   
    "information_user_id",
    "information_user_id_sha1",
    "information_user_ip",
    "information_user_login",
    "information_user_name",
    "information_user_prenom",
    "information_user_adresse",
 
    "information_user_adresse_mail",
    "information_user_code_postale",
    "information_user_naissance",
    "information_user_tel" 



    );
 
    
 
 
    
    $apple->sql='SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1_x1.'"';
   
    $apple->execution();
    $myJSON = json_encode($apple->list_row);   



 /*
 

    echo $apple->list_row[0] ;
    echo "<br/>" ; 
    // information_user_id 
    echo $apple->list_row[1] ;
    echo "<br/>" ; 
    // information_user_id_sha1 
    echo $apple->list_row[2] ;
    echo "<br/>" ; 
    // information_user_ip 
    echo $apple->list_row[3] ;
    echo "<br/>" ; 
    // information_user_login 
    echo $apple->list_row[4] ;
    echo "<br/>" ; 
    // information_user_name 
    echo $apple->list_row[5] ;
    echo "<br/>" ; 
    // information_user_prenom 
    echo $apple->list_row[6] ;
    echo "<br/>" ; 
    // information_user_adresse_postale 
    echo $apple->list_row[7] ;
    echo "<br/>" ; 
    // information_user_adresse_mail 
    echo $apple->list_row[8] ;
    echo "<br/>" ; 
    // information_user_code_postale 
 

   */

 
      
 

      

     
    ?>
 

 <div class="margin_100px">

 </div>
 <div class="container mt-3">
  <h2>Informations personneles</h2>
  <form action="/action_page.php">

    <div class="mb-3 mt-3">
      <label for="information_user_name">Nom de famille:</label>
      <input type="text" class="form-control" id="information_user_name" value="<?php     echo $apple->list_row[4] ; ?>" placeholder="Nom de famille:" name="information_user_name">
    </div>

    <div class="mb-3 mt-3">
      <label for="information_user_prenom">Prénom:</label>
      <input type="text" class="form-control" id="information_user_prenom" value="<?php     echo $apple->list_row[5] ; ?>" placeholder="Prénom" name="information_user_prenom">
    </div>

 
    <div class="mb-3 mt-3">
      <label for="information_user_adresse">Adresse</label>
      <input type="text" class="form-control" id="information_user_adresse" value="<?php     echo $apple->list_row[6] ; ?>"  placeholder="code postal:" name="information_user_code_postale">
    </div>
    <div class="mb-3 mt-3">
      <label for="information_user_code_postale">code postal:</label>
      <input type="text" class="form-control" id="information_user_code_postale" value="<?php     echo $apple->list_row[8] ; ?>"  placeholder="code postal:" name="information_user_code_postale">
    </div>

    <div class="mb-3 mt-3">
      <label for="information_user_adresse_mail">Mail:</label>
      <input type="text" class="form-control" id="information_user_adresse_mail" value="<?php     echo $apple->list_row[7] ; ?>"  placeholder="Mail" name="information_user_adresse_mail">
    </div>

    <div class="mb-3 mt-3">
      <label for="information_user_tel">Tél:</label>
      <input type="text" class="form-control" id="information_user_tel" value="<?php     echo $apple->list_row[10] ; ?>"  placeholder="Mail" name="Télephone portable">
    </div>


    <div type="submit" class="btn btn-primary" onclick="person()">Submit</div>
  </form>
</div>
 <style>
  .class_1{
    display:none ; 
  }
  .margin_100px{
    margin-top:100px; 
  }

 </style>