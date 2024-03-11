<?php
session_start() ; 
include("../class/php/php_select_data/give_url.php") ; 

include("pages_json.php") ; 






  
include("add_log.php") ; 

 

/*
liste_projet_id
liste_projet_id_sha1
liste_projet_id_parent
liste_projet_id_sha1_general
liste_projet_ip
liste_projet_img
liste_projet_name
liste_projet_description1
liste_projet_description2
liste_projet_visibilite1
liste_projet_visibilite2
liste_projet_type
information_user_id_sha1
liste_projet_new_file
liste_projet_reg_date
liste_projet_color_1
liste_projet_color_2

*/


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>   <?php echo $liste_projet_name[0] ; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="icon" type="image/x-icon" href="">
</head>
<body>
 
<div class="display_flex_1">
    <b>

  
    <div class="hreff_el_0">
            
    <?php echo $liste_projet_name[0] ; ?>
    </div>  </b>

    <b>

 

 </label>
 

 <?php

/*
liste_projet_id_2
liste_projet_id_sha1_2
liste_projet_id_parent_2
liste_projet_id_sha1_general_2
liste_projet_ip_2
liste_projet_img_2
liste_projet_name_2
liste_projet_description1_2
liste_projet_description2_2
liste_projet_visibilite1_2
liste_projet_visibilite2_2
liste_projet_type_2
information_user_id_sha1_2
liste_projet_new_file_2
liste_projet_reg_date_2
liste_projet_color_1_2
liste_projet_color_2_2
$liste_projet_name_font_size
liste_projet_description1_font_size
*/
 ?>
 <label for=""></label>     <div class="display_flex_2 pages_1">
            <?php 
                        for($a = 0 ; $a<count($liste_projet_id_2) ; $a++){
                            echo ' <a class="hreff_el" href="#l'.$liste_projet_id_sha1_2[$a].'">';
                            
                            echo $liste_projet_name_2[$a];

                            echo  '</a>' ;
                        
                        }


            ?>
    </div>   </b>
</div>

<?php 

$src_img = "../../redirection_dowload_img/".$liste_projet_img[0] ;


 
?> 


<div class="presentation_"  style='background-image:url("<?php echo $src_img ; ?>")'>
            <div class="text-center">
            <h1 style="color:<?php echo $liste_projet_color_1[0]."; font-size:".$liste_projet_name_font_size[0].'; background-color:'.$liste_projet_background_color[0];?>">
            <?php echo $liste_projet_name[0] ; ?>
         
            </h1>
        </div>
        <div>
        <h2 class="text-justify padding_1"    style="color:<?php echo $liste_projet_color_2[0]."; font-size:".$liste_projet_description1_font_size[0].';background-color:'.$liste_projet_background_color[0];?>">
            <?php echo $liste_projet_description1[0] ; ?>
            
            </h2>
        </div>
</div>


 <?php 

