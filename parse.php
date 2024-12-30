
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title id="title">dddddddddddddddddde</title>
 </head>
 <body>
  

<p id="demo"></p>
 

<h1 id="title_h1"></h1>
<h1>Coop’ à Fourchon</h1>
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


class HtmlEntityConverter {
    /**
     * Remplace les caractères spéciaux par leurs entités HTML correspondantes.
     * @param {string} text - Texte contenant les caractères spéciaux.
     * @returns {string} - Texte transformé avec les entités HTML.
     */
    static encodeToHtmlEntities(text) {
        const entityMap = {
            '’': '&rsquo;', // Apostrophe droite
            'à': '&agrave;', // a accent grave
            'â': '&acirc;',  // a accent circonflexe
            'é': '&eacute;', // e accent aigu
            'è': '&egrave;', // e accent grave
            'ê': '&ecirc;',  // e accent circonflexe
            'ç': '&ccedil;', // c cédille
            'ô': '&ocirc;',  // o accent circonflexe
            'î': '&icirc;',  // i accent circonflexe
            'û': '&ucirc;',  // u accent circonflexe
            '…': '&hellip;', // Points de suspension
            '“': '&ldquo;',  // Guillemet ouvrant
            '”': '&rdquo;',  // Guillemet fermant
            '«': '&laquo;',  // Guillemets français ouvrants
            '»': '&raquo;'   // Guillemets français fermants
        };

        // Remplacer chaque caractère spécial par son entité HTML
        return text.replace(/[’àâéèêçôîû…“”«»]/g, char => entityMap[char] || char);
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
   
 

 



 document.getElementById("title").innerHTML = myObj[0].title_projet ;
 document.getElementById("title_h1").innerHTML =myObj[0].title_projet ;




 
/*





*/
  }
};
xmlhttp.open("GET", "../json.php/"+lastSegment, true);
xmlhttp.send();

 


 





</script>




<p>Take a look at <a href="json.php" target="_blank">json_demo.txt</a></p>

</body>
</html>