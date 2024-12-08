<?php 


session_start() ; 
require_once '../Class/DatabaseHandler.php' ; 
require_once '../Class/dbCheck.php' ; 

echo $dbname ; 
echo $_SESSION["name"] ; 



 
$databaseHandler = new DatabaseHandler($dbname, $username);
 
 
 
$databaseHandler->action_sql('UPDATE  `projet` SET `img_projet_src` = "'.$img_projet_src.'" WHERE `id_sha1_projet` = "'.$id_sha1_projet.'"') ;
 
 
?>