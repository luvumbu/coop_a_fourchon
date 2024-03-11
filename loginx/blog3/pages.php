<?php
session_start();
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
 #id_qr_code,#body{
   
 }
</style>

























<?php 
    include('template/header/header_1.html') ; 
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
            console.log(pages_json_1.length);
            console.log(pages_json_2.length);
            console.log(pages_json_3.length);
            console.log(pages_json_4.length);
            console.log(pages_json_5.length);
            console.log(pages_json_6.length);
            console.log(pages_json_7.length);
            console.log(pages_json_8.length); 
*/
 
 
 
 
document.getElementById("pages_json_1").innerHTML=pages_json_1[0].children[0].innerText  ;
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

<!-- 

<button onclick="myFunction()">Copy</button>
<p>Click "Copy" to copy an item from one list to another.</p>

<ul id="myList1"><li>Coffee</li><li>Tea</li></ul>
<ul id="myList2"><li>Water</li><li>Milk</li></ul>

<p>If you change the <b>deep</b> parameter to false, only an empty LI element will be cloned.</p>
-->
<script>
 
  /*
 var node = document.getElementById("nav_element");
 var node = pages_json_3[0];

 
 
 const clone = node.cloneNode(true);
  document.getElementById("myList1").appendChild(clone);

 
  <a href="/" class="active color_1 header_model_1">
                <h1>NOS SERVICES</h1>
            </a>
  */








for(var x = 0 ; x < pages_json_3.length ; x ++ ) {
    var para = document.createElement("h1");


var info = document.getElementsByClassName("pages_json_3_7")[x].innerHTML  ; 
para.innerHTML = "<b>"+info+"</b>";
para.setAttribute("class","color_2") ;

document.getElementById("pages_json_3").appendChild(para);


var para = document.createElement("div");

var info = document.getElementsByClassName("pages_json_3_7")[x].innerHTML  ; 
para.innerHTML = info;
 

document.getElementById("pages_json_4").appendChild(para);
}



</script>

<style>
 
    #body,#id_qr_code{
       
    }
 
</style>



<?php 
    include('template/section/section_1.html') ; 
?>


<script>
document.getElementById("h1_section").innerHTML='<div id="h1_section" class="text-center color_3"><h1>'+pages_json_1[0].children[0].innerText +'</h1></div>';
document.getElementById("des_section").innerHTML='<div id="h1_section" class="text-center"><h1>'+pages_json_1[0].children[7].innerText +'</h1></div>';
 

 
</script>






