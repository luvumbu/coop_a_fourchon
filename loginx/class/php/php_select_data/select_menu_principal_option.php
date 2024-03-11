<?php 


include("../model/class/php/Select_datas.php") ;  
include("../model/class/php/connexion.php") ;  
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
    'liste_projet_name_tittle', 
    'liste_projet_description1_tittle',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_description3',
    'liste_projet_visibilite1',
    'liste_projet_visibilite2',
    'liste_projet_text_align_1_1',
    'liste_projet_text_align_2_1',
    'liste_projet_text_margin_top_1',
    'liste_projet_text_margin_left_1',
    'liste_projet_text_margin_right_1',
    'liste_projet_text_margin_bottom_1',
    'liste_projet_text_margin_top_2',
    'liste_projet_text_margin_left_2',
    'liste_projet_text_margin_right_2',
    'liste_projet_text_margin_bottom_2',
    'liste_projet_text_padding_top_1',
    'liste_projet_text_padding_left_1',
    'liste_projet_text_padding_right_1',
    'liste_projet_text_padding_bottom_1',
    'liste_projet_text_padding_top_2',
    'liste_projet_text_padding_left_2',
    'liste_projet_text_padding_right_2',
    'liste_projet_text_padding_bottom_2',
    'liste_projet_color_1',
    'liste_projet_css_1',
    'liste_projet_css_2',
    'liste_projet_color_2',
    'liste_projet_visite_page',
    'liste_projet_type',   
    'information_user_id_sha1', 
    'liste_projet_new_file', 
    'liste_projet_remove',  
    'liste_projet_name_font_size',
    'liste_projet_description1_font_size',
    'liste_projet_background_color',
    'liste_projet_background_color_1',
    'liste_projet_background_color_2',





'liste_projet_text_margin_all_1',
'liste_projet_text_margin_all_2',

'liste_projet_text_margin_top_1',
'liste_projet_text_margin_left_1',
'liste_projet_text_margin_right_1',
'liste_projet_text_margin_bottom_1', 



'liste_projet_text_padding_all_1',
'liste_projet_text_padding_all_2',

