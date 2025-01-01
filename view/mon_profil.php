<?php

$databaseHandler___ = new DatabaseHandler($dbname, $username);

$id_sha1_user = $_SESSION["index"][3];
$req_sql___ = "SELECT * FROM `$dbname` WHERE id_sha1_user ='$id_sha1_user' ";

$databaseHandler___->getListOfTables_Child($dbname);
$databaseHandler___->getDataFromTable2X($req_sql___);
$databaseHandler___->get_dynamicVariables();



$title_user = $dynamicVariables['title_user'][0];

$description_user = $dynamicVariables['description_user'][0];
$img_user = str_replace("../","",$dynamicVariables['img_user'][0]);

//$img_user  ="src/img/1735162964.jpeg" ; 

?>

<div class="mon_profil">
    <h2>Profil</h2>
<div class="mon_profil_img">

<?php 
if($img_user==""){
?>
    <img  class="<?= $index_img_user?>" onclick="a(this)" title="<?= $_SESSION["index"][3] ?>" src="https://i.pinimg.com/736x/cd/a5/15/cda5158cf5757f132cf26a8ca614734e.jpg" alt="" srcset="">

<?php 
}
else {
    ?>
    <img  class="<?= $index_img_user?>" onclick="a(this)" title="<?= $_SESSION["index"][3] ?>" src="<?= $img_user ?>" alt="" srcset="">

    <?php 
}

?>
</div>
    <div>
        <b>Pseudo</b>
    </div>
    <input type="text" id="title_user" value="<?= $title_user ?>" onkeyup="mon_profil_f()">

    <div>
        <b>Déscription</b>
    </div>
    <div onclick="add_info_user(this)" title="<?= $_SESSION['index'][3] ?>">
        <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/plus.png" alt="plus">
    </div>
    <textarea id="description_user" onkeyup="mon_profil_f()"><?= $description_user ?></textarea>


<a href="control.php">
<img width="100" height="100" src="https://img.icons8.com/dotty/100/visible.png" alt="visible"/>
</a>
</div>

<style>
    .mon_profil {
        width: 300px;
        margin: auto;
    }

    .mon_profil textarea {
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0.2);
        margin-top: 18px;
        margin-bottom: 18px;
    }
    .mon_profil_img img {
        width: 50%;
       width: 100%;
    }
    .mon_profil_img{
        width: 50%;
        margin: auto;
    }
    .mon_profil_img:hover{
        cursor: pointer;
    }
</style>


<script>
    function mon_profil_f() {

        var title_user = document.getElementById("title_user").value;
        var description_user = document.getElementById("description_user").value;
 
var ok = new Information("config/mon_profil_f.php"); // création de la classe 

 
ok.add("title_user", title_user); // ajout de l'information pour lenvoi 
ok.add("description_user", description_user); // ajout de l'information pour lenvoi 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 






    }


    function add_info_user(){
 
 
var ok = new Information("config/add_info_user.php"); // création de la classe 

 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

    }
</script>