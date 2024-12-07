 
<?php 
session_start() ; 
 


  
require_once '../Class/path_general_class.php'; 
require_once '../Class/DivGenerator.php';
require_once '../Class/DatabaseHandler.php'; 
require_once '../Class/dbCheck.php'; 


 
 



 
 
$name_table = $_SESSION["option0_2"] ;
 
$colonne_table = $_SESSION["option1_1"] ;
 
$id_user =  $_SESSION["option1_2"] ;
 
$colonne_table_recherche =  $_SESSION["option2_1"] ;
 
$colonne_table_recherche_resultat = $_SESSION["option2_2"] ;
 
 
 


echo $colonne_table_recherche_resultat ; 


// Exemple d'utilisation n°8
// cet exemple pemmet de dnner le nom d'une table et de faire une boucle 
// demad
$databaseHandler = new DatabaseHandler($dbname, $username);

$databaseHandler->set_mysql_general("SELECT * FROM `$name_table` WHERE `$colonne_table_recherche` ='$colonne_table_recherche_resultat' ");
// nom table + mysql+ connoles demande
$databaseHandler->set_table_general("projet");
$databaseHandler->general_dynamique();

var_dump($dynamicVariables['id_projet']);
var_dump($dynamicVariables['id_user_projet']);
var_dump($dynamicVariables['id_sha1_projet']);
 

 

 

 
 
 

 
 
 

 


 ?>
 

 <?php 
 
// Dernier exemple d'ajout d'éléments à un div
// Ce script illustre comment modifier et ajouter des éléments à un div généré en utilisant la classe DivGenerator.

// Création d'un nouvel objet DivGenerator avec les paramètres suivants :
// Paramètre n°1 : Nom de la table à utiliser, ici "root".
// Paramètre n°2 : Identifiant unique du div généré, ici "div_generator_idedlededededed".
// Paramètre n°3 : Méthode d'envoi des données, ici "update_1" (indique qu'il s'agit d'une opération de mise à jour).
// Paramètre n°4 : Séparateur des noms de classe, ici "__".
// Paramètre n°5 : Texte affiché dans le div généré, ici 'My source' (indique la source ou une note d'information).

$divGenerator = new DivGenerator("projet", "div_generator_idedlededededed", "update_1", "__", 'My source');

// Ajout ou modification de classes au div généré
// Ligne n°1 : Spécifie la classe "id_user" et associe la valeur "200", ce qui permet de modifier l'ID de l'utilisateur.
// Ligne n°2 : Spécifie la classe "id_parent_user" et la vide, ce qui correspond à la suppression de l'ID du parent utilisateur.


$divGenerator->set_className("id_user_projet", "3"); // Modification de l'ID utilisateur
$divGenerator->set_className("id_sha1_parent_projet", ""); // Suppression de l'ID du parent utilisateur

// Génération du div avec les classes et les valeurs définies ci-dessus
echo $divGenerator->generateDiv(); // Affiche le div généré après modification.

// Générer un champ de texte (input)
// Appel de la méthode "get_input" pour créer un champ de texte (input) de type "input".
echo $divGenerator->get_input("input"); // Crée un champ de texte (input)
 
?>
