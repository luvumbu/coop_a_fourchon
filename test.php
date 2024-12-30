<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Floue</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .blurred-image {
            width: 100%;
            max-width: 800px;
            filter: blur(7px);
            border-radius: 1px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            background-image: 100%;
        }
    </style>
</head>
<body>
    <img 
        src="https://img.freepik.com/photos-premium/goutte-pluie-feuille-seche-ai-generative_225446-6059.jpg?semt=ais_hybrid" 
        alt="Goutte de pluie sur une feuille sèche" 
        class="blurred-image">
</body>
</html>
