<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Cube Rotation and Mouse Movement</title>
    <style>
        body { margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f0f0f0; }
        canvas { border: 1px solid #000; }
    </style>
</head>
<body>

<canvas id="myCanvas" width="500" height="500"></canvas>

<script>
    const canvas = document.getElementById('myCanvas');
    const ctx = canvas.getContext('2d');

    const width = canvas.width;
    const height = canvas.height;

    const cubeVertices = [
        [-50, -50, -50],
        [ 50, -50, -50],
        [ 50,  50, -50],
        [-50,  50, -50],
        [-50, -50,  50],
        [ 50, -50,  50],
        [ 50,  50,  50],
        [-50,  50,  50]
    ];

    const edges = [
        [0, 1], [1, 2], [2, 3], [3, 0], // front face
        [4, 5], [5, 6], [6, 7], [7, 4], // back face
        [0, 4], [1, 5], [2, 6], [3, 7]  // connecting edges
    ];

    let rotationX = 0;
    let angle = 0.02;
    let offsetX = 0;
    let offsetY = 0;

    // Fonction pour gérer la rotation du cube autour de l'axe X
    function rotate(vertices) {
        const cosX = Math.cos(rotationX);
        const sinX = Math.sin(rotationX);

        return vertices.map(([x, y, z]) => {
            let tempY = cosX * y - sinX * z;
            let tempZ = sinX * y + cosX * z;
            y = tempY;
            z = tempZ;

            return [x, y, z];
        });
    }

    // Fonction pour projeter les coordonnées 3D sur 2D
    function project([x, y, z]) {
        const scale = 400 / (z + 400); // Perspective simple
        const xProj = x * scale + offsetX;
        const yProj = y * scale + offsetY;
        return [xProj, yProj];
    }

    // Fonction pour dessiner le cube
    function draw() {
        ctx.clearRect(0, 0, width, height); // Efface le canevas avant de redessiner

        // Rotation des sommets du cube autour de l'axe X
        const rotatedVertices = rotate(cubeVertices);

        // Projection des sommets 3D en 2D
        const projectedVertices = rotatedVertices.map(project);

        // Dessiner les arêtes du cube
        ctx.beginPath();
        edges.forEach(([start, end]) => {
            const [x1, y1] = projectedVertices[start];
            const [x2, y2] = projectedVertices[end];
            ctx.moveTo(x1, y1);
            ctx.lineTo(x2, y2);
        });
        ctx.strokeStyle = '#000'; // Couleur des lignes (noir)
        ctx.lineWidth = 2; // Largeur des lignes
        ctx.stroke(); // Applique le dessin

        rotationX += angle; // Mise à jour de l'angle de rotation

        requestAnimationFrame(draw); // Demande une nouvelle image pour l'animation
    }

    // Fonction pour capturer la position de la souris et déplacer le cube
    canvas.addEventListener('mousemove', (event) => {
        const mouseX = event.clientX - canvas.offsetLeft; // Position X de la souris sur le canevas
        const mouseY = event.clientY - canvas.offsetTop; // Position Y de la souris sur le canevas

        // Mettre à jour la position du cube avec les coordonnées de la souris
        offsetX = mouseX;
        offsetY = mouseY;
    });

    draw(); // Appel initial pour commencer l'animation

</script>

</body>
</html>
