<?php
// METHODE  update_1 add 

$text_menu_1 = 'Ajouter element';
$divGenerator = new DivGenerator("projet", "div_generator", "add_2", "__", $text_menu_1);


$divGenerator->set_class_style("input_2");
$divGenerator->set_className("id_user_projet", $_SESSION["index"][2]);
$divGenerator->set_className("id_sha1_projet", time());
$divGenerator->className_array();

// Ligne n°1 demande la ou je veux ajouter l'information 
// Ligne n°2 demande les information la ou les cherchercherche je demande   id_user quand il est egale a 168 
// Appel direct de la méthode pour générer le div
//echo  $divGenerator->generateDiv(); // Cela va directement afficher le div géné
// METHODE  update_1 add 
?>
<div class="display_flex_home">
  <div>
    <div onclick="<?php echo $divGenerator->function_name . '(this)' ?>" id="<?php echo $divGenerator->name ?>" class="<?php echo $divGenerator->className_array_total ?>"> <?php echo $divGenerator->text ?></div>
  </div>
  <div>
    <div onclick="terminer(this)" class="terminer">TERMINER</div>
  </div>
  <div class="deconnexion" onclick="deconnexion()">Déconnexion</div>
</div>
<script>
  function terminer(_this) {

    var ok = new Information("config/terminer.php"); // création de la classe 
    //  ok.add("login", "root"); // ajout de l'information pour lenvoi 

    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

    location.reload();

  }
</script>
<div id="demo"></div>
<style>
  #div_generator {


    cursor: pointer;
  }
</style>

<script>
  document.getElementById('div_generator').addEventListener('click', function() {





    var ok = new Information("config/home_menu.php"); // création de la classe 
    // ok.add("login", "root"); // ajout de l'information pour lenvoi 

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
<script>
  function all_img_f(_this) {
 
    var info = document.getElementById("all_img"+_this.title) ; 
 


    if(info.className=="display_none") {
      info.className="" ; 
    }
    else {
      info.className="display_none" ; 

    }
}



function option_img(_this) {



  const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte); // Affiche les valeurs formatées dans la console pour le débogage


  
 
 

 
     

if(texteFormatte[3]==' remove_img ') {


 
  document.getElementById("id_"+_this.title).className="display_none" ; 
 
}
else {
  const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  location.reload() ; 
}
}
 


 
var ok = new Information("config/option_img.php"); // création de la classe 
ok.add("projet", texteFormatte[0]); // ajout de l'information pour lenvoi 
ok.add("id_sha1_projet", texteFormatte[1]); // ajout de l'information pour lenvoi 
ok.add("img_projet_src", texteFormatte[2]); // ajout de l'information pour lenvoi 
ok.add("option_img", texteFormatte[3]); // ajout de l'information pour lenvoi 
ok.add("nom_dossier", texteFormatte[4]); // ajout de l'information pour lenvoi 


 
 
   
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
    padding: 17px;
  }
 </style>
 

 <script>
  function deconnexion() {
    window.location.href = "Class/log_off.php";
  }
 </script>