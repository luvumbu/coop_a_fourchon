 <div class="" style="text-align:center;width:80%;margin:auto;padding:20px">
  <div class="row">
    <div class="col-sm-4" id="header_1" >    <img width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/add--v1.png" alt="add--v1"></div>
    <div class="col-sm-4" id="header_2">    <img width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/exit--v1.png" alt="exit--v1"></div>
    <div class="col-sm-4" id="header_3"><img width="50"  class="cursor_pointer"  height="50" src="https://img.icons8.com/ios-filled/50/guest-male--v1.png" alt="guest-male--v1"/></div>
  </div> 
</div>
<div id="header_action"></div>
<script>
    document.getElementById("header_1").addEventListener("click", header_1_action);
    document.getElementById("header_2").addEventListener("click", header_2_action);
    document.getElementById("header_3").addEventListener("click", header_3_action);    
function submit__(){
  document.cookie = "username=";
  location.reload();
}
function header_1_action() {  
  console.log(this.id) ; 
  console.log(this.className) ;  
  this.display="none" ; 
 document.cookie = "username=";
Ajax("header_action","pages_on/header/header_action/header_action_1.html");
    const myTimeout = setTimeout(block_header_action_1, 100);
}
function block_header_action_1() {
  document.getElementById("add_blog").addEventListener("click", add_blog);
  document.getElementById("add_img").addEventListener("click", add_img);
  document.getElementById("add_folder").addEventListener("click", add_folder);
  document.getElementById("black_element").addEventListener("click", black_element);
}
 
function header_2_action() {
  console.log(this.id) ; 
  console.log(this.className) ; 
  Ajax("header_action","pages_on/header/header_action/session_destroy.php");
  const myTimeout = setTimeout(header_2_action_reload, 300);
function header_2_action_reload() {
  location.reload() ; 
}

}
function header_3_action() {
  console.log(this.id) ; 
  console.log(this.className) ; 
Ajax("header_action","class/php/php_select_data/person.php");
}

function disip() 
{
    document.getElementById("submit-button").style.display="none"; 
    document.getElementById("encours").style.display="block"; 
}

let time = "";
function add_blog() {
 this.style.display="none"; 
  const d = new Date();
 time = d.getTime();
 const x = setTimeout(oui_ok, 50); 
 document.cookie = "username="+time;
var ok = new Information("class/php/php_on/header_action_add.php"); // création de la classe 
ok.add("time", time); // ajout de l'information pour lenvoi 
//ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
function oui_ok() {
 window.location.replace("class/php/php_add/qr_code/index.php");
} 
}
function add_folder() {
  console.log(this.id) ; 
  console.log(this.className) ; 
  Ajax("header_action","pages_on/header/header_action/not.html");
  
}
function black_element() { 
  Ajax("header_action","pages_on/header/header_action/not.html"); 
}

function liste_projet_name_(_this){ 
  console.log(_this.value) ; 
  var ok = new Information("class/php/php_on/header_action_update.php"); // création de la classe 
ok.add("time",_this.title); // ajout de l'information pour lenvoi 
ok.add("id", _this.id); // ajout de l'information pour lenvoi 
ok.add("value", _this.value); // ajout de l'information pour lenvoi 
//ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
}

function liste_projet_description1_(_this){ 
  console.log(_this.value) ; 
  var ok = new Information("class/php/php_on/header_action_update.php"); // création de la classe 
ok.add("time",_this.title); // ajout de l'information pour lenvoi 
ok.add("id", _this.id); // ajout de l'information pour lenvoi 
ok.add("value", _this.value); // ajout de l'information pour lenvoi 
//ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

  
}

function input_update_all(){  
}

//Ajax("header_action","pages_on/header/header_action/header_action_2.html");
function header_action_2_(_this){
/* 
header_action_2_input
textarea_action_2_input
*/
 document.getElementById("header_action_2_info").title=time ;   
console.log(document.getElementById("header_action_2_info").title) ; 
var ok = new Information("class/php/php_on/header_action_update.php"); // création de la classe 
ok.add("time", js_cookie(document.cookie)); // ajout de l'information pour lenvoi 
ok.add("id", _this.id); // ajout de l'information pour lenvoi 
ok.add("value", _this.value); // ajout de l'information pour lenvoi 
//ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
}
function person(){
var information_user_name = document.getElementById("information_user_name").value ; 
var information_user_prenom = document.getElementById("information_user_prenom").value ; 
var information_user_adresse = document.getElementById("information_user_adresse").value ; 
var information_user_code_postale = document.getElementById("information_user_code_postale").value ; 
var information_user_adresse_mail = document.getElementById("information_user_adresse_mail").value ; 
var information_user_tel = document.getElementById("information_user_tel").value ; 
var ok = new Information("class/php/php_update/person.php"); // création de la classe  
ok.add("information_user_name", information_user_name); // ajout de l'information pour lenvoi 
ok.add("information_user_prenom", information_user_prenom); // ajout de l'information pour lenvoi 
ok.add("information_user_adresse", information_user_adresse); // ajout de l'information pour lenvoi 
ok.add("information_user_code_postale", information_user_code_postale); // ajout de l'information pour lenvoi 
ok.add("information_user_adresse_mail", information_user_adresse_mail); // ajout de l'information pour lenvoi 
ok.add("information_user_tel", information_user_tel); // ajout de l'information pour lenvoi 
//ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
}
</script>
<!--

<div class="container mt-5 text-center">
  <div class="mb-3">
     
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    
    <input type="password" class="form-control" id="exampleInputPassword1" style="height:90px">
  </div>
 
  <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
</div>
-->
  
<script>
/*
	get_rp_array_2	
	get_vent_array_2	
	get_result_users_perf_array_2	
	get_result_users_nom_1_array_2	
	get_result_users_nom_2_array_2		
	get_result_users_nom_3_array_2	
	get_result_users_nom_4_array_2	
	get_users_nationality_array_2	
	get_club_nom_complet_array_2	
	get_club_departement_array_2	
	
	get_club_region_array_2	
	get_cat_array_2	
	get_users_naissance_array_2	
	get_result_date_perf_array_2	
	get_result_villes_nom_array_2	
	
	epreuve_sex_array_2	
	get_users_nom_complet_array	
	info_all_array_click	
	info_all_array_ip	
	info_all_array_src_name	
	
	window_location_href	
	get_epreuve_nom_complet	
	reg_date
	*/
var el1 ="get_epreuve_nom_complet" ; 
var el2 ="800m - Salle | F" ; 
el2 = "50m - Salle | F" ; 
var liste_projet_description1 = "" ; 
 

var  cookie_ = "" ;
var limits="";
var limits="{0,50}";
var general_el = [] ; 
var x_ = 0 ; 
</script>
 
  

</body>
</html>