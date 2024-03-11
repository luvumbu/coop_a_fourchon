
function onclick_update_visibility1(_this) {
    console.log(recherche_elements(_this," ")) ; 
      console.log("onclick_update_visibility1") ; 
  var liste_projet_visibilite1 = "" ; 
      console.log(_this.src) ; 
  
      if(_this.src==img_1_1){
   
          _this.src= img_1_2 ; 
          liste_projet_visibilite1="1";
      
      }
      else {
          _this.src= img_1_1 ; 
   
      }
  
      
  var ok = new Information("class/php/php_update/onclick_update_visibility1.php"); // création de la classe 
  ok.add("onclick_update_visibility", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
  ok.add("liste_projet_visibilite1", liste_projet_visibilite1); // ajout de l'information pour lenvoi 
    
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
   }
  