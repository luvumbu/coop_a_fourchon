<?php 


session_start() ; 
require_once '../Class/DatabaseHandler.php' ; 
require_once '../Class/dbCheck.php' ; 


 
$img_projet_src=   str_replace("../","",$_SESSION["file_path"]);  ; 


 
 
echo $_SESSION["name"] ; 
echo "<br/>" ; 


$id_sha1_projet= $_SESSION["name2"] ; 

echo $id_sha1_projet ; 

$name_table = $_SESSION["name_table"];
$colonne_table = $_SESSION["colonne_table"];
$id_user =  $_SESSION["id_user"];
$colonne_table_recherche =  $_SESSION["colonne_table_recherche"];
$colonne_table_recherche_resultat = $_SESSION["name2"];


echo "<br/>"  ; 
echo $colonne_table_recherche; 

 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 
 
 
$databaseHandler->action_sql('UPDATE  `projet` SET `img_projet_src` = "'.$img_projet_src.'" WHERE `id_sha1_projet` = "'.$id_sha1_projet.'"') ;
  
 
?>