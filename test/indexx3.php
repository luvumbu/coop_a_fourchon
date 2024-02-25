<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
    <form action="indexx3.php" method="POST" enctype="multipart/form-data">
        <label for="file">Fichier</label>
        <input type="file" name="file">
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>


<?php
var_dump($_POST);
var_dump($_FILES);
?>

<!DOCTYPE html>
<html>
<head>