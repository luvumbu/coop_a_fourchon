<?php
require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";
require_once "Class/Give_url.php";
require_once "Class/AsciiConverter.php";


// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
//echo "Le nom du fichier actuel est : " . $url->get_basename() . "\n";
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
//var_dump($url->get_elements()) ; 

$URL = $url->get_basename();

/*
var_dump($URL ) ; 
var_dump($url->get_elements()) ; 
*/

$tabe_name = $url->get_elements()[0];
$tabe_name_info = $url->get_elements()[1];
$tabe_name_result = $url->get_elements()[2];
$tabe_name_result_parent = $url->get_elements()[3];

// Exemple de  URL 
/* 
 http://localhost/ndenga/parse.php/projet__id_sha1_projet__173545397467__id_sha1_parent_projet

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
// Première étape : Assignation des valeurs des variables dynamiques
$id_projet_ = $dynamicVariables['id_projet'];
$id_sha1_user_projet_ = $dynamicVariables['id_sha1_user_projet'];
$activation_projet_ = $dynamicVariables['activation_projet'];
$id_general_ = $dynamicVariables['id_general'];
$id_user_projet_ = $dynamicVariables['id_user_projet'];
$id_master_projet_ = $dynamicVariables['id_master_projet'];
$id_sha1_projet_ = $dynamicVariables['id_sha1_projet'];
$id_sha1_parent_projet_ = $dynamicVariables['id_sha1_parent_projet'];
$id_sha1_parent_projet2_ = $dynamicVariables['id_sha1_parent_projet2'];
$cryptage_projet_ = $dynamicVariables['cryptage_projet'];
$input_cryptage_projet_ = $dynamicVariables['input_cryptage_projet'];
$name_projet_ = $dynamicVariables['name_projet'];
$name_extention_projet_ = $dynamicVariables['name_extention_projet'];
$status_projet_ = $dynamicVariables['status_projet'];
$title_projet_ = $dynamicVariables['title_projet'];
$description_projet_ = $dynamicVariables['description_projet'];
$password_projet_ = $dynamicVariables['password_projet'];
$visibility_1_projet_ = $dynamicVariables['visibility_1_projet'];
$visibility_2_projet_ = $dynamicVariables['visibility_2_projet'];
$screen_shoot_projet_ = $dynamicVariables['screen_shoot_projet'];
$img_projet_src_ = $dynamicVariables['img_projet_src1'];
$img_projet_src2_ = $dynamicVariables['img_projet_src2'];
$img_projet_visibility_ = $dynamicVariables['img_projet_visibility'];
$group_projet_ = $dynamicVariables['group_projet'];
$heure_debut_projet_ = $dynamicVariables['heure_debut_projet'];
$date_debut_projet_ = $dynamicVariables['date_debut_projet'];
$dure_projet_ = $dynamicVariables['dure_projet'];
$publication_date_i_projet_ = $dynamicVariables['publication_date_j_projet'];
$publication_date_h_projet_ = $dynamicVariables['publication_date_h_projet'];
$shop_projet_ = $dynamicVariables['shop_projet'];
$date_inscription_projet_ = $dynamicVariables['date_inscription_projet'];

// Deuxième étape : Ajout des variables dans des tableaux
$id_projet_1 = $id_projet_;
$activation_projet_1 = $activation_projet_;
$id_general_1 = $id_general_;
$id_user_projet_1 = $id_user_projet_;
$id_master_projet_1 = $id_master_projet_;
$id_sha1_projet_1 = $id_sha1_projet_;
$id_sha1_parent_projet_1 = $id_sha1_parent_projet_;
$id_sha1_parent_projet2_1 = $id_sha1_parent_projet2_;
$cryptage_projet_1 = $cryptage_projet_;
$input_cryptage_projet_1 = $input_cryptage_projet_;
$name_projet_1 = $name_projet_;
$name_extention_projet_1 = $name_extention_projet_;

$title_projet_1 = $title_projet_;
$description_projet_1 = $description_projet_;
$password_projet_1 = $password_projet_;
$visibility_1_projet_1 = $visibility_1_projet_;
$visibility_2_projet_1 = $visibility_2_projet_;
$screen_shoot_projet_1 = $screen_shoot_projet_;
$img_projet_src_1 = $img_projet_src_;
$img_projet_src2_1 = $img_projet_src2_;
$img_projet_visibility_1 = $img_projet_visibility_;
$group_projet_1 = $group_projet_;
$heure_debut_projet_1 = $heure_debut_projet_;
$date_debut_projet_1 = $date_debut_projet_;
$dure_projet_1 = $dure_projet_;
$publication_date_i_projet_1 = $publication_date_i_projet_;
$publication_date_h_projet_1 = $publication_date_h_projet_;
$shop_projet_1 = $shop_projet_;
$date_inscription_projet_1 = $date_inscription_projet_;

// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM `$tabe_name` WHERE `$tabe_name_result_parent` ='$tabe_name_result' ";

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

// Première étape : Assignation des valeurs des variables dynamiques
$id_projet_ = $dynamicVariables['id_projet'];
$activation_projet_ = $dynamicVariables['activation_projet'];
$id_general_ = $dynamicVariables['id_general'];
$id_user_projet_ = $dynamicVariables['id_user_projet'];
$id_master_projet_ = $dynamicVariables['id_master_projet'];
$id_sha1_projet_ = $dynamicVariables['id_sha1_projet'];
$id_sha1_parent_projet_ = $dynamicVariables['id_sha1_parent_projet'];
$id_sha1_parent_projet2_ = $dynamicVariables['id_sha1_parent_projet2'];
$cryptage_projet_ = $dynamicVariables['cryptage_projet'];
$input_cryptage_projet_ = $dynamicVariables['input_cryptage_projet'];
$name_projet_ = $dynamicVariables['name_projet'];
$name_extention_projet_ = $dynamicVariables['name_extention_projet'];

$title_projet_ = $dynamicVariables['title_projet'];
$description_projet_ = $dynamicVariables['description_projet'];
$password_projet_ = $dynamicVariables['password_projet'];
$visibility_1_projet_ = $dynamicVariables['visibility_1_projet'];
$visibility_2_projet_ = $dynamicVariables['visibility_2_projet'];
$screen_shoot_projet_ = $dynamicVariables['screen_shoot_projet'];
$img_projet_src_ = $dynamicVariables['img_projet_src1'];
$img_projet_src2_ = $dynamicVariables['img_projet_src2'];
$img_projet_visibility_ = $dynamicVariables['img_projet_visibility'];
$group_projet_ = $dynamicVariables['group_projet'];
$heure_debut_projet_ = $dynamicVariables['heure_debut_projet'];
$date_debut_projet_ = $dynamicVariables['date_debut_projet'];
$dure_projet_ = $dynamicVariables['dure_projet'];
$publication_date_i_projet_ = $dynamicVariables['publication_date_j_projet'];
$publication_date_h_projet_ = $dynamicVariables['publication_date_h_projet'];
$shop_projet_ = $dynamicVariables['shop_projet'];
$date_inscription_projet_ = $dynamicVariables['date_inscription_projet'];

// Deuxième étape : Ajout des variables dans des tableaux
$id_projet_2 = $id_projet_;
$activation_projet_2 = $activation_projet_;
$id_general_2 = $id_general_;
$id_user_projet_2 = $id_user_projet_;
$id_master_projet_2 = $id_master_projet_;
$id_sha1_projet_2 = $id_sha1_projet_;
$id_sha1_parent_projet_2 = $id_sha1_parent_projet_;
$id_sha1_parent_projet2_2 = $id_sha1_parent_projet2_;
$cryptage_projet_2 = $cryptage_projet_;
$input_cryptage_projet_2 = $input_cryptage_projet_;
$name_projet_2 = $name_projet_;
$name_extention_projet_2 = $name_extention_projet_;
$title_projet_2 = $title_projet_;
$description_projet_2 = $description_projet_;
$password_projet_2 = $password_projet_;
$visibility_2_projet_2 = $visibility_1_projet_;
$visibility_2_projet_2 = $visibility_2_projet_;
$screen_shoot_projet_2 = $screen_shoot_projet_;
$img_projet_src_2 = $img_projet_src_;
$img_projet_src2_2 = $img_projet_src2_;
$img_projet_visibility_2 = $img_projet_visibility_;
$group_projet_2 = $group_projet_;
$heure_debut_projet_2 = $heure_debut_projet_;
$date_debut_projet_2 = $date_debut_projet_;
$dure_projet_2 = $dure_projet_;
$publication_date_i_projet_2 = $publication_date_i_projet_;
$publication_date_h_projet_2 = $publication_date_h_projet_;
$shop_projet_2 = $shop_projet_;
$date_inscription_projet_2 = $date_inscription_projet_;










$id_sha1_user_projet_x =$id_sha1_user_projet_[0] ; 

$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = " SELECT * FROM `$dbname` WHERE id_sha1_user ='$id_sha1_user_projet_x'   ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($dbname);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
//echo json_encode($dynamicVariables['id_sha1_projet'], JSON_PRETTY_PRINT);


$id_user_ = $dynamicVariables['id_user'];
$id_sha1_user_ = $dynamicVariables['id_sha1_user'];
$id_parent_user_ = $dynamicVariables['id_parent_user'];
$description_user_ = $dynamicVariables['description_user'];
$title_user_ = $dynamicVariables['title_user'];
$img_user_ = $dynamicVariables['img_user'];
$nom_user_ = $dynamicVariables['nom_user'];
$prenom_user_ = $dynamicVariables['prenom_user'];
$email_user_ = $dynamicVariables['email_user'];
$activation_user_ = $dynamicVariables['activation_user'];
$date_inscription_user_= $dynamicVariables['date_inscription_user	'];

 

 
 
// Première étape : Assignation des valeurs des variables dynamiques


$x=array();
 
$kount = count($title_projet_1) ;
for($a = 0 ; $a <$kount ; $a++) {
    array_push($x,AsciiConverter::asciiToString($title_projet_1[$a])) ;

}

$title_projet_1 = $x ; 



$x=array();
 
$kount = count($title_projet_2) ;
for($a = 0 ; $a <$kount ; $a++) {
    array_push($x,AsciiConverter::asciiToString($title_projet_2[$a])) ;

}

$title_projet_2 = $x ; 
// Création du tableau final avec les deux groupes dans des tableaux
$finalArray = [


    [
         "id_user" => $id_user_,
        "id_sha1_user" => $id_sha1_user_,
        "id_parent_user" => $id_parent_user_,
        "description_user" => $description_user_,
        "title_user" => $title_user_,
        "img_user" => $img_user_,
        "nom_user" => $nom_user_,
        "prenom_user" => $prenom_user_,
        "email_user" => $email_user_,
        "activation_user" => $activation_user_,
        
        "date_inscription_use" => $date_inscription_user

    ]
    ,
    [
        "id_projet" => $id_projet_1,
        "activation_projet" => $activation_projet_1,
        "id_general" => $id_general_1,
        "id_user_projet" => $id_user_projet_1,
        "id_sha1_projet" => $id_sha1_projet_1,
        "id_sha1_parent_projet" => $id_sha1_parent_projet_1,
        "id_sha1_parent_projet2" => $id_sha1_parent_projet2_1,
        "cryptage_projet" => $cryptage_projet_1,
        "input_cryptage_projet" => $input_cryptage_projet_1,
        "name_projet" => $name_projet_1,
        "name_extention_projet" => $name_extention_projet_1,
        "title_projet" =>$title_projet_1[0],
        "description_projet" => $description_projet_1,
        "password_projet" => $password_projet_1,
        "visibility_1_projet" => $visibility_1_projet_1,
        "visibility_2_projet" => $visibility_2_projet_1,
        "screen_shoot_projet" => $screen_shoot_projet_1,
        "img_projet_src1" => $img_projet_src_1,
        "img_projet_src2" => $img_projet_src2_1,
        "img_projet_visibility" => $img_projet_visibility_1,
        "group_projet" => $group_projet_1,
        "heure_debut_projet" => $heure_debut_projet_1,
        "date_debut_projet" => $date_debut_projet_1,
        "dure_projet" => $dure_projet_1,
        "publication_date_i_projet" => $publication_date_i_projet_1,
        "publication_date_h_projet" => $publication_date_h_projet_1,
        "shop_projet" => $shop_projet_1,
        "date_inscription_projet" => $date_inscription_projet_1,

    ],
    [
        "id_projet" => $id_projet_2,
        "activation_projet" => $activation_projet_2,
        "id_general" => $id_general_2,
        "id_user_projet" => $id_user_projet_2,
        "id_sha1_projet" => $id_sha1_projet_2,
        "id_sha1_parent_projet" => $id_sha1_parent_projet_2,
        "id_sha1_parent_projet2" => $id_sha1_parent_projet2_2,
        "cryptage_projet" => $cryptage_projet_2,
        "input_cryptage_projet" => $input_cryptage_projet_2,
        "name_projet" => $name_projet_2,
        "name_extention_projet" => $name_extention_projet_2,
        "title_projet" => $title_projet_2,
        "description_projet" => $description_projet_2,
        "password_projet" => $password_projet_2,
        "visibility_1_projet" => $visibility_1_projet_2,
        "visibility_2_projet" => $visibility_2_projet_2,
        "screen_shoot_projet" => $screen_shoot_projet_2,
        "img_projet_src1" => $img_projet_src_2,
        "img_projet_src2" => $img_projet_src2_2,
        "img_projet_visibility" => $img_projet_visibility_2,
        "group_projet" => $group_projet_2,
        "heure_debut_projet" => $heure_debut_projet_2,
        "date_debut_projet" => $date_debut_projet_2,
        "dure_projet" => $dure_projet_2,
        "publication_date_i_projet" => $publication_date_i_projet_2,
        "publication_date_h_projet" => $publication_date_h_projet_2,
        "shop_projet" => $shop_projet_2,
        "date_inscription_projet" => $date_inscription_projet_2
    ]


];

// Affichage du tableau final en JSON pour voir le résultat
echo json_encode($finalArray, JSON_PRETTY_PRINT);
