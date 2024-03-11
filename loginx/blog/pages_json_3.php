
<?php 
$img ="../../redirection_dowload_img/".$liste_projet_img_x1_2[$x1_2] ; 
if($liste_projet_img_x1_2[$x1_2]!=""){

 
  ?>
   <div class="b_black"></div>


   <style>
    .div_img_2{
     
      padding:15px; 
      text-align:center ; 
    }
   </style>
<div class="div_img_2">
<img src="<?php echo $img  ; ?> "  width="<?php echo  $width."%" ?>"  style="margin:100px;text-center"> 
</div>


  <?php 
}
 

?>

<h1   title="<?php echo  $liste_projet_name_tittle_x1_2[$x1_2]; ?>"  id="<?php  echo "id_".$liste_projet_id_sha1_x1_2[$x1_2] ;?>"><?php  echo $liste_projet_name_x1_2[$x1_2] ;?></h1>
 <p title="<?php echo  $liste_projet_description1_tittle_x1_2[$x1_2]; ?>"><?php echo $liste_projet_description1_x1_2[$x1_2] ;?></p> 
<?php 

 
/*
echo $liste_projet_id_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $liste_projet_id_sha1_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $liste_projet_id_parent_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $liste_projet_id_sha1_general_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $liste_projet_ip_x1_2[$x1_2] ;
echo "<br/>" ; 



echo $liste_projet_img_x1_2[$x1_2] ;
echo "<br/>" ; 
*/




 
 
/*
echo $liste_projet_visibilite1_x1_2[$x1_2] ;
echo "<br/>" ; 



echo $liste_projet_visibilite2_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $liste_projet_type_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $information_user_id_sha1_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $liste_projet_new_file_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $liste_projet_reg_date_x1_2[$x1_2] ;
echo "<br/>" ; 



echo $liste_projet_color_1_x1_2[$x1_2] ;
echo "<br/>" ; 


echo $liste_projet_color_2_x1_2[$x1_2] ;
echo "<br/>" ; 



echo $liste_projet_name_font_size_x1_2[$x1_2] ;
echo "<br/>" ; 

echo $liste_projet_description1_font_size_x1_2[$x1_2] ;
echo "<br/>" ; 


echo $liste_projet_background_color_x1_2[$x1_2] ;
echo "<br/>" ; 



*/










?>

<?php 







$apple_x1_3 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_x1_3->row,

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





    $apple_x1_3->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1_x1_2[$x1_2] .'"  ORDER BY liste_projet_id';
    $apple_x1_3->execution();
    $myJSON = json_encode($apple_x1_3->list_row); 









     







if(count( $apple_x1_3->list_row) !=0){
    $number_x1_3 = 0 ; 
    $liste_projet_id_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_id_sha1_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_id_parent_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_id_sha1_general_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_ip_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    
    
    $liste_projet_img_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_name_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_description1_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_description2_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_visibilite1_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    
    
    $liste_projet_visibilite2_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_type_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $information_user_id_sha1_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_new_file_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_reg_date_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    
    
    $liste_projet_color_1_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    
    $liste_projet_color_2_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    
    
    $liste_projet_name_font_size_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    $liste_projet_description1_font_size_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    
    $liste_projet_background_color_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
    $number_x1_3 ++ ; 
    
    $liste_projet_description1_tittle_x1_3 =$apple_x1_3->add_array_element($number_x1_3);
     
    $number_x1_3 ++ ; 
     $liste_projet_name_tittle_x1_3 = $apple_x1_3->add_array_element($number_x1_3);




     for($x1_3 = 0 ; $x1_3<count($liste_projet_id_sha1_x1_3) ; $x1_3 ++ ) {
    
         include("pages_json_4.php") ; 

  
     }

     
}

?>



<style>
  .b_black{
    height:5px; 
    width:100%;
    margin-top:50px; 
  }
</style>
 


 