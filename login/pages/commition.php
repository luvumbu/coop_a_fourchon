<?php
include("path.php");
 

$apple = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple->row,
  'liste_projet_id_sha1',
  'liste_projet_name',
  'liste_projet_name_tittle',
  'liste_projet_description3',
  'information_user_id_sha1',
  'liste_projet_date'
);


$apple->sql = 'SELECT * FROM `liste_projet` WHERE  `liste_projet_description3`="COMMUTION" ORDER BY `liste_projet_reg_date` DESC';
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





for($a = 0 ; $a<count($liste_projet_id_sha1_);$a++){
?>

<option value="<?php echo $liste_projet_name[$a] ?>"><?php echo $liste_projet_name[$a] ?></option>
<?php 
}


?>