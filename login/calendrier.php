 <?php 
 date_default_timezone_set('Europe/Paris');

 // Affichage de quelque chose comme : Monday

// nombre maximum sur un mois 
//echo date("t");
// Affichage de quelque chose comme : Monday 8th of August 2005 03:12:46 PM
//echo date('l');
// jour actuell 


 ?>

 
<?php
// Créer une instance de DateTime pour le 1er janvier 2000

$anne= "2000" ; 
$mois = "02" ; 
$jour = "01" ; 
$dateActuelle = date('Y-m-d H:i:s');
echo "La date actuelle est : $dateActuelle";
$date = new DateTime($dateActuelle);

// Obtenir le nombre de jours dans le mois
$nombreDeJours = $date->format('t');

echo "Le nombre de jours dans le mois de janvier 2000 est : $nombreDeJours jours";
?>

<?php

?>
