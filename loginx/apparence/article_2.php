
<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");

include("../../model/class/php/Select_datas.php") ;  
include("../../model/class/php/connexion.php") ;  


 

$PHP_SELF = strrev($_SERVER['PHP_SELF']) ; 

$url_page = "" ; 
 
for($i = 0  ; $i <strlen($_SERVER['PHP_SELF']) ; $i ++) {

//echo strrev($_SERVER['PHP_SELF'][$i]) ; 
 
 
if($PHP_SELF[$i]=="/"){
    break ; 
}
else {
 

    $url_page = $url_page.$PHP_SELF[$i] ; 
}

}


 
 



$url_page = strrev($url_page) ;

$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
    'liste_projet_id_parent',
    'liste_projet_id_sha1_general',
    'liste_projet_ip',
    'liste_projet_img',
    'liste_projet_name',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_visibilite1',
    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',
    'liste_projet_new_file',
    'liste_projet_reg_date'
    

    );
 
  
    //$apple->sql='SELECT * FROM `liste_projet` WHERE `information_user_id_sha1`="'.$id_information_user_sha1.'"ORDER BY `liste_projet_id` ';
    $apple->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1`="'.$url_page.'"';

    $apple->execution();
    $myJSON = json_encode($apple->list_row); 




    // echo   $myJSON ; 
 
   // $apple->all_data_json() ; 
   $SERVER_NAME =  $_SERVER['SERVER_NAME']; 

   $name_img =  $apple->list_row[12]."/".$apple->list_row[5] ;


 


$app_location ="" ; 
 
   if($apple->list_row[4]=="127.0.0.1" || $apple->list_row[4]=="localhost" ){

 
       $img_ = "http://".$apple->list_row[4]."/Model_Vue9/login/pages_on/download_img/uploads/".$name_img ; 
       $app_location = "localhost";
   }
   else {
    $img_ = "http://".$apple->list_row[4]."/login/pages_on/download_img/uploads/".$name_img ; 
    $app_location = "web";
   }
 ?>









<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5  text-center">
  <h1 class="liste_projet_name"><?php echo $apple->list_row[6] ?></h1>
 </div>
  
<div class="container mt-5">
  <div class="row">
    

        <?php 


                        if($apple->list_row[5]!=""){
?>

<div class="all_img" style="background-image: url('<?php echo $img_ ; ?>')" >


                
                </div>
<?php 
                        }
      ?>
    
        
 
      <p class="liste_projet_description1 b_for"><?php echo $apple->list_row[7] ?></p>

      <p class="liste_projet_description2"></p>
      <div class="child_image">
        <img  class="src_img" src="<?php echo $img_?>" alt="" srcset="">
      </div>
      
      <p class="liste_projet_reg_date"><?php echo $apple->list_row[14] ?></p>
      <div>

 </div>

      

   
    
 
  </div>
 



<style>
    .all_img{
        width:100% ; 
        height:200px;         
        background-size:100% ; 
       
    }
    .liste_projet_description1{
      margin-top:150px ; 
    }
</style>
</body>
</html>



<?php 

// Partie child 






$apple_child = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_child->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
  
    'liste_projet_id_sha1_general',
    'liste_projet_ip',

    'liste_projet_img',
    'liste_projet_name',
    'liste_projet_description1',
    
    'liste_projet_visibilite1',

    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',
    'liste_projet_new_file',
    'liste_projet_reg_date'
    

    );
 
  
    //$apple_child->sql='SELECT * FROM `liste_projet` WHERE `information_user_id_sha1`="'.$id_information_user_sha1.'"ORDER BY `liste_projet_id` ';
    $apple_child->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent`="'.$url_page.'"';

    $apple_child->execution();



    $myJSON = json_encode( $apple_child->list_row); 

 










 
 

// Utilisation
$liste_projet_id=array("");
$liste_projet_id_sha1=array("");
 
 
$liste_projet_ip=array("");

$liste_projet_img=array("");
$liste_projet_name=array("");
$liste_projet_description1=array("");
$liste_projet_description2=array("");
$liste_projet_visibilite1=array("");

$liste_projet_visibilite2=array("");
$liste_projet_type=array("");
$information_user_id_sha1=array("");
$liste_projet_new_file=array("");
$liste_projet_reg_date=array("");

// creation de la variable vide
$number = 1 ; 
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 

$liste_projet_id =$apple_child->add_array_element($number);
// ok  
$number ++ ; 


$liste_projet_id_sha1 =$apple_child->add_array_element($number);
// ok  
$number ++ ; 





$liste_projet_ip =$apple_child->add_array_element($number);
// ok  
$number ++ ; 



$liste_projet_img =$apple_child->add_array_element($number);
// ok  
$number ++ ; 
 



$liste_projet_name =$apple_child->add_array_element($number);
// ok  
$number ++ ; 



$liste_projet_description1 =$apple_child->add_array_element($number);
// ok  
$number ++ ; 



$liste_projet_visibilite1 =$apple_child->add_array_element($number);
// ok  
$number ++ ; 


$liste_projet_visibilite1 =$apple_child->add_array_element($number);
// ok  
$number ++ ; 


$liste_projet_type =$apple_child->add_array_element($number);
// ok  
$number ++ ; 



$information_user_id_sha1 =$apple_child->add_array_element($number);
// ok  
$number ++ ; 


$liste_projet_new_file =$apple_child->add_array_element($number);
// ok  
$number ++ ; 


$liste_projet_reg_date =$apple_child->add_array_element($number);
// ok  
$number ++ ; 




 
 

 


 


 

/*
 
 

liste_projet_reg_date
*/




/*
$number ++ ; 
$liste_projet_id =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1 =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_id_parent =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1_general =$apple_child->add_array_element($number);
$number ++ ; 

$liste_projet_ip =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_img =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_name =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_description1 =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_description2 =$apple_child->add_array_element($number);
$number ++ ; 

$liste_projet_visibilite1 =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_visibilite2 =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_type =$apple_child->add_array_element($number);
$number ++ ; 
$information_user_id_sha1 =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_new_file =$apple_child->add_array_element($number);
$number ++ ; 
$liste_projet_reg_date =$apple_child->add_array_element($number);
$number ++ ; 

*/






/*
var_dump($liste_projet_id) ; 
var_dump($liste_projet_id_sha1) ; 
var_dump($liste_projet_id_parent) ; 
var_dump($liste_projet_id_sha1_general) ; 
var_dump($liste_projet_ip) ; 

var_dump($liste_projet_img) ; 
var_dump($liste_projet_name) ; 
var_dump($liste_projet_description1) ; 
var_dump($liste_projet_description2) ; 
var_dump($liste_projet_visibilite1) ; 

var_dump($liste_projet_visibilite2) ; 
var_dump($liste_projet_type) ; 
var_dump($information_user_id_sha1) ; 
var_dump($liste_projet_new_file) ; 
var_dump($liste_projet_reg_date) ; 


*/

 







 

// Utilisation
 

 


/*
liste_projet_id
liste_projet_id_sha1
liste_projet_ip
liste_projet_img
liste_projet_name
liste_projet_description1
liste_projet_visibilite1
liste_projet_visibilite1
liste_projet_type
information_user_id_sha1
liste_projet_new_file
liste_projet_reg_date

*/




/*
        var_dump($liste_projet_id) ;
        var_dump($liste_projet_id_sha1) ; 
        var_dump($liste_projet_ip) ; 
        var_dump($liste_projet_img) ; 
        var_dump($liste_projet_name) ; 
        var_dump($liste_projet_description1) ; 
        var_dump($liste_projet_visibilite1) ; 
        var_dump($liste_projet_visibilite1) ; 
        var_dump($liste_projet_type) ; 
        var_dump($information_user_id_sha1) ; 
        var_dump($liste_projet_new_file) ; 
        var_dump($liste_projet_reg_date) ; 
*/


 

 for ($a = 0 ; $a <count($liste_projet_id); $a ++) {
?>
<div class="b_for">


 
<?php 

/*
<div class="liste_projet_id"> <?php echo $liste_projet_id[$a]?></div>
<div class="liste_projet_id_sha1"> <?php echo $liste_projet_id_sha1[$a]?></div>
<div class="liste_projet_ip"> <?php echo $liste_projet_ip[$a]?></div>
<div class="liste_projet_visibilite1"> <?php echo $liste_projet_visibilite1[$a]?></div>
<div class="liste_projet_visibilite1"> <?php echo $liste_projet_visibilite1[$a]?></div>
<div class="information_user_id_sha1"> <?php echo $information_user_id_sha1[$a]?></div>
<div class="liste_projet_type"> <?php echo $liste_projet_type[$a]?></div>
<div class="liste_projet_new_file"> <?php echo $liste_projet_new_file[$a]?></div>
*/
?>



<div class="liste_projet_name"> <?php echo $liste_projet_name[$a]?></div>


<?php 

if($app_location!="web"){
 
  if( $liste_projet_img[$a]!=""){
?>
 
<div class="child_image">
<img  class="src_img2" src='<?php  echo "http://".$apple->list_row[4]."/Model_Vue9/login/pages_on/download_img/uploads/".$information_user_id_sha1[$a]."/".$liste_projet_img[$a] ;  ?>' alt="" srcset="">

</div>
<?php 
  }
 
}
else {
  ?>
 
<div class="child_image">
<img  class="src_img2" src='<?php  echo "http://".$apple->list_row[4]."/login/pages_on/download_img/uploads/".$information_user_id_sha1[$a]."/".$liste_projet_img[$a] ;  ?>' alt="" srcset="">

</div>
<?php 
}

?>
<div class="liste_projet_description1"> <?php echo $liste_projet_description1[$a]?></div>

<div class="liste_projet_ip"> <?php echo $liste_projet_ip[$a]?></div>





<div class="liste_projet_reg_date"> <?php echo $liste_projet_reg_date[$a]?></div>
 
 

 

</div>
<?php 
 
 }



?>
   <a href="../../"> Page précedente</a>
</div>


<style>
  .child_image{
    max-width:50%; 
    text-align:center ; 
    margin:auto ;
  
    padding:15px; 
  }
 
  .img_parent{
    max-width:300px; 
  }
  .b_for{
    margin-top:250px;
        text-align:justify ; 
        padding:1pc;
        margin-bottom:100px; 
  }
 
</style>

 
 