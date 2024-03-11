
const img_1_1="https://img.icons8.com/badges/50/invisible.png" ; 
const img_1_2="https://img.icons8.com/badges/50/visible.png" ;
const img_2_2="https://img.icons8.com/ios/50/without-internet.png" ; 
const img_2_1="https://img.icons8.com/ios/50/wifi--v1.png" ; 
// variation des image visibility 1 et  2
const liste_projet_name_array =  [] ;   
const liste_projet_description1_array = [] ; 
const liste_projet_img_array = [] ; 
const liste_projet_visibilite1_array = [] ; 
const liste_projet_visibilite2_array = [] ; 
const change_img2_array = [] ; 
const liste_projet_id_array = [] ; 
const liste_projet_img_array_ = [] ;
const information_user_id_sha1_array =[] ; 
const liste_projet_name_list_class =  "form-control liste_projet_name_" ;   
const liste_projet_description1_list_class = "liste_projet_description1" ; 
const change_img1_list_class = "change_img change_img1 element_" ; 
const liste_projet_img_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_visibility" ; 
const liste_projet_visibilite1_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_web" ; 
const liste_projet_visibilite2_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_remove" ; 
const liste_projet_onclick_add_element_list_class  ="cursor_pointer onclick_add_element";
const listèonclick_update_visibility_list_class="cursor_pointer space_right_20 onclick_update_all onclick_update_visibility" ; 
const list_onclick_update_visibility1_class ="onclick_update_visibility1 cursor_pointer space_right_20 onclick_update_all onclick_update_visibility1" ; 
const list_onclick_update_visibility2_class ="cursor_pointer space_right_20 onclick_update_all onclick_update_visibility2" ; 
const list_onclick_update_remove_class ="cursor_pointer space_right_20 onclick_update_all onclick_update_remove" ; 
const list2_liste_projet_name_class="card-title liste_projet_name_" ; 
const list2_liste_projet_description1_class="card-text liste_projet_description1" ; 
const list2_voir_projet_class="btn btn-primary voir_projet" ; 
const list2_remove_projet_class="btn bg-danger remove_projet" ; 

var obj_element_2_  ; 

// affectation de classe apres clonage 
const time_load = 3000 ; 
// delai pour rafrechir les datas 
 const name_variables =[
"liste_projet_name_",
"liste_projet_description1",
"change_img1",
"onclick_update_visibility",
"onclick_update_web",
"onclick_update_remove",
"onclick_add_element",
"add_img",
"onclick_update_visibility1",
"onclick_update_visibility2",
"onclick_update_remove"
 ]


 myObj_length_child= 0 ;
 var verif_name = false ; 
 var control_statut = false ; 	
 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
      //general_el = myObj ; 
var web_off="https://img.icons8.com/ios/50/without-internet.png" ; 
var web_on="https://img.icons8.com/ios/50/wifi--v1.png" ; 
    for(var x = 0 ; x <myObj.length ; x ++ ) {
			if(js_cookie(document.cookie)==myObj[x].liste_projet_id_sha1){
					console.log(myObj[x]) ; 
					  Ajax("header_action","pages_on/header/header_action/header_action_2.html");
					  liste_projet_name_array.push(myObj[x].liste_projet_name) ; 					  
					  liste_projet_description1_array.push( myObj[x].liste_projet_description1) ; 
					  liste_projet_img_array.push(myObj[x].liste_projet_img) ; 
					  liste_projet_img_array_.push(myObj[x].liste_projet_img) ;
					  information_user_id_sha1_array.push(myObj[x].information_user_id_sha1) ; 
					  console.log(myObj) ; 
					  liste_projet_visibilite1_array.push(myObj[x].liste_projet_visibilite1)  ; 
					  liste_projet_visibilite2_array.push( myObj[x].liste_projet_visibilite2)  ; 
					  liste_projet_id_array.push( myObj[x].liste_projet_id_sha1)  ; 
					  var ok = new Information("class/php/cookie_table/liste_projet_id_parent.php"); // création de la classe 
					  ok.add("liste_projet_id_parent", js_cookie(document.cookie)); // ajout de l'information pour lenvoi					 
					  console.log(ok.info()); // demande l'information dans le tableau
					  ok.push(); // envoie l'information au code pkp 
	                  const myTimeout = setTimeout(lancement_action_1, time_load);
					  control_statut = true ; 

	}
// Boucle du premier parent
 
	}

	if(control_statut==false){
 const myTimeout = setTimeout(lancement_action_2_0, time_load);  
}
}
}; 
xmlhttp.open("GET", "vlog_json.php", true);
xmlhttp.send();	