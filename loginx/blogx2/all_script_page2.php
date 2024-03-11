<?php

//echo give_url() ; 


$liste_projet_id_sha1 = give_url();
$apple_2x = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple_2x->row,

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

  'liste_projet_css_1',
  'liste_projet_css_2',

  'liste_projet_name_font_size',
  'liste_projet_description1_font_size',
  'liste_projet_background_color',
  'liste_projet_description1_tittle',
  'liste_projet_name_tittle'



);





$apple_2x->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1` !="' . $liste_projet_id_sha1 . '"  AND `liste_projet_visibilite1`="(OO)" AND `liste_projet_id_parent` ="" ORDER BY liste_projet_id ';
$apple_2x->execution();
$myJSON = json_encode($apple_2x->list_row);



 




// !! 


// !! 



// echo   $myJSON ; 


// Utilisation

// creation de la variable vide
$number = 0;
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 
$number_x = false;


if (count($apple_2x->list_row) > 0) {

  $verif_id = true;
  $liste_projet_id_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_id_sha1_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_id_parent_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_id_sha1_general_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_ip_2x = $apple_2x->add_array_element($number);
  $number++;




  $liste_projet_img_2x = $apple_2x->add_array_element($number);
  $number++;

  $liste_projet_name_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_description1_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_description2_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_visibilite1_2x = $apple_2x->add_array_element($number);
  $number++;


  $liste_projet_visibilite2_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_type_2x = $apple_2x->add_array_element($number);
  $number++;
  $information_user_id_sha1_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_new_file_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_reg_date_2x = $apple_2x->add_array_element($number);
  $number++;


  $liste_projet_color_1_2x = $apple_2x->add_array_element($number);
  $number++;

  $liste_projet_color_2_2x = $apple_2x->add_array_element($number);
  $number++;


  $liste_projet_name_font_size_2x = $apple_2x->add_array_element($number);
  $number++;
  $liste_projet_description1_font_size_2x = $apple_2x->add_array_element($number);
  $number++;

  $liste_projet_background_color_2x = $apple_2x->add_array_element($number);
  $number++;

  $liste_projet_description1_tittle_2x = $apple_2x->add_array_element($number);

  $number++;
  $liste_projet_name_tittle_2x = $apple_2x->add_array_element($number);
  $number = 0;






  for ($x = 0; $x < count($liste_projet_id_2x); $x++) {
    ?>

    <div class="all_src display_none">
      <div class="all_src_1">
        <?php echo $liste_projet_id_2x[$x] ?>
      </div>
      <div class="all_src_2">
        <?php echo $liste_projet_name_2x[$x] ?>
      </div>



      <div class="all_src_3">
     

        <?php

            for($a = 0 ; $a<strlen($liste_projet_description1_2x[$x] ); $a ++ ) {
        

              if($a==20){
                break;
              }
              else {
                echo $liste_projet_description1_2x[$x][$a];
              }
            }

      ?>
      </div>



      <div class="all_src_4">
        <?php echo $liste_projet_img_2x[$x] ?>
      </div>
      <div class="all_src_5">
        <?php echo $liste_projet_reg_date_2x[$x] ?>
      </div>
      <div class="all_src_6">
        <?php echo $liste_projet_id_sha1_2x[$x] ?>
      </div>


    </div>

    <?php
  }

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



if (count($apple_2x->list_row) > 0) {
  $verification_id = true;
}


if (count($apple_2x->list_row) != 0 && $liste_projet_visibilite1[0] == "(OO)") {



  ?>







  <div class="pages_json_1">

    <div class="pages_json_1_1">
      <?php echo $liste_projet_id[0]; ?>
    </div>
    <div class="pages_json_1_2">
      <?php echo $liste_projet_id_sha1[0]; ?>
    </div>
    <div class="pages_json_1_3">
      <?php echo $liste_projet_id_parent[0]; ?>
    </div>
    <div class="pages_json_1_4">
      <?php echo $liste_projet_id_sha1_general[0]; ?>
    </div>
    <div class="pages_json_1_5">
      <?php echo $liste_projet_ip[0]; ?>
    </div>

    <div class="pages_json_1_6">
      <?php echo $liste_projet_img[0]; ?>
    </div>
    <div class="pages_json_1_7">
      <?php echo $liste_projet_name[0]; ?>
    </div>
    <div class="pages_json_1_8">
      <?php echo $liste_projet_description1[0]; ?>
    </div>
    <div class="pages_json_1_9">
      <?php echo $liste_projet_description2[0]; ?>
    </div>
    <div class="pages_json_1_10">
      <?php echo $liste_projet_visibilite1[0]; ?>
    </div>

    <div class="pages_json_1_11">
      <?php echo $liste_projet_visibilite2[0]; ?>
    </div>
    <div class="pages_json_1_12">
      <?php echo $liste_projet_type[0]; ?>
    </div>
    <div class="pages_json_1_13">
      <?php echo $information_user_id_sha1[0]; ?>
    </div>
    <div class="pages_json_1_14">
      <?php echo $liste_projet_new_file[0]; ?>
    </div>
    <div class="pages_json_1_15">
      <?php echo $liste_projet_reg_date[0]; ?>
    </div>

    <div class="pages_json_1_16">
      <?php echo $liste_projet_color_1[0]; ?>
    </div>
    <div class="pages_json_1_17">
      <?php echo $liste_projet_color_2[0]; ?>
    </div>
    <div class="pages_json_1_18">
      <?php echo $liste_projet_name_font_size[0]; ?>
    </div>
    <div class="pages_json_1_19">
      <?php echo $liste_projet_description1_font_size[0]; ?>
    </div>
    <div class="pages_json_1_20">
      <?php echo $liste_projet_background_color[0]; ?>
    </div>
    <div class="pages_json_1_21">
      <?php echo $liste_projet_description1_tittle[0]; ?>
    </div>
    <div class="pages_json_1_22">
      <?php echo $liste_projet_name_tittle[0]; ?>
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
    border-bottom: 5px solid black;
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

  #body {}
</style>