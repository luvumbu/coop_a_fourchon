<?php
    



    $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'] ; 
 
        $insertion_ = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
                
           
            $insertion_->set_msg_valudation("") ;  


            if(isset($_SESSION["information_user_id_sha1"])){
                $information_user_id_sha1__ = $_SESSION["information_user_id_sha1"] ;

                            $insertion_->set_sql("INSERT INTO liste_log2 (liste_log_ip,liste_projet_id_sha1,information_user_id_sha1)
                    
            VALUES ('$REMOTE_ADDR','menu_principal','$information_user_id_sha1__')") ; 
                    }
                    else {
                        $information_user_id_sha1__ ="user_visit" ;
                        
                                    $insertion_->set_sql("INSERT INTO liste_log (liste_log_ip,liste_projet_id_sha1,information_user_id_sha1)
                    
            VALUES ('$REMOTE_ADDR','menu_principal','$information_user_id_sha1__')") ; 
                    }





            $insertion_->execution() ;
?>