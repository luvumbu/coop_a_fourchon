<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
 
$index =  $_SESSION["index"][2] ;

require_once "../Class/dbCheck.php" ; 
require_once "../Class/DatabaseHandler.php" ; 


require_once "../Class/delete_file.php" ; 
require_once "../Class/checkFileExists.php" ; 





$projet =  $_POST["projet"] ; 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$img_projet_src =  $_POST["img_projet_src"] ; 



echo $id_sha1_projet ; 




 
// Example usage
$path =  $id_sha1_projet;
if (checkFileExists($path)) {
    delete_file($path);
} else {
     
}
    






 
 


 




$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("DELETE FROM  `$projet` WHERE   `img_projet_src` = '$img_projet_src'") ;

?>