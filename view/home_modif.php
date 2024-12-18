 <style>
   body {
     font-family: Arial, sans-serif;
     margin: 20px;
   }

   .editor-container {
     margin-bottom: 40px;
     border: 1px solid #ccc;
     padding: 20px;
     border-radius: 8px;
   }

   .toolbar {
     margin-bottom: 10px;
     display: flex;
     flex-wrap: wrap;
     gap: 10px;
   }

   input[type="color"],
   select,
   button {
     padding: 5px;
     border: 1px solid #ccc;
     border-radius: 4px;
     font-size: 14px;
   }

   .textInput {
     width: 100%;
     padding: 10px;
     font-size: 16px;
     border: 1px solid #ccc;
     border-radius: 4px;
     min-height: 200px;
     outline: none;
     background: #fff;
   }

   button {
     background-color: #f0f0f0;
     cursor: pointer;
   }

   button:hover {
     background-color: #ddd;
   }
 </style>
 </head>

 <body>


   <?php

    $count = count($id_sha1_projet_dynamic_1 );

    ?>

   <?php



    ?>
   <?php for ($i = 0; $i < $count; $i++): ?>
     <div class="editor-container largeur_juste">
<?php 

$id_sha1_projet_dynamic_1_ =$id_sha1_projet_dynamic_1[$i] ; 

