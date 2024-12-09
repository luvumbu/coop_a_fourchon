 <?php
    session_start();
    require_once '../Class/path_general_class.php';
    require_once '../Class/DivGenerator.php';
    require_once '../Class/DatabaseHandler.php';
    require_once '../Class/dbCheck.php';
    require_once '../Class/CheckFileExists.php' ; 
    require_once '../Class/delete_file.php' ; 


 
// Example usage

    


    
/*
// Exemple d'utilisation
$file_path = "path/to/your/file.txt";
delete_file($file_path);
*/



    $fileExtensions = [
        'images' => ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp'],
        'documents' => ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'odt'],
        'audio' => ['mp3', 'wav', 'aac', 'flac', 'ogg', 'm4a','m4a'],
        'video' => ['mp4', 'avi', 'mkv', 'mov', 'wmv', 'flv', 'webm'],
        'archives' => ['zip', 'rar', '7z', 'tar', 'gz', 'bz2'],
        'code' => ['html', 'css', 'js', 'php', 'py', 'java', 'c', 'cpp', 'cs', 'rb', 'ts', 'json', 'xml', 'yml'],
        'executables' => ['exe', 'bin', 'sh', 'bat', 'msi', 'app'],
    ];









    $name_table = $_SESSION["option0_2"];
    $colonne_table = $_SESSION["option1_1"];
    $id_user =  $_SESSION["option1_2"];
    $colonne_table_recherche =  $_SESSION["option2_1"];
    $colonne_table_recherche_resultat = $_SESSION["option2_2"];



$src_default ="https://i.pinimg.com/originals/2f/75/be/2f75beb4f91360a68f9d4aa5e985ed85.gif" ; 




    $_SESSION["name_table"] = $name_table;
    $_SESSION["colonne_table"] = $colonne_table;
    $_SESSION["id_user"] = $id_user;
    $_SESSION["colonne_table_recherche"] = $colonne_table_recherche;
    $_SESSION["colonne_table_recherche_resultat"] = $colonne_table_recherche_resultat;



    // Exemple d'utilisation n°8
    // cet exemple pemmet de dnner le nom d'une table et de faire une boucle 
    // demad
    $databaseHandler = new DatabaseHandler($dbname, $username);



$index = $_SESSION["index"][2] ; 
    if ($_SESSION["home_menu"] == 1) {
        $databaseHandler->set_mysql_general("SELECT * FROM `$name_table` WHERE `$colonne_table_recherche` ='$colonne_table_recherche_resultat' ");
    } else {
        $databaseHandler->set_mysql_general("SELECT * FROM `projet` WHERE `id_user_projet` ='$index' ");
    }

 
    

    // nom table + mysql+ connoles demande
    $databaseHandler->set_table_general("projet");
    $databaseHandler->general_dynamique();

    /*
    var_dump($dynamicVariables['id_sha1_projet']);
    var_dump($dynamicVariables['title_projet']);
    var_dump($dynamicVariables['description_projet']);
 
*/

 

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
        $img_projet_src_ =   $dynamicVariables['img_projet_src'][$a];
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





        $src1 = "https://i.pinimg.com/236x/02/3f/c6/023fc6874164528602203e053b6f620d.jpg";

        $title_projet = $dynamicVariables['title_projet'][$a];
        $description_projet = $dynamicVariables['description_projet'][$a];

    ?>




     <div class="form-container">
         <h1>Gestion des Éléments</h1>
         <form>



             <div class="form-group">
                 <label for="input-field">Entrée :</label>
                 <input value="<?php echo $title_projet  ?>" onkeyup="<?php echo $input_1->function_name . '(this)'; ?>" id="<?php echo  $input_1->name ?>" type="text" class="<?php echo  $input_1->className_array_total . ' ' . $input_1->class_style ?>">
             </div>


             <div class="box">

                 <?php




                    $filz = $dynamicVariables['name_extention_projet'][$a];

                    // Supprimer le point au début de l'extension
                    $extension = ltrim($filz, '.');

                    // Parcourir les catégories pour trouver l'appartenance
                    $category = null;
                    foreach ($fileExtensions as $key => $extensions) {
                        if (in_array($extension, $extensions)) {
                            $category = $key;
                            break;
                        }
                    }

  





                    if ($img_projet_src_ == "") {
                    ?>
                     <img class="<?php echo  $add_img->className_array_total . ' ' . $add_img->class_style ?>" onclick="add_img(this)" id="<?php echo  $add_img->name ?>" src="<?php echo $src1  ?>" alt="" srcset="">

                 <?php
                    } else {
                    ?>
                     <?php
 
 


 $path = "../".$img_projet_src_;


 


?>

<div>

</div>

<style>
    .bblack{
        background-color: black;
        color: white;
        padding: 8px;
    }
</style>

<h3 title="<?php echo $colonne_table_recherche_resultat ;?>" onclick="all_img_f(this)" class="bblack">Voir toutes les images  <?php //echo $colonne_table_recherche_resultat ?></h3>
<div class="display_none" id="<?php echo 'all_img'.$colonne_table_recherche_resultat ;?>">
<?php 

require 'all_file.php' ; 


?>
</div>

<?php 

 if(!checkFileExists($path)){
    $img_projet_src_ = $src_default  ;
 }
 
 
switch ($filz) {
    case '.jpg':
    case '.jpeg':
    case '.png':
    case '.gif':
    case '.webp' :
        // Afficher une image
        echo "<div   class='{$add_img->className_array_total} {$add_img->class_style}' onclick='add_img(this)' id='{$add_img->name}' alt='Image' style='width:150px; height:auto;'>IMAGE</div>";
    
        echo "<img src='{$img_projet_src_}' class='{$add_img->className_array_total} {$add_img->class_style}' onclick='add_img(this)' id='{$add_img->name}' alt='Image' style='width:150px; height:auto;'><br>";
 
        
                // Lien pour télécharger un document
                echo "<a href='{$img_projet_src_}' class='{$add_document->className_array_total} {$add_document->class_style}' onclick='add_document(this)' id='{$add_document->name}' download>
                Télécharger le document : 
              </a><br>";
        break;

    case '.pdf':
    case '.doc':
    case '.docx':


   
        echo "<div   class='{$add_img->className_array_total} {$add_img->class_style}' onclick='add_img(this)' id='{$add_img->name}' alt='Image' style='width:150px; height:auto;'>DOCUMENT</div>";
 
      
        // Lien pour télécharger un document
        echo "<a href='{$img_projet_src_}' class='{$add_document->className_array_total} {$add_document->class_style}' onclick='add_document(this)' id='{$add_document->name}' download>
                Télécharger le document :  
              </a><br>";
        break;

    case '.mp3':
    case '.wav':
    case '.m4a':

        ?>

 
<?php 
        // Lecteur audio
        echo "<div   class='{$add_img->className_array_total} {$add_img->class_style}' onclick='add_img(this)' id='{$add_img->name}' alt='Image' style='width:150px; height:auto;'>MUSIQUE</div>";

        echo "<audio src='{$img_projet_src_}' controls class='{$add_audio->className_array_total} {$add_audio->class_style}' id='{$add_audio->name}' onclick='add_audio(this)'>
                <source src='{$audio_src}' type='audio/mpeg'>
                Votre navigateur ne supporte pas le lecteur audio.
              </audio><br>";
        echo "Audio : {$audio_src}";

                // Lien pour télécharger un document

        break;

    case '.mp4':
    case '.avi':
    case '.mov':
        // Lecteur vidéo
        echo "<div   class='{$add_img->className_array_total} {$add_img->class_style}' onclick='add_img(this)' id='{$add_img->name}' alt='Image' style='width:150px; height:auto;'>PDF</div>";

        echo "<video src='{$img_projet_src_}'  width='300' controls class='{$add_video->className_array_total} {$add_video->class_style}' id='{$add_video->name}' onclick='add_video(this)'>
                <source src='{$video_src}' type='video/mp4'>
                Votre navigateur ne supporte pas le lecteur vidéo.
              </video><br>";
        echo "Vidéo : {$video_src}";


                // Lien pour télécharger un document

        break;

    case '.php':
    case '.css':
    case '.js':


       
        echo "<img src='{$src_default}' class='{$add_img->className_array_total} {$add_img->class_style}' onclick='add_img(this)' id='{$add_img->name}' alt='Image' style='width:150px; height:auto;'><br>";

        // Lien de téléchargement pour le code
        echo "<a href='{$code_src}' class='{$add_code->className_array_total} {$add_code->class_style}' onclick='add_code(this)' id='{$add_code->name}' download>
                Télécharger le fichier :  
              </a><br>";

                      // Lien pour télécharger un document
        echo "<a href='{$img_projet_src_}' class='{$add_document->className_array_total} {$add_document->class_style}' onclick='add_document(this)' id='{$add_document->name}' download>
        Télécharger le document : {$img_projet_src_}
      </a><br>";
        break;

    default:

    echo "AUCUN TYPE" ; 
       
    

    
        echo "<div class='{$add_document->className_array_total} {$add_document->class_style}' id='{$add_document->name}' onclick='add_document(this)'>
                 
              </div><br>";

                      // Lien pour télécharger un document
        echo "<a href='{$img_projet_src_}' class='{$add_document->className_array_total} {$add_document->class_style}' onclick='add_document(this)' id='{$add_document->name}' download>
        Télécharger le document : {$img_projet_src_}
      </a><br>";
        break;
}
?>

                 <?php
                    }
                    ?>
             </div>


             <div class="image-container" style="margin-bottom: 50px;">
                 <div class="image-buttons">
                     <button type="button" class="remove-image-btn black">Supprimer l'image</button>
                 </div>
             </div>

             <div class="form-group">

                 <textarea onkeyup="<?php echo $input_2->function_name . '(this)'; ?>" id="<?php echo  $input_2->name ?>" type="text" class="<?php echo  $input_2->className_array_total . ' ' . $input_2->class_style ?>"><?php echo $description_projet ?></textarea>
             </div>
     <img onclick="remove_element(this)" class="<?php echo $input_1->className_array_total ;?>" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/>
 
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

     .add_img {

         background-color: black;
         color: white;

         text-align: center;


     }

     .add_img:hover {
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

     .box img {
         width: 200px;
         margin: auto;
         box-shadow: 1px 1px 4px black;
         border-radius: 7px;

         transition: 0.1s all;
     }

     .box img:hover {

         box-shadow: 1px 1px 9px black;
         transition: 0.1s all;


     }

     .box {

         margin-bottom: 50px;
         margin-top: 50px;

         text-align: center;
     }
 </style>