 <?php
  // METHODE  update_1 add 

  $src_btn1 = '<img width="50" height="50" src="https://img.icons8.com/ios/50/add--v1.png" alt="add--v1"/>';
  $divGenerator = new DivGenerator("projet", "div_generator", "add_2", "__", $src_btn1);
  $divGenerator->set_className("id_user_projet", $_SESSION["index"][2]);
  $divGenerator->set_className("id_sha1_projet", time());
  // Ligne n°1 demande la ou je veux ajouter l'information 
  // Ligne n°2 demande les information la ou les cherchercherche je demande   id_user quand il est egale a 168 
  // Appel direct de la méthode pour générer le div
  echo  $divGenerator->generateDiv(); // Cela va directement afficher le div géné



  // METHODE  update_1 add 
  ?>



<div onclick="terminer(this)" class="terminer">
  TERMINER
</div>
 <div id="demo"></div>
 <style>
   #div_generator {

     color: white;
     cursor: pointer;
   }
 </style>

 <script>
   document.getElementById('div_generator').addEventListener('click', function() {
     document.getElementById('div_generator').style.display = "none";




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




   });


function terminer(_this) {
  
  var ok = new Information("config/terminer.php"); // création de la classe 
   //  ok.add("login", "root"); // ajout de l'information pour lenvoi 
   
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 

     location.reload() ; 

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
  .terminer{
    margin-top: 60px;
    background-color: red; 
    color: white;
    width: 150px;
    text-align: center;
    padding: 15px;
  }
 </style>