?>

       <h2>Éditeur de texte <?= $i ?></h2>
       <div class="toolbar">
         <label>Couleur du texte:</label>
         <input class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onchange="b(this)" type="color" id="textColorPicker<?= $i ?>">


         <label>Couleur de l'arrière-plan:</label>
         <input class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onchange="b(this)" type="color" id="bgColorPicker<?= $i ?>">
         <label>Taille de la police:</label>
         <select class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onchange="b(this)" id="fontSizePicker<?= $i ?>">
           <option value="1">Très petite</option>
           <option value="2">Petite</option>
           <option value="3" selected>Moyenne</option>
           <option value="4">Grande</option>
           <option value="5">Très grande</option>
           <option value="6">Énorme</option>
           <option value="7">Gigantesque</option>
         </select>
         <label>Police:</label>
         <select class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onchange="b(this)" id="fontFamilyPicker<?= $i ?>">
           <option value="Arial">Arial</option>
           <option value="Courier New">Courier New</option>
           <option value="Georgia">Georgia</option>
           <option value="Times New Roman">Times New Roman</option>
           <option value="Verdana">Verdana</option>
         </select>
         <div>
           <img class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" onclick="a(this)" title="<?php echo $id_sha1_projet_dynamic_1_ ?>" class="cursor_pointer" width="50" height="50" src="https://img.icons8.com/ios/50/image--v1.png" alt="image--v1" />

         </div>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="boldButton<?= $i ?>"><b>B</b></button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="italicButton<?= $i ?>"><i>I</i></button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="underlineButton<?= $i ?>"><u>U</u></button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="strikeThroughButton<?= $i ?>"><s>S</s></button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="alignLeftButton<?= $i ?>">Aligner à gauche</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="alignCenterButton<?= $i ?>">Centrer</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="alignRightButton<?= $i ?>">Aligner à droite</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="justifyButton<?= $i ?>">Justifier</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="unorderedListButton<?= $i ?>">Liste à puces</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="orderedListButton<?= $i ?>">Liste numérotée</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="insertLinkButton<?= $i ?>">Insérer un lien</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="insertImageButton<?= $i ?>">Insérer une image</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="removeFormattingButton<?= $i ?>" style="background-color:black">Effacer le formatage</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="clearButton<?= $i ?>" style="background-color:#c93d2f">Effacer le contenu</button>


       </div>

       <?php

        $title_projet = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$i]);
        $description_projet = AsciiConverter::asciiToString($dynamicVariables['description_projet'][$i]);

        ?>
       <input id="textInput2<?= $i ?>" value="<?php echo $title_projet ?>" type="text" onkeyup="a(this)" contenteditable="true" class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>">




       <?php



        if ($img_projet_src1_dynamic_1[$i] != "") {
          $grande_image = str_replace("../", "", $img_projet_src1_dynamic_1[$i]);
        } else {
          $grande_image = "https://i.pinimg.com/736x/c9/aa/b6/c9aab66148552cff001fc98ef22c4c98.jpg";
        }


        ?>

       <div class="grande_image">
         <img src="<?php echo $grande_image ?>" onclick="a(this)" class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" src="https://i.pinimg.com/236x/7c/cd/81/7ccd8106106ec20a9af1186b8065caee.jpg" alt="">
       </div>
       <div onkeyup="a(this)" contenteditable="true" class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__ textInput' ?>" id="textInput<?= $i ?>" spellcheck="false"><?php echo $description_projet; ?></div>
       <div class="display_flex1">
         <div onclick="remove_all(this)" class="<?php echo $index_remove . $id_sha1_projet_dynamic_1_ ?>">
        <img width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />

         </div>
         <div onclick="add_child(this)" class="<?php echo $index_add . $id_sha1_projet_dynamic_1_ ?>">
           <img width="50" height="50" src="https://img.icons8.com/office/50/plus--v1.png" alt="delete-forever--v1" />
         </div>
       </div>

     </div>


   <?php endfor; ?>

   <script>
     <?php for ($i = 0; $i < $count; $i++): ?>
       const textInput<?= $i ?> = document.getElementById('textInput<?= $i ?>');
       const textColorPicker<?= $i ?> = document.getElementById('textColorPicker<?= $i ?>');
       const bgColorPicker<?= $i ?> = document.getElementById('bgColorPicker<?= $i ?>');
       const fontSizePicker<?= $i ?> = document.getElementById('fontSizePicker<?= $i ?>');
       const fontFamilyPicker<?= $i ?> = document.getElementById('fontFamilyPicker<?= $i ?>');
       const boldButton<?= $i ?> = document.getElementById('boldButton<?= $i ?>');
       const italicButton<?= $i ?> = document.getElementById('italicButton<?= $i ?>');
       const underlineButton<?= $i ?> = document.getElementById('underlineButton<?= $i ?>');
       const strikeThroughButton<?= $i ?> = document.getElementById('strikeThroughButton<?= $i ?>');
       const alignLeftButton<?= $i ?> = document.getElementById('alignLeftButton<?= $i ?>');
       const alignCenterButton<?= $i ?> = document.getElementById('alignCenterButton<?= $i ?>');
       const alignRightButton<?= $i ?> = document.getElementById('alignRightButton<?= $i ?>');
       const justifyButton<?= $i ?> = document.getElementById('justifyButton<?= $i ?>');
       const unorderedListButton<?= $i ?> = document.getElementById('unorderedListButton<?= $i ?>');
       const orderedListButton<?= $i ?> = document.getElementById('orderedListButton<?= $i ?>');
       const insertLinkButton<?= $i ?> = document.getElementById('insertLinkButton<?= $i ?>');
       const insertImageButton<?= $i ?> = document.getElementById('insertImageButton<?= $i ?>');
       const removeFormattingButton<?= $i ?> = document.getElementById('removeFormattingButton<?= $i ?>');


       const clearButton<?= $i ?> = document.getElementById('clearButton<?= $i ?>');
       clearButton<?= $i ?>.addEventListener('click', () => {
         textInput<?= $i ?>.innerHTML = ''; // Vide tout le contenu
       });

       function applyStyle<?= $i ?>(command, value = null) {
         document.execCommand(command, false, value);
       }

       textColorPicker<?= $i ?>.addEventListener('input', () => applyStyle<?= $i ?>('foreColor', textColorPicker<?= $i ?>.value));
       bgColorPicker<?= $i ?>.addEventListener('input', () => applyStyle<?= $i ?>('backColor', bgColorPicker<?= $i ?>.value));
       fontSizePicker<?= $i ?>.addEventListener('change', () => applyStyle<?= $i ?>('fontSize', fontSizePicker<?= $i ?>.value));
       fontFamilyPicker<?= $i ?>.addEventListener('change', () => applyStyle<?= $i ?>('fontName', fontFamilyPicker<?= $i ?>.value));
       boldButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('bold'));
       italicButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('italic'));
       underlineButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('underline'));
       strikeThroughButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('strikeThrough'));
       alignLeftButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('justifyLeft'));
       alignCenterButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('justifyCenter'));
       alignRightButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('justifyRight'));
       justifyButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('justifyFull'));
       unorderedListButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('insertUnorderedList'));
       orderedListButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('insertOrderedList'));
       insertLinkButton<?= $i ?>.addEventListener('click', () => {
         const url = prompt('Entrez l\'URL du lien:');
         if (url) applyStyle<?= $i ?>('createLink', url);
       });
       insertImageButton<?= $i ?>.addEventListener('click', () => {
         const url = prompt('Entrez l\'URL de l\'image:');
         if (url) applyStyle<?= $i ?>('insertImage', url);
       });
       removeFormattingButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('removeFormat'));
     <?php endfor; ?>
   </script>




   <script>
     function b(_this) {
       const myTimeout = setTimeout(x, 250);

       function x() {
         var textInput2 = document.getElementById("textInput2" + _this.title).value;
         var textInput0 = document.getElementById("textInput" + _this.title).innerHTML;
         var element = afficherValeursFormattees2(_this.className, __);
         console.log(element);


         var ok = new Information("config/general_function_update.php"); // création de la classe 

         ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
         ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
         ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
         ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
         ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
         ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
         ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 

         ok.add("textInput2", textInput2); // ajout de l'information pour lenvoi 
         ok.add("textInput0", textInput0); // ajout de l'information pour lenvoi 
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 

       }

     }

     function remove_all(_this) {


       var ok = new Information("config/remove_all.php"); // création de la classe 
       var element = afficherValeursFormattees2(_this.className, __);
       console.log(element);
       ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
       console.log(ok.info()); // demande l'information dans le tableau
       ok.push(); // envoie l'information au code pkp 
       location.reload();
     }


     function add_child(_this) {


      var ok = new Information("config/add_child.php"); // création de la classe 
      var element = afficherValeursFormattees2(_this.className, __);
      console.log(element);
         ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
         ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
         ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
         ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
         ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
         ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
         ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 

 
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 




     }
   </script>

   <style>
     .largeur_juste {

       width: 80%;
       margin: auto;
       background-color: #fff;
       margin-bottom: 25px;
     }
   </style>



   <script>
     function add_img2(_this) {
       document.getElementById("add_img").className = "";
     }
   </script>

   <style>
     .grande_image {
       width: 300px;
       margin: auto;
       margin-top: 25px;
       margin-bottom: 25px;

     }

     .grande_image img {
       width: 100%;
       box-shadow: 1px 1px 7px black;
       transition: 1s all;
     }

     .grande_image img:hover {
       width: 100%;
       box-shadow: 1px 1px 17px black;
       transition: 1s all;
       cursor: pointer;
     }
     .display_flex1{
      display: flex;
      justify-content: space-around;

     }
     .display_flex1  {
      margin-top: 50px;
      margin-bottom: 50px;

     }
     .display_flex1 div:hover {
      cursor: pointer;
     }
   </style>