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
if ($verif_id) {
    $apple = new Select_datas($servername, $username, $password, $dbname);
    array_push(
        $apple->row,
        'liste_log_id',
        'liste_log_ip',
        'liste_projet_id_sha1',
        'liste_projet_id_parent',
        'information_user_id_sha1',
        'liste_reg_date'
    );
    $apple->sql = 'SELECT * FROM `liste_log2` WHERE `liste_projet_id_sha1`="' . give_url() . '"';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);
    $total_visit = count($apple->list_row) / 6;
    //var_dump($apple->list_row) ;    
    $apple_my_ip = new Select_datas($servername, $username, $password, $dbname);
    array_push(
        $apple_my_ip->row,

        'liste_log_id',
        'liste_log_ip',
        'liste_projet_id_sha1',
        'liste_projet_id_parent',
        'information_user_id_sha1',
        'liste_reg_date'
    );
    $apple_my_ip->sql = 'SELECT * FROM `liste_log2` WHERE `liste_log_ip` ="' . $REMOTE_ADDR . '" AND `liste_projet_id_sha1`="' . give_url() . '"';
    $apple_my_ip->execution();
    $myJSON = json_encode($apple_my_ip->list_row);

    $mes_visites = count($apple_my_ip->list_row) / 6;
} else {
    ?>
    <img src="https://kfg6bckb.media.zestyio.com/yalantis-interactive-404.gif" alt="" srcset="" style='width:100%'>
    <link rel="stylesheet" href="404.css">
    <?php
}
?>

<style>
    
    #body,.pages_json_1 {
    
    font-size: 0;
    padding: 0;
    margin: 0;
    position: absolute;
    left: -99%;
    width: 0;
    height: 0;
 
    }
</style>




</div>






















<?php
include('html/model_complet_1.html');
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





    document.getElementById("parent_").innerHTML = document.getElementsByClassName("pages_json_1_7")[0].innerHTML;
    document.getElementById("pages_json_1_7_1").innerHTML = document.getElementsByClassName("pages_json_1_7")[0].innerHTML;

    document.getElementById("p_header_1").innerHTML = document.getElementsByClassName("pages_json_1_8")[0].innerHTML;


 


    var src_header_img = document.getElementsByClassName("pages_json_1_6")[0].innerText ;    

    if(src_header_img!=""){
        document.getElementById("img_header").src ="../../redirection_dowload_img/"+document.getElementsByClassName("pages_json_1_6")[0].innerText;

    }
    else{
        document.getElementById("img_header").remove() ; 
    }
    
    //pages_json_1_6
    



    function clonage_div(clone_div, namme_id, clonage_div, value, option_remove) {

        //const node = document.getElementById("pages_json_3_child_clone");
        const node = document.getElementById(clone_div);


        const clone = node.cloneNode(true);
        node.setAttribute("id", namme_id);

        //node.innerHTML="<a href='#"+pages_json_3[x].children[1].innerText+"'>"+value+"</a>" ; 

        var link = parseInt(pages_json_3[x].children[1].innerText);
        node.innerHTML = "<a href='#" + link + "'>" + value + "</a>";


        document.getElementById(clonage_div).appendChild(clone);

        if (option_remove == "oui") {
            const element = document.getElementById(clone_div);
            element.remove();
        }
    }








    // header copie ici 

    for (var x = 0; x < pages_json_3.length; x++) {

        console.log(pages_json_3[x].children[0].innerText);
        var action_ = "oui";

        if (x == pages_json_3.length - 1) {


        }
        else {
            action_ = "non";
        }
        clonage_div("pages_json_3_child_clone_1", "", "pages_json_3", pages_json_3[x].children[6].innerText, action_);







    }





    for (var x = 0; x < pages_json_3.length; x++) {






        const node = document.getElementById("pages_json_3_child_clone_2");
        node.setAttribute("class", node.className.replace("display_none", ""));
        node.children[1].children[0].innerHTML = pages_json_3[x].children[6].innerText;

        const clone = node.cloneNode(true);
        document.getElementById("left").appendChild(clone);




    }

