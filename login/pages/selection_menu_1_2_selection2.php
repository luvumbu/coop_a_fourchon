<?php
include("path.php");





$selection_menu_1_2_all_cookie = $_SESSION["selection_menu_1_2_all_cookie"];










$apple_dos = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple_dos->row,
  'liste_projet_id_sha1',
  'liste_projet_name'

);


$apple_dos->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_name_tittle`="' . $selection_menu_1_2_all_cookie . '" AND `liste_projet_description3`="REUNION"  ORDER BY  `liste_projet_id` DESC';
$apple_dos->execution();
$myJSON = json_encode($apple_dos->list_row);



 
$number = 0;
$liste_projet_id_sha1_dos = $apple_dos->add_array_element($number);
$number++;

$liste_projet_name_dos = $apple_dos->add_array_element($number);
$number++;








for ($o = 0; $o < count($liste_projet_id_sha1_dos); $o++) {






  ?>

  <div class="container p-5 my-5 border">


    <table class="table">
      <thead>
        <tr>
          <th></th>

          <th>
            <?php echo $liste_projet_name_dos[$o]  ?>
          </th>

        </tr>
      </thead>
      <tbody>




<?php   include("add_member_input.php") ;?>
 
        <!--   <tr>
          <td>John Doe</td>
          <td><img width="50" height="50" src="https://img.icons8.com/color/50/remove.png" alt="remove"/></td>
  
  
        </tr>
        <tr>
          <td>Mary Moe</td>
          <td><img width="50" height="50" src="https://img.icons8.com/color/50/remove.png" alt="remove"/></td>
  
        </tr>
        <tr>
          <td>July Dooley</td>
          <td><img width="50" height="50" src="https://img.icons8.com/color/50/remove.png" alt="remove"/></td>
  
  
        </tr>-->
      </tbody>

      <thead>
        <tr>
          <th><input type="text" class="add_member_input" id="<?php echo "input_".$liste_projet_id_sha1_dos[$o] ?>"
              class="input_style_1"></th>
          <th title="<?php echo $liste_projet_id_sha1_dos[$o] ?>" onclick="selection_menu_1_2_selection2_add(this)"><img
              width="48" height="48" src="https://img.icons8.com/color/48/add--v1.png" alt="add--v1"
              class="cursor_pointer" class="cursor_pointer" /></th>
          <th>
            <img width="48" height="48" src="https://img.icons8.com/office/48/picture.png" alt="picture"
              class="cursor_pointer" />
          </th>
        </tr>


      </thead>
    </table>

  </div>

<?php


}






















/*
<div class="container">
  <h2>Toutes les images</h2>

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.w3schools.com/w3images/lights.jpg" target="_blank">
          <img src="https://www.w3schools.com/w3images/lights.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <img width="50" height="50" src="https://img.icons8.com/color/50/remove.png" alt="remove" />
            <img width="50" height="50" src="https://img.icons8.com/office/50/checked-checkbox--v1.png"
              alt="checked-checkbox--v1" />
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.w3schools.com/w3images/nature.jpg" target="_blank">
          <img src="https://www.w3schools.com/w3images/nature.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <img width="50" height="50" src="https://img.icons8.com/color/50/remove.png" alt="remove" />
            <img width="50" height="50" src="https://img.icons8.com/office/50/unchecked-checkbox.png"
              alt="unchecked-checkbox" />
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.w3schools.com/w3images/fjords.jpg" target="_blank">
          <img src="https://www.w3schools.com/w3images/fjords.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <img width="50" height="50" src="https://img.icons8.com/color/50/remove.png" alt="remove" />
            <img width="50" height="50" src="https://img.icons8.com/office/50/unchecked-checkbox.png"
              alt="unchecked-checkbox" />
          </div>
        </a>
      </div>
    </div>


  </div>
</div>
</div>

<style>
  .cursor_pointer {
    cursor: pointer;
  }

  .add_member_input {
    border: 1px solid rgba(0, 0, 0, 0.2);
  }
</style>

*/


?>


<style>
  .cursor_pointer {
    cursor: pointer;
  }

  .add_member_input {
    width: 60%;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 5px;
  }
</style>