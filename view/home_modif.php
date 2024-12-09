 <?php

  $input_plus = new DivGenerator("projet", "div_generator_text_plus", "add_1", "__", 'Ajouter un element');
  $input_plus->set_input("text");
  $input_plus->set_class_style("input_plus");

  // Ajout ou modification de classes au div généré
  // Ligne n°1 : Spécifie la classe "id_user" et associe la valeur "200", ce qui permet de modifier l'ID de l'utilisateur.
  // Ligne n°2 : Spécifie la classe "id_parent_user" et la vide, ce qui correspond à la suppression de l'ID du parent utilisateur.
  $input_plus->set_className("id_sha1_projet", $colonne_table_recherche_resultat); // Modification de l'ID utilisateur
  $input_plus->set_className("description_projet", ""); // Suppression de l'ID du parent utilisateur
  // Génération du div avec les classes et les valeurs définies ci-dessus
  $input_plus->set_input("text");
  $input_plus->generateDiv(); // Affiche le div généré après modification.
  // Générer un champ de texte (input)
  // Appel de la méthode "get_input" pour créer un champ de texte (input) de type "input".


  ?>







 <div class="display_flex_home">
   <div>
     <div onclick="div_generator_text_plus(this)" id="<?php echo  $input_plus->name ?>" type="text" class="<?php echo  $input_plus->className_array_total . ' ' . $input_plus->class_style ?>"><?php echo $input_plus->text ?></div>
   </div>
   <div>
     <div onclick="terminer(this)" class="terminer">TERMINER</div>
   </div>
   <div>
   <div class="deconnexion" onclick="deconexion()">
      DECONNEXION
      
     </div>
   </div>

 </div>
 <div id="demo"></div>


 <script>
   function div_generator_text_plus(_this) {

     _this.style.display = "none";




     var ok = new Information("config/home_menu.php"); // création de la classe 
     //  ok.add("login", "root"); // ajout de l'information pour lenvoi 

     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 





     function afficherMessage(message) {
       const xhttp = new XMLHttpRequest();
       xhttp.onload = function() {
         document.getElementById("demo").innerHTML = this.responseText;
       }
       xhttp.open("GET", "view/demo.php");
       xhttp.send();

     }

     setTimeout(afficherMessage, 250);


   }



   function deconexion(){
    window.location.href = "Class/log_off.php";
   }

   function terminer(_this) {

     var ok = new Information("config/terminer.php"); // création de la classe 
     //  ok.add("login", "root"); // ajout de l'information pour lenvoi 

     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 

     location.reload();

   }

   function div_generator_img_input(_this) {
     window.location.href = "add_img/index.php";
   }


   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
     document.getElementById("demo").innerHTML = this.responseText;
   }
   xhttp.open("GET", "view/demo.php");
   xhttp.send();



   function add_img(_this) {

     const texteFormatte = afficherValeursFormattees(_this.className);
     console.log(texteFormatte[3]); // Affiche les valeurs formatées dans la console pour le débogage
     document.getElementById("add_img").className = "";

     var ok = new Information("add_img/name.php"); // création de la classe 
     ok.add("name", texteFormatte[3]); // ajout de l'information pour lenvoi 

     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 


   }
 </script>


 <div id="add_img" class="display_none">
   <?php
    include_once "view/add_img.php";
    ?>
 </div>

 <style>
  .display_flex_home div div {
padding: 17px ;
  }
  .display_flex_home div:hover {
 cursor: pointer;
 background-color: white;
 color: black;
  }
  .display_flex_home {
    display: flex;
    justify-content: space-around;
    background-color: black;
    color: white;

  }
  .deconnexion{
    background-color: red;
  }
 </style>