<?php
include("path.php");
?>
<div class="selection_menu">

  <h1 class="text_center">
    Toutes les reuinions
  </h1>
</div>

<style>
  .text_center {
    text-align: center;

    width: 100%;
  }
</style>




<style>
  table {
    text-align: center;
    width: 80%;
    margin: auto;
    margin-top: 150px;
  }

  td,
  tr {
    border: 1px solid rgba(0, 0, 0, 0.2);
  }
</style>

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


$apple->sql = 'SELECT * FROM `liste_projet` WHERE  `liste_projet_description3`="REUNION" ORDER BY `liste_projet_date`  DESC';
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



<div class="selection_menu_1_1">

  <table>
    <thead>
      <tr>
        <th>Sujet de la reunion</th>
        <th>Crée par</th>
        <th>Commition</th>
        <th>Date</th>
        <th>Heure</th>


      </tr>
    </thead>
    <tbody>



      <?php

      for ($a = 0; $a < count($liste_projet_id_sha1_); $a++) {



        $anne = $liste_projet_date[$a][0] . $liste_projet_date[$a][1] . $liste_projet_date[$a][2] . $liste_projet_date[$a][3];
        ?>

        <tr>
          <td>

            <input type="text" class="border_none" value="<?php echo $liste_projet_name[$a] ?>">
          </td>
          <td>
            <?php echo $liste_projet_id_sha1_[$a] ?>
          </td>
          <td>
            <?php echo $liste_projet_name_tittle[$a] ?>
          </td>

          <td>

            <input type="text" class="border_none" value="<?php echo $anne ?>">
          </td>
          <td>
            <?php echo $liste_projet_date[$a] ?>
          </td>


        </tr>




<!--
        <tr class="modif">
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>

          <td><input type="text"></td>
          <td><input type="text"></td>


        </tr>

      -->



      <?php
      }
      ?>

    </tbody>
  </table>
</div>

<style>
  .border_none {
    border: 1px solid rgba(0, 0, 0, 0);
  }
  .modif{
    background-color:blue;
  }
</style>