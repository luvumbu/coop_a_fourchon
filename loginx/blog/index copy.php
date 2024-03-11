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
  <link rel="icon" type="image/x-icon" href="https://i.pinimg.com/564x/33/8a/ad/338aadfc695f8082f95b83ce9860e3de.jpg">
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
 
 


<!--    𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤   
    //  ★   =   début de l'information
    //  ☆   =   fin de l'information
    //  ♨   =   Code de l'information premier letre du fichier et dernier lettre du fichier suivi du numéro du commentaire.
    //  ♫   = connexion css all suivi du nom du fichier 
    //  ✈  = ♨=ap007    provenence du fichier total /!\ ... app.php ...    /!\ racine du fichier ♨=ap007 
    //  ❥ = le fichier ne pas au même emplacement que l'appelant /!\
    //
    𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤  -->
    <div id="header">
    <div>
          <b>Ndenga Luvumbu</b>  
    </div>
    <div>
        <a class="accueil-header" id="accueil-header" href="#ny">ACCUEIL</a>
         <a class="contact-header" href="../index.php">Connexion/Inscription</a>  
        <a> <i class='fas fa-phone'></i></a>   
        <a><i class="fa fa-location-arrow"></i></a>       
    </div>
</div>
    <style>
        
        a 
        {
            text-decoration: none ; 
        }
    #header
    {
        display: flex  ; 
        justify-content: space-between ; 
 
    margin: auto ;  
      
        background-color:white;   
        border-bottom: 1px solid #e1e1e1 ;  
/*      position: fixed ; 

        width: 100%; 
*/
    }
    body 
    {
        overflow-x: hidden;
    }
    .titre 
    {
        font-size: 16px; 
    }
    div 
    {
        padding: 20px; 
    }
    div a 
    {
        color : #b3b3b3 ; 
        padding: 15px; 
    }
    .fa, .fas
    {
        color : #252525 ; 
    }
    p 
    {
        width: 30px; 
    }
        
    </style>


      

 
<?php 





if(isset($_SESSION["welcom_index"])){
 
 $_SESSION["welcom_index"] = $_SESSION["welcom_index"]+1; 
}
else {
 
  $_SESSION["welcom_index"] = 0 ; 
}

 


 
 var_dump($liste_projet_id) ; 

 for($var = 0 ; $var<count($liste_projet_id) ; $var ++ ) {
      echo $liste_projet_id[$var][0] ;
      echo "<br/>" ; 
 }
 
 ?>

 

 







 
<link rel="stylesheet" href="index.css">