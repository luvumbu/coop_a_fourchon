function terminer() {
    var ok = new Information("class/php/php_select_data/terminer.php"); // création de la classe 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    location.reload();
  }
  function remove_all(_this) {
    console.log("remove ok ");
    console.log(_this.title);
    var ok = new Information("class/php/php_remove/remove_all.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    document.getElementById("parent_" + _this.title).style.display = "none";
  }


  function add_element(_this) {
    qr_code = _this.title;
    //const myElement = document.getElementById("qr").value;
    var ok = new Information("class/php/php_add/qr_code/index.php"); // création de la classe 
    ok.add("qr_code", qr_code); // ajout de l'information pour lenvoi 
    ok.add("qr_name", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

    var liste_projet_id_parent = _this.title;
    const d = new Date();
    time = d.getTime();
    const x = setTimeout(oui_ok, 50);
    document.cookie = "username=" + time;
    var ok = new Information("class/php/php_on/header_action_add2.php"); // création de la classe 
    ok.add("time", time); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_id_parent", liste_projet_id_parent); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    function oui_ok() {
      window.location.replace("class/php/php_add/qr_code/index.php");
    }
  }
  function element_edit(_this) {
    var ok = new Information("class/php/cookie_table/element_edit.php"); // création de la classe 
    ok.add("time", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(myGreeting, 100);
    function myGreeting() {
      location.reload();
    }
  }
  function add_image(_this) {
    var ok = new Information("class/php/cookie_table/add_image.php"); // création de la classe 
    ok.add("add_image", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    window.location.href = "pages_on/download_img/index.php";
  }

  function selection(_this) {
    var ok = new Information("class/php/php_update/selection.php"); // création de la classe 
    ok.add("selection", _this.value); // ajout de l'information pour lenvoi 
    ok.add("value", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }

  function redirection_dowload_img(_this) {
    console.log(_this.title);
    var ok = new Information("class/php/php_update/redirection_dowload_img.php"); // création de la classe 
    ok.add("redirection_dowload_img", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    window.location.href = "redirection_dowload_img/index.php";
  }
  function liste_projet_color_1(_this) {
    console.log(_this.title);
    document.getElementById("input_" + _this.title).style.color = _this.value;
    var ok = new Information("class/php/php_update/liste_projet_color_x.php"); // création de la classe 
    ok.add("liste_projet_color_x", _this.value); // ajout de l'information pour lenvoi   
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi   
    ok.add("name", "liste_projet_color_1"); // ajout de l'information pour lenvoi   
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

  }
  function liste_projet_color_2(_this) {
    document.getElementById("textarea_" + _this.title).style.color = _this.value;
    var ok = new Information("class/php/php_update/liste_projet_color_x.php"); // création de la classe 
    ok.add("liste_projet_color_x", _this.value); // ajout de l'information pour lenvoi   
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi   
    ok.add("name", "liste_projet_color_2"); // ajout de l'information pour lenvoi   
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

  }

  function changeFONT(_this) {
    var ok = new Information("class/php/php_update/changeFONT.php"); // création de la classe 
    if (_this.name == 1) {
      document.getElementById("input_" + _this.title).style.fontSize = _this.value + "px";
    }
    else {
      document.getElementById("textarea_" + _this.title).style.fontSize = _this.value + "px";
    }
    var input_ = document.getElementById("input_" + _this.title).style.fontSize;
    var textarea_ = document.getElementById("textarea_" + _this.title).style.fontSize;
    document.getElementById("input_" + _this.title).style.color = _this.value;
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
    ok.add("_this_name", _this.name); // ajout de l'information pour lenvoi 
    ok.add("input_", input_); // ajout de l'information pour lenvoi 
    ok.add("textarea_", textarea_); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }

  function annulation_all(_this) {
    document.getElementById("input_" + _this.title).style.fontSize = "1em";
    document.getElementById("textarea_" + _this.title).style.fontSize = "1em";
    document.getElementById("input_" + _this.title).style.color = "black";
    document.getElementById("textarea_" + _this.title).style.color = "black";
    var ok = new Information("class/php/php_update/annulation_all.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }

  function change_background(_this) {
    var ok = new Information("class/php/php_update/change_background.php"); // création de la classe 
    ok.add("_this_value", _this.value); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
    console.log(_this.value);
    console.log(_this.title);
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }

  function liste_projet_margin(a) {
    document.getElementById(a.className + a.title + "_b").innerHTML = a.value + "%";
    var liste_projet_text_margin_1_11_ = document.getElementById("liste_projet_text_margin_1_11_" + a.title).value;
    var liste_projet_text_margin_1_1_ = document.getElementById("liste_projet_text_margin_1_1_" + a.title).value;
    var liste_projet_text_margin_1_2_ = document.getElementById("liste_projet_text_margin_1_2_" + a.title).value;
    var liste_projet_text_margin_1_3_ = document.getElementById("liste_projet_text_margin_1_3_" + a.title).value;
    var liste_projet_text_margin_1_4_ = document.getElementById("liste_projet_text_margin_1_4_" + a.title).value;
    var ok = new Information("class/php/php_update/change_margin.php"); // création de la classe 
    ok.add("liste_projet_text_margin_1_11_", liste_projet_text_margin_1_11_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_text_margin_1_1_", liste_projet_text_margin_1_1_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_text_margin_1_2_", liste_projet_text_margin_1_2_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_text_margin_1_3_", liste_projet_text_margin_1_3_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_text_margin_1_4_", liste_projet_text_margin_1_4_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_id_sha1", a.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
      }
  function liste_projet_padding(a) {
    document.getElementById(a.className + a.title + "_b").innerHTML = a.value + "%";
    var liste_projet_text_padding_1_11_ = document.getElementById("liste_projet_text_padding_1_11_" + a.title).value;
    var liste_projet_text_padding_1_1_ = document.getElementById("liste_projet_text_padding_1_1_" + a.title).value;
    var liste_projet_text_padding_1_2_ = document.getElementById("liste_projet_text_padding_1_2_" + a.title).value;
    var liste_projet_text_padding_1_3_ = document.getElementById("liste_projet_text_padding_1_3_" + a.title).value;
    var liste_projet_text_padding_1_4_ = document.getElementById("liste_projet_text_padding_1_4_" + a.title).value;
    var ok = new Information("class/php/php_update/change_padding.php"); // création de la classe 
    ok.add("liste_projet_text_padding_1_11_", liste_projet_text_padding_1_11_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_text_padding_1_1_", liste_projet_text_padding_1_1_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_text_padding_1_2_", liste_projet_text_padding_1_2_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_text_padding_1_3_", liste_projet_text_padding_1_3_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_text_padding_1_4_", liste_projet_text_padding_1_4_); // ajout de l'information pour lenvoi 
    ok.add("liste_projet_id_sha1", a.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }