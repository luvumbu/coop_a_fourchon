
function js_cookie(document_cookie){

    var cooki_name_bool = false ; 
    var cookie_name = "" ; 

    for(var x = 0 ; x<document_cookie.length;x++){

      if(cooki_name_bool==true) {
        if(document_cookie[x]==";"){
    break ;
      }
      else{
    
        cookie_name = cookie_name+document_cookie[x] ;
      }

      }
      if(document_cookie[x]=="="){
    cooki_name_bool =true ;
      }
    }

    return cookie_name;
}