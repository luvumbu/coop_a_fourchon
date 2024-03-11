<?php

session_start()  ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$name =$_POST["name"] ;
 



 


$_SESSION["name"] =  $name ; 








$filename = $_SESSION["information_user_id_sha1"]."/index.php";
 
if (file_exists($filename)) {
    echo "Le fichier $filename existe."; 
    
    mkdir(  $_SESSION["information_user_id_sha1"], 0777);
} else {
    echo "Le fichier $filename n'existe pas.";

    $nom_file = "index.php";
    $texte = "Hello world!";

    // création du fichier
    $f = fopen($nom_file, "x+");
    // écriture
    fputs($f, $texte );
    // fermeture
    fclose($f);
}
 
?>