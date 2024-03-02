<?php


function give_url()
{

  // url == $_SERVER['PHP_SELF'] ; 
  $reverse_el = strrev($_SERVER['PHP_SELF']);
  $val_final = "";
  for ($a = 0; $a < strlen($_SERVER['PHP_SELF']); $a++) {


    if ($reverse_el[$a] == "/") {
      break;
    } else {
      $val_final = $val_final . $reverse_el[$a];
    }
  }

  $val_final = strrev($val_final);
  return $val_final;
}
/*

echo give_url() ; 

*/
$give_url = give_url();
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
  'liste_projet_user_prenom'
);


$apple->sql = 'SELECT * FROM `liste_projet` WHERE  `liste_projet_id_sha1`="' . $give_url . '"';
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




var_dump($liste_projet_id_sha1_);




?>

<img width="100" title='<?php echo $give_url ?>' height="100" src="https://img.icons8.com/office/100/checked--v1.png"
  alt="checked--v1" onclick="not_selection_menu_1_1_setting(this)" />



<script>
  function not_selection_menu_1_1_setting(_this) {
    window.location.replace(window.location.href.replace("index.php/" + _this.title, "") + "cookie/not_selection_menu_1_1_setting.php");
  }
</script>