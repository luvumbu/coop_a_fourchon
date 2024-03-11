<script>
  function update_all_php(_this) {

    var input_ = document.getElementById("input_" + _this.title);


    var input_title = document.getElementById("input_title" + _this.title);



    var textarea_ = document.getElementById("textarea_" + _this.title);
    var textarea_title = document.getElementById("textarea_title" + _this.title);





    var ok = new Information("class/php/php_update/update_all.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_name", input_.value); // ajout de l'information pour lenvoi 

    ok.add("liste_projet_name_tittle", input_title.value); // ajout de l'information pour lenvoi 

    ok.add("liste_projet_description1", textarea_.value); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_description1_tittle", textarea_title.value); // ajout de l'information pour lenvoi 


    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 





  }
  var img_1 = "https://img.icons8.com/ios-glyphs/50/visible--v1.png";
  var img_2 = "https://img.icons8.com/ios-glyphs/50/invisible.png";
  var img_3 = "https://img.icons8.com/ios-glyphs/50/link--v1.png";
  var img_4 = "https://img.icons8.com/ios-glyphs/50/delete-forever.png";
  var liste_projet_visibilite1 = "";
  function visibility(_this) {
    console.log(_this.src);

    if (_this.src == img_2) {
      _this.src = img_1;
      liste_projet_visibilite1 = "(OO)";
    }
    else {
      _this.src = img_2;


    }



    var ok = new Information("class/php/php_update/visibility.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_visibilite1", liste_projet_visibilite1); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 





  }
</script>
<style>
  .format_toogle {
    padding: 10px;
    margin: 10px;
    background-color: rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 0, 0, 0.2);
    transition: 1s all;
  }

  .format_toogle:hover {
    cursor: pointer;
    transition: 1s all;
    background-color: rgba(120, 0, 0, 0.1);
    border: 1px solid rgba(120, 0, 0, 0.2);

  }

  .liste_projet_description1_textarea {
    border: 1px solid rgba(0, 0, 0, 0.1);
    width: 80%;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.4);
  }

  .liste_projet_name_input {
    border: 1px solid rgba(0, 0, 0, 0.1);


    border-bottom: 1px solid rgba(0, 0, 0, 0.4);
    width: 100%;
  }

  .pages_x {
    width: 50%;
    margin: auto;
  }

  .liste_projet_name,
  .liste_projet_description1 {
    margin: 20px;
    padding: 25px;
  }

  .terminer {
    background-color: rgba(130, 0, 0, 0.5);
    width: 100px;
    color: white;

    text-align: center;
    border-radius: 15px;
  }

  .class_1 {
    border: 1px solid rgba(0, 0, 0, 0.3);

    width: 400px;
    text-align: center;
    margin: 200px;
    margin-bottom: 50px;

    width: 80%;
  }

  .space_display {

    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 150px;
    width: 80%;

    margin: auto;

  }

  .block_1_1 {}

  .block_1_2 textarea {

    height: 300px;
    width: 300px;
    margin: auto;

  }

  .block_1 {

    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }

  .div_images {
    width: 299px;
    height: 299px;


    background-image: url("../src/img/bokonzi.png");
    background-size: 100%;
  }


  .padding_el {}

  .green {
    background-color: green;
  }

  .test_1 {
    display: flex;
    justify-content: space-around;
  }

  .parent_width_25_style {
    margin-top: 25px;
  }
</style>

<script>

</script>

<style>
  .space_display_1 {
    display: none;
  }

  .titles_ {
    margin-top: 25px;
    opacity: 0.4;
  }

  .sitting {
    margin-top: 25px;
  }

  .sitting:hover {
    cursor: pointer;
  }
</style>

<!--
<div class="all_black">
  <div class="all_black_child">
 

  <br/>
  <img width="50" height="50" src="https://img.icons8.com/ios/50/align-justify.png" alt="align-justify"/>

  <img width="50" height="50" src="https://img.icons8.com/ios/50/align-left.png" alt="align-left"/>
  <img width="50" height="50" src="https://img.icons8.com/ios/50/align-right.png" alt="align-right"/>
  <br/>
  <img width="50" height="50" src="https://img.icons8.com/ios/50/text-width.png" alt="text-width"/>
  <img width="50" height="50" src="https://img.icons8.com/ios/50/text-height.png" alt="text-height"/>

  <br/>
 
  <img width="50" height="50" src="https://img.icons8.com/ios/50/border-top.png" alt="border-top"/>
  <img width="50" height="50" src="https://img.icons8.com/ios/50/border-left.png" alt="border-left"/>
  <img width="50" height="50" src="https://img.icons8.com/ios/50/border-right.png" alt="border-right"/>
  <img width="50" height="50" src="https://img.icons8.com/ios/50/border-bottom.png" alt="border-bottom"/>
  <br/>
  <img width="50" height="50" src="https://img.icons8.com/office/50/text-color.png" alt="text-color"/>
  <img width="50" height="50" src="https://img.icons8.com/officel/50/fill-color.png" alt="fill-color"/>
  </div>
</div>
-->

<style>
  .all_black {
    width: 100%;
    height: 500%;
    background-color: black;
    position: absolute;
    top: 0;
  }

  .all_black_child {
    width: 80%;
    margin: auto;
    background-color: white;
    width: 300px;
    height: 300px;
    margin-top: 20%;
  }

  .width_25_style:hover {
    cursor: pointer;

    background-color: rgba(0, 0, 0, 0.2);
    transition: 0.3s all;
    padding: 2px;

  }

  .width_25_style {
    cursor: pointer;
    margin: 5px;

    padding: 5px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    transition: 0.3s all;

  }
</style>

<script>
  var el1 = "https://img.icons8.com/ios/25/align-justify.png";
  var el2 = "https://img.icons8.com/ios/25/align-left.png";
  var el3 = "https://img.icons8.com/ios/25/align-right.png";
  var el4 = "https://img.icons8.com/ios/40/mix-words.png";
  function liste_projet_text_align_f1(_this) {






    var ok = new Information("class/php/php_update/liste_projet_text_align_f1.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 

    var textAlign_ = "";

    switch (_this.src) {
      case el1:

        var textAlign_ = "justify";

        break;
      case el2:
        var textAlign_ = "start";

        break;
      case el3:
        var textAlign_ = "end";

        break;
      case el4:
        var textAlign_ = "center";

        break;

    }


    ok.add("liste_projet_text_align_1_1", textAlign_); // ajout d'une deuxieme information denvoi  


    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    document.getElementById("input_" + _this.title).style.textAlign = textAlign_;

  }

  function liste_projet_text_align_f2(_this) {

    ///


    var ok = new Information("class/php/php_update/liste_projet_text_align_f2.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 

    var textAlign_ = "";

    switch (_this.src) {
      case el1:

        var textAlign_ = "justify";

        break;
      case el2:
        var textAlign_ = "start";

        break;
      case el3:
        var textAlign_ = "end";

        break;
      case el4:
        var textAlign_ = "center";

        break;

    }


    ok.add("liste_projet_text_align_1_1", textAlign_); // ajout d'une deuxieme information denvoi  


    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    document.getElementById("textarea_" + _this.title).style.textAlign = textAlign_;

  }



</script>