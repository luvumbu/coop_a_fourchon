function lancement_action_1() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    
      if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
         
    
        //general_el = myObj ; 
    
     
    
    console.log(liste_projet_name_array) ; 
    myObj_ = myObj; 
     
        for (var x  = 0 ; x <myObj.length; x ++) {
    
                          liste_projet_id_array.push( myObj[x].liste_projet_id_sha1)  ;  
                          liste_projet_name_array.push(myObj[x].liste_projet_name) ; 					  
                          liste_projet_description1_array.push( myObj[x].liste_projet_description1) ; 
                          change_img2_array.push( myObj[x].liste_projet_description1) ; 
                          liste_projet_img_array.push(myObj[x].liste_projet_img_array) ; 
                          liste_projet_visibilite1_array.push(myObj[x].liste_projet_visibilite1)  ; 
                          liste_projet_visibilite2_array.push( myObj[x].liste_projet_visibilite2)  ;
                          liste_projet_img_array_.push(myObj[x].liste_projet_img) ; 
                          information_user_id_sha1_array.push(myObj[x].information_user_id_sha1) ; 
     
    
    
    }
     
    const myTimeout = setTimeout(lancement_action_2, time_load);  
     
    
    }
    }; 
    xmlhttp.open("GET", "vlog_json_child.php", true);
    xmlhttp.send();	
    }