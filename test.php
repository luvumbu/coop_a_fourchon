<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération de Projet</title>
    <style>
        /* Styles de base */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
            line-height: 1.6;
        }
        
        header {
            background-color: #0056b3;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        
        main {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #0056b3;
            margin-bottom: 1rem;
            text-align: center;
        }

        #demo {
            margin-top: 1.5rem;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            font-size: 1.1rem;
        }

        a {
            color: #0056b3;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            color: #666;
        }

        /* Bouton personnalisé */
        button {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.8rem 1.5rem;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #004494;
        }
    </style>
</head>
<body>
    <header>
        <h1>Récupération de Projet</h1>
    </header>
    <main>
        <h2>Informations du Projet</h2>
        <p>Les données JSON sont converties en objet JavaScript et affichées ci-dessous :</p>
        <div id="demo">Chargement des données...</div>
        <button onclick="location.reload()">Recharger les données</button>
    </main>
    <footer>
        <p>&copy; 2024 Votre Entreprise. Tous droits réservés.</p>
        <p>Consultez le fichier JSON ici : <a href="json.php" target="_blank">json_demo.txt</a></p>
    </footer>
    <script src="../Class/AsciiConverter.js"></script>
    <script>
        // Fonction pour extraire le dernier segment de l'URL
        function getLastSegment(url) {
            return url.split('?')[0].split('/').filter(segment => segment.trim() !== "").pop();
        }

        // Obtenir le dernier segment de l'URL actuelle
        const lastSegment = getLastSegment(window.location.href);
        console.log("Dernier segment de l'URL :", lastSegment);

        // Requête XMLHttpRequest pour récupérer les données JSON
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4) {
                const demoElement = document.getElementById("demo");
                if (this.status === 200) {
                    try {
                        // Analyser les données JSON
                        const myObj = JSON.parse(this.responseText);

                        // Convertir et afficher les données
                        const title = AsciiConverter.asciiToString(myObj.title_projet[0][0]);
                        const description = AsciiConverter.asciiToString(myObj.description_projet[0][0]);

                        console.log("Titre du Projet :", title);
                        console.log("Description du Projet :", description);

                        // Afficher les données dans l'élément #demo
                        demoElement.innerHTML = `
                            <strong>Titre du Projet:</strong> ${title}<br>
                            <strong>Description:</strong> ${description}
                        `;
                    } catch (error) {
                        console.error("Erreur lors de l'analyse des données JSON :", error);
                        demoElement.textContent = "Erreur : Les données reçues sont invalides.";
                    }
                } else {
                    demoElement.textContent = `Erreur : Impossible de récupérer les données (HTTP ${this.status}).`;
                }
            }
        };

        // Ouvrir et envoyer la requête
        xmlhttp.open("GET", `../json.php/${lastSegment}`, true);
        xmlhttp.send();
    </script>
</body>
</html>
