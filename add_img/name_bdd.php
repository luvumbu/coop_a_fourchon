<?php 
 
session_start() ; 
require_once '../Class/DatabaseHandler.php' ; 
require_once '../Class/dbCheck.php' ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$name_extention_projet = $_SESSION["name_extention_projet"]  ; 
$id_sha1_projet= $_SESSION["id_sha1_projet"] ; 
$img_projet_src1 = $_SESSION["file_data1"] ; 
$img_projet_src2 = $_SESSION["file_data2"] ; 
$databaseHandler->action_sql('UPDATE  `projet` SET   `img_projet_src1`="'.$img_projet_src1.'" WHERE `id_sha1_projet` = "'.$id_sha1_projet.'"') ;
$databaseHandler->action_sql('UPDATE  `projet` SET   `name_extention_projet`="'.$img_projet_src2.'" WHERE `id_sha1_projet` = "'.$id_sha1_projet.'"') ;
?>
<meta http-equiv="refresh" content="0; URL=../index.php" />
 