<?php



 
$apple_tres = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple_tres->row,
  'liste_projet_id_sha1',
  'liste_projet_name'

);


$apple_tres->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent`="' . $liste_projet_id_sha1_dos[$o] . '" AND `liste_projet_name_tittle`!="REMOVE"  ORDER BY  `liste_projet_id` DESC';
$apple_tres->execution();
$myJSON = json_encode($apple_tres->list_row);


$number = 0;
$liste_projet_id_sha1_tres = $apple_tres->add_array_element($number);
$number++;

$liste_projet_name_tres = $apple_tres->add_array_element($number);
$number++;


 

 
 
 /*
$number = 0;
$liste_projet_id_sha1_tres = $apple_tres->add_array_element($number);
$number++;

$liste_projet_name_tres = $apple_tres->add_array_element($number);
$number++;


 

$liste_projet_name_tittle_2 = $apple_2->add_array_element($number);
$number++;
$liste_projet_description3_2 = $apple_2->add_array_element($number);
$number++;
$information_user_id_sha1_2 = $apple_2->add_array_element($number);
$number++;
$liste_projet_date_2 = $apple_2->add_array_element($number);
$number++;
$liste_projet_user_name_2 = $apple_2->add_array_element($number);
$number++;
$liste_projet_user_prenom_2 = $apple_2->add_array_element($number);
$number++;
$liste_projet_reg_date_2 = $apple_2->add_array_element($number);
 
echo "<td>".$liste_projet_id_sha1_[$a]."<td/>" ; 

*/


$remove_element ='<img class="cursor_pointer" width="30" height="30" src="https://img.icons8.com/ios/30/minus.png" alt="minus"/>';


if($liste_projet_name_tres>0){
  for($z= 0; $z<count($liste_projet_name_tres)-1; $z ++) {
     echo "<tr id='$liste_projet_id_sha1_tres[$z]'>
     <td>".$liste_projet_name_tres[$z]."</td>
     <td onclick='add_member_input_remove_element(this)' title='$liste_projet_id_sha1_tres[$z]' >".$remove_element."</td>

     </tr>";
}
}
 


 


?>