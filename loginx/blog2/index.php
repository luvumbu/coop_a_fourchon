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
    echo '<p class="alert text-center alert-secondary" role="alert"> ';
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



 
<link rel="stylesheet" href="index.css">