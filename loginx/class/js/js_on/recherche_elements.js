function recherche_elements(_this,recherche) {
	var id_element ="" ; 
	for(var x  = 0 ; x <_this.className.length ; x ++){
		
		if(_this.className[x]==recherche){
			break ; 
		}
		else {
			id_element = id_element+ _this.className[x] ; 
		}
	}

	 return id_element ; 

	 //exemple utilisation
	// console.log(recherche_elements(_this," ")) ; 
	 // fin exemple 
}