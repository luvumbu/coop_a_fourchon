<script>
    function afficherValeursFormattees2(chaine, separation) {
        // La méthode split() sépare la chaîne en un tableau de sous-chaînes, en utilisant "__" comme séparateur
        const valeurs = chaine.split(separation);
        // Retourne le tableau des valeurs obtenues après séparation
        return valeurs;
    }


    var __ = "__";
</script>



<?php
$__ = "__";
$index_0 = $_SESSION["index"][0];
$index_1 = $_SESSION["index"][1];
$index_2 = $_SESSION["index"][2];
$index_3 = $_SESSION["index"][3];
$index = $index_0 . $__ . $index_1 . $__ . $index_2 . $__ . $index_3;

$index_insert = $index . $__ . "insert";
$index_update = $index . $__ . "update" . $__;
$index_all = $index . $__ . "all" . $__;
$index_remove= $index . $__ . "remove" . $__;

$index_sitting= $index . $__ . "sitting" . $__;
$index_img= $index . $__ . "img" . $__;

$databaseHandler = new DatabaseHandler("root", "root");

if (isset($_SESSION["home"])) {


    switch ($_SESSION["home"]) {
        case "insert":
        case "all":
            $req_sql = "SELECT * FROM projet WHERE id_sha1_user_projet='$index_3' ";
             break;
        default:
            $id_sha1_projet =  $_SESSION["id_sha1_projet"];
            $req_sql = "SELECT * FROM projet WHERE id_sha1_projet ='$id_sha1_projet' ";
           
    }

    $databaseHandler->getListOfTables_Child("projet");
    $databaseHandler->getDataFromTable2X($req_sql);
    $databaseHandler->get_dynamicVariables();
    $count = count($dynamicVariables['id_sha1_projet']);

    for ($a = 0; $a < $count; $a++) {



      //  require 'all_doc.php'; 
 

      echo '<div class="all_doc">';
        // echo $dynamicVariables['id_sha1_projet'][$a] ; 
        echo "<br/>";
        $id_sha1_projet =  $dynamicVariables['id_sha1_projet'][$a];
        $title_projet =  $dynamicVariables['title_projet'][$a];
        $description_projet =  $dynamicVariables['description_projet'][$a];
        echo '<input type="text" value="' . $title_projet . '" class="' . $index_update . $id_sha1_projet . '" onkeyup="a(this)">';
        echo '<textarea type="text" class="' . $index_update . $id_sha1_projet . '" onkeyup="a(this)">' . $description_projet . ' </textarea>';
        echo "<br/>";
        echo '<div onclick="a(this)" class="' . $index_remove . $id_sha1_projet .'">'; 
            echo '<img width="50" height="50" src="https://img.icons8.com/color/50/delete-forever.png" alt="delete-forever"/>';
        echo '</div>';

        /*
        echo '<div class="' . $index_sitting . $id_sha1_projet .'" onclick="a(this)">' ; 
            echo '<img width="50" height="50" src="https://img.icons8.com/ios/50/settings--v1.png" alt="settings--v1"/>';
        echo '</div>' ; 
        */
        echo '<div class="' . $index_img . $id_sha1_projet .'" onclick="a(this)">' ; 
            echo '<img class="cursor_pointer" width="50" height="50" src="https://img.icons8.com/ios/50/image-file.png" alt="image-file"/>';
        echo '</div>' ; 
        echo '</div>' ; 

      
    }
}


//echo  'HOME : '.$_SESSION["home"] ; 
?>
<div class="black_element" onkeyup="">
    <div class="<?php echo  $index_insert ?>" onclick="a(this)">option insert</div>
    <div class="<?php echo  $index_all ?>" onclick="a(this)">MES PROJET</div>
</div>
<script>
    function a(_this) {
        var element = afficherValeursFormattees2(_this.className, __);
        console.log(element);
        var ok = new Information("config/general_function.php"); // création de la classe 

        // valeur si update       
        if (_this.value == undefined) {
            _this.value = "";
        }
        if (element[5] == undefined) {
            element[5] = "";
        }
        // valeur si update 
        // le tableau a une case en plus dans les parametres 


        ok.add("value", _this.value); // ajout de l'information pour lenvoi 
        ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
        ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
        ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
        ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
        ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
       console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
 
 if( element[4]=="img") {
    var add_img = document.getElementById("add_img").className ;

if(add_img=="display_none"){
    document.getElementById("add_img").className =""; 
}
else {
    document.getElementById("add_img").className ="display_none"; 


}
}
if(_this.tagName=="DIV") {
 //  const myTimeout = setTimeout(x, 250);
}
       
 
       function x() {
            location.reload();

        }
            
    }
</script>


<div id="add_img" class="display_none">

    <?php



    require_once "view/add_img.php";
    ?>

</div>
<style>
    .black_element {
        background-color: black;
        color: white;
        display: flex;
        justify-content: space-around;
    }

    .black_element div {
        padding: 17px;
    }

    .black_element div:hover {
        background-color: white;
        color: black;
    }

    .all_doc{
        
        margin-bottom: 135px;
    }
    .all_doc  {
     
        width: 80%;
        margin: auto;
       
    }
   .all_doc textarea,.all_doc input{
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }
    .cursor_pointer:hover{
        cursor: pointer;
    }
</style>