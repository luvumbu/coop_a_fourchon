
function add_img(_this) {
    var ok = new Information("pages_on/download_img/name_projet.php"); // création de la classe 
    ok.add("name_projet", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
     window.location.replace("pages_on/download_img/index.php");     
}