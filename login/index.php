<?php
session_start();
date_default_timezone_set('europe/paris');
?>
<!DOCTYPE html>
<html lang="FR">

<head>
  <title>Bb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <script src="../model/class/js/Ajax.js"></script>
  <script src="../model/class/js/Information.js"></script>
  <script src="../model/class/js/Atribute.js"></script>


  <script>

    //Ajax(nomId,document/source.txt);

    // var ok = new Information("php.php"); // création de la classe
    // ok.add("login", "root"); // ajout de l'information pour lenvoi
    // ok.add("password", "root"); // ajout d'une deuxieme information denvoi
    // console.log(ok.info()); // demande l'information dans le tableau
    // ok.push(); // envoie l'information au code pkp

    // var monAtribute = new Atribute("test");
    // monAtribute.exe_atribute("class","red");
  </script>






  <div class="container mt-5 text-center">
    <h1> Coop’ à Fourchon</h1>
  </div>



  <?php
  include("../model/class/php/Select_datas.php");

  include("../model/class/php/My_date.php");




  if (isset($_SESSION["info_login_verif"])) {
    if ($_SESSION["info_login_verif"]) {
      include("log_on.php");
    } else {
      include("log_off.php");
    }
  } else {
    include("log_off.php");
  }

  ?>

  <script>
    function submit_1(_this) {



      const adress_mail = document.getElementById("adress_mail").value;  
      const password = document.getElementById("password").value;


      _this.style.display = "none";

      var ok = new Information("php_off/log_in.php"); // création de la classe 
      ok.add("adress_mail", adress_mail); // ajout de l'information pour lenvoi   
      ok.add("password", password); // ajout de l'information pour lenvoi     
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 



      const myTimeout = setTimeout(myGreeting, 500);

      function myGreeting() {

        _this.style.display = "block";
        Ajax("info_login", "info_login.php");
        location.reload();


      }






    }


    function selection_menu_1_3_info_action_1(_this) {
      //  alert(document.getElementById("selection_menu_1_3_info_select").value) ; 
      _this.style.display = "none";
      const liste_projet_name = document.getElementById("selection_menu_1_3_info_5").value;
    
      const myTimeout = setTimeout(myGreeting, 500);


 

      var ok = new Information("php_add/selection_menu_1_3_info_action_1.php"); // création de la classe 
      ok.add("liste_projet_name",liste_projet_name); // ajout de l'information pour lenvoi  
    



      console.log(ok.info()); // demande l'information dans le tableau
   ok.push(); // envoie l'information au code pkp 






      function myGreeting() {
        _this.style.display = "block";
        


        Ajax("selection_menu_1_3_info_select", "pages/commition.php");



      }

    }

    function selection_menu_1_3_info_action_2(_this) {

      _this.style.display="none" ; 
      const selection_menu_1_3_info_1 = document.getElementById("selection_menu_1_3_info_1").value;
      const selection_menu_1_3_info_2 = document.getElementById("selection_menu_1_3_info_2").value;
      const selection_menu_1_3_info_3 = document.getElementById("selection_menu_1_3_info_3").value;
      const selection_menu_1_3_info_4 = document.getElementById("selection_menu_1_3_info_4").value;

      const selection_menu_1_3_info_select = document.getElementById("selection_menu_1_3_info_select").value;



      console.log(selection_menu_1_3_info_1);
      console.log(selection_menu_1_3_info_2);

      console.log(selection_menu_1_3_info_3);
      console.log(selection_menu_1_3_info_4);
      console.log(selection_menu_1_3_info_select);




      var ok = new Information("php_add/selection_menu_1_3_info_action_2.php"); // création de la classe 
      ok.add("selection_menu_1_3_info_1", selection_menu_1_3_info_1); // ajout de l'information pour lenvoi  
      ok.add("selection_menu_1_3_info_2", selection_menu_1_3_info_2); // ajout de l'information pour lenvoi   
      ok.add("selection_menu_1_3_info_3", selection_menu_1_3_info_3); // ajout de l'information pour lenvoi   
      ok.add("selection_menu_1_3_info_4", selection_menu_1_3_info_4); // ajout de l'information pour lenvoi   
      ok.add("selection_menu_1_3_info_select", selection_menu_1_3_info_select); // ajout de l'information pour lenvoi   



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 






      const myTimeout = setTimeout(myGreeting, 500);

      function myGreeting() {
        

        Ajax("selection_menu_action_2", "pages/selection_menu_1_1.php");


        document.getElementById("selection_menu_1_2").className="opacity_0" ;
        document.getElementById("selection_menu_1_3").className="opacity_0" ;
        document.getElementById("selection_menu_1_1").className="opacity_1" ;





      }

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

}







    }
  </script>

  <style>
    .none {
      display: none;
    }
  </style>

  <?php
  /*
    if(isset($_SESSION["information_user_id_sha1"])){
      echo $_SESSION["information_user_id_sha1"] ; 
    }

    */
  ?>


  <div style="margin-bottom:200px"></div>