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



<div class="selection_menu" id="selection_menu">
  <div onclick="selection_menu_action_1(this)" id="selection_menu_1" title="selection_menu_1">
    <img width="50" height="50"
      src="https://img.icons8.com/external-becris-lineal-color-becris/50/external-meeting-business-consultant-becris-lineal-color-becris-1.png"
      alt="external-meeting-business-consultant-becris-lineal-color-becris-1" />

    <div>
      Nos réunions/Commition
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
 
  <div onclick="selection_menu_action_1(this)" id="selection_menu_3" title="selection_menu_3" style="display:none">
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
    Ajax("selection_menu_action_1", "pages/" + _this.title + ".php");
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


  
 if(_this.title=="selection_menu_1_2"){
  const myTimeout = setTimeout(myGreeting, 200);

function myGreeting() {
  Ajax("selection_menu_1_2_selection", "pages/selection_menu_1_2_selection.php");
       var sel1 = document.getElementById("sel1").value ; 
       var ok = new Information("cookie/sel1.php"); // création de la classe 

      ok.add("sel1", sel1); // ajout de l'information pour lenvoi  
 



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
}
 }

    Ajax("selection_menu_action_2", "pages/" + _this.title + ".php");


    console.log(_this.title);
  }





  function selection_menu_1_2_action(_this) {
 

    
    const selection_menu_1_2_input =document.getElementById("selection_menu_1_2_input").value ; 
    console.log(selection_menu_1_2_input) ; 

    var ok = new Information("php_add/selection_menu_1_3_info_action_3.php"); // création de la classe 
      ok.add("liste_projet_name", selection_menu_1_2_input); // ajout de l'information pour lenvoi  
 


      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 












      const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  
  Ajax("selection_menu_action_2", "pages/selection_menu_1_2.php");

  const myTimeout = setTimeout(xx, 500);



}




function xx() {
  Ajax("selection_menu_1_2_selection", "pages/selection_menu_1_2_selection.php");
  var sel1 = document.getElementById("sel1") ; 
  console.log(sel1.value) ; 
}




    }

    function sellist1(_this) {
 



 


  
 
  const myTimeout = setTimeout(myGreeting, 0);
document.getElementById("selection_menu_1_2_selection").className="none" ; 
function myGreeting() {
  Ajax("selection_menu_1_2_selection", "pages/selection_menu_1_2_selection.php");

  const myTimeout2 = setTimeout(myGreeting2,50);

 
}
 

   // Ajax("selection_menu_action_2", "pages/" + _this.title + ".php");






   function myGreeting2() {

document.getElementById("selection_menu_1_2_selection").className="" ; 
   
    console.log(_this.title);



      
      
     // Ajax("selection_menu_action_2", "pages/selection_menu_1_2.php");

var effacer = [];


 var info_array =document.getElementsByClassName("info_array");

 var ok = document.getElementsByClassName(_this.value); 
 info_array_length = info_array.length;



for(r =0 ; r<info_array_length; r++){


if(info_array[r].innerText!=_this.value)
{

if(effacer.indexOf(info_array[r].innerText)==-1){
  effacer.push(info_array[r].innerText);
}
}
}

 

 

 

 
for(var i=0; i<effacer.length ; i ++) {
  

   
  var taille_ = document.getElementsByClassName(effacer[i]).length ; 
  console.log(taille_ ) ; 


  for(y = 0 ; y<taille_ ; y ++ ) {
    

    console.log(effacer[i]) ;  
    document.getElementsByClassName(effacer[i])[0].className="none";

  }


}

 
    }

 
    }
</script>


<style>
  .none{
    display:none ; 
  }
</style>