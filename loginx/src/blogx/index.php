 <?php
 session_start() ; 
 
 include("index_json.php") ; 

 include("add_log_0.php") ; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ndenga Luvumbu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.13.18/dist/katex.min.css" integrity="sha384-x5exxh2F/B2ZFpFM/FPrMTtsqCr4R+jv2uwFLS4z+Dcsn38nW+RVMpS4b/e1vTA5" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.18/dist/katex.min.js" integrity="sha384-AO2A7H2zPTV+7WHzh6gSCStSiyYWWJlwe76sUJbbzOz3h6msD9kHAyFFPBO9z+Tp" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

</head>
<body>
<a href="../index.php">


<div class="log_">
     
     <div>
       Connexion
     </div>
     <div>
       Inscription 
     </div>
   </div>
  </a>
<h1 class="text-center liste_projet">
Projet
</h1>

 
<?php 






if(isset($_SESSION["welcom_index"])){
 
 $_SESSION["welcom_index"] = $_SESSION["welcom_index"]+1; 
}
else {
 
  $_SESSION["welcom_index"] = 0 ; 
}
/*



 include("index_apparence.php") ; 

var_dump($liste_projet_id) ; 
 
var_dump($liste_projet_id_sha1) ; 
var_dump($liste_projet_id_parent) ; 
var_dump($liste_projet_id_sha1_general) ; 
var_dump($liste_projet_ip) ; 

var_dump($liste_projet_img) ; 
 
var_dump($liste_projet_name) ; 
 
var_dump($liste_projet_description1) ; 
var_dump($liste_projet_description2) ; 
var_dump($liste_projet_visibilite1) ; 

var_dump($liste_projet_visibilite2) ; 
var_dump($liste_projet_type) ; 
var_dump($information_user_id_sha1) ; 
var_dump($liste_projet_new_file) ; 
var_dump($liste_projet_reg_date) ; 

var_dump($liste_projet_color_1) ; 
 */



 

echo '<div class="general__">' ; 
 for($i = 0 ; $i < count($liste_projet_id) ; $i ++ ) {
  echo '<div class="element_1">  ' ;
   

   $src_img = "../redirection_dowload_img/".$liste_projet_img[$i] ; 
   ?>
        <div class="mon_img" style="background-image:url('<?php echo $src_img ; ?>') "></div> 
      
  <?php 
    echo '<h2>'.$liste_projet_name[$i].'</h2>' ; 
    echo "<p>" ; 
    echo $liste_projet_description1[$i] ; 
    echo "</p>" ; 

    ?>
<a href="<?php echo "pages.php/".$liste_projet_id_sha1[$i]?>"> 
    <?php 
    echo '<p class="alert text-center alert-secondary" role="alert"> ';
    echo 'Voir l\'article';
    echo '</p>';
echo '</a>' ;

  echo '</div>' ;
   
 }
 echo '</div>' ; 
 ?>

 

 






<!--
<div class="general__">!
 
          <div class="element_1">   ! 
                <div class= "mon_img"></div>!
                    <h2>Titre 1 </h2>!
                      <p>!
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Numquam quisquam doloribus quaerat? Dignissimos, sint, commodi 
                      rerum animi recusandae aut a beatae cumque deleniti veritatis ex cum? Voluptate adipisci velit amet?
                      </p> 

                      <div class="alert alert-secondary" role="alert"> Voir l'article  </div>    !
          </div>!

</div>!
-->
<style>

.general__{

  display:flex ; 
  justify-content:space-around ; 
  width:80%; 
  margin:auto  ;   
 
    flex-wrap:wrap ;  
}
.element_1{
  width:300px; 

  border-radius:15px  ; 
  text-align:center ; 


  margin : 10px; 
}
.element_1 h2{

  text-align:center ; 
}
.element_1 p{

text-align:justify ; 
}
.mon_img{
width:100% ; 

height:100px;
  border-radius:15px  15px 0 0  ;  
  background-size:100% ; 

}
.liste_projet{
  padding:15px; 
  margin-bottom : 105px ; 
}
a {
  text-decoration:none ; 
}
.log_{
  display:flex ; 
  justify-content:space-around ; 
  padding : 10px; 

}
.log_ div {
 
  width : 50%; 
  text-align:center ;  padding:10px ; 
 
}


.log_ div:hover {
 background-color:rgba(0,0,0,0.1);
 cursor:pointer ; 


}


 

 
</style>