<div class="display_flex_2 pages_1">
    <div class="img_visibility_x" id="img_visibility_x" onclick="img_visibility_x(this)">
        <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/menu--v1.png" alt="menu--v1" />
    </div>
</div>
<div>
    <div>
    </div>
</div> </b>
</div>
<div id="hreff_el_0" class="visibility_menue_1">
    <?php
    for ($a = 0; $a < count($liste_projet_id_2); $a++) {





        echo ' <a class="hreff_el_00 deux_em" href="#l' . $liste_projet_id_sha1_2[$a] . '">';
        echo "<div class='hreff_el_01'>" . $liste_projet_name_2[$a] . "</div>";
        echo '</a>';


    }


    ?>
</div>
<?php

$src_img = "../../redirection_dowload_img/" . $liste_projet_img[0];
?>


<div class="presentation_" style='background-image:url("<?php echo $src_img; ?>")'>
    <div class="text-center">
        <h1 class="space_el" title='<?php echo $liste_projet_name_tittle[0] ?>'
            style="color:<?php echo $liste_projet_color_1[0] . "; font-size:" . $liste_projet_name_font_size[0] . '; background-color:' . $liste_projet_background_color[0]; ?>">
            <?php echo $liste_projet_name[0]; ?>

        </h1>
    </div>
    <div>
        <h2 class="text-justify padding_1 space_el" title="<?php echo $liste_projet_description1_tittle[0] ?>"
            style="color:<?php echo $liste_projet_color_2[0] . "; font-size:" . $liste_projet_description1_font_size[0] . ';background-color:' . $liste_projet_background_color[0]; ?>">
            <?php


            $liste_projet_description1[0] = str_replace("#34#", '"', $liste_projet_description1[0]);
            $liste_projet_description1[0] = str_replace("#92#", "\'", $liste_projet_description1[0]);
            echo $liste_projet_description1[0];


            ?>

        </h2>
    </div>
</div>


<?php

if (count($a_) > 0) {

    //  echo count($a_) ; 
    //  echo count($a_[0]) ; 
    //var_dump($a_) ; 


    for ($z = 0; $z < count($a_); $z++) {



        for ($z_ = 0; $z_ < count($a_[0]); $z_++) {

            //echo $a_[$z][$z_];

            ?>



            <?php


            if ($z_ == 6) {


                echo "<div class='space_el text-center' id='l" . $a_[$z][$z_ - 5] . "'>
                    <b class='text-center'>" . $a_[$z][$z_] . "</b> <br/>";
                $lien_element = $a_[$z][$z_ - 5];



                ?>
                <?php $src_img_s = "../../redirection_dowload_img/" . $a_[$z][$z_ - 1]; ?>

                <?php
                $r = $a_[$z][$z_ - 1];
                if ($r != "") {

                    ?>

                    <img class="taille_img" src="<?php echo $src_img_s ?>" alt="" srcset="">
                    <?php
                }
                ?>


                <a href="<?php echo $lien_element; ?>">
                    <b>
                        <div class="lien">


                            Voir lien
                            <?php echo $a_[$z][$z_]; ?>


                        </div>
                    </b>

                </a>

                <?php

                echo "<div class='description'>
                    <b class='text-center'>" . $a_[$z][$z_ + 1] . "</b>
</div>
                     
                    </div>";
                ?>


                <b>


                    <div class="text-center bold_child">
                        <?php



















                        if (count($b_[$z]) == 0) {

                        } else {
                            /*
                                   echo $b_[$z][0] ; 
                                   echo "<br/>" ; 
                            
                                   echo "<br/>" ; 
                                   echo $b_[$z][1] ; 
                             
                                   echo "<br/>" ; 
                                   echo $b_[$z][2] ; 
                                    
                                   echo "<br/>" ; 
                                 
                                   echo $b_[$z][3] ; 
                                   echo "<br/>" ; 
                            
                                   echo $b_[$z][4] ; 
                                   echo "<br/>" ; 
                                   echo $b_[$z][5] ; 
                                   echo "<br/>" ; 
                                   echo $b_[$z][6] ; 
                                   echo "<br/>" ; 
                                   echo $b_[$z][7] ; 

                           */
                            //   var_dump($b_[$z]) ; 
        


                            echo "<div class='i_array'>";
                            for ($i_array = 0; $i_array < count($b_[$z]); $i_array++) {





                                //  echo(fmod($i_array,16 ) . "<br>");
        
                                if (fmod($i_array, 18) == 6) {
                                    echo "<div class='i_array2 border_colors'>";



                                    if ($b_[$z][$i_array - 1] == "") {

                                    } else {


                                        $img_src_ = "../../redirection_dowload_img/" . $b_[$z][$i_array - 1];



                                        ?>

                                        <div>
                                            <img class="taille_img" src="<?php echo $img_src_ ?>" alt="" srcset="">

                                        </div>


                                        <?php
                                    }






                                    for ($o = 0; $o < strlen($b_[$z][$i_array]); $o++) {
                                        echo $b_[$z][$i_array][$o];

                                        if ($o == 50) {
                                            break;
                                        }


                                    }

                                    echo "<br/>";

                                    echo "<div class='description_el'>";


                                    for ($o = 0; $o < strlen($b_[$z][$i_array + 1]); $o++) {
                                        echo $b_[$z][$i_array + 1][$o];

                                        if ($o == 51) {



                                            echo "...";

                                            break;
                                        }


                                    }



                                    echo '<a href="' . $b_[$z][$i_array - 5] . '">';
                                    //  parent echo  '<a href="'.$b_[$z][$i_array-4].'">';
        
                                    echo '<div class="alert" role="alert"  >
                             Voir article complet
                           </div>';
                                    echo '</a>';
                                    echo "</div>";

                                    echo "<br/>";
                                    echo "</div>";
                                }




                            }


                            echo "</div>";

                        }












                        ?>
                    </div>
                </b>
                <?php

            }


        }


    }



}





include("pages_result.html");





if ($liste_projet_color_1[0] != "") {
    ?>
    <style>
        .border_colors {
            border-top: 5px solid
                <?php echo $liste_projet_color_1[0] ?>
            ;
        }
    </style>

    <?php
} else {
    ?>

    <style>
        .border_colors {
            border-top: 5px solid black;
        }
    </style>

    <?php
}

?>

<div class="rangement_img">

    <?php

    if ($liste_projet_img[0] != "") {
        ?>
        <img src="<?php echo '../../redirection_dowload_img/' . $liste_projet_img[0]; ?>" class="element_img">


        <?php
    }

    ?>

</div>
<div class="Get_anne">

    <?php


    $apple = new Get_anne($liste_projet_reg_date[0]);
    echo $apple->get_jour();
    echo "/";
    echo $apple->get_mois();
    echo "/";

    echo $apple->get_anne();
    echo "<br>";

    ?>

</div>


<style>
    .element_img {
        width: 100%;
        margin: auto;
        margin-top: 150px;

    }

    .rangement_img {
        width: 20%;
        margin: auto;


    }

    .Get_anne {


        background-color: rgba(0, 0, 0, 0.3);
        width: 300px;
        text-align: center;
        margin: auto;
        margin-top: 200px;
        margin-bottom: 200px;
        color: white;
        padding: 5px;
        border-radius: 5px;

    }
</style>