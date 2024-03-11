
<?php 
$img ="../../redirection_dowload_img/".$liste_projet_img_x1_7[$x1_7] ;  
?>
<div class="pages_json_8">
  <div class="element_8_1">
    <?php echo $liste_projet_id_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_id_sha1_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_id_parent_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_id_sha1_general_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_ip_x1_7[$x1_7]   ;  ?>
  </div>

  <div class="element_8_1">
    <?php echo $liste_projet_img_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_name_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_description1_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_description2_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_visibilite1_x1_7[$x1_7]   ;  ?>
  </div>

  <div class="element_8_1">
    <?php echo $liste_projet_visibilite2_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_type_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $information_user_id_sha1_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_new_file_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_reg_date_x1_7[$x1_7]   ;  ?>
  </div>

  <div class="element_8_1">
    <?php echo $liste_projet_color_1_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_color_2_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_name_font_size_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_description1_font_size_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_background_color_x1_7[$x1_7]   ;  ?>
  </div>

  <div class="element_8_1">
    <?php echo $liste_projet_description1_tittle_x1_7[$x1_7]   ;  ?>
  </div>
  <div class="element_8_1">
    <?php echo $liste_projet_name_tittle_x1_7[$x1_7]   ;  ?>
  </div>  
</div>
<?php 
 

 
/*
echo $liste_projet_id_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $liste_projet_id_sha1_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $liste_projet_id_parent_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $liste_projet_id_sha1_general_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $liste_projet_ip_x1_7[$x1_7] ;
echo "<br/>" ; 



echo $liste_projet_img_x1_7[$x1_7] ;
echo "<br/>" ; 
*/




 
 
/*
echo $liste_projet_visibilite1_x1_7[$x1_7] ;
echo "<br/>" ; 



echo $liste_projet_visibilite2_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $liste_projet_type_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $information_user_id_sha1_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $liste_projet_new_file_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $liste_projet_reg_date_x1_7[$x1_7] ;
echo "<br/>" ; 



echo $liste_projet_color_1_x1_7[$x1_7] ;
echo "<br/>" ; 


echo $liste_projet_color_2_x1_7[$x1_7] ;
echo "<br/>" ; 



echo $liste_projet_name_font_size_x1_7[$x1_7] ;
echo "<br/>" ; 

echo $liste_projet_description1_font_size_x1_7[$x1_7] ;
echo "<br/>" ; 


echo $liste_projet_background_color_x1_7[$x1_7] ;
echo "<br/>" ; 



*/







 





$apple_x1_8 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_x1_8->row,

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





    $apple_x1_8->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1_x1_7[$x1_7] .'"  ORDER BY liste_projet_id';
    $apple_x1_8->execution();
    $myJSON = json_encode($apple_x1_8->list_row); 


if(count( $apple_x1_8->list_row) !=0){
    $number_x1_8 = 0 ; 
    $liste_projet_id_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_id_sha1_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_id_parent_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_id_sha1_general_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_ip_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    
    
    $liste_projet_img_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_name_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_description1_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_description2_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_visibilite1_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    
    
    $liste_projet_visibilite2_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_type_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $information_user_id_sha1_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_new_file_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_reg_date_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    
    
    $liste_projet_color_1_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    
    $liste_projet_color_2_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    
    
    $liste_projet_name_font_size_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    $liste_projet_description1_font_size_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    
    $liste_projet_background_color_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
    $number_x1_8 ++ ; 
    
    $liste_projet_description1_tittle_x1_8 =$apple_x1_8->add_array_element($number_x1_8);
     
    $number_x1_8 ++ ; 
     $liste_projet_name_tittle_x1_8 = $apple_x1_8->add_array_element($number_x1_8);




     for($x1_8 = 0 ; $x1_8<count($liste_projet_id_sha1_x1_8) ; $x1_8 ++ ) {
    
        // include("pages_json_8.php") ; 

  
     }

     
}

?>

 