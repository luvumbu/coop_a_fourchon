<?php
session_start();


?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../../src/img/all/favicon.jpg">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <?php 
$verif_id = false;
include("../class/php/php_select_data/give_url.php");
 

include("pages_json.php");



?>

 




 

<script>




    var pages_json_1 = document.getElementsByClassName("pages_json_1");
    var pages_json_1_8 = document.getElementsByClassName("pages_json_1_8");
    var pages_json_2 = document.getElementsByClassName("pages_json_2");
    var pages_json_3 = document.getElementsByClassName("pages_json_3");
    var pages_json_4 = document.getElementsByClassName("pages_json_4");
    var pages_json_5 = document.getElementsByClassName("pages_json_5");
    var pages_json_6 = document.getElementsByClassName("pages_json_6");
    var pages_json_7 = document.getElementsByClassName("pages_json_7");
    var pages_json_8 = document.getElementsByClassName("pages_json_8");


/*
var information_user_id =document.getElementsByClassName("information_user_id")[0]  ;  
var information_user_name =document.getElementsByClassName("information_user_name")[0]  ;  

var information_user_prenom =document.getElementsByClassName("information_user_prenom")[0]  ;  


console.log(information_user_id.innerText) ; 
console.log(information_user_name.innerText) ; 
console.log(information_user_prenom.innerText) ; 

/*
const para = document.createElement("p");
para.innerText = information_user_name.innerText;
document.body.appendChild(para);


information_user_name
information_user_prenom
information_user_adresse_mail

*/
    
 </script>


<?php 
include("html/m.html") ; 

 


?>