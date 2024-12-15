<?php 
session_start() ; 
require_once '../Class/DatabaseHandler.php' ; 
require_once '../Class/dbCheck.php' ; 
$img_projet_src=   str_replace("../","",$_SESSION["file_path"]);  
$databaseHandler = new DatabaseHandler($dbname, $username);
$name_extention_projet = $_SESSION["name_extention_projet"]  ; 
$id_sha1_projet= $_SESSION["id_sha1_projet"] ; 
$img_projet_src=   str_replace("../","",$_SESSION["file_path"]);
$databaseHandler->action_sql('UPDATE  `projet` SET `img_projet_src` = "'.$img_projet_src.'", `name_extention_projet`="'.$name_extention_projet.'" WHERE `id_sha1_projet` = "'.$id_sha1_projet.'"') ;
//

?>

<meta http-equiv="refresh" content="0; URL=../index.php" />
 