var last_x = 0;
    for (var x = 0; x < pages_json_3.length; x++) {

        last_x = x ; 

        var pages_json_3_child_clone_2 = document.getElementsByClassName("pages_json_3_child_clone_2");

        pages_json_3_child_clone_2[x].children[1].children[0].innerHTML = pages_json_3[x].children[6].innerText;
        pages_json_3_child_clone_2[x].children[1].children[0].id = parseInt(pages_json_3[x].children[1].innerText);




        pages_json_3_child_clone_2[x].children[1].children[0].innerHTML = pages_json_3[x].children[6].innerText;

      

         pages_json_3_child_clone_2[x].children[1].children[2].innerHTML = pages_json_3[x].children[14].innerText;
 

        if(pages_json_3[x].children[5].innerText!=""){
            pages_json_3_child_clone_2[x].children[1].children[1].src = "../../redirection_dowload_img/"+pages_json_3[x].children[5].innerText;
            pages_json_3_child_clone_2[x].children[1].children[1].className = "";

        }
        else {
            //pages_json_3_child_clone_2[x].children[1].children[1].src = "../../redirection_dowload_img/"+pages_json_3[x].children[5].innerText;


            console.log("test") ; 
            console.log(pages_json_3_child_clone_2[x].children[1].children[1].src);
            console.log(pages_json_3_child_clone_2[x].children[1].children[1].id);

            console.log("test") ; 

        }
        pages_json_3_child_clone_2[x].children[1].children[3].innerHTML = pages_json_3[x].children[7].innerText;
        pages_json_3_child_clone_2[x].children[1].children[4].innerHTML = "<a href=" + pages_json_3[x].children[1].innerText + ">VOIR ARTICLE</a>";







                var para = document.createElement("a");
                para.innerHTML = "<div>"+pages_json_3[x].children[6].innerText+"</div>";
                para.href = "#"+parseInt(pages_json_3[x].children[1].innerText);


                


                document.getElementById("header_2").appendChild(para);





        if (x == pages_json_3.length) {


            var pages_json_3_child_clone_2 = document.getElementsByClassName("pages_json_3_child_clone_2")[x];
            console.log(pages_json_3_child_clone_2.id);


            document.getElementById("pages_json_3_child_clone_2").remove();


        }
        else {
            pages_json_3_child_clone_2[x].setAttribute("id", "");
            pages_json_3_child_clone_2[x + 1].setAttribute("id", "");



        }



    }

 

var pages_json_3_child_clone_2 = document.getElementsByClassName("pages_json_3_child_clone_2" ) ; 
pages_json_3_child_clone_2[last_x+1].remove();

    // fin header copie 

    /*
    document.getElementById("pages_json_1_7_1").innerHTML=pages_json_1[0].children[6].innerText  ;
    document.getElementById("pages_json_1_7_2").innerHTML=pages_json_1[0].children[6].innerText  ;
    
    
    document.getElementById("pages_json_1_8_1").innerHTML=pages_json_1[0].children[7].innerText  ;
    
    
    document.getElementById("pages_json_1_15_1").innerHTML=pages_json_1[0].children[14].innerText  ;
    
    */
    /*
    
   bodyliste_projet_id   //1
   liste_projet_id_sha1  //2 
   liste_projet_id_parent   //3  
   liste_projet_id_sha1_general  //4 
   liste_projet_ip  //5
   liste_projet_img  //6
   liste_projet_name  //7
   liste_projet_description1  //8
   liste_projet_description2  //9
   liste_projet_visibilite1   //10
   liste_projet_visibilite2   //11
   liste_projet_type  //12
   information_user_id_sha1  //13 
   liste_projet_new_file  //14
   liste_projet_reg_date  //15 
   liste_projet_color_1  //16 
   liste_projet_color_2  //17 
   liste_projet_name_font_size  //18 
   liste_projet_description1_font_size  //19 
   liste_projet_background_color  //20 
   liste_projet_description1_tittle //21
   liste_projet_name_tittle  //22
   
   */


