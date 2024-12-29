<?php 
require_once "Class/DatabaseHandler.php" ; 
require_once "Class/dbCheck.php" ; 
require_once "Class/Give_url.php" ; 

// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
//echo "Le nom du fichier actuel est : " . $url->get_basename() . "\n";
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
//var_dump($url->get_elements()) ; 

 
$URL = $url->get_basename() ; 

/*
var_dump($URL ) ; 
var_dump($url->get_elements()) ; 
*/

$tabe_name = $url->get_elements()[0] ; 
$tabe_name_info =$url->get_elements()[1] ; 
$tabe_name_result =$url->get_elements()[2] ; 



 // Exemple de  URL 



 /* 

 http://localhost/ndenga/parse.php/projet__id_projet__1
 
 */

 
 
/*
 * Exemple d'utilisation des variables dynamiques
 * Ce script montre comment utiliser la classe `DatabaseHandler` pour manipuler des données
 * d'une table spécifique dans une base de données en générant des variables dynamiques.
 */
 

$nom_table = "projet"; // Nom de la table cible




// Requête SQL pour sélectionner toutes les lignes de la table `projet`


// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);



 

 
$req_sql = "SELECT * FROM `$tabe_name` WHERE `$tabe_name_info` ='$tabe_name_result' "; 


// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($nom_table);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
 
 



//echo json_encode($dynamicVariables['id_sha1_projet'], JSON_PRETTY_PRINT);


 



 

?>
<?php

 

    // Premier groupe de valeurs : noms dans un tableau
    $id_projet = [
        $dynamicVariables['id_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $activation_projet = [
        $dynamicVariables['activation_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $id_general = [
        $dynamicVariables['id_general']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $id_user_projet = [
        $dynamicVariables['id_user_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $id_master_projet = [
        $dynamicVariables['id_master_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $id_sha1_projet = [
        $dynamicVariables['id_sha1_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $id_sha1_parent_projet = [
        $dynamicVariables['id_sha1_parent_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $id_sha1_parent_projet2 = [
        $dynamicVariables['id_sha1_parent_projet2']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $cryptage_projet = [
        $dynamicVariables['cryptage_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $input_cryptage_projet = [
        $dynamicVariables['input_cryptage_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $name_projet = [
        $dynamicVariables['name_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $name_extention_projet = [
        $dynamicVariables['name_extention_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $status_projet = [
        $dynamicVariables['status_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $title_projet = [
        $dynamicVariables['title_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $description_projet = [
        $dynamicVariables['description_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $password_projet = [
        $dynamicVariables['password_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $visibility_1_projet = [
        $dynamicVariables['visibility_1_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $visibility_2_projet = [
        $dynamicVariables['visibility_2_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $screen_shoot_projet = [
        $dynamicVariables['screen_shoot_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $img_projet_src = [
        $dynamicVariables['img_projet_src']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $img_projet_src2 = [
        $dynamicVariables['img_projet_src2']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $img_projet_visibility = [
        $dynamicVariables['img_projet_visibility']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $group_projet = [
        $dynamicVariables['group_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $heure_debut_projet = [
        $dynamicVariables['heure_debut_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $date_debut_projet = [
        $dynamicVariables['date_debut_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $dure_projet = [
        $dynamicVariables['dure_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $publication_date_i_projet = [
        $dynamicVariables['publication_date_i_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $publication_date_h_projet = [
        $dynamicVariables['publication_date_h_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $shop_projet = [
        $dynamicVariables['shop_projet']
    ];
    
    // Premier groupe de valeurs : noms dans un tableau
    $date_inscription_projet = [
        $dynamicVariables['date_inscription_projet']
    ];




 
    // Création du tableau final avec les deux groupes dans des tableaux
    $finalArray = [
        "id_projet" => $id_projet,
        "activation_projet" => $activation_projet,
        "id_general" => $id_general,
        "id_user_projet" => $id_user_projet,
        "id_master_projet" => $id_master_projet,
        "id_sha1_projet" => $id_sha1_projet,
        "id_sha1_parent_projet" => $id_sha1_parent_projet,
        "id_sha1_parent_projet2" => $id_sha1_parent_projet2,
        "cryptage_projet" => $cryptage_projet,
        "input_cryptage_projet" => $input_cryptage_projet,
        "name_projet" => $name_projet,
        "name_extention_projet" => $name_extention_projet,
        "status_projet" => $status_projet,
        "title_projet" => $title_projet,
        "description_projet" => $description_projet,
        "password_projet" => $password_projet,
        "visibility_1_projet" => $visibility_1_projet,
        "visibility_2_projet" => $visibility_2_projet,
        "screen_shoot_projet" => $screen_shoot_projet,
        "img_projet_src" => $img_projet_src,
        "img_projet_src2" => $img_projet_src2,
        "img_projet_visibility" => $img_projet_visibility,
        "group_projet" => $group_projet,
        "heure_debut_projet" => $heure_debut_projet,
        "date_debut_projet" => $date_debut_projet,
        "dure_projet" => $dure_projet,
        "publication_date_i_projet" => $publication_date_i_projet,
        "publication_date_h_projet" => $publication_date_h_projet,
        "shop_projet" => $shop_projet,
        "date_inscription_projet" => $date_inscription_projet
    ];

// Affichage du tableau final en JSON pour voir le résultat
echo json_encode($finalArray, JSON_PRETTY_PRINT);

?>
