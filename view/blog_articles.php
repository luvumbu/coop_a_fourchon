<?php


/*
$id_projet_dynamic_1 = $dynamicVariables['id_projet'];
$activation_projet_dynamic_1 = $dynamicVariables['activation_projet'];
$id_general_dynamic_1 = $dynamicVariables['id_general'];
$id_user_projet_dynamic_1 = $dynamicVariables['id_user_projet'];
$id_sha1_user_projet_dynamic_1 = $dynamicVariables['id_sha1_user_projet'];
$id_sha1_projet_dynamic_1 = $dynamicVariables['id_sha1_projet'];
$id_sha1_parent_projet_dynamic_1 = $dynamicVariables['id_sha1_parent_projet'];
$id_sha1_parent_projet2_dynamic_1 = $dynamicVariables['id_sha1_parent_projet2'];
$cryptage_projet_dynamic_1 = $dynamicVariables['cryptage_projet'];
$input_cryptage_projet_dynamic_1 = $dynamicVariables['input_cryptage_projet'];
$name_projet_dynamic_1 = $dynamicVariables['name_projet'];
$name_extention_projet_dynamic_1 = $dynamicVariables['name_extention_projet'];
$statue_projet_dynamic_1 = $dynamicVariables['statue_projet'];
$title_projet_dynamic_1 = $dynamicVariables['title_projet'];
$description_projet_dynamic_1 = $dynamicVariables['description_projet'];
$password_projet_dynamic_1 = $dynamicVariables['password_projet'];
$visibility_1_projet_dynamic_1 = $dynamicVariables['visibility_1_projet'];
$visibility_2_projet_dynamic_1 = $dynamicVariables['visibility_2_projet'];
$screen_shoot_projet_dynamic_1 = $dynamicVariables['screen_shoot_projet'];
$img_projet_src1_dynamic_1 = $dynamicVariables['img_projet_src1'];
$img_projet_src2_dynamic_1 = $dynamicVariables['img_projet_src2'];
$img_projet_visibility_dynamic_1 = $dynamicVariables['img_projet_visibility'];
$group_projet_dynamic_1 = $dynamicVariables['group_projet'];
$heure_debut_projet_dynamic_1 = $dynamicVariables['heure_debut_projet'];
$date_debut_projet_dynamic_1 = $dynamicVariables['date_debut_projet'];
$dure_projet_dynamic_1 = $dynamicVariables['dure_projet'];
$publication_date_j_projet_dynamic_1 = $dynamicVariables['publication_date_j_projet'];
$publication_date_h_projet_dynamic_1 = $dynamicVariables['publication_date_h_projet'];
$shop_projet_dynamic_1 = $dynamicVariables['shop_projet'];
$date_inscription_projet_dynamic_1 = $dynamicVariables['date_inscription_projet'];

*/



echo '<div class="all_articles">';



