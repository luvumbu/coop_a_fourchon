<?php
session_start() ; 
function decode_chunk($data) {
    $data = explode(';base64,', $data);

    if (!is_array($data) || !isset($data[1])) {
        return false;
    }

    $data = base64_decode($data[1]);
    if (!$data) {
        return false;
    }

    return $data;
}

// $file_path: fichier cible: garde le même nom de fichier, dans le dossier uploads










$test =$_POST['file'] ; 
 
$total = "" ; 
for($i=strlen($test)-1;$i>0;$i--){
  //  echo $test[$i].'<br/>' ; 
$total = $total.$test[$i] ; 
    if($test[$i]=="."){
        break ; 
    }

}


 


$total = strrev($total) ; 










$file_path = '../src/img/' . $_SESSION["name"].$total;

$file_path2 = '../src/img/XXXX' . $_SESSION["name"].$total;
$file_data = decode_chunk($_POST['file_data']);

if (false === $file_data) {
    echo "error";
}

/* on ajoute le segment de données qu'on vient de recevoir 
 * au fichier qu'on est en train de ré-assembler: */
file_put_contents($file_path, $file_data, FILE_APPEND);

// nécessaire pour que JavaScript considère que la requête s'est bien passée:
echo json_encode([]); 







?>