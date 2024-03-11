
function onclick_update_remove (_this){

	location.reload() ; 
 
	//document.getElementById(recherche_elements(_this," ")).style.display="none";
	
 //_this.style.display = "none";
var ok = new Information("class/php/php_update/onclick_update_remove.php"); // création de la classe 
ok.add("onclick_update_visibility", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 



 
 }