for ($a = 0; $a < $count; $a++) {



    $title_projet_dynamic_1__   = AsciiConverter::asciiToString($title_projet_dynamic_1[$a]);
    $description_projet_dynamic_1__   = AsciiConverter::asciiToString($description_projet_dynamic_1[$a]);

    $date_inscription_projet_dynamic_1  = $date_inscription_projet_dynamic_1[$a];
    $img_projet_src1_dynamic_1__ =   $img_projet_src1_dynamic_1[$a];

?>
    <h1><?php echo $title_projet_dynamic_1__  ?></h1>


    <div class="img_article">
        <img src="<?= $img_projet_src1_dynamic_1__ ?>" alt="">
    </div>


    <p class="article_description"><?php echo $description_projet_dynamic_1__  ?></p>

    <b><?= $date_inscription_projet_dynamic_1 ?></b>

    <?php










    $databaseHandler = new DatabaseHandler($dbname, $username);
    $req_sql = "SELECT * FROM projet WHERE id_sha1_parent_projet ='$id_sha1_projet' AND visibility_1_projet!=''   ";




    $databaseHandler->getListOfTables_Child("projet");
    $databaseHandler->getDataFromTable2X($req_sql);
    $databaseHandler->get_dynamicVariables();






    $id_projet_dynamic_2 = $dynamicVariables['id_projet'];
    $activation_projet_dynamic_2 = $dynamicVariables['activation_projet'];
    $id_general_dynamic_2 = $dynamicVariables['id_general'];
    $id_user_projet_dynamic_2 = $dynamicVariables['id_user_projet'];
    $id_sha1_user_projet_dynamic_2 = $dynamicVariables['id_sha1_user_projet'];
    $id_sha1_projet_dynamic_2 = $dynamicVariables['id_sha1_projet'];
    $id_sha1_parent_projet_dynamic_2 = $dynamicVariables['id_sha1_parent_projet'];
    $id_sha1_parent_projet2_dynamic_2 = $dynamicVariables['id_sha1_parent_projet2'];
    $cryptage_projet_dynamic_2 = $dynamicVariables['cryptage_projet'];
    $input_cryptage_projet_dynamic_2 = $dynamicVariables['input_cryptage_projet'];
    $name_projet_dynamic_2 = $dynamicVariables['name_projet'];
    $name_extention_projet_dynamic_2 = $dynamicVariables['name_extention_projet'];
    $statue_projet_dynamic_2 = $dynamicVariables['statue_projet'];
    $title_projet_dynamic_2 = $dynamicVariables['title_projet'];
    $description_projet_dynamic_2 = $dynamicVariables['description_projet'];
    $password_projet_dynamic_2 = $dynamicVariables['password_projet'];
    $visibility_1_projet_dynamic_2 = $dynamicVariables['visibility_1_projet'];
    $visibility_2_projet_dynamic_2 = $dynamicVariables['visibility_2_projet'];
    $screen_shoot_projet_dynamic_2 = $dynamicVariables['screen_shoot_projet'];
    $img_projet_src1_dynamic_2 = $dynamicVariables['img_projet_src1'];
    $img_projet_src2_dynamic_2 = $dynamicVariables['img_projet_src2'];
    $img_projet_visibility_dynamic_2 = $dynamicVariables['img_projet_visibility'];
    $group_projet_dynamic_2 = $dynamicVariables['group_projet'];
    $heure_debut_projet_dynamic_2 = $dynamicVariables['heure_debut_projet'];
    $date_debut_projet_dynamic_2 = $dynamicVariables['date_debut_projet'];
    $dure_projet_dynamic_2 = $dynamicVariables['dure_projet'];
    $publication_date_j_projet_dynamic_2 = $dynamicVariables['publication_date_j_projet'];
    $publication_date_h_projet_dynamic_2 = $dynamicVariables['publication_date_h_projet'];
    $shop_projet_dynamic_2 = $dynamicVariables['shop_projet'];
    $date_inscription_projet_dynamic_2 = $dynamicVariables['date_inscription_projet'];













    $kount = count($date_inscription_projet_dynamic_2);


    echo '<div class="display_flex_children">';
    for ($y = 0; $y < $kount; $y++) {






        $title_projet__ = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$y]);
        $visibility_1_projet____ = $visibility_1_projet__[$y];

        $img_projet_src1__ = $dynamicVariables['img_projet_src1'][$y];
        $date_inscription_projet_dynamic_2__ = $dynamicVariables['date_inscription_projet_dynamic_2'][$y];


        $id_sha1_projet__c =  $id_sha1_projet_dynamic_2[$y];




    ?>
        <div class="card_child" title="<?php echo $id_sha1_projet__[$y]  ?>" onclick="voir_children(this)">

            <div>

                <?php

                if ($img_projet_src1__ != "") {


                    echo '<img src="' . $img_projet_src1__ . '" style="cursor:pointer"alt="">';
                } else {
                    echo '<img src="' . $grande_image__ . '" alt="">';
                }

                ?>
            </div>
            <div>

                <h4>
                    <?php echo $title_projet__ ?>
                </h4>
                <p></p>
                <?php echo $id_sha1_projet ;?>
                <a href="<?= $id_sha1_projet__c ?>">
                    <h3>Voir projet:</h3>
                </a>
                <i><?= $date_inscription_projet_dynamic_2__ ?></i>
            </div>
        </div>

<?php
    }
    echo '</div';
}
echo '</div>';

?>

<style>
    .img_article {
        width: 300px;
        margin: auto;

    }

    .img_article img {
        width: 100%;
        box-shadow: 1px 1px 7px black;
    }

    .all_articles {
        width: 80%;
        margin: auto;
    }

    .all_articles h1 {
        text-align: center;
        margin-bottom: 75px;
        padding: 15px;
    }

    .article_description {
        text-align: justify;
        margin-top: 75px;
    }
</style>

<style>
    .card_child {

        width: 280px;
        margin: auto;
        border: 1px solid black;
        margin-bottom: 100px;
        text-align: center;
        margin: 50px;
    }

    .card_child img {
        width: 100%;
        height: auto;
        object-fit: cover;
        /* ou replacez par "contain" si nécessaire */
    }

    .card_child h3 {
        padding: 15px;
        background-color: black;
        color: white;
        margin: 0;
    }

    .display_flex_children {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
</style>