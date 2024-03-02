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
  'liste_projet_date',
  'liste_projet_user_name',
  'liste_projet_user_prenom',
  'liste_projet_reg_date'

);


$apple->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_description3` ="COMMISSION"';
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





?>





<div class="selection_menu_1_1">

  <table>
    <thead>
      <tr>
        <th>Sujet de la reunion</th>
        <th>Crée par</th>
        <th>Création</th>
        <th>Option</th>





      </tr>
    </thead>
    <tbody>



      <?php

      for ($a = 0; $a < count($liste_projet_id_sha1_); $a++) {



        $anne = $liste_projet_reg_date[$a][0] . $liste_projet_reg_date[$a][1] . $liste_projet_reg_date[$a][2] . $liste_projet_reg_date[$a][3];



        $anne = $liste_projet_reg_date[$a][0] . $liste_projet_reg_date[$a][1] . $liste_projet_reg_date[$a][2] . $liste_projet_reg_date[$a][3];
        $mois = $liste_projet_reg_date[$a][5] . $liste_projet_reg_date[$a][6];
        $jour = $liste_projet_reg_date[$a][8] . $liste_projet_reg_date[$a][9];


        ?>

        <tr>
          <td>

            <?php echo $liste_projet_name[$a] ?>
          </td>
          <td>
            <?php echo $liste_projet_user_name[$a] . ' ' . $liste_projet_user_prenom[$a] ?>
          </td>


          <td>

            <?php echo $jour . "/" . $mois . "/" . $anne ?>
          </td>

 
 <td>
 
 <img onclick="selection_menu_1_1_setting(this)" title="<?php echo $liste_projet_id_sha1_[$a] ;?>" width="40" height="40" src="https://img.icons8.com/ios/40/settings--v1.png" alt="settings--v1" class="cursor_pointer"/>
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

  .modif {
    background-color: blue;
  }

  .selection_menu_1_1 {

    text-align: center;
  }

  table {
    width: 60%;
    margin: auto;
    margin-top: 150px;
  }
  .cursor_pointer:hover{
    cursor: pointer;
  }

  tr,
  td {
    border: 1px solid rgba(0, 0, 0, 0.3);
  }
</style>