<?php
include("path.php");
?>

<?php

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


$apple->sql = 'SELECT * FROM `liste_projet` WHERE  `liste_projet_description3`="COMMISSION" ORDER BY  `liste_projet_id` DESC';
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



 




?>





<div class="container mt-3">
  <h2>Liste de Commission</h2>
  <div action="/action_page.php"> 
    <select class="form-select" id="sel1" title="selection_menu_1_2" onchange="sellist1(this)">
      <?php
      for ($a = 0; $a < count($liste_projet_id_sha1_); $a++) {


        if($a==0){
          ?>
 

          <?php
        }
        ?>

        <option>
          <?php echo $liste_projet_name[$a] ?>
        </option>
      <?php
      }

      ?>

    </select>
    <br>
    <img  id="selection_menu_1_2_all" onclick="selection_menu_1_2_all(this)" title="<?php echo $liste_projet_name[0] ;?>" width="50" height="50" src="https://img.icons8.com/ios/50/visible--v1.png" alt="visible--v1" class="cursor_pointer" style="margin-top:25px;margin-bottom:25px"/>

  </div>


  <div>
    <input type="text" class="form-control" id="selection_menu_1_2_input" placeholder="ajouter un théme de Commition" >
    <div>
      <img width="50"  class="cursor_pointer" height="50" style="margin-top:50px" src="https://img.icons8.com/offices/50/plus.png" alt="plus" onclick="selection_menu_1_2_action(this)" />
      <p>Ajouter un théme </p>
    </div>
  </div>
</div>

<div id="selection_menu_1_2_selection"></div>


