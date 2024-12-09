<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des fichiers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #007BFF;
        }
        .category {
            margin-bottom: 20px;
        }
        .category h2 {
            color: #0056b3;
        }
        .file-type {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }
        .file-type img,
        .file-type video,
        .file-type audio {
            margin-right: 15px;
        }
        .file-type img {
            width: 50px;
            height: auto;
        }
        .file-type audio,
        .file-type video {
            width: 300px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Affichage des Fichiers par Type</h1>
    
    <!-- Images -->
    <div class="category">
        <h2>Images</h2>
        <div class="file-type">
            <img src="image1.jpg" alt="Image JPG">
            <span>image1.jpg</span>
        </div>
        <div class="file-type">
            <img src="image2.png" alt="Image PNG">
            <span>image2.png</span>
        </div>
    </div>
    
    <!-- Documents -->
    <div class="category">
        <h2>Documents</h2>
        <div class="file-type">
            <a href="document1.pdf" download>
                <img src="pdf-icon.png" alt="Document PDF">
            </a>
            <span>document1.pdf</span>
        </div>
        <div class="file-type">
            <a href="document2.docx" download>
                <img src="docx-icon.png" alt="Document Word">
            </a>
            <span>document2.docx</span>
        </div>
    </div>
    
    <!-- Audio -->
    <div class="category">
        <h2>Audio</h2>
        <div class="file-type">
            <audio controls>
                <source src="audio1.mp3" type="audio/mpeg">
                Votre navigateur ne supporte pas le lecteur audio.
            </audio>
            <span>audio1.mp3</span>
        </div>
    </div>
    
    <!-- Vidéos -->
    <div class="category">
        <h2>Vidéos</h2>
        <div class="file-type">
            <video controls>
                <source src="video1.mp4" type="video/mp4">
                Votre navigateur ne supporte pas le lecteur vidéo.
            </video>
            <span>video1.mp4</span>
        </div>
    </div>
    
    <!-- Code -->
    <div class="category">
        <h2>Code</h2>
        <div class="file-type">
            <a href="script.php" download>
                <img src="php-icon.png" alt="Fichier PHP">
            </a>
            <span>script.php</span>
        </div>
        <div class="file-type">
            <a href="style.css" download>
                <img src="css-icon.png" alt="Fichier CSS">
            </a>
            <span>style.css</span>
        </div>
    </div>
</body>
</html>
