<?php

$verif_cookie ="true" ; 

$apple = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple->row,
  'liste_projet_id_sha1',
  'liste_projet_name',
  'liste_projet_name_tittle',
  'liste_projet_description3',
  'information_user_id_sha1',
  'liste_projet_date',
  'liste_projet_user_name',
  'liste_projet_user_prenom'

);


$apple->sql = 'SELECT * FROM `liste_projet` WHERE  1';
$apple->execution();
$myJSON = json_encode($apple->list_row);


 echo "ooooook"; 

?>