if( count($a_) >0) {

  //  echo count($a_) ; 
  //  echo count($a_[0]) ; 
    //var_dump($a_) ; 


for($z = 0 ; $z<count($a_); $z ++) {

     

    for($z_ = 0 ; $z_<count($a_[0]); $z_ ++) {

         //echo $a_[$z][$z_];
       
?>



<?php 


        if($z_==6){
 
            
                    echo "<div class='text-center' id='l".$a_[$z][$z_-5]."'>
                    <b class='text-center'>".$a_[$z][$z_]."</b> <br/>";
                  $lien_element=  $a_[$z][$z_-5] ; 


                 
?>
<a href="<?php echo $lien_element ; ?>">
<div class="alert alert-info lien">
   lien  <?php echo $a_[$z][$z_] ;?>
</div>
</a>

<?php 

                   echo "<div class='description'>
                    <b class='text-center'>".$a_[$z][$z_+1]."</b>
</div>
                     
                    </div>";
?>


<b>


<div class="text-center bold_child">
<?php 


 
 


 
 
 


 

  

 

  
 
    if(count($b_[$z])==0){
    
    }
    else {
 /*
        echo $b_[$z][0] ; 
        echo "<br/>" ; 
 
        echo "<br/>" ; 
        echo $b_[$z][1] ; 
  
        echo "<br/>" ; 
        echo $b_[$z][2] ; 
         
        echo "<br/>" ; 
      
        echo $b_[$z][3] ; 
        echo "<br/>" ; 
 
        echo $b_[$z][4] ; 
        echo "<br/>" ; 
        echo $b_[$z][5] ; 
        echo "<br/>" ; 
        echo $b_[$z][6] ; 
        echo "<br/>" ; 
        echo $b_[$z][7] ; 

*/
     //   var_dump($b_[$z]) ; 

      

echo "<div class='i_array'>" ; 
       for($i_array = 0 ; $i_array< count($b_[$z]) ; $i_array ++) {



           
    
                  //  echo(fmod($i_array,16 ) . "<br>");
                 
                    if(fmod($i_array,17 )==6){
 echo "<div class='i_array2'>" ; 



 if($b_[$z][$i_array-1]==""){

 }
 else {
 

$img_src_ = "../../redirection_dowload_img/".$b_[$z][$i_array-1] ;



    ?>

 <div>
 <img class="taille_img" src="<?php echo  $img_src_ ?>" alt="" srcset="">

 </div>

    
    <?php 
 }
                        



  

                 for($o = 0 ; $o< strlen($b_[$z][$i_array]); $o++) {
                    echo $b_[$z][$i_array][$o] ; 

                    if($o==50){
                        break ; 
                    }

 
                 }

                        echo "<br/> TI" ; 

                        echo "<div class='description_el'>" ; 
                     

                             for($o = 0 ; $o< strlen($b_[$z][$i_array+1]); $o++) {
                                echo $b_[$z][$i_array+1][$o] ; 

                                if($o==51){


                                 
                    echo "...";

                                    break ; 
                                }
            
             
                             }

                

                             echo  '<a href="'.$b_[$z][$i_array-5].'">';
                            //  parent echo  '<a href="'.$b_[$z][$i_array-4].'">';

                             echo '<div class="alert" role="alert"  >
                             Voir article complet
                           </div>' ; 
                           echo '</a>' ; 
                        echo "</div>" ; 

                        echo "<br/>" ; echo "</div>" ;
                    }
         
 
 

       }


echo "</div>" ; 

    }
   
 
 
 


 
 

 

 
?>
</div>
</b>
<?php 

        }
    
    
    }


}



     }
?>



<style>
    .display_flex_1,.display_flex_2{
        display:flex;
        justify-content:space-between ; 
      
    

    }
    a {
        text-decoration:none ; 
    }
    .mmm{
        border:10px solid black ; 
    }
    .display_flex_1  {
       
 padding:15px ; 

    }

    .display_flex_2 div {
       margin-left:25px ; 
       margin-right:25px ; 
 

    }
    .padding_1{
        padding:45px; 
    }
    .presentation_{
      
       background-size:100% ; 

    }
    .bold_child{
        padding:25px ; 
    }
 .pages_1{
    color:rgba(0,0,0,0.3) ; 
 
 }
 .i_array{
    margin:15px; 
 

    display:flex; 
    justify-content:space-around ; 
    flex-wrap:wrap;
    
 }
 .i_array2{
 /*
    margin:5px; 
    border-bottom:5px solid rgba(100,0,0,0.2); 

border-top:5px solid #2acbd2 ; 
border-radius:15px 15px 0 0 ; 

display:block ; 
    padding-top:25px; 
    padding:25px; 
 
    margin:100px; 
    width:400px; 

   
*/






border: 1px #e1e1e1 ;
background-color : #fafafa ; 
width: 400px ; 
padding: 50px; 
border-top: 4px solid <?php echo $liste_projet_color_1[0] ; ?> ; 
border-radius: 15px 15px 0 0 ; 


 }
 .description_el{
 
    margin-top:20px ; 
    color:rgba(0,0,0,0.3) ; 
   
}
 .taille_img{
    width:100px;
    border-radius : 100%; 
    height:100px ; 
    margin-bottom:20px ; 
 }
 .description{
    color:rgba(0,0,0,0.4) ; 
margin-top:25px; 
 }
 
.hreff_el,.hreff_el_0   {
 
    margin-right:25px ; 
  color:<?php echo $liste_projet_color_1[0] ; ?> ; 
  border-bottom:1px solid <?php echo $liste_projet_color_1[0] ; ?> ; 
 }
 .hreff_el_0  {
 
border-bottom:1px solid rgba(0,0,0,0) ; 
}
.m_princ{
    width:200px; 
}
.lien {
    width:30%; 
    margin:auto ; 
    text-align:center ; 
    margin-top:60px; 
    margin-bottom:60px; 

}
</style>




 

 
<?php

 

if($liste_projet_id_parent[0]==0){
?>

<?php 
}
else {

    $link = $liste_projet_id_parent[0] ; 
    ?>
<a href="<?php echo $link ?>">
<div class="alert alert-dark m_princ" role="alert">
                Voir l'article Parent
</div>
</a>
 
    <?php 
}


?>
<a href="../index.php">
<div class="alert alert-warning m_princ" role="alert">
                Menu principal 
</div>
</a>



 
</body>
</html>