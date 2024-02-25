<div class="selection_menu_1_3">
  <div class="mb-3 mt-3">
    <label for="selection_menu_1_3_info_1" class="form-label">Sujet de la reunion:</label>
    <input type="text" class="form-control" id="selection_menu_1_3_info_1" placeholder="Enter le sujet de la reunion ex:salle commune"
      name="email">
  </div>
  <div class="mb-3">
    <label for="selection_menu_1_3_info_2" class="form-label">Jour de la reuinion</label>
    <input type="date" class="form-control" id="selection_menu_1_3_info_2" placeholder="Enter password" name="pswd">
  </div>
  <div class="mb-3">
    <label for="selection_menu_1_3_info_3" class="form-label">heure</label>
    <input type="number" class="form-control taile_r" id="selection_menu_1_3_info_3"
      placeholder="Enter le sujet de la reunion ex:salle commune" name="email" min="1" max="24">



    <label for="selection_menu_1_3_info_4" class="form-label">minute</label>
    <input type="number" class="form-control taile_r" id="selection_menu_1_3_info_4"
      placeholder="Enter le sujet de la reunion ex:salle commune"   min="1" max="59">

  </div>
  <label  style="margin-top:25px;">Commition</label>
  <select class="form-select" aria-label="Default select example" style="margin-top:50px;" id="selection_menu_1_3_info_select">

    <?php
    include("commition.php");
    ?>
  </select>
  <div class="cursor_pointer">
    Ajouter une commition
    <input type="text" class="form-control taile_r" id="selection_menu_1_3_info_5" placeholder="Nom de la commution" name="email" min="1"
      max="24">

    <img width="50" onclick="selection_menu_1_3_info_action_1(this)" height="50" src="https://img.icons8.com/offices/50/plus.png" alt="plus" />
  </div>





  <div type="submit"  onclick="selection_menu_1_3_info_action_2(this)" style="margin-top:50px" class="btn btn-primary">Valider reuinion</div>

</div>


<style>
  .selection_menu_1_3 {
    width: 80%;
    margin: auto;
    margin-top: 100px;
  }

  .taile_r {
    width: 20%;
  }

  .cursor_pointer:hover {
    cursor: pointer;
  }
</style>