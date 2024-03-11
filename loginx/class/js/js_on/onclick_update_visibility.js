function onclick_update_visibility (_this){
    if(_this.src==img_invisible){
_this.src= img_visible ; 
    }
    else {
        _this.src= img_invisible ; 
    }


    var ok = new Information("class/php/php_update/update_click.php"); // création de la classe 
ok.add("recherche_elements",recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


}