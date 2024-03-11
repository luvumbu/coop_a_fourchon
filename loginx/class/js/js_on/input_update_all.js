function input_update_all(_this){

    var ok = new Information("class/php/php_update/update_all.php"); // création de la classe 
    ok.add("recherche_elements", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_name", id_input_update_all(recherche_elements(_this," "),0)); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_description1", id_input_update_all(recherche_elements(_this," "),1)); // ajout de l'information pour lenvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    
      }