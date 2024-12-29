<!DOCTYPE html>
<html>
<body>

<h2>Use the XMLHttpRequest to get the content of a file.</h2>
<p>The content is written in JSON format, and can easily be converted into a JavaScript object.</p>

<p id="demo"></p>


<?php 


// Exemple de  URL 



 /* 

 http://localhost/ndenga/parse.php/projet__id_projet__1
 
 */



 ?>
<script>
  function getLastSegment(url) {
    // Supprimer les éventuels paramètres de requête
    let cleanUrl = url.split('?')[0];
    // Diviser l'URL en segments par "/"
    let segments = cleanUrl.split('/');
    // Retourner le dernier segment non vide
    return segments.filter(segment => segment.trim() !== "").pop();
}

let lastSegment = getLastSegment(window.location.href);


console.log( lastSegment) ; 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
   
    console.log(myObj.id_projet) ; 
  }
};
xmlhttp.open("GET", "../json.php/"+lastSegment, true);
xmlhttp.send();

 


 





</script>




<p>Take a look at <a href="json.php" target="_blank">json_demo.txt</a></p>

</body>
</html>