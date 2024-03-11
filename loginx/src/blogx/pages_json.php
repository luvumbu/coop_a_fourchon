<?php 
include("../../model/class/php/Insertion_Bdd.php") ;  
include("../../model/class/php/Select_datas.php") ;  
include("../../model/class/php/connexion.php") ;   

//echo give_url() ; 
 
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
    'liste_projet_background_color' 

    

    );
 
    $liste_projet_id_sha1 = give_url() ; 
    $apple->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1` ="'.$liste_projet_id_sha1.'"  ORDER BY liste_projet_id';
    $apple->execution();
    $myJSON = json_encode($apple->list_row); 

    $apple_2 = new Select_datas($servername,$username,$password,$dbname);

    array_push(
      $apple_2->row,
  
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
    'liste_projet_background_color'

      
  
      );
   
      
      $apple_2->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1.'"  ORDER BY liste_projet_id';
      $apple_2->execution();







      $apple_3 = new Select_datas($servername,$username,$password,$dbname);

      array_push(
        $apple_3->row,
    
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
        'liste_projet_background_color'

        
        
    
        );
     
        
        $apple_3->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1.'"  ORDER BY liste_projet_id';
        $apple_3->execution();
     



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


 

 
$number = 0 ; 
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 




$liste_projet_id_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_id_parent_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1_general_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_ip_2 =$apple_2->add_array_element($number);
$number ++ ; 


$liste_projet_img_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_name_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_description1_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_description2_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_visibilite1_2 =$apple_2->add_array_element($number);
$number ++ ; 


$liste_projet_visibilite2_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_type_2 =$apple_2->add_array_element($number);
$number ++ ; 
$information_user_id_sha1_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_new_file_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_reg_date_2 =$apple_2->add_array_element($number);
$number ++ ; 


$liste_projet_color_1_2 =$apple_2->add_array_element($number);
$number ++ ; 

$liste_projet_color_2_2 =$apple_2->add_array_element($number);
$number ++ ; 

$liste_projet_name_font_size_2 =$apple_2->add_array_element($number);
$number ++ ; 
$liste_projet_description1_font_size_2 =$apple_2->add_array_element($number);
$number ++ ; 

$liste_projet_background_color_2 =$apple_2->add_array_element($number);
$number ++ ; 



   

$a_=array();
$b_=array();


 for($a = 0 ; $a < count($liste_projet_id_sha1_2) ; $a ++) {
  $apple_4 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_4->row,
  
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
    'liste_projet_background_color' 

    
  
    );
  
    
    $apple_4->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1` ="'.$liste_projet_id_sha1_2[$a].'" ORDER BY liste_projet_id ';
    $apple_4->execution();
  
  
    $number = 0 ; 
    // affectation valeur array 
    // execution et ajout des element dans la nouvelle table 
    
    
    
    
 
if($apple_4->list_row>0){
   array_push($a_,$apple_4->list_row);


 

 
}


   
 
  
   
  

 
 }


 
 
 







 



 



 if($a_>0){

for($a_2_0 = 0 ; $a_2_0 < count($a_) ; $a_2_0 ++ )


for($o = 0 ; $o<count($a_[0]) ; $o++) {






  if($o==1){
   
    $apple_5 = new Select_datas($servername,$username,$password,$dbname);

    array_push(
      $apple_5->row,
    
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
      'liste_projet_background_color'

      
    
      );
    
      
      $apple_5->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$a_[$a_2_0][$o].'"  ORDER BY liste_projet_id';
      $apple_5->execution();
array_push($b_,$apple_5->list_row);
  }
}

 }
 ?>
