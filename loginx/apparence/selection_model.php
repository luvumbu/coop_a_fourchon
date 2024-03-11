<br />
<?php


/*
echo $liste_projet_text_margin_right_1_[$a] ; 

liste_projet_text_margin_top_1_
liste_projet_text_margin_left_1_
liste_projet_text_margin_right_1_
liste_projet_text_margin_bottom_1_
*/

?>


<div class="class_1" id="<?php echo "parent_" . $liste_projet_id_sha1[$a] ?>">
  <h4 class="liste_projet_name">

    <input type="text" onkeyup="update_all_php(this)" style="text-align:<?php echo $liste_projet_text_align_1_1[$a] ?>"
      id="<?php echo "input_" . $liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>"
      value="<?php echo $liste_projet_name[$a] ?>" class="liste_projet_name_input">
    <div class="parent_width_25_style">
 
      <img class="width_25_style" onclick="liste_projet_text_align_f1(this)"
        id="<?php echo "liste_projet_text_align_1_1_" . $liste_projet_id_sha1[$a] ?>"
        title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
        src="https://img.icons8.com/ios/25/align-justify.png" alt="align-justify" />

      <img class="width_25_style" onclick="liste_projet_text_align_f1(this)"
        id="<?php echo "liste_projet_text_align_1_2_" . $liste_projet_id_sha1[$a] ?>"
        title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
        src="https://img.icons8.com/ios/25/align-left.png" alt="align-left" />
      <img class="width_25_style" onclick="liste_projet_text_align_f1(this)"
        id="<?php echo "liste_projet_text_align_1_3_" . $liste_projet_id_sha1[$a] ?>"
        title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
        src="https://img.icons8.com/ios/25/align-right.png" alt="align-right" />
      <img class="width_25_style" onclick="liste_projet_text_align_f1(this)"
        id="<?php echo "liste_projet_text_align_1_4_" . $liste_projet_id_sha1[$a] ?>"
        title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
        src="https://img.icons8.com/ios/40/mix-words.png" alt="mix-words" />
 
 



      <?php
      if ($boucle2 != "") {
        ?>
        <img class="width_25_style" width="40" height="40" onclick="element_edit(this)"
          src="https://img.icons8.com/windows/40/edit--v1.png" title="<?php echo $liste_projet_id_sha1[$a] ?>"
          alt="edit--v1">


        <?php
      }

      ?>


 


      <style>
        .liste_img {
        
          justify-content: space-around;
          display: flex;
          margin-bottom: 50px;

        }
        .liste_img img {
          width: 100px;
          height: 100px;

        }
      </style>

      <select onchange="css_value(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>"
        id="<?php echo "liste_projet_css_1_" . $liste_projet_id_sha1[$a] ?>" class="form-select width_25_style"
        aria-label="Default select example">
        <option value="">css1</option>
        <option value="1">css2</option>
        <option value="2">css3</option>
        <option value="3">css4</option>

        <option value="4">css4</option>
        <option value="5">css5</option>
        <option value="6">css6</option>
      </select>
      <br />
      <br />
      <!--
<input type="range" id="progressInput" value="0" max="100" step="10" onclick="updateProgress()">
-->
    </div>
    <br />


    <input type="text" onkeyup="update_all_php(this)"
      style="color:<?php echo $liste_projet_color_1[$a] . ";font-size:" . $liste_projet_name_font_size[$a]; ?>"
      id="<?php echo "input_title" . $liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>"
      value="<?php echo $liste_projet_name_tittle[$a] ?>" class="liste_projet_name_input titles_"
      placeholder="tittle referencement">

  </h4>
  <div class="block_1">
    <div class="block_1_1">

      <!--    -->

      <?php


      if ($liste_projet_img[$a] != "") {
        $src_img__ = "redirection_dowload_img/" . $liste_projet_img[$a];

        ?>
        <div class="div_images" onclick="redirection_dowload_img(this)"
          style="background-image: url('<?php echo $src_img__; ?>')" title="<?php echo $liste_projet_id_sha1[$a] ?>">
        </div>


        <?php
      } else {
        ?>
        <div class="div_images" onclick="redirection_dowload_img(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>">
        </div>

        <?php
      }
      ?>
    </div>
    <br />
    <br />
    <div class="block_1_2">
      <textarea onkeyup="update_all_php(this)" style="text-align:<?php echo $liste_projet_text_align_2_1[$a] ?>"
        id="<?php echo "textarea_" . $liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>"
        class="liste_projet_description1_textarea"><?php echo $liste_projet_description1[$a] ?></textarea>
      <br />

      <div class="parent_width_25_style">


        <img class="width_25_style" onclick="liste_projet_text_align_f2(this)"
          id="<?php echo "liste_projet_text_align_2_1_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/ios/25/align-justify.png" alt="align-justify" />
        <img class="width_25_style" onclick="liste_projet_text_align_f2(this)"
          id="<?php echo "liste_projet_text_align_2_2_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/ios/25/align-left.png" alt="align-left" />
        <img class="width_25_style" onclick="liste_projet_text_align_f2(this)"
          id="<?php echo "liste_projet_text_align_2_3_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/ios/25/align-right.png" alt="align-right" />
        <img class="width_25_style" onclick="liste_projet_text_align_f2(this)"
          id="<?php echo "liste_projet_text_align_2_4_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/ios/40/mix-words.png" alt="mix-words" />
        <img class="width_25_style" id="<?php echo "liste_projet_text_margin_2_00_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/carbon-copy/25/border-none.png" alt="border-none" />

        <img class="width_25_style" id="<?php echo "liste_projet_text_margin_2_11_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/external-those-icons-lineal-those-icons/25/external-Border-alignment-and-paragraph-those-icons-lineal-those-icons-7.png"
          alt="external-Border-alignment-and-paragraph-those-icons-lineal-those-icons-7" />
        <img class="width_25_style" id="<?php echo "liste_projet_text_margin_2_1_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/ios/25/border-top.png" alt="border-top" />
        <img class="width_25_style" id="<?php echo "liste_projet_text_margin_2_2_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/ios/25/border-left.png" alt="border-left" />
        <img class="width_25_style" id="<?php echo "liste_projet_text_margin_2_3_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/ios/25/border-right.png" alt="border-right" />
        <img class="width_25_style" id="<?php echo "liste_projet_text_margin_2_4_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/ios/25/border-bottom.png" alt="border-bottom" />
        <img class="width_25_style" id="<?php echo "liste_projet_color_2_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/office/25/text-color.png" alt="text-color" />
        <img class="width_25_style" id="<?php echo "liste_projet_background_color_2_" . $liste_projet_id_sha1[$a] ?>"
          title="<?php echo $liste_projet_id_sha1[$a] ?>" width="40" height="40"
          src="https://img.icons8.com/officel/25/fill-color.png" alt="fill-color" />



        <select onchange="css_value2(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>"
          id="<?php echo "liste_projet_css_2_" . $liste_projet_id_sha1[$a] ?>" class="form-select width_25_style"
          aria-label="Default select example">
          <option value="0">css</option>
          <option value="1">css1</option>
          <option value="2">css2</option>
          <option value="3">css3</option>
          <option value="4">css4</option>
          <option value="5">css5</option>
          <option value="6">css6</option>
        </select>
        <br />
        <!--
<input type="range" id="progressInput" value="0" max="100" step="10" onclick="updateProgress()">

                              -->
      </div>
      <br />
      <br />
      <input value="<?php echo $liste_projet_description1_tittle[$a] ?>" placeholder="tittle referencement"
        onkeyup="update_all_php(this)"
        style="color:<?php echo $liste_projet_color_2[$a] . ";font-size:" . $liste_projet_description1_font_size[$a]; ?>"
        id="<?php echo "textarea_title" . $liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>"
        class="liste_projet_description1_textarea titles_">

    </div>


    <!--  volume_element  -->


    <!--  volume_element  -->
  </div>

  <br />



  <img width="50" onclick="redirection_dowload_img(this)" class="format_toogle" height="50"
    title="<?php echo $liste_projet_id_sha1[$a] ?>" src="https://img.icons8.com/material-outlined/50/picture.png"
    alt="picture" />

  <?php
  if ($liste_projet_visibilite1[$a] == "") {
    ?>


    <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>" onclick="visibility(this)"
      title="<?php echo $liste_projet_id_sha1[$a]; ?>" width="50" height="50"
      src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible" />
    <?php
  } else {
    ?>
    <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>" onclick="visibility(this)"
      title="<?php echo $liste_projet_id_sha1[$a]; ?>" width="50" height="50"
      src="https://img.icons8.com/ios-glyphs/50/visible--v1.png" alt="invisible" />

    <?php
  }
  ?>
  <a href="<?php echo "blog/pages.php/" . $liste_projet_id_sha1[$a] ?>">
    <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>" width="50" height="50"
      src="https://img.icons8.com/ios-glyphs/50/link--v1.png" alt="link--v1" />

  </a>
  <?php

  if ($nombre_total_element == 1) {
    ?>

    <img class="format_toogle" width="50" height="50" onclick="add_element(this)"
      title="<?php echo $liste_projet_id_sha1[$a] ?>" src="https://img.icons8.com/ios-glyphs/30/filled-plus-2-math.png"
      alt="filled-plus-2-math" />

    <?php
  }



  if ($element_edit) {
    ?>

    <img class="format_toogle" width="50" height="50" onclick="element_edit(this)"
      src="https://img.icons8.com/windows/50/edit--v1.png" title="<?php echo $liste_projet_id_sha1[$a] ?>"
      alt="edit--v1" />

    <?php
  }
  ?>

  <img class="format_toogle" onclick="remove_all(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>" width="50"
    height="50" src="https://img.icons8.com/ios-glyphs/50/delete-forever.png" alt="delete-forever" />
  <img class="format_toogle" onclick="annulation_all(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>" width="50"
    height="50" src="https://img.icons8.com/windows/50/undo.png" alt="undo" />
  <br />
  <?php /*    <input type="color" title="<?php echo $liste_projet_id_sha1[$a] ?>" onchange="change_background(this)" > */ ?>

</div>

<?php
$boucle2 = true;
?>