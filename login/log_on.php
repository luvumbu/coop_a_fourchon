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
    <img width="50" height="50" src="https://img.icons8.com/color/50/cancel--v1.png" alt="cancel--v1" />
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
  function disconnect() {
    Ajax("selection_menu_action_1", "pages/disconnect.php");

    const myTimeout = setTimeout(disconnect_, 100);

    function disconnect_() {
      location.reload();
    }


selection_menu_1_2
  }
  function selection_menu_action_2(_this) {

   

    document.getElementById("selection_menu_1_1").className = "opacity_0";
    document.getElementById("selection_menu_1_2").className = "opacity_0";
    document.getElementById("selection_menu_1_3").className = "opacity_0";
    document.getElementById(_this.title).className = "opacity_1";



    if (_this.title == "selection_menu_1_2") {
      const myTimeout = setTimeout(myGreeting, 200);

      function myGreeting() {
        Ajax("selection_menu_1_2_selection", "pages/selection_menu_1_2_selection.php");
        var sel1 = document.getElementById("sel1").value;
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



    const selection_menu_1_2_input = document.getElementById("selection_menu_1_2_input").value;
    console.log(selection_menu_1_2_input);

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
      var sel1 = document.getElementById("sel1");
      console.log(sel1.value);
    }




  }

  function sellist1(_this) {

  


 
 document.getElementById("selection_menu_1_2_all").title=_this.value ; 

    const myTimeout = setTimeout(myGreeting, 0);
    document.getElementById("selection_menu_1_2_selection").className = "none";
    function myGreeting() {
      Ajax("selection_menu_1_2_selection", "pages/selection_menu_1_2_selection.php");

      const myTimeout2 = setTimeout(myGreeting2, 50);


    }


    // Ajax("selection_menu_action_2", "pages/" + _this.title + ".php");








    function myGreeting2() {

      document.getElementById("selection_menu_1_2_selection").className = "";

      console.log(_this.title);





      // Ajax("selection_menu_action_2", "pages/selection_menu_1_2.php");

      var effacer = [];


      var info_array = document.getElementsByClassName("info_array");

      var ok = document.getElementsByClassName(_this.value);
      info_array_length = info_array.length;



      for (r = 0; r < info_array_length; r++) {


        if (info_array[r].innerText != _this.value) {

          if (effacer.indexOf(info_array[r].innerText) == -1) {
            effacer.push(info_array[r].innerText);
          }
        }
      }








      for (var i = 0; i < effacer.length; i++) {



        var taille_ = document.getElementsByClassName(effacer[i]).length;
        console.log(taille_);


        for (y = 0; y < taille_; y++) {


          console.log(effacer[i]);
          document.getElementsByClassName(effacer[i])[0].className = "none";

        }


      }


    }


  }


  function php_select_info_1_submit(_this) {
    var liste_projet_name = document.getElementById("liste_projet_name").value;
    var liste_projet_name_2 = document.getElementById("liste_projet_name_2").value;
    var liste_projet_date = document.getElementById("liste_projet_date").value;
    var liste_projet_date_1 = document.getElementById("liste_projet_date_1").value;
    var liste_projet_date_2 = document.getElementById("liste_projet_date_2").value;
    var ok = new Information("../php_update/php_select_info_1_submit.php"); // création de la classe 


    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi  
    ok.add("liste_projet_name", liste_projet_name); // ajout de l'information pour lenvoi  
    ok.add("liste_projet_name_tittle", liste_projet_name_2); // ajout de l'information pour lenvoi  
    ok.add("liste_projet_date", liste_projet_date); // ajout de l'information pour lenvoi  
    ok.add("liste_projet_date_1", liste_projet_date_1); // ajout de l'information pour lenvoi  
    ok.add("liste_projet_date_2", liste_projet_date_2); // ajout de l'information pour lenvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
_this.style.display="none" ; 



const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  _this.style.display="" ; 
}

  }


  function selection_menu_1_2_all(_this){
    

    



    var ok = new Information("cookie/selection_menu_1_2_all_cookie.php"); // création de la classe 


ok.add("selection_menu_1_2_all_cookie", _this.title); // ajout de l'information pour lenvoi  
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 




const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  Ajax("selection_menu_action_2", "pages/selection_menu_1_2_selection2.php");
   
}








    
  }



  function add_member_input() {
     const  add_member_input =document.getElementById("add_member_input").value; 


     alert(add_member_input) ; 
  }


  function selection_menu_1_2_selection2_add(_this) {
   


    _this.style.display="none" ; 
    var selection_menu_1_2_selection2_add =document.getElementById("input_"+_this.title).value ; 

 



    var ok = new Information("php_add/selection_menu_1_2_selection2_1.php"); // création de la classe 
    ok.add("liste_projet_id_parent",_this.title); // ajout de l'information pour lenvoi  
    ok.add("selection_menu_1_2_selection2_add", selection_menu_1_2_selection2_add); // ajout de l'information pour lenvoi  
 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 



    const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  _this.style.display="" ; 
  Ajax("selection_menu_action_2", "pages/selection_menu_1_2_selection2.php");

}

  }


  function add_member_input_remove_element(_this){
 


    var ok = new Information("php_update/add_member_input_remove_element.php"); // création de la classe 
    ok.add("liste_projet_id_sha1",_this.title); // ajout de l'information pour lenvoi  
 
 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 




document.getElementById(_this.title).style.display="none";
  }
</script>


<style>
  .none {
    display: none;
  }
</style>