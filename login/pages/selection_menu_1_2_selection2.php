<?php
include("path.php");




$selection_menu_1_2_all_cookie = $_SESSION["selection_menu_1_2_all_cookie"] ;

$apple = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple->row,
  'liste_projet_id_sha1',
  'liste_projet_name',
  'liste_projet_name_tittle',
  'liste_projet_description3',
  'information_user_id_sha1',
  'liste_projet_date',
  'liste_projet_user_name',
  'liste_projet_user_prenom',
  'liste_projet_reg_date'

);


$apple->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_name_tittle`="'.$selection_menu_1_2_all_cookie.'"  ORDER BY  `liste_projet_id` DESC';
$apple->execution();
$myJSON = json_encode($apple->list_row);



$number = 0;


$liste_projet_id_sha1_ = $apple->add_array_element($number);
$number++;
$liste_projet_name = $apple->add_array_element($number);
$number++;
$liste_projet_name_tittle = $apple->add_array_element($number);
$number++;
$liste_projet_description3 = $apple->add_array_element($number);
$number++;
$information_user_id_sha1 = $apple->add_array_element($number);
$number++;
$liste_projet_date = $apple->add_array_element($number);

$number++;
$liste_projet_user_name = $apple->add_array_element($number);
$number++;
$liste_projet_user_prenom = $apple->add_array_element($number);

$number++;
$liste_projet_reg_date = $apple->add_array_element($number);



var_dump($liste_projet_reg_date);
 




?>