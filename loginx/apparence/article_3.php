<div id="articles">
  <?php

  include("test_complet2_1.php");
  include("test_complet2_2.php");

  ?>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <a href="../../">Page précedente</a>




  <script>


    var information_user_id_sha1_array = document.getElementsByClassName("information_user_id_sha1_array");
    var liste_projet_id_array = document.getElementsByClassName("liste_projet_id_array");
    var liste_projet_id_sha1_array = document.getElementsByClassName("liste_projet_id_sha1_array");
    var liste_projet_id_parent_array = document.getElementsByClassName("liste_projet_id_parent_array");
    var liste_projet_id_sha1_general_array = document.getElementsByClassName("liste_projet_id_sha1_general_array");
    var liste_projet_ip_array = document.getElementsByClassName("liste_projet_ip_array");

    var liste_projet_img_array = document.getElementsByClassName("liste_projet_img_array");
    var liste_projet_img_array_array = document.getElementsByClassName("liste_projet_img_array_array");
    var liste_projet_name_array = document.getElementsByClassName("liste_projet_name_array");
    var liste_projet_description1_array = document.getElementsByClassName("liste_projet_description1_array");
    var liste_projet_description2_array = document.getElementsByClassName("liste_projet_description2_array");
    var liste_projet_visibilite1_array = document.getElementsByClassName("liste_projet_visibilite1_array");

    var liste_projet_visibilite2_array = document.getElementsByClassName("liste_projet_visibilite2_array");
    var liste_projet_type_array = document.getElementsByClassName("liste_projet_type_array");
    var liste_projet_new_file_array = document.getElementsByClassName("liste_projet_new_file_array");
    var liste_projet_reg_date_array = document.getElementsByClassName("liste_projet_reg_date_array");



    var child_information_user_id_sha1_array = document.getElementsByClassName("child_information_user_id_sha1_array");
    var child_liste_projet_id_array = document.getElementsByClassName("child_liste_projet_id_array");
    var child_liste_projet_id_sha1_array = document.getElementsByClassName("child_liste_projet_id_sha1_array");
    var child_liste_projet_id_parent_array = document.getElementsByClassName("child_liste_projet_id_parent_array");
    var child_liste_projet_id_sha1_general_array = document.getElementsByClassName("child_liste_projet_id_sha1_general_array");

    var child_liste_projet_ip_array = document.getElementsByClassName("child_liste_projet_ip_array");
    var child_liste_projet_name_array = document.getElementsByClassName("child_liste_projet_name_array");
    var child_liste_projet_description1_array = document.getElementsByClassName("child_liste_projet_description1_array");
    var child_liste_projet_description2_array = document.getElementsByClassName("child_liste_projet_description2_array");
    var child_liste_projet_visibilite1_array = document.getElementsByClassName("child_liste_projet_visibilite1_array");

    var child_liste_projet_visibilite2_array = document.getElementsByClassName("child_liste_projet_visibilite2_array");
    var child_liste_projet_type_array = document.getElementsByClassName("child_liste_projet_type_array");
    var child_liste_projet_new_file_array = document.getElementsByClassName("child_liste_projet_new_file_array");
    var child_liste_projet_img_array = document.getElementsByClassName("child_liste_projet_img_array");
    var child_liste_projet_reg_date_array = document.getElementsByClassName("child_liste_projet_reg_date_array");




    console.log(liste_projet_name_array[0].innerHTML);
    console.log(liste_projet_description1_array[0].innerHTML);
    console.log(liste_projet_reg_date_array[0].innerHTML);
    console.log(liste_projet_img_array[0].innerHTML);
    console.log(information_user_id_sha1_array[0].innerHTML);

    // Child 


    console.log("Child .......................................................................................................");


    console.log();


    for (var x = 0; x < child_information_user_id_sha1_array.length; x++) {


      console.log(child_information_user_id_sha1_array[x].innerHTML);
      console.log(child_liste_projet_name_array[x].innerHTML);
      console.log(child_liste_projet_description1_array[x].innerHTML);
      console.log(child_liste_projet_img_array[x].innerHTML);
      console.log(child_liste_projet_reg_date_array[x].innerHTML);




    }






  </script>