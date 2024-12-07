 <?php
    session_start();




    require_once '../Class/path_general_class.php';
    require_once '../Class/DivGenerator.php';
    require_once '../Class/DatabaseHandler.php';
    require_once '../Class/dbCheck.php';









    $name_table = $_SESSION["option0_2"];
    $colonne_table = $_SESSION["option1_1"];
    $id_user =  $_SESSION["option1_2"];
    $colonne_table_recherche =  $_SESSION["option2_1"];
    $colonne_table_recherche_resultat = $_SESSION["option2_2"];



    // Exemple d'utilisation n°8
    // cet exemple pemmet de dnner le nom d'une table et de faire une boucle 
    // demad
    $databaseHandler = new DatabaseHandler($dbname, $username);

    $databaseHandler->set_mysql_general("SELECT * FROM `$name_table` WHERE `$colonne_table_recherche` ='$colonne_table_recherche_resultat' ");
    // nom table + mysql+ connoles demande
    $databaseHandler->set_table_general("projet");
    $databaseHandler->general_dynamique();


    var_dump($dynamicVariables['img_projet_src']);

    var_dump($dynamicVariables['title_projet']);
    var_dump($dynamicVariables['description_projet']);



    $count = count($dynamicVariables['img_projet_src']);




    // Dernier exemple d'ajout d'éléments à un div
    // Ce script illustre comment modifier et ajouter des éléments à un div généré en utilisant la classe DivGenerator.

    // Création d'un nouvel objet DivGenerator avec les paramètres suivants :
    // Paramètre n°1 : Nom de la table à utiliser, ici "root".
    // Paramètre n°2 : Identifiant unique du div généré, ici "div_generator_idedlededededed".
    // Paramètre n°3 : Méthode d'envoi des données, ici "update_1" (indique qu'il s'agit d'une opération de mise à jour).
    // Paramètre n°4 : Séparateur des noms de classe, ici "__".
    // Paramètre n°5 : Texte affiché dans le div généré, ici 'My source' (indique la source ou une note d'information).


    for ($a = 0; $a < $count; $a++) {



        $colonne_table_recherche_resultat =  $dynamicVariables['id_sha1_projet'][$a];
        $input_1 = new DivGenerator("projet", "div_generator_" . $a, "update_1", "__", 'Saisissez un texte...');
        $input_1->set_class_style("input_1");

        // Ajout ou modification de classes au div généré
        // Ligne n°1 : Spécifie la classe "id_user" et associe la valeur "200", ce qui permet de modifier l'ID de l'utilisateur.
        // Ligne n°2 : Spécifie la classe "id_parent_user" et la vide, ce qui correspond à la suppression de l'ID du parent utilisateur.
        $input_1->set_className("id_sha1_projet", $colonne_table_recherche_resultat); // Modification de l'ID utilisateur
        $input_1->set_className("title_projet", ""); // Suppression de l'ID du parent utilisateur
        // Génération du div avec les classes et les valeurs définies ci-dessus
        $input_1->set_input("input");
        $input_1->generateDiv(); // Affiche le div généré après modification.





        $input_2 = new DivGenerator("projet", "div_generator_text_" . $a, "update_1", "__", 'Saisissez un texte...');
        $input_2->set_input(" text");
        $input_2->set_class_style("input_2");

        // Ajout ou modification de classes au div généré
        // Ligne n°1 : Spécifie la classe "id_user" et associe la valeur "200", ce qui permet de modifier l'ID de l'utilisateur.
        // Ligne n°2 : Spécifie la classe "id_parent_user" et la vide, ce qui correspond à la suppression de l'ID du parent utilisateur.
        $input_2->set_className("id_sha1_projet", $colonne_table_recherche_resultat); // Modification de l'ID utilisateur
        $input_2->set_className("description_projet", ""); // Suppression de l'ID du parent utilisateur
        // Génération du div avec les classes et les valeurs définies ci-dessus
        $input_2->set_input("text");
        $input_2->generateDiv(); // Affiche le div généré après modification.
        // Générer un champ de texte (input)
        // Appel de la méthode "get_input" pour créer un champ de texte (input) de type "input".




        $add_img = new DivGenerator("projet", "div_generator_img" . $a, "update_1", "__", 'Ajouter votre image...');
        $add_img->set_input(" text");
        $add_img->set_class_style("add_img");

        // Ajout ou modification de classes au div généré
        // Ligne n°1 : Spécifie la classe "id_user" et associe la valeur "200", ce qui permet de modifier l'ID de l'utilisateur.
        // Ligne n°2 : Spécifie la classe "id_parent_user" et la vide, ce qui correspond à la suppression de l'ID du parent utilisateur.
        $add_img->set_className("id_sha1_projet", $colonne_table_recherche_resultat); // Modification de l'ID utilisateur
        $add_img->set_className("description_projet", ""); // Suppression de l'ID du parent utilisateur
        // Génération du div avec les classes et les valeurs définies ci-dessus
        $add_img->set_input("text");
        $add_img->generateDiv(); // Affiche le div généré après modification.
        // Générer un champ de texte (input)
        // Appel de la méthode "get_input" pour créer un champ de texte (input) de type "input".




 
$src1 = "https://i.pinimg.com/236x/02/3f/c6/023fc6874164528602203e053b6f620d.jpg" ; 
 
$title_projet = $dynamicVariables['title_projet'][$a] ; 
$description_projet = $dynamicVariables['description_projet'][$a] ; 
 
 ?>




     <div class="form-container">
         <h1>Gestion des Éléments</h1>
         <form>

         

             <div class="form-group">
                 <label for="input-field">Entrée :</label>
                 <input value="<?php echo $title_projet  ?>" onkeyup="<?php echo $input_1->function_name . '(this)'; ?>" id="<?php echo  $input_1->name ?>" type="text" class="<?php echo  $input_1->className_array_total . ' ' . $input_1->class_style ?>">
             </div>

        
     <div class="box">
     <img class="<?php echo  $add_img->className_array_total . ' ' . $add_img->class_style ?>" onclick="add_img(this)" id="<?php echo  $add_img->name ?>"  src="<?php  echo $src1  ?>" alt="" srcset="">
     </div>
     
  
             
           
  
             <div class="image-container"> 
                 <div class="image-buttons">
                     <button type="button" class="remove-image-btn black">Supprimer l'image</button>
                 </div>
             </div>

             <div class="form-group">
                 <label for="textarea-field">Zone de texte :</label>
                 <textarea onkeyup="<?php echo $input_2->function_name . '(this)'; ?>" id="<?php echo  $input_2->name ?>" type="text" class="<?php echo  $input_2->className_array_total . ' ' . $input_2->class_style ?>"><?php echo $description_projet ?></textarea>
             </div>
         </form>
     </div>

 <?php
    }

    ?>
 <style>
.black {
    background-color: black;
    text-align: center;

}
    .add_img{
  
        background-color: black;
        color: white;
    
        text-align: center;


    }
    .add_img:hover{
cursor: pointer;       

    }
     .input_2 {
         width: 100%;
         border: 1px solid rgba(0, 0, 0, 0.3);
         height: 200px;
     }

     #div_generator_img_input {
         background-color: #cdcdcd;
         width: 150px;
         height: 150px;
         text-align: center;
         margin-top: 25px;
         margin-bottom: 25px;
     }

     #div_generator_img_input:hover {
         cursor: pointer;
     }
     .box{
        width: 150px;
        margin: auto;
     }
 </style>

 