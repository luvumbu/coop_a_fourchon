function onclick_add_element (_this){
	 
	console.log(recherche_elements(_this," ")) ; 

	_this.style.display ="none" ; 


	var ok = new Information("class/php/php_add/add_liste_projet_child.php"); // création de la classe 
ok.add("liste_projet_id_parent", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

const node = document.getElementsByClassName("demo")[0];
const clone = node.cloneNode(true);
document.getElementById("header_action_2_info_child").appendChild(clone);
console.log(document.getElementsByClassName("demo")[0].length) ;
location.reload() ; 
}