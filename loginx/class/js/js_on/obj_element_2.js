
function obj_element_2(){
    console.log(obj_element_2_) 
    
    
    
     
    
    
    for(var x = 0 ; x < obj_element_2_.length ; x ++ ){
    
     
    
    var node = document.getElementsByClassName("demo")[0];
    var clone = node.cloneNode(true);
    document.getElementById("header_action_2_info_child").appendChild(clone);
    
    
    /*
    
    
    list2_liste_projet_name_class
    list2_liste_projet_description1_class
    list2_change_img1_class
    
    */
    
    console.log(obj_element_2_[x].information_user_id_sha1) ; 
     
    
    
    
     if(obj_element_2_[x].liste_projet_id_parent==""){
    document.getElementsByClassName("demo")[x].className = obj_element_2_[x].information_user_id_sha1+" col-sm-4 demo";
     }
     else {
        document.getElementsByClassName("demo")[x].className = obj_element_2_[x].information_user_id_sha1+" col-sm-4 demo display_none";
    
     }
    
    
    document.getElementsByClassName("demo")[x].id =obj_element_2_[x].liste_projet_id_sha1;
    
    document.getElementsByClassName("liste_projet_name_")[x].className = obj_element_2_[x].liste_projet_id_sha1+" "+list2_liste_projet_name_class;
    document.getElementsByClassName("liste_projet_description1")[x].className = obj_element_2_[x].liste_projet_id_sha1+" "+list2_liste_projet_description1_class; 
    document.getElementsByClassName("voir_projet")[x].className = obj_element_2_[x].liste_projet_id_sha1+" "+list2_voir_projet_class;
    document.getElementsByClassName("remove_projet")[x].className = obj_element_2_[x].liste_projet_id_sha1+" "+list2_remove_projet_class;
    
    
    if(obj_element_2_[x].liste_projet_img!=""){
    
    document.getElementsByClassName("background_img")[x].style.backgroundImage= "url('"+"pages_on/download_img/uploads/"+obj_element_2_[x].information_user_id_sha1+"/"+obj_element_2_[x].liste_projet_img+"')";
    document.getElementsByClassName("background_img")[x].title= obj_element_2_[x].information_user_id_sha1+"/"+obj_element_2_[x].liste_projet_img;
    
    }
    else {
        document.getElementsByClassName("background_img")[x].style.backgroundImage= "url('https://media.discordapp.net/attachments/1088954621541744790/1168238961089581156/ndengaluvumbu_logo_add_picture_7e4e1278-47cf-47b7-8558-68fcd740cacb.png?ex=65510a51&is=653e9551&hm=8ac9a4499310e64fa8ce357c3d15dd89290cfc9255f4ae2134c9436c4379e93f&=&width=671&height=671')";
    
    }
    
    document.getElementsByClassName("liste_projet_name_")[x].innerHTML = obj_element_2_[x].liste_projet_name;
    var liste_projet_description1_break ="" ; 
    for(var y  = 0  ;  y <obj_element_2_[x].liste_projet_description1.length ; y ++ ) {
        if(y==150 ){
            liste_projet_description1_break = liste_projet_description1_break+" ..." ; 
            break ; 
        }
        else {
            liste_projet_description1_break = liste_projet_description1_break+obj_element_2_[x].liste_projet_description1[y] ; 
        }
    }
    //document.getElementsByClassName("liste_projet_description1")[x].innerHTML = obj_element_2_[x].liste_projet_description1; 
    document.getElementsByClassName("liste_projet_description1")[x].innerHTML = liste_projet_description1_break; 
    document.getElementsByClassName("voir_article")[x].title = obj_element_2_[x].liste_projet_id_sha1; 
    //document.getElementsByClassName("voir_projet")[x].innerHTML = obj_element_2_[x].information_user_id_sha1; 
    }
    
    if(obj_element_2_.length >1) {
        document.getElementsByClassName("demo")[obj_element_2_.length ].className = "display_none";
    }
    
     }