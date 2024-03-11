 <!DOCTYPE html>
<html lang="en">
<head>
  <title>HOLA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
include("class/php/php_select_data/give_url.php") ; 
//echo  give_url() ; 
switch (give_url()) {
  case "Misgroup_cms": 
include("msg_path.php") ; 
?>
<meta http-equiv="Refresh" content="20; url='../blog/pages.php/1706655864617'" />
<?php 
    break;
    case "Misgroup_api_ffa": 
        include("msg_path.php") ; 
        ?>
        <meta http-equiv="Refresh" content="20; url='../../../script_ffa_front_back/index.php'" />        
        <?php 
            break;
    default:
    echo "<h1>Vous n'êtes pas autorisé <h1/>";
    ?>
<img src="https://www.creativefabrica.com/wp-content/uploads/2023/05/19/Forbidden-sign-Prohibited-symbol-Round-Graphics-70062501-1.png" alt="" srcset="">   
   <?php 
}
$filename_1="../model/class/php/connexion.php";
$filename_2="../model/class/php/Insertion_Bdd.php";
$filename_3="../model/class/php/Select_datas.php";
$filename_4="../model/class/php/config_folder_verif";
$SERVER_NAME=$_SERVER['SERVER_NAME'] ; 
    include($filename_1) ; 
    include($filename_2) ;
    include($filename_3) ; 
    $give_url = give_url() ; 
          $apple = new Insertion_Bdd(
          $servername,
          $username,
          $password,
          $dbname          
          );
          $apple->set_msg_valudation("") ;  
          $apple->set_sql("INSERT INTO liste_log3 (liste_log_ip,liste_projet_id_sha1)                  
          VALUES ('$SERVER_NAME','$give_url')") ; 
          $apple->execution() ;
    ?>
</body>
</html>