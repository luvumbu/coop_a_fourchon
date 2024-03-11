<?php
$width = 40;
$verification_id = false;
include("../../model/class/php/Insertion_Bdd.php");
include("../../model/class/php/Select_datas.php");
include("../../model/class/php/connexion.php");
include("../../model/class/php/Get_anne.php");
include("pages_json_1.php");

$replace_el = str_replace("blog", "blog1", $_SERVER['PHP_SELF']);



if ($verif_id) {


    $apple = new Select_datas($servername, $username, $password, $dbname);
    array_push(
        $apple->row,
        'liste_log_id',
        'liste_log_ip',
        'liste_projet_id_sha1',
        'liste_projet_id_parent',
        'information_user_id_sha1',
        'liste_reg_date'
    );
    $apple->sql = 'SELECT * FROM `liste_log2` WHERE `liste_projet_id_sha1`="' . give_url() . '"';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);
    $total_visit = count($apple->list_row) / 6;
    //var_dump($apple->list_row) ;    
    $apple_my_ip = new Select_datas($servername, $username, $password, $dbname);
    array_push(
        $apple_my_ip->row,

        'liste_log_id',
        'liste_log_ip',
        'liste_projet_id_sha1',
        'liste_projet_id_parent',
        'information_user_id_sha1',
        'liste_reg_date'
    );
    $apple_my_ip->sql = 'SELECT * FROM `liste_log2` WHERE `liste_log_ip` ="' . $REMOTE_ADDR . '" AND `liste_projet_id_sha1`="' . give_url() . '"';
    $apple_my_ip->execution();
    $myJSON = json_encode($apple_my_ip->list_row);

    $mes_visites = count($apple_my_ip->list_row) / 6;




    $apple_information_user_id_sha1 = new Select_datas($servername, $username, $password, $dbname);
    array_push(
        $apple_information_user_id_sha1->row,
        'information_user_id',
        'information_user_name',
        'information_user_prenom',
        'information_user_adresse_mail'

    );
    $apple_information_user_id_sha1->sql = 'SELECT * FROM `information_user` WHERE `information_user_id_sha1`="' . $const_information_user_id_sha1 . '" LIMIT 1';
    $apple_information_user_id_sha1->execution();
    ?>

    <div class="apple_information_user_id_sha1 display_none">
        <div class="information_user_id">
            <?php echo $apple_information_user_id_sha1->list_row[0] ?>
        </div>
        <div class="information_user_name">
            <?php echo $apple_information_user_id_sha1->list_row[1] ?>
        </div>
        <div class="information_user_prenom">
            <?php echo $apple_information_user_id_sha1->list_row[2] ?>
        </div>
        <div class="information_user_adresse_mail">
            <?php echo $apple_information_user_id_sha1->list_row[3] ?>
        </div>
    </div>



<?php


} else {

    ?>
    <img src="https://kfg6bckb.media.zestyio.com/yalantis-interactive-404.gif" alt="" srcset="" style='width:100%'>
    <link rel="stylesheet" href="404.css">
    <?php
}







?>

<style>
    .apple_information_user_id_sha1{
        background-color: azure;
    }
    .display_none{
        display: none;
    }
</style>

 