'liste_projet_text_padding_top_1',
'liste_projet_text_padding_left_1',
'liste_projet_text_padding_right_1',
'liste_projet_text_padding_bottom_1'
    

    );
 
    $liste_projet_id_sha1 =$_SESSION["time"]  ; 
 
 
    $apple->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1` ="'.$liste_projet_id_sha1.'"  ORDER BY `liste_projet_id` ';

 


    

    
    $apple->execution();
    $myJSON = json_encode($apple->list_row);   
     $b=array();



     $liste_projet_id= array() ; 
     $liste_projet_id_sha1 = array() ; 
     $liste_projet_id_parent = array() ; 
     $liste_projet_id_sha1_general = array() ; 
     $liste_projet_ip = array() ; 
     //5
     $liste_projet_img = array() ; 
     $liste_projet_name =array() ; 
     $liste_projet_name_tittle =array() ; 
     $liste_projet_description1_tittle = array() ; 
     $liste_projet_description1 = array() ; 
     //10
     $liste_projet_description2 = array() ; 
     $liste_projet_description3 = array() ; 
     $liste_projet_visibilite1 = array() ; 
     $liste_projet_visibilite2 = array() ; 
     $liste_projet_text_align_1_1 = array() ; 
     //15
     $liste_projet_text_align_2_1 = array() ; 
     $liste_projet_text_margin_top_1 = array() ; 
     $liste_projet_text_margin_left_1 = array() ; 
     $liste_projet_text_margin_right_1 = array() ; 
     $liste_projet_text_margin_bottom_1 = array() ; 
     //20
     $liste_projet_text_margin_top_2 = array() ; 
     $liste_projet_text_margin_left_2 = array() ; 
     $liste_projet_text_margin_right_2 = array() ; 
     $liste_projet_text_margin_bottom_2 = array() ; 
     $liste_projet_text_padding_top_1 = array() ; 
     //25
     $liste_projet_text_padding_left_1 = array() ; 
     $liste_projet_text_padding_right_1 = array() ; 
     $liste_projet_text_padding_bottom_1 = array() ; 
     $liste_projet_text_padding_top_2 = array() ; 
     $liste_projet_text_padding_left_2 = array() ; 
     //30
     $liste_projet_text_padding_right_2 = array() ; 
     $liste_projet_text_padding_bottom_2 = array() ; 
     $liste_projet_color_1 = array() ; 
     $liste_projet_css_1 = array() ; 
     $liste_projet_css_2 = array() ; 
     //35
     $liste_projet_color_2 = array() ; 
     $liste_projet_visite_page = array() ; 
     $liste_projet_type= array() ; 
     $information_user_id_sha1= array() ; 
     $liste_projet_new_file= array() ; 
     //40
     $liste_projet_remove= array() ; 
     $liste_projet_name_font_size = array() ; 
     $liste_projet_description1_font_size = array() ; 
     $liste_projet_background_color = array() ; 
     $liste_projet_background_color_1 = array() ; 
     //45
     $liste_projet_background_color_ = array() ; 

 
      $liste_projet_text_margin_all_1_ = array() ; 
      $liste_projet_text_margin_all_2_ = array() ; 
      $liste_projet_text_margin_top_1_ = array() ; 
      $liste_projet_text_margin_left_1_ = array() ; 
      $liste_projet_text_margin_right_1_ = array() ; 
      $liste_projet_text_margin_bottom_1_ = array() ; 





      $liste_projet_text_padding_all_1_ = array() ; 
      $liste_projet_text_padding_all_2_ = array() ; 
      $liste_projet_text_padding_top_1_ = array() ; 
      $liste_projet_text_padding_left_1_ = array() ; 
      $liste_projet_text_padding_right_1_ = array() ; 
      $liste_projet_text_padding_bottom_1_ = array() ; 
      
      

      
      
      
      
      

      
      
      
      
      

      
      
      

      
      
      
      
 
      
      
      
      
      

      
      
      
      
      

      
      
      
      
      

      
      
      
      
      

      
      
      
      
      
 














     // creation de la variable vide
     $number = 0 ; 
     // affectation valeur array 
     // execution et ajout des element dans la nouvelle table 
     
     $liste_projet_id=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_id_sha1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_id_parent=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_id_sha1_general=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_ip=$apple->add_array_element($number);
     $number ++ ; 
     // 5
     $liste_projet_img=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_name=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_name_tittle=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_description1_tittle=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_description1=$apple->add_array_element($number);
     $number ++ ; 
     // 10
     $liste_projet_description2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_description3=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_visibilite1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_visibilite2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_align_1_1=$apple->add_array_element($number);
     $number ++ ; 
     // 15
     $liste_projet_text_align_2_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_margin_top_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_margin_left_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_margin_right_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_margin_bottom_1=$apple->add_array_element($number);
     $number ++ ; 
     // 20
     $liste_projet_text_margin_top_2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_margin_left_2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_margin_right_2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_margin_bottom_2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_padding_top_1=$apple->add_array_element($number);
     $number ++ ; 
     // 25
     $liste_projet_text_padding_left_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_padding_right_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_padding_bottom_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_padding_top_2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_padding_left_2=$apple->add_array_element($number);
     $number ++ ; 
     // 30
     $liste_projet_text_padding_right_2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_text_padding_bottom_2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_color_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_css_1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_css_2=$apple->add_array_element($number);
     $number ++ ; 
     // 35
     $liste_projet_color_2=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_visite_page=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_type=$apple->add_array_element($number);
     $number ++ ; 
     $information_user_id_sha1=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_new_file=$apple->add_array_element($number);
     $number ++ ; 
     // 40
     $liste_projet_remove=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_name_font_size=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_description1_font_size=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_background_color=$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_background_color_1=$apple->add_array_element($number);
     $number ++ ; 
     // 45
     $liste_projet_background_color_2=$apple->add_array_element($number);
     $number ++ ; 



          $liste_projet_text_margin_all_1_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_margin_all_2_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_margin_top_1_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_margin_left_1_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_margin_right_1_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_margin_bottom_1_ = $apple->add_array_element($number);
               $number ++ ; 






               $liste_projet_text_padding_all_1_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_padding_all_2_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_padding_top_1_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_padding_left_1_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_padding_right_1_ = $apple->add_array_element($number);
               $number ++ ; 

          $liste_projet_text_padding_bottom_1_ = $apple->add_array_element($number);
               $number ++ ; 



    
   

/*


 var_dump($liste_projet_text_margin_top_1_) ; 
 var_dump($liste_projet_text_margin_left_1_) ; 
 var_dump($liste_projet_text_margin_right_1_) ; 
 var_dump($liste_projet_text_margin_bottom_1_) ; 

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



     
      
 

      

     
    ?>
 

 