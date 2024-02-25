<?php 
$apple = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple->row,
  'liste_projet_id_sha1',
  'liste_projet_name',
  'liste_projet_id',
  'liste_projet_date'



);


$apple->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_date` >= CURDATE()  ORDER BY `liste_projet_date`';
$apple->execution();
$myJSON = json_encode($apple->list_row);


$number = 0;

$liste_projet_id_sha1 = $apple->add_array_element($number);
$number++;
$liste_projet_name = $apple->add_array_element($number);
$number++;
$liste_projet_id = $apple->add_array_element($number);
$number++;
$liste_projet_date = $apple->add_array_element($number);
$number++;
/*
   var_dump($liste_projet_id_sha1 ) ; 
   var_dump($liste_projet_name ) ; 
   var_dump($liste_projet_id ) ; 

   */

?>



<div class="selection_menu">
  <div onclick="selection_menu_action_1(this)" id="selection_menu_1" title="selection_menu_1">
    <img width="50" height="50"
      src="https://img.icons8.com/external-becris-lineal-color-becris/50/external-meeting-business-consultant-becris-lineal-color-becris-1.png"
      alt="external-meeting-business-consultant-becris-lineal-color-becris-1" />

    <div>
      Nos réunions
    </div>
  </div>
  <div onclick="selection_menu_action_1(this)" id="selection_menu_2" title="selection_menu_2">
    <img width="50" height="50"
      src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/50/external-budget-money-and-economy-itim2101-lineal-color-itim2101.png"
      alt="external-budget-money-and-economy-itim2101-lineal-color-itim2101" />
    <div>
      Notre syndicat
    </div>
  </div>

  <div onclick="selection_menu_action_1(this)" id="selection_menu_3" title="selection_menu_3">
    <img width="50" height="50"
      src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/50/external-setting-seo-and-marketing-xnimrodx-lineal-color-xnimrodx-2.png"
      alt="external-setting-seo-and-marketing-xnimrodx-lineal-color-xnimrodx-2" />
    <div>
      Nos commissions
    </div>

  </div>

  <div onclick="selection_menu_action_1(this)" id="selection_menu_4" title="selection_menu_4">
    <img width="50" height="50" src="https://img.icons8.com/color/50/settings--v1.png" alt="settings--v1" />
    <div>
    Paramètres
    </div>

  </div>
  <div onclick="disconnect()" id="selection_menu_5" title="selection_menu_5">
            <img width="50" height="50" src="https://img.icons8.com/color/50/cancel--v1.png" alt="cancel--v1"/>
    <div>
    Déconnexion
    </div>

  </div>
</div>




<div id="selection_menu_action_1"> </div>
<div id="selection_menu_action_2"> </div>


<style>
  .selection_menu {
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin: auto;
    margin-top: 100px;
    text-align: center;
  }

  .selection_menu img:hover {
    cursor: pointer;
  }

  .opacity_0 {
    opacity: 0.3;
    transition: 1s all;
  }

  .opacity_1 {
    opacity: 1;
    transition: 1s all;
  }
</style>

<script>
  function selection_menu_action_1(_this) {

    Ajax("selection_menu_action_2", "pages/not.html");

    document.getElementById("selection_menu_1").className = "opacity_0";
    document.getElementById("selection_menu_2").className = "opacity_0";
    document.getElementById("selection_menu_3").className = "opacity_0";
    document.getElementById("selection_menu_4").className = "opacity_0";
 


    document.getElementById(_this.title).className = "opacity_1";
    Ajax("selection_menu_action_1", "pages/" + _this.title + ".html");
  }
function disconnect(){
  Ajax("selection_menu_action_1", "pages/disconnect.php");

  const myTimeout = setTimeout(disconnect_, 100);

function disconnect_() {
  location.reload();
}



}
  function selection_menu_action_2(_this) {

    document.getElementById("selection_menu_1_1").className = "opacity_0";
    document.getElementById("selection_menu_1_2").className = "opacity_0";
    document.getElementById("selection_menu_1_3").className = "opacity_0";
    document.getElementById(_this.title).className = "opacity_1";


  



    Ajax("selection_menu_action_2", "pages/" + _this.title + ".php");


    console.log(_this.title);
  }
</script>