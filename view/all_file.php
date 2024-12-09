
<div class="all_img_display" >


<?php 

 
$boucle_= 0 ; 
 
$index = $_SESSION["index"][2] ; 
// Le chemin du dossier où se trouvent vos fichiers
$dossier = '../src/img/'.$index;
$last ="" ; 
// Vérifie si le dossier existe
if (is_dir($dossier)) {
    // Ouvre le dossier
    if ($handle = opendir($dossier)) {
 
        // Parcourt les fichiers du dossier
        while (false !== ($file = readdir($handle))) {
            // Ignore les fichiers spéciaux '.' et '..'
            if ($file != '.' && $file != '..') {
                $filePath = $dossier . '/' . $file;

                // Récupère les informations sur le fichier
                $fileSize = filesize($filePath); // Taille du fichier
                $fileType = mime_content_type($filePath); // Type MIME du fichier
         
       $last = $filePath  ;   
       $last = str_replace("../","",$last);
?>



<div id="<?php echo 'id_'.$boucle_ ;  ?>">
<img style="width: 50px;" src="<?php echo $last ?>" alt="">
<div title="<?php echo $boucle_?>" class="<?php echo  'projet__'.$filePath.'__'.$last.'__ remove_img __'.$colonne_table_recherche_resultat  ?>" onclick="option_img(this)" >
    Suprimer
</div>
<div title="<?php echo $boucle_?>" class="<?php echo  'select__'.$filePath.'__'.$last.'__ select_img __'.$colonne_table_recherche_resultat  ?>" onclick="option_img(this)" >
    Selectionner
</div>
</div>
<?php 

            }

            $boucle_ ++ ; 
        }
      

        // Ferme le dossier
        closedir($handle);
    }
} else {
    echo "Le dossier '$dossier' n'existe pas.";
}



?>
 

 </div>



 <style>
    .all_img_display{
        display: flex;
        justify-content: space-around;
        margin-bottom: 50px;
        margin-top: 50px;
flex-wrap: wrap;

    }

    .all_img_display div{
margin: 15px;

    }

    .all_img_display img:hover{
        cursor: pointer;
    }

.remove_img{
 
    background-color: #c34d3a; 
}
    .select_img{
      
    background-color: #51c33a; 

    }

.remove_img,
.select_img{
    padding: 17px ;
    color: white;
    box-shadow: 1px 1px 7px black;
}


.remove_img:hover,
.select_img:hover{
cursor: pointer;
box-shadow: 1px 1px 17px black;
}
 </style>

 