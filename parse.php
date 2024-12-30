<!DOCTYPE html>
<html>
<body>
<title id="title">dddddddddddddddddde</title>
<h2>Use the XMLHttpRequest to get the content of a file.</h2>
<p>The content is written in JSON format, and can easily be converted into a JavaScript object.</p>

<p id="demo"></p>
<script>
  class AsciiConverter {
    /**
     * Convert a string of ASCII values (comma-separated) into a normal string.
     * Example: AsciiConverter.asciiToString(asciiString)
     * 
     * @param {string} asciiString - The ASCII values as a comma-separated string (e.g., "72, 101, 108").
     * @returns {string} - The decoded string (e.g., "Hello").
     */
    static asciiToString(asciiString) {
        // Supprimer les espaces inutiles et séparer les valeurs par des virgules
        const asciiArray = asciiString.split(',').map(value => value.trim());
        let resultString = '';

        asciiArray.forEach(ascii => {
            // Vérifier si l'entrée est un nombre valide
            if (!isNaN(ascii)) {
                resultString += String.fromCharCode(Number(ascii));
            }
        });

        return resultString;
    }

    /**
     * Convert a normal string into a string of ASCII values (comma-separated).
     * Example: AsciiConverter.stringToAscii(string)
     * 
     * @param {string} string - The string to convert (e.g., "Hello").
     * @returns {string} - The ASCII values as a comma-separated string (e.g., "72,101,108,108,111").
     */
    static stringToAscii(string) {
        const asciiArray = [];

        // Parcourir chaque caractère de la chaîne
        for (let i = 0; i < string.length; i++) {
            // Convertir le caractère en valeur ASCII
            asciiArray.push(string.charCodeAt(i));
        }

        // Joindre les valeurs ASCII avec des virgules
        return asciiArray.join(',');
    }
}

// Exemple d'utilisation
const asciiString = "72, 101, 108, 108, 111";
const string = "Hello";

 

// Conversion de chaîne de caractères à ASCII
const asciiValues = AsciiConverter.stringToAscii(string);
console.log(asciiValues); // Affiche "72,101,108,108,111"

</script>
<?php 


// Exemple de  URL 



 /* 

http://localhost/ndenga/parse.php/projet__id_sha1_projet__173545397467__id_sha1_parent_projet
 
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
   
  //  console.log(myObj) ; 

 



const decodedString = AsciiConverter.asciiToString(myObj[0].title_projet[0][0]);
 

document.getElementById("title").innerText = decodedString ;
 

  }
};
xmlhttp.open("GET", "../json.php/"+lastSegment, true);
xmlhttp.send();

 


 





</script>




<p>Take a look at <a href="json.php" target="_blank">json_demo.txt</a></p>

</body>
</html>