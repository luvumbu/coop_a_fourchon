<?php
session_start();

?>

<div class="selection_menu">

    <h1 class="text_center">

        <?php

        $information_user_adresse_mail = $_SESSION["information_user_adresse_mail"];
     
        $cross = '<img width="48" height="48" src="https://img.icons8.com/color/48/delete-sign--v1.png" alt="delete-sign--v1"/>';
        $alert = '<img width="48" height="48" src="https://img.icons8.com/color/48/error--v1.png" alt="error--v1"/>';

        $pattern_1 = "/@/i";
 
/*
        if (!preg_match($pattern_1, $information_user_adresse_mail) ) {


            echo $alert .'<b>@ adresse mail incorrecte</b>' ;
          


        }  
        else {
            echo "ok" ; 
 
        }

        */
var_dump( $_SESSION["info_login"]) ; 

echo  $_SESSION["info_login_verif"] ; 

        ?>
    </h1>
</div>

<style>
    .text_center {
        text-align: center;

        width: 100%;
    }
    b {
        color:red ; 
    }
</style>