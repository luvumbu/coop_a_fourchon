<?php
session_start();
include("../class/php/php_select_data/give_url.php");
include("pages_json.php");
include("pages_css.php");
if (count($apple->list_row) != 0) {
  include("add_log.php");
  $src = "../../src/img/all/qr_code/" . give_url() . ".png"; ?>

  <div class="div_img_2">
    <img src="<?php echo $src; ?>" alt="" srcset="">

  </div>
<?php
}
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
//  echo $total_visit -count($apple_my_ip->list_row)/6; 
/*
<!--
<p>
    Nombre total de visite  <?php echo  $total_visit ?> <img width="20" height="20" src="https://img.icons8.com/sf-regular/20/visible.png" alt="visible"/>
</p>
<p>
    Vous avez visite cette page   <?php echo  $mes_visites ?> fois  <img width="20" height="20" src="https://img.icons8.com/sf-regular/20/visible.png" alt="visible"/>
</p>

<p>
   Nombre de visite sans votre passage <?php echo  $total_visit-$mes_visites ?> fois  <img width="20" height="20" src="https://img.icons8.com/sf-regular/20/visible.png" alt="visible"/>
</p>

-->
 
 

<div class="background_bl">
<a href="<?php echo $replace_el  ?>" > Template  2 </a>
</div>
<br/>

<div class="background_bl">
    <a href="../" class="background_bl">Menu principal </a>
</div>


<br/>
<style>
    .background_bl{
        background-color:black ; 
        color:white ; 
        padding:15px; 
        text-align:center ; 
         
    }
</style>

*/
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" onclick="template(this)" title="1" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAETElEQVR4nO2dS4sVRxiGH28RLyhkEFwoREUCAQ0YL39AhSgYDNlkmYWIKFnoRsjCXQImUQRxIerCaxRX4iZk0DEGEcUbeAHFG0YFiZcoUaNjSgpqmEpZ3X3Gac7XOu8LvZqv65zzPF3VXXWmT4OiKIqiKIqiKEozMxvoBB4BTht9YfAwsJtdp4yXkkB/D0TPcFYdQrxd9QpqYXCkDiG+y0kItTB4VocQyaBWBhJCsw4qCcFegoRgD15CsIctIdgDlhDsoUoI9iAlBHt4EoI9MAlpACQnIfZgnITYw3AN2LR0gr0ECcEevIRgD1tCsAcsIdhDlRDsQUoI9vAkBHtgEtIASE5C7ME4CbGH4RqwaekEewkSgj14CcEe9nsv5ArQBfwB3CipuwUcDf/MfBXormj3ctSu31dCSiA8B34CJmUOjjVJ7R5gWqZuAnA8czvAz8DETP0nwF31kDdl3AY+LemtW6Labyt69tmo9l9gfkntB6FGQ1YE4TEwtQLymVC7u6LOA34Rtb26ot4fBDqHJBC+SSANBpYCvwOngG0R5LQXfRXqzgH7gJVRu/8Ao5L6VcAJ4GRod62E/F/GNWBIAm1jAaS/gEFR3dSKk/ihpN0vdJVVPRykQ8oc4L+C2otJ7byKtn9J6uPeY7H1O+14k+kdqptLah8ktSPDZWyr9/X5q7e/JaQY2FNgaALtYgUw34PijAcOF9T6c0hHUj+9hdcYsD3kevJ6g1q4Dftgch7p2W95uLEyrf8h87mGAz+WDI0DVoi/goozusX9vit4vzMys+9X4WSey6LQiyQkQPBLHnHGtgjHH9nrgWEZyJ+FoTBdAVhRIOVrCekF5WfUcYb2cRg5XjCh/L6gfn/mnEIYBjVkAX9m4FzvI5wnwNzM1VRR/U3gY6P5Sb/Tjjf5YfKau9+ijXvAiKSdJyX1x5LayRLSC2dhAmf+W8Lxl7Nx7pTUdierA+MkpBfO9kzP3NlHQP43WcYkE8ayJRW/UBlnpoT0wvFzh48SQP7oXRZ+jehYkNYzx/gc2BAmgxeAA5nJ4pfROcrXbw1fSJ0HdoQhquy7lgF9DnEB6uCK93IpDEO0sPze833Iry3U++HqvoS8KWVTZhkljof7WwVcPwPfFbW5rqK+I/TAdh14/Y5r83YCWJAR43vP3jDv8LPxXK9YHL4Tidvz+0zJ1PsVgSVhSGvn53vnhLjoJH069IiTYZU3/vv9AL/n71XLH3dDXWfYz+pnC99ZIe493SQEewkSgj14CcEetoRgD1hCsIcqIdiDlBDs4UkI9sAkpAGQnITYg3ESYg/DNWDT0gn2EiQEe/ASgj1sCcEesIRgD1VCsAcpIdjDkxDsgUlIAyA5CbEH4yTEHoZrwKalE+wlSAj24CUEe9gSwgAUoocT06yHE+vx3TTr8d16wD21yHgZbpurJbOC3dzPVmijcpjqCgwVRVEURVEURVFoWl4De5sQqQPpA6sAAAAASUVORK5CYII="></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active"  onclick="template(this)" title="2"><img width="100" height="100" src="https://img.icons8.com/ultraviolet/100/css.png" alt="css"/></a>
      </li>

      <!--   <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->

    </ul>
  </div>
  <div class="dark_mode_style" onclick="dark_mode(this)" id="dark_mode" title="not">
    <img width="50" height="50" src="https://img.icons8.com/office/50/light-on--v1.png" />
  </div>
  <div id="dark_mode_style">
  </div>
  <script>
    function Ajax(id, source) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById(id).innerHTML =
            this.responseText;
        }
      };
      xhttp.open("GET", source, true);
      xhttp.send();
    }
    // exemple de code 
    /* 
    Ajax(nomId,document/source.txt);
    */


    function dark_mode(_this) {

      if (_this.title == "not") {
        Ajax("dark_mode_style", "../dark_mode.html");
        _this.title = "dark_mode";

      }
      else {
        Ajax("dark_mode_style", "../not.html");
        _this.title = "not";
      }


    }

  </script>
  <style>
    .dark_mode_style {

      position: fixed;
      top: 60px;
      right: 0;
    }

    .dark_mode_style:hover {
      background-color: rgba(100, 100, 0, 0.6);
      border-radius: 100%;
      cursor: pointer;
      transition: 1s all;
    }
  </style>


<script>
  function template(_this){
 


    switch(_this.title) {
  case "1":
 
 window.location.replace(window.location.href.replace("blog","blogx"));

    break;
  case "2":
 
 window.location.replace(window.location.href.replace("blog","blog1"));
    break;
 
    // code block
}
  }
</script>