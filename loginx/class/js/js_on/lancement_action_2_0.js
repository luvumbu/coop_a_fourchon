
function lancement_action_2_0(){
	var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
 if(myObj[0]!="404") {
	Ajax("header_action","pages_on/header/header_action/header_action_2_1.html");	
	 const myTimeout = setTimeout(obj_element_2, time_load);

 obj_element_2_ =  myObj ; 
 }
}
}; 
xmlhttp.open("GET", "vlog_json.php", true);
xmlhttp.send();	


 }