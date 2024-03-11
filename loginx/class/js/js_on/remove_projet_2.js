function remove_projet_2(_this){
	console.log(recherche_elements(_this," ")) ; 
}


function voir_article_page(_this){
	console.log(_this.title) ; 
}

function background_img_redirection(_this){
	  
  
 //window.location.href = "pages_on/download_img/uploads/"+_this+tittle;

 //console.log(_this.title) ; 
 window.location.href ="pages_on/download_img/uploads/"+_this.title ; 

}