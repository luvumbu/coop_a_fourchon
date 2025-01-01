<?php

$databaseHandler___ = new DatabaseHandler($dbname, $username);

$id_sha1_user = $_SESSION["index"][3];
$req_sql___ = "SELECT * FROM `$dbname` WHERE id_sha1_user ='$id_sha1_user' ";

$databaseHandler___->getListOfTables_Child($dbname);
$databaseHandler___->getDataFromTable2X($req_sql___);
$databaseHandler___->get_dynamicVariables();



$title_user_p = $dynamicVariables['title_user']; 
$id_user_p = $dynamicVariables['id_user']; 
$id_sha1_user_p = $dynamicVariables['id_sha1_user'];
$id_parent_user_p = $dynamicVariables['id_parent_user'];
$title_user_p = $dynamicVariables['title_user'];
$img_user_p = $dynamicVariables['img_user'];
$nom_user_p = $dynamicVariables['nom_user'];
$prenom_user_p = $dynamicVariables['prenom_user'];
$password_user_p = $dynamicVariables['password_user'];
$email_user_p = $dynamicVariables['email_user'];
$activation_user_p = $dynamicVariables['activation_user'];
$date_inscription_user_p = $dynamicVariables['date_inscription_user'];
 
var_dump($date_inscription_user_p) ; 

$img_user = str_replace("../","",$dynamicVariables['img_user'][0]);





$databaseHandler___child = new DatabaseHandler($dbname, $username);

$id_sha1_user = $_SESSION["index"][3];
$req_sql___ = "SELECT * FROM `$dbname` WHERE id_parent_user ='$id_sha1_user' ";

$databaseHandler___child->getListOfTables_Child($dbname);
$databaseHandler___child->getDataFromTable2X($req_sql___);
$databaseHandler___child->get_dynamicVariables();


 
$title_user_c = $dynamicVariables['title_user']; 
$id_user_c = $dynamicVariables['id_user']; 
$id_sha1_user_c = $dynamicVariables['id_sha1_user'];
$id_parent_user_c = $dynamicVariables['id_parent_user'];
$title_user_c = $dynamicVariables['title_user'];
$img_user_c = $dynamicVariables['img_user'];
$nom_user_c = $dynamicVariables['nom_user'];
$prenom_user_c = $dynamicVariables['prenom_user'];
$password_user_c = $dynamicVariables['password_user'];
$email_user_c = $dynamicVariables['email_user'];
$activation_user_c = $dynamicVariables['activation_user'];
$date_inscription_user_c = $dynamicVariables['date_inscription_user'];


var_dump($date_inscription_user_c) ; 

 


for($p= 0 ; $p<count($title_user_p) ; $p++) {
    echo "<br/>" ; 
    echo $p; 
}

echo "<br/>" ; 
for($c = 0 ; $c <count($title_user_c) ; $c ++) {
    echo "<br/>" ; 
    echo $c ; 
}
?>
 

<div class="pc">
    <input type="text" class="p">
    <textarea name="" id="" class="c"></textarea>
</div>

<style>
.pc textarea ,.pc .p{
width : 90%;
margin: auto; 
}
 
.pc {
    width: 300px;
    margin: auto;
}
</style>