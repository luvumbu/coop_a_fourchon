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


 


if(count($apple->list_row)>0){


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






$anne = $liste_projet_date[0][0] . $liste_projet_date[0][1] . $liste_projet_date[0][2] . $liste_projet_date[0][3];
$mois = $liste_projet_date[0][5] . $liste_projet_date[0][6];
$jour = $liste_projet_date[0][8] . $liste_projet_date[0][9];

$heure = $liste_projet_date[0][11] . $liste_projet_date[0][12] . $liste_projet_date[0][13] . $liste_projet_date[0][14] . $liste_projet_date[0][15];












 


 



$apple__ = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple__->row,

  'liste_projet_name'

);


$apple__->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_description3`="COMMISSION" ORDER BY  `liste_projet_reg_date` ASC';
$apple__->execution();
$myJSON = json_encode($apple__->list_row);





$number = 0;



$liste_projet_name_ = $apple__->add_array_element($number);








 
















?>






<script>
  function not_selection_menu_1_1_setting(_this) {
    window.location.replace(window.location.href.replace("index.php/" + _this.title, "") + "cookie/not_selection_menu_1_1_setting.php");
  }
</script>


<?php


?>

<div id="all_title" title="<?php echo $liste_projet_id_sha1_[0] ?>"> </div>
<div class="container mt-3">
 

  <div class="mb-3 mt-3">
    <label>liste_projet_name</label>
    <input type="text" class="form-control" id="liste_projet_name" placeholder="liste_projet_name"
      value="<?php echo $liste_projet_name[0] ?>">
  </div>
  <div class="mb-3 mt-3">
    <label>COMMISSION</label>
    <select class="form-select" aria-label="Default select example" id="liste_projet_name_2">

      <option value="<?php echo $liste_projet_name_tittle[0] ?>">
        <?php echo $liste_projet_name_tittle[0] ?>
      </option>
      <?php

      for ($a = 0; $a < count($liste_projet_name_); $a++) {


        if ($liste_projet_name_tittle[0] != $liste_projet_name_[$a]) {
          ?>
          <option value="<?php echo $liste_projet_name_[$a] ?>">
            <?php echo $liste_projet_name_[$a] ?>
          </option>
          <?php
        }


      }
      ?>

    </select>
  </div>
  <div class="mb-3 mt-3">
    <label>Date</label>
    <input type="date" class="form-control" id="liste_projet_date" placeholder="liste_projet_date"
      value="<?php echo $anne . "-" . $mois . "-" . $jour ?>">
  </div>
  <div class="mb-3 mt-3">
    <label>Heure:</label>
    <input type="number" min="1" max="24" class="form-control" id="liste_projet_date_1" placeholder="Enter email"
      name="email" value="<?php echo $heure[0] . $heure[1] ?>">
  </div>
  <div class="mb-3 mt-3">
    <label>Minutes:</label>
    <input type="number" min="0" max="59" class="form-control" id="liste_projet_date_2" placeholder="Enter email"
      name="email" value="<?php echo $heure[3] . $heure[4] ?>">
  </div>


  <button type="submit" title="<?php echo $liste_projet_id_sha1_[0]; ?>" onclick="php_select_info_1_submit(this)"
    class="btn btn-primary">Submit</button>
    <button title='<?php echo $give_url ?>' height="100" 
  alt="checked--v1" onclick="not_selection_menu_1_1_setting(this)" type="button" class="btn btn-success" onclick="not_selection_menu_1_1_setting(this)">Terminer</button>

    
</div>


<?php 


}
else {
  unset($_SESSION["selection_menu_1_1_setting"]);



  ?>
  <script>
  
  location.reload();
  </script>
 <?php
}
?>