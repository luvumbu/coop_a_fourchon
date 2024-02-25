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
  'liste_projet_date'
);


$apple->sql = 'SELECT * FROM `liste_projet` WHERE  `liste_projet_description3`="COMMUTION" ORDER BY  `liste_projet_id` DESC';
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







?>





<div class="container mt-3">
  <h2>Liste de themes</h2>



  <div action="/action_page.php">

    <select class="form-select" id="sel1" name="sellist1">
      <?php
      for ($a = 0; $a < count($liste_projet_id_sha1_); $a++) {
        ?>

        <option>
          <?php echo $liste_projet_name[$a] ?>
        </option>
      <?php
      }

      ?>

    </select>
    <br>


  </div>


  <div>
    <input type="text" class="form-control" id="selection_menu_1_2_input" placeholder="ajouter un théme de reunion" >
    <div>
      <img width="50" height="50" style="margin-top:50px" src="https://img.icons8.com/offices/50/plus.png" alt="plus" onclick="selection_menu_1_2_action(this)" />
      <p>Ajouter un théme </p>
    </div>
  </div>
</div>