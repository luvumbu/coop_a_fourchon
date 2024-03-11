<?php
    
    $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'] ; 
    $add_info_liste_projet_id_sha1 = $liste_projet_id_sha1[0]; 
    $add_info_liste_projet_id_parent = $liste_projet_id_parent[0]; 
    $add_info_information_user_id_sha1 = $information_user_id_sha1[0] ; 





    $information_user_id_sha1__ ="user_visit";



    $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("") ;  

        if(isset($_SESSION["information_user_id_sha1"])){
     $information_user_id_sha1__=       $_SESSION["information_user_id_sha1"]  ; 
     $apple->set_sql("INSERT INTO liste_log2 (liste_log_ip,liste_projet_id_sha1,liste_projet_id_parent,information_user_id_sha1)                
     VALUES ('$REMOTE_ADDR','$add_info_liste_projet_id_sha1','$add_info_liste_projet_id_parent','$information_user_id_sha1__')") ; 
        }
        else{
            $apple->set_sql("INSERT INTO liste_log (liste_log_ip,liste_projet_id_sha1,liste_projet_id_parent,information_user_id_sha1)                
            VALUES ('$REMOTE_ADDR','$add_info_liste_projet_id_sha1','$add_info_liste_projet_id_parent','$information_user_id_sha1__')") ; 
        }

        $apple->execution() ;






 
 



                /*
                if(isset($_SESSION["information_user_id_sha1"])){








                        }
                        else {
                            $information_user_id_sha1__ ="user_visit" ;
                                        $insertion_->set_msg_valudation("") ;  
            $insertion_->set_sql("INSERT INTO liste_log (liste_log_ip,liste_projet_id_sha1,liste_projet_id_parent,information_user_id_sha1)
                    
            VALUES ('$REMOTE_ADDR','$add_info_liste_projet_id_sha1','$add_info_liste_projet_id_parent','$add_info_information_user_id_sha1')") ; 
          $insertion_->execution() ;

                        }
    
    
    */
    
    
           
?>