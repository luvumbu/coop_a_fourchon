<?php

$databaseHandler___ = new DatabaseHandler($dbname, $username);

$id_sha1_user = $_SESSION["index"][3];
$req_sql___ = "SELECT * FROM `$dbname` WHERE id_sha1_user ='$id_sha1_user' ";

$databaseHandler___->getListOfTables_Child($dbname);
$databaseHandler___->getDataFromTable2X($req_sql___);
$databaseHandler___->get_dynamicVariables();



$title_user = $dynamicVariables['title_user'][0];

$description_user = $dynamicVariables['description_user'][0];


?>

<div class="mon_profil">
    <h2>Profil</h2>

    <div>
        <b>Pseudo</b>
    </div>
    <input type="text" id="title_user" value="<?= $title_user ?>" onkeyup="mon_profil_f()">

    <div>
        <b>Déscription</b>
    </div>
    <textarea id="description_user" onkeyup="mon_profil_f()"><?= $description_user ?></textarea>
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
</script>