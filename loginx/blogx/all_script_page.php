<?php

//echo give_url() ; 

 
$liste_projet_id_sha1 = give_url();
$apple = new Select_datas($servername, $username, $password, $dbname);

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





$apple->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1` ="' . $liste_projet_id_sha1 . '" AND `liste_projet_visibilite1`="(OO)" ORDER BY liste_projet_id';
$apple->execution();
$myJSON = json_encode($apple->list_row);








// !! 


// !! 



// echo   $myJSON ; 


// Utilisation

// creation de la variable vide
$number = 0;
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 


 

if(count($apple->list_row)>0){
  $verif_id = true ; 
  $liste_projet_id = $apple->add_array_element($number);
  $number++;
  $liste_projet_id_sha1 = $apple->add_array_element($number);
  $number++;
  $liste_projet_id_parent = $apple->add_array_element($number);
  $number++;
  $liste_projet_id_sha1_general = $apple->add_array_element($number);
  $number++;
  $liste_projet_ip = $apple->add_array_element($number);
  $number++;
  
  
  
  
  $liste_projet_img = $apple->add_array_element($number);
  $number++;
  
  $liste_projet_name = $apple->add_array_element($number);
  $number++;
  $liste_projet_description1 = $apple->add_array_element($number);
  $number++;
  $liste_projet_description2 = $apple->add_array_element($number);
  $number++;
  $liste_projet_visibilite1 = $apple->add_array_element($number);
  $number++;
  
  
  $liste_projet_visibilite2 = $apple->add_array_element($number);
  $number++;
  $liste_projet_type = $apple->add_array_element($number);
  $number++;
  $information_user_id_sha1 = $apple->add_array_element($number);
  $number++;
  $liste_projet_new_file = $apple->add_array_element($number);
  $number++;
  $liste_projet_reg_date = $apple->add_array_element($number);
  $number++;
  
  
  $liste_projet_color_1 = $apple->add_array_element($number);
  $number++;
  
  $liste_projet_color_2 = $apple->add_array_element($number);
  $number++;
  
  
  $liste_projet_name_font_size = $apple->add_array_element($number);
  $number++;
  $liste_projet_description1_font_size = $apple->add_array_element($number);
  $number++;
  
  $liste_projet_background_color = $apple->add_array_element($number);
  $number++;
  
  $liste_projet_description1_tittle = $apple->add_array_element($number);
  
  $number++;
  $liste_projet_name_tittle = $apple->add_array_element($number);
  $number = 0;
  
  
  
 
  
  
  
  // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  // information sur lutilisateur ok 
  $apple_user = new Select_datas($servername, $username, $password, $dbname);
  
  array_push(
    $apple_user->row,
  
    'information_user_prenom',
    'information_user_ip',
    'information_user_login',
    'information_user_name',
  
    'information_user_adresse',
    'information_user_adresse_mail',
    'information_user_code_postale',
    'information_user_password',
    'information_user_naissance',
    'information_user_tel',
    'information_user_reg_date'
  
  
  
  );
  
  
  
  
  
  $apple_user->sql = 'SELECT * FROM `information_user` WHERE `information_user_id_sha1`="' . $information_user_id_sha1[0] . '"';
  $apple_user->execution();
  $myJSON = json_encode($apple_user->list_row);
  
  
  
  $information_user_prenom_user_info = $apple_user->list_row[0];
  $information_user_ip_user_info = $apple_user->list_row[1];
  $information_user_login_user_info = $apple_user->list_row[2];
  $information_user_name_user_info = $apple_user->list_row[3];
  $information_user_adresse_user_info = $apple_user->list_row[4];
  $information_user_adresse_mail_user_info = $apple_user->list_row[5];
  $information_user_code_postale_user_info = $apple_user->list_row[6];
  $information_user_password_user_info = $apple_user->list_row[7];
  
  
  $information_user_naissance_user_info = $apple_user->list_row[8];
  $information_user_tel_user_info = $apple_user->list_row[9];
  $information_user_reg_date_user_info = $apple_user->list_row[10];
  
  
  // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}


 
// ok
$x1_2 = 0;

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

 

if(count($apple->list_row)>0){
$verification_id = true  ; 
}


if (count($apple->list_row) != 0 && $liste_projet_visibilite1[0] == "(OO)") {



  ?>







    <div class="pages_json_1">

<div class="pages_json_1_1">
  <?php echo $liste_projet_id[0]   ;  ?>
</div>
<div class="pages_json_1_2">
  <?php echo $liste_projet_id_sha1[0]   ;  ?>
</div>
<div class="pages_json_1_3">
  <?php echo $liste_projet_id_parent[0]   ;  ?>
</div>
<div class="pages_json_1_4">
  <?php echo $liste_projet_id_sha1_general[0]   ;  ?>
</div>
<div class="pages_json_1_5">
  <?php echo $liste_projet_ip[0]   ;  ?>
</div>

<div class="pages_json_1_6">
  <?php echo $liste_projet_img[0]   ;  ?>
</div>
<div class="pages_json_1_7">
  <?php echo $liste_projet_name[0]   ;  ?>
</div>
<div class="pages_json_1_8">
  <?php echo $liste_projet_description1[0]   ;  ?>
</div>
<div class="pages_json_1_9">
  <?php echo $liste_projet_description2[0]   ;  ?>
</div>
<div class="pages_json_1_10">
  <?php echo $liste_projet_visibilite1[0]   ;  ?>
</div>

<div class="pages_json_1_11">
  <?php echo $liste_projet_visibilite2[0]   ;  ?>
</div>
<div class="pages_json_1_12">
  <?php echo $liste_projet_type[0]   ;  ?>
</div>
<div class="pages_json_1_13">
  <?php echo $information_user_id_sha1[0]   ;  ?>
</div>
<div class="pages_json_1_14">
  <?php echo $liste_projet_new_file[0]   ;  ?>
</div>
<div class="pages_json_1_15">
  <?php echo $liste_projet_reg_date[0]   ;  ?>
</div>

<div class="pages_json_1_16">
  <?php echo $liste_projet_color_1[0]   ;  ?>
</div>
<div class="pages_json_1_17">
  <?php echo $liste_projet_color_2[0]   ;  ?>
</div>
<div class="pages_json_1_18">
  <?php echo $liste_projet_name_font_size[0]   ;  ?>
</div>
<div class="pages_json_1_19">
  <?php echo $liste_projet_description1_font_size[0]   ;  ?>
</div>
<div class="pages_json_1_20">
  <?php echo $liste_projet_background_color[0]   ;  ?>
</div>
<div class="pages_json_1_21">
  <?php echo $liste_projet_description1_tittle[0]   ;  ?>
</div>
<div class="pages_json_1_22">
  <?php echo $liste_projet_name_tittle[0]   ;  ?>
</div>

</div>
      


    <?php
 
    if (count($liste_projet_id_parent) != 0) {
      include("pages_json_2.php");
    }

}

//echo $liste_projet_description1[0] ; 
?>

</div>
  <style>
    .element_01,
    .element_02,
    .element_03,
    .element_04,
    .element_05,
    .element_06,
    .element_07,
    .element_08,
    .element_09,
    .element_10 {}

    .element_01 {}

    .pages_json_1 {
      background-color: green;
    }

    .pages_json_3 {
      background-color: pink;
      border-bottom:5px solid black ; 
    }

    .pages_json_4 {
      background-color: orange;
    }

    .pages_json_5 {
      background-color: red;
    }

    .pages_json_6 {
      background-color: yellow;
    }

    .pages_json_7 {
      background-color: black;
    }

    .pages_json_8 {
      background-color: violet;
    }
    #body{
      
    }
 
  </style>