</script>



<style>
    a {
        text-decoration: none;
        color: var(--color_02);
        padding: 35px;
    }
</style>

<?php

/*
var_dump(  $liste_projet_id_2x) ; 
var_dump( $liste_projet_name_2x) ; 
var_dump( $liste_projet_description1_2x) ; 
*/
 



 







 


?>




<script>


/*
var right = document.getElementsByClassName("right") ; 
right['0'].children[5].children['0'].children[1].innerText ; 
right['0'].children[5].children['0'].children[1].innerText ;
*/    

 
 

 
 

 var taille_ =document.getElementsByClassName("all_src_1").length
 
for(var x = 0 ; x<taille_; x ++){
    



    const node = document.getElementById("all_article");
  const clone = node.cloneNode(true);


node.setAttribute("class",node.className.replace("display_none",""))
 console.log(node.className) ; 
 

  document.getElementById("right").appendChild(clone);
}
 


 
for(var x = 0 ; x<taille_; x ++){
    

 


    var all_article = document.getElementsByClassName("all_article");
 
 
 
 document.getElementsByClassName("all_article_h1")[x].innerText=document.getElementsByClassName("all_src_2")[x].innerText; 
 document.getElementsByClassName("all_article_date")[x].innerText=document.getElementsByClassName("all_src_5")[x].innerText; 
 document.getElementsByClassName("info_page")[x].innerText="Voir article"; 

 

 
 document.getElementsByClassName("all_article_p1")[x].innerText=document.getElementsByClassName("all_src_3")[x].innerText; 
 

  
 document.getElementsByClassName("all_article_btn")[x].setAttribute("href",document.getElementsByClassName("all_src_6")[x].innerText); 


var src_img =document.getElementsByClassName("all_src_4")[x].innerText ; 
  
 

 if(src_img!=""){
    document.getElementsByClassName("section_div_img")[0].style.backgroundImage = "url('../../redirection_dowload_img/"+src_img+"')";

 }
 

 
  
}

 

const node = document.getElementById("id_qr_code");
const clone = node.cloneNode(true);
document.getElementById("id_qr_code_2").appendChild(clone);
document.getElementsByClassName("id_qr_code")[0].remove() ; 
document.getElementsByClassName("id_qr_code")[0].setAttribute("class",document.getElementsByClassName("id_qr_code")[0].className.replace("display_none",""))

 
 
</script>


<?php


$apple = new Select_datas($servername, $username, $password, $dbname);
array_push(
    $apple->row,
    'liste_projet_id_sha1',
    'liste_projet_img',
    'information_user_id_sha1'

 
);
$apple->sql = 'SELECT * FROM `liste_projet` WHERE `liste_projet_img` !=""';
$apple->execution();
$myJSON = json_encode($apple->list_row);




//var_dump($apple->list_row) ; 



$name_file = "ok.txt";


for($a = 0 ; $a<count($apple->list_row); $a ++) {

 

  if( fmod($a,count($apple->row))==1){
    $name_file = "../redirection_dowload_img/".$apple->list_row[$a] ; 
 



if ( file_exists($name_file ) )
{

   
 //    include('path.php');
}
else {
  
  

    $liste_projet_id_sha1 =$apple->list_row[$a-1] ; 
  
  
    $apple_2 = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
        $apple_2->set_msg_valudation("remove ".$liste_projet_id_sha1) ;  
        $apple_2->set_sql('UPDATE `liste_projet` SET `liste_projet_img` = "" WHERE `liste_projet_id_sha1` = "'.$liste_projet_id_sha1.'"') ; 
        $apple_2->execution() ;
  
    /*?>

<div class="remove_name"><?php echo $apple->list_row[$a-1]; ?></div>
  <?php 
 */


 ?>
<meta http-equiv="refresh" content="0;URL=">

<?php 
}
  }
}



?>

<script>

    /*
    var remove_name = document.getElementsByClassName("remove_name") ; 

    if(remove_name.length!=0){
      console.log(remove_name.length) ; 
    }
    */
</script>