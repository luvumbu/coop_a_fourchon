<?php 
//echo give_url() ; 

 
$liste_projet_id_sha1 = give_url() ;  
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
    'liste_projet_reg_date',

    'liste_projet_color_1',
    'liste_projet_color_2', 

    'liste_projet_name_font_size', 
    'liste_projet_description1_font_size',
    'liste_projet_background_color',
    'liste_projet_description1_tittle',
    'liste_projet_name_tittle' 

    

    );





    $apple->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1` ="'.$liste_projet_id_sha1.'"  ORDER BY liste_projet_id';
    $apple->execution();
    $myJSON = json_encode($apple->list_row); 
 


 
 
 



    // echo   $myJSON ; 
 
 
// Utilisation
 
// creation de la variable vide
$number = 0 ; 
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 




$liste_projet_id =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1 =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_id_parent =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1_general =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_ip =$apple->add_array_element($number);
$number ++ ; 




$liste_projet_img =$apple->add_array_element($number);
$number ++ ; 

$liste_projet_name =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_description1 =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_description2 =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_visibilite1 =$apple->add_array_element($number);
$number ++ ; 
 

$liste_projet_visibilite2 =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_type =$apple->add_array_element($number);
$number ++ ; 
$information_user_id_sha1 =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_new_file =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_reg_date =$apple->add_array_element($number);
$number ++ ; 


$liste_projet_color_1 =$apple->add_array_element($number);
$number ++ ; 

$liste_projet_color_2 =$apple->add_array_element($number);
$number ++ ; 


$liste_projet_name_font_size =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_description1_font_size =$apple->add_array_element($number);
$number ++ ; 

$liste_projet_background_color =$apple->add_array_element($number);
$number ++ ; 

$liste_projet_description1_tittle =$apple->add_array_element($number);
 
$number ++ ; 
 $liste_projet_name_tittle = $apple->add_array_element($number);
$number = 0 ; 
 



 
 
 
 
 

?>

<div class="pages_json_1">

 
<?php 
// ok
 $x1_2 = 0 ; 

 /*
echo $liste_projet_id[0] ; 
echo "<br/>"; 
echo $liste_projet_id_sha1[0] ; 
echo "<br/>"; 
echo $liste_projet_id_parent[0] ; 
echo "<br/>"; 
echo $liste_projet_id_sha1_general[0] ; 
echo "<br/>"; 
echo $liste_projet_ip[0] ; 
echo "<br/>"; 
echo $liste_projet_img[0] ; 
echo "<br/>"; 
echo $liste_projet_name[0] ; 
echo "<br/>"; 
echo $liste_projet_description1[0] ; 
echo "<br/>"; 
echo $liste_projet_description2[0] ; 
echo "<br/>"; 
echo $liste_projet_visibilite1[0] ; 
echo "<br/>"; 
echo $liste_projet_visibilite2[0] ; 
echo "<br/>"; 
echo $liste_projet_type[0] ; 
echo "<br/>"; 
echo $information_user_id_sha1[0] ; 
echo "<br/>"; 
echo $liste_projet_new_file[0] ; 
echo "<br/>"; 
echo $liste_projet_reg_date[0] ; 
echo "<br/>"; 
echo $liste_projet_color_1[0] ; 
echo "<br/>"; 
echo $liste_projet_color_2[0] ; 
echo "<br/>"; 
echo $liste_projet_name_font_size[0] ; 
echo "<br/>"; 
echo $liste_projet_description1_font_size[0] ; 
echo "<br/>"; 
echo $liste_projet_background_color[0] ; 
echo "<br/>"; 
echo $liste_projet_description1_tittle[0] ; 
echo "<br/>"; 
echo $liste_projet_name_tittle[0] ; 
echo "<br/>"; 

 
*/

 
 

if(count($apple->list_row)!=0 && $liste_projet_visibilite1[0]=="(OO)"){
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php  echo $liste_projet_name[0] ; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<img src="" alt="" srcset="">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><?php  echo $liste_projet_name[0] ; ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" >
 
          
 <?php 

include("pages_json_2_menu.php") ; 

?>
 
          </div>
        </div>
      </nav>
 



      <div class="text-center" style="padding:20px" >
        <h1 title="<?php echo  $liste_projet_name_tittle[0] ; ?>"><?php  echo $liste_projet_name[0] ; ?></h1>
<?php 


 


if($liste_projet_img[0]!=""){
  $src_  ="../../redirection_dowload_img/".$liste_projet_img[0]  ; 
  ?>


<img width="70%" style="margin-top:70px;margin-bottom:70px" src="<?php echo $src_  ?>" alt="" srcset="">
<?php 
}
?>
 


<p style="text-align:center">
    <?php  echo $liste_projet_description1[0] ; ?>
</p>
       
      </div>
     
<div>
  <?php


 if(count($liste_projet_id_parent)!=0){
  include("pages_json_2.php"); 
 }

 
?>
 
</div>


 



<style>
  .pages_json_1,
  .pages_json_2,
  .pages_json_3,
  .pages_json_4,
  .pages_json_5,
  .pages_json_6,
  .pages_json_7,
  .pages_json_8{

  }  



 p{
  color:grey ; 
  text-align:justify ; 
 }
 
</style>


<?php 



 

}


else {
  ?>





<img style="width:50%" src="https://static.vecteezy.com/system/resources/thumbnails/024/679/375/original/skiing-down-404-error-animation-ski-lifestyle-winter-sports-empty-state-4k-concept-footage-with-alpha-channel-transparency-outline-colour-page-not-found-flash-message-for-ui-ux-web-design-video.jpg" alt="">
<?php 
}
?>



</body>
</html>