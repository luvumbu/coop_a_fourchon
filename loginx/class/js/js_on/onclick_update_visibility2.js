function onclick_update_visibility2(_this) {
 

	liste_projet_visibilite2 ="" ; 
	if(_this.src==img_2_2){
 
 _this.src= img_2_1 ; 
 liste_projet_visibilite2="1" ; 
} 
else {
		_this.src= img_2_2 ; 

	}

	
var ok = new Information("class/php/php_update/onclick_update_visibility2.php"); // création de la classe 
ok.add("onclick_update_visibility", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
ok.add("liste_projet_visibilite2", liste_projet_visibilite2); // ajout de l'information pour lenvoi 




console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 }