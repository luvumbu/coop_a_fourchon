 
     <div class="editor-container largeur_juste">
       <?php

       

        ?>
<?php for ($z = 0; $z < $kount; $z++): ?> 
       <h2>Éditeur de texte <?= $z ?></h2>
       <div class="toolbar">
         <label>Couleur du texte:</label>
         <input class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onchange="b(this)" type="color" id="textColorPicker<?= $z ?>">


         <label>Couleur de l'arrière-plan:</label>
         <input class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onchange="b(this)" type="color" id="bgColorPicker<?= $z ?>">
         <label>Taille de la police:</label>
         <select class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onchange="b(this)" id="fontSizePicker<?= $z ?>">
           <option value="1">Très petite</option>
           <option value="2">Petite</option>
           <option value="3" selected>Moyenne</option>
           <option value="4">Grande</option>
           <option value="5">Très grande</option>
           <option value="6">Énorme</option>
           <option value="7">Gigantesque</option>
         </select>
         <label>Police:</label>
         <select class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onchange="b(this)" id="fontFamilyPicker<?= $z ?>">
           <option value="Arial">Arial</option>
           <option value="Courier New">Courier New</option>
           <option value="Georgia">Georgia</option>
           <option value="Times New Roman">Times New Roman</option>
           <option value="Verdana">Verdana</option>
         </select>
         <div>
           <img class="<?php echo $index_update . $autre . '__' ?>" onclick="a(this)" title="<?php echo $autre ?>" class="cursor_pointer" width="50" height="50" src="https://img.icons8.com/ios/50/image--v1.png" alt="image--v1" />

         </div>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="boldButton<?= $z ?>"><b>B</b></button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="italicButton<?= $z ?>"><i>I</i></button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="underlineButton<?= $z ?>"><u>U</u></button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="strikeThroughButton<?= $z ?>"><s>S</s></button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="alignLeftButton<?= $z ?>">Aligner à gauche</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="alignCenterButton<?= $z ?>">Centrer</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="alignRightButton<?= $z ?>">Aligner à droite</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="justifyButton<?= $z ?>">Justifier</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="unorderedListButton<?= $z ?>">Liste à puces</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="orderedListButton<?= $z ?>">Liste numérotée</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="insertLinkButton<?= $z ?>">Insérer un lien</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="insertImageButton<?= $z ?>">Insérer une image</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="removeFormattingButton<?= $z ?>" style="background-color:black">Effacer le formatage</button>
         <button class="<?php echo $index_update . $autre . '__' ?>" title="<?php echo $z ?>" onclick="b(this)" id="clearButton<?= $z ?>" style="background-color:#c93d2f">Effacer le contenu</button>


       </div>

       <?php

        $title_projet = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$z]);
        $description_projet = AsciiConverter::asciiToString($dynamicVariables['description_projet'][$z]);

        ?>
       <input id="textInput2<?= $z ?>" value="<?php echo $title_projet ?>" type="text" onkeyup="a(this)" contenteditable="true" class="<?php echo $index_update . $autre . '__' ?>">




       <?php



        if ($zmg_projet_src1_dynamic_1[$z] != "") {
          $grande_image = str_replace("../", "", $zmg_projet_src1_dynamic_1[$z]);
        } else {
          $grande_image = "https://i.pinimg.com/736x/c9/aa/b6/c9aab66148552cff001fc98ef22c4c98.jpg";
        }


        ?>

       <div class="grande_image">
         <img src="<?php echo $grande_image ?>" onclick="a(this)" class="<?php echo $index_update . $autre . '__' ?>" src="https://i.pinimg.com/236x/7c/cd/81/7ccd8106106ec20a9af1186b8065caee.jpg" alt="">
       </div>
       <div onkeyup="a(this)" contenteditable="true" class="<?php echo $index_update . $autre . '__ textInput' ?>" id="textInput<?= $z ?>" spellcheck="false"><?php echo $description_projet; ?></div>
       <div class="display_flex1">
         <div onclick="remove_all(this)" class="<?php echo $zndex_remove . $autre ?>">
           <img width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />

         </div>
         <div onclick="add_child(this)" class="<?php echo $zndex_add . $autre ?>">
           <img width="50" height="50" src="https://img.icons8.com/office/50/plus--v1.png" alt="delete-forever--v1" />
         </div>
       </div>

     </div>


   <?php endfor; ?>

   <script>
     <?php for ($z = 0; $z < $kount; $z++): ?>
       const textInput<?= $z ?> = document.getElementById('textInput<?= $z ?>');
       const textColorPicker<?= $z ?> = document.getElementById('textColorPicker<?= $z ?>');
       const bgColorPicker<?= $z ?> = document.getElementById('bgColorPicker<?= $z ?>');
       const fontSizePicker<?= $z ?> = document.getElementById('fontSizePicker<?= $z ?>');
       const fontFamilyPicker<?= $z ?> = document.getElementById('fontFamilyPicker<?= $z ?>');
       const boldButton<?= $z ?> = document.getElementById('boldButton<?= $z ?>');
       const italicButton<?= $z ?> = document.getElementById('italicButton<?= $z ?>');
       const underlineButton<?= $z ?> = document.getElementById('underlineButton<?= $z ?>');
       const strikeThroughButton<?= $z ?> = document.getElementById('strikeThroughButton<?= $z ?>');
       const alignLeftButton<?= $z ?> = document.getElementById('alignLeftButton<?= $z ?>');
       const alignCenterButton<?= $z ?> = document.getElementById('alignCenterButton<?= $z ?>');
       const alignRightButton<?= $z ?> = document.getElementById('alignRightButton<?= $z ?>');
       const justifyButton<?= $z ?> = document.getElementById('justifyButton<?= $z ?>');
       const unorderedListButton<?= $z ?> = document.getElementById('unorderedListButton<?= $z ?>');
       const orderedListButton<?= $z ?> = document.getElementById('orderedListButton<?= $z ?>');
       const insertLinkButton<?= $z ?> = document.getElementById('insertLinkButton<?= $z ?>');
       const insertImageButton<?= $z ?> = document.getElementById('insertImageButton<?= $z ?>');
       const removeFormattingButton<?= $z ?> = document.getElementById('removeFormattingButton<?= $z ?>');


       const clearButton<?= $z ?> = document.getElementById('clearButton<?= $z ?>');
       clearButton<?= $z ?>.addEventListener('click', () => {
         textInput<?= $z ?>.innerHTML = ''; // Vide tout le contenu
       });

       function applyStyle<?= $z ?>(command, value = null) {
         document.execCommand(command, false, value);
       }

       textColorPicker<?= $z ?>.addEventListener('input', () => applyStyle<?= $z ?>('foreColor', textColorPicker<?= $z ?>.value));
       bgColorPicker<?= $z ?>.addEventListener('input', () => applyStyle<?= $z ?>('backColor', bgColorPicker<?= $z ?>.value));
       fontSizePicker<?= $z ?>.addEventListener('change', () => applyStyle<?= $z ?>('fontSize', fontSizePicker<?= $z ?>.value));
       fontFamilyPicker<?= $z ?>.addEventListener('change', () => applyStyle<?= $z ?>('fontName', fontFamilyPicker<?= $z ?>.value));
       boldButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('bold'));
       italicButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('italic'));
       underlineButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('underline'));
       strikeThroughButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('strikeThrough'));
       alignLeftButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('justifyLeft'));
       alignCenterButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('justifyCenter'));
       alignRightButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('justifyRight'));
       justifyButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('justifyFull'));
       unorderedListButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('insertUnorderedList'));
       orderedListButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('insertOrderedList'));
       insertLinkButton<?= $z ?>.addEventListener('click', () => {
         const url = prompt('Entrez l\'URL du lien:');
         if (url) applyStyle<?= $z ?>('createLink', url);
       });
       insertImageButton<?= $z ?>.addEventListener('click', () => {
         const url = prompt('Entrez l\'URL de l\'image:');
         if (url) applyStyle<?= $z ?>('insertImage', url);
       });
       removeFormattingButton<?= $z ?>.addEventListener('click', () => applyStyle<?= $z ?>('removeFormat'));
     <?php endfor; ?>
   </script>
