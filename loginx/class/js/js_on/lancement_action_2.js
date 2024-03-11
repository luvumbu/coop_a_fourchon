function lancement_action_2(){
	
    var verif_element = false ; 
    if(myObj_[0]=="404"){
        verif_element =true;
    }
    
        if(!verif_element){
            for (var x  = 0 ; x <myObj_.length ; x ++) {
        console.log(myObj_.length ) ; 
     
    const node = document.getElementsByClassName("demo")[0];
    const clone = node.cloneNode(true);
    document.getElementById("header_action_2_info_child").appendChild(clone);
     
    }
        }
        var liste_projet_name_ = 		document.getElementsByClassName(name_variables[0]); 
        var liste_projet_description1 = document.getElementsByClassName(name_variables[1]); 
        var liste_projet_img_array =    document.getElementsByClassName(name_variables[2]); 
        var onclick_update_visibility = document.getElementsByClassName(name_variables[3]); 
        var onclick_update_web = 		document.getElementsByClassName(name_variables[4]); 
        var onclick_update_remove = 	document.getElementsByClassName(name_variables[5]); 
        var onclick_add_element = 		document.getElementsByClassName(name_variables[6]); 
        var onclick_update_visibility1 = 		document.getElementsByClassName(name_variables[7]); 
        var onclick_update_visibility2 = 		document.getElementsByClassName(name_variables[8]); 
        var onclick_update_remove = 		document.getElementsByClassName(name_variables[9]); 
        const myTimeout = setTimeout(exit_, time_load);
    
    function exit_() {
   
    
    
    
    if(myObj_[0]=="404"){
        for (var x  = 0 ; x <myObj_.length  ; x ++) {
    
    liste_projet_name_[x].value=liste_projet_name_array[x];  
    liste_projet_description1[x].value= liste_projet_description1_array[x] ; 
    liste_projet_name_[x].className=liste_projet_id_array[x]+" "+liste_projet_name_list_class;  
    liste_projet_description1[x].className= liste_projet_id_array[x]+" "+liste_projet_description1_list_class ; 
    liste_projet_img_array[x].className=liste_projet_id_array[x]+" "+change_img1_list_class; 
    if(liste_projet_visibilite1_array[x]=="1"){
    document.getElementsByClassName("onclick_update_visibility1")[x].src = img_1_2 ; 
    }
    
     if(liste_projet_visibilite2_array[x]=="1"){
        
        document.getElementsByClassName("onclick_update_visibility2")[x].src = img_2_1; 
     }
     
    document.getElementsByClassName("onclick_update_visibility1")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_visibility1_class ; 
    document.getElementsByClassName("onclick_update_visibility2")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_visibility2_class ; 
    document.getElementsByClassName("onclick_update_remove")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_remove_class ; 
    
    if(liste_projet_img_array_[x]!=""){
        document.getElementsByClassName("change_img1")[x].src="pages_on/download_img/uploads/"+ information_user_id_sha1_array[x]+"/"+liste_projet_img_array_[x]; 	
    }
    
    if(x>0){
        
    document.getElementsByClassName("onclick_add_element")[x].style.display="none"; 
    }
    else{
        
    document.getElementsByClassName("onclick_add_element")[x].className=liste_projet_id_array[x]+" "+liste_projet_onclick_add_element_list_class; 
    }
      
    }
    }
    else {
        for (var x  = 0 ; x <myObj_.length +1 ; x ++) {
            
        if(liste_projet_visibilite1_array[x]=="1"){
        document.getElementsByClassName("onclick_update_visibility1")[x].src = img_1_2 ; 
        }
     if(liste_projet_visibilite2_array[x]=="1"){
        
        document.getElementsByClassName("onclick_update_visibility2")[x].src = img_2_1; 
     }
     
    document.getElementsByClassName("onclick_update_visibility1")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_visibility1_class ; 
    document.getElementsByClassName("onclick_update_visibility2")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_visibility2_class ; 
    document.getElementsByClassName("onclick_update_remove")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_remove_class ; 
    
    liste_projet_name_[x].value=liste_projet_name_array[x];  
    liste_projet_description1[x].value= liste_projet_description1_array[x] ; 
    liste_projet_name_[x].className=liste_projet_id_array[x]+" "+liste_projet_name_list_class;  
    liste_projet_description1[x].className= liste_projet_id_array[x]+" "+liste_projet_description1_list_class ; 
    liste_projet_img_array[x].className=liste_projet_id_array[x]+" "+change_img1_list_class; 
    
    if(liste_projet_img_array_[x]!=""){
        document.getElementsByClassName("change_img1")[x].src="pages_on/download_img/uploads/"+ information_user_id_sha1_array[x]+"/"+liste_projet_img_array_[x];
    }
     
    if(x>0){
        
    document.getElementsByClassName("onclick_add_element")[x].style.display="none"; 
    }
    else{
        
    document.getElementsByClassName("onclick_add_element")[x].className=liste_projet_id_array[x]+" "+liste_projet_onclick_add_element_list_class; 
    }
      
    }
    }
    }
    
         document.getElementById("pas_visible").className="" ; 
     }