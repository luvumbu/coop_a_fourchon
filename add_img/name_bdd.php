<?php 
session_start() ; 
require_once '../Class/DatabaseHandler.php' ; 
require_once '../Class/dbCheck.php' ; 


$img_projet_src=   str_replace("../","",$_SESSION["file_path"]);  
$databaseHandler = new DatabaseHandler($dbname, $username);
$name_extention_projet = $_SESSION["name_extention_projet"]  ; 

 
$id_sha1_projet= $_SESSION["id_sha1_projet"] ; 
/*
$id_sha1_projet= $_SESSION["name2"] ; 
$name_table = $_SESSION["name_table"];
$colonne_table = $_SESSION["colonne_table"];
$id_user =  $_SESSION["id_user"];
$colonne_table_recherche =  $_SESSION["colonne_table_recherche"];
$colonne_table_recherche_resultat = $_SESSION["name2"];


 






 
// Définir les chemins des fichiers source et de destination
$source = $dir;  // Remplacez par le chemin réel du fichier
$destination = $dir.'';  // Le fichier sera copié dans la racine

// Copier le fichier
if (copy($source, $destination)) {
    echo "Le fichier a été copié avec succès.";
} else {
    echo "Une erreur est survenue lors de la copie du fichier.";
}
 
*/
 
$img_projet_src=   str_replace("../","",$_SESSION["file_path"]);


$databaseHandler->action_sql('UPDATE  `projet` SET `img_projet_src` = "'.$img_projet_src.'", `name_extention_projet`="'.$name_extention_projet.'" WHERE `id_sha1_projet` = "'.$id_sha1_projet.'"') ;


//

?>

 
 