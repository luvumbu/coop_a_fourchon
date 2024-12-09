<?php
// Le chemin du dossier où se trouvent vos fichiers
$dossier = 'src/img/1';

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
   
         
                echo "<div><a href='$filePath' target='_blank'>$file</a></div>";
           
       
       
                echo "</tr>";
            }
        }
        echo "</table>";

        // Ferme le dossier
        closedir($handle);
    }
} else {
    echo "Le dossier '$dossier' n'existe pas.";
}
?>
