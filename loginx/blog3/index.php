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
 
        <a class="contact-header" href="../../index.php">Connexion / Inscription</a>  
        <a> <i class='fas fa-phone'></i></a>   
        <a><i class="fa fa-location-arrow"></i></a>       
    </div>
</div>

 

<div class="slogan">
          <h1>
          Ndenga Luvumbu
          </h1>
          <h2>
          Creative solutions, creative results.
          </h2>
</div>

 
<div class="margin_100px"></div>

<h2 class="text-center">
À PROPOS
</h2>
<div class="margin_100px"></div>


<div class="apropos">
  <p>
 Voici où vous permettez aux clients de savoir de quoi parle votre site Web. Vous pouvez éditer tout ce texte et le remplacer par ce que vous voulez écrire. Par exemple, vous pouvez leur indiquer depuis combien de temps vous travaillez, ce qui rend votre entreprise spéciale, quelles sont ses valeurs fondamentales et bien plus encore.
 Modifiez votre page À propos de l'onglet Pages en cliquant sur le bouton Modifier.
</p>
</div>
<div class="margin_100px"></div>


    <style>
      .apropos p {
/*
        border:1px solid rgba(0,0,0,0.2) ; 
*/
      }
      .apropos {
border:1px solid rgba(0,0,0,0.2) ; 
margin:auto ; 
padding:25px ; 
width:80% ; 

      }
      .margin_100px{
        margin-top:100px; 
      }
        .slogan {
          background-image:url("../../src/img/123346.gif") ; 
          height:450px; 
          width:100%; 
          background-size:100%; 
        
        }
        .slogan h1, .slogan h2  {
text-align:center ; 
margin-top:100px; 
font-size:3em ; 

color:white ; 
        }

        .slogan h2  {
          font-size:2.5em ; 


        }
 
        a 
        {
            text-decoration: none ; 
        }
    #header,  #header2
    {
        display: flex  ; 
        justify-content: space-between ; 
 
     
      
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
       
    }
        
    </style>


      

<?php 





if(isset($_SESSION["welcom_index"])){
 
 $_SESSION["welcom_index"] = $_SESSION["welcom_index"]+1; 
}
else {
 
  $_SESSION["welcom_index"] = 0 ; 
}

echo '<div class="general__">' ; 


 
 for($i = 0 ; $i < count($liste_projet_id) ; $i ++ ) {
  echo '<div class="element_1">  ' ;
   if($liste_projet_visibilite1[$i]!=""){



   $src_img = "../redirection_dowload_img/".$liste_projet_img[$i] ; 
   ?>
        <div class="mon_img" style="background-image:url('<?php echo $src_img ; ?>') "></div> 
      
  <?php 
    echo '<h2>'.$liste_projet_name[$i].'</h2>' ; 
    echo "<p>" ; 
    //echo $liste_projet_description1[$i] ; 


    $result_ = "" ; 
    for($p = 0 ; $p<strlen($liste_projet_description1[$i]); $p ++){
     
      if($p==500){
        echo $liste_projet_description1[$i][$p]."...";
        break ; 
      }
      else {
        $result_ = $result_.$liste_projet_description1[$i][$p] ; 

        
      }
    }
    echo "<br/>" ; 



 

   $result_ =  str_replace("#34#",'"',$result_);
   $result_ =  str_replace("#92#","\'",$result_);
  

 
 

 echo  $result_ ; 
    echo "</p>" ; 
    

    ?>
<a href="<?php echo "pages.php/".$liste_projet_id_sha1[$i]?>"> 
    <?php 
    echo '<p class="alert text-center alert-secondary" role="alert" style="background-color:black;color:white"> ';
    echo 'Voir l\'article';
    echo '</p>';
echo '</a>' ;

  echo '</div>' ;
   
 }
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

</div>!--> 



 
<link rel="stylesheet" href="../blog_index.css">

<div id="header2">
    <div>
          <b>Ndenga Luvumbu</b>  
    </div>
    <div>
 
        <a class="contact-header" href="../../index.php">Connexion / Inscription</a>  
        <a> <i class='fas fa-phone'></i></a>   
        <a><i class="fa fa-location-arrow"></i></a>       
    </div>
</div>
