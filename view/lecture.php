<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }
        textarea {
            width: 100%;
            height: 150px;
            margin: 10px 0;
            padding: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
        #cleanedText {
            margin: 20px 0;
            padding: 10px;
            background: #f5f5f5;
            border: 1px solid #ddd;
        }
        .settings {
            margin: 15px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .settings label {
            margin-right: 10px;
        }
        select, input {
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    require_once '../Class/DatabaseHandler.php';
    require_once '../Class/dbCheck.php';
    require_once '../Class/AsciiConverter.php';
    require_once '../Class/Give_url.php';

    $url = new Give_url();
    $URL = $url->get_basename();

    $databaseHandler = new DatabaseHandler($dbname, $username);
    $req_sql = "SELECT * FROM projet WHERE id_sha1_projet ='$URL'";

    $databaseHandler->getListOfTables_Child("projet");
    $databaseHandler->getDataFromTable2X($req_sql);
    $databaseHandler->get_dynamicVariables();

    $description_projet__ = $dynamicVariables['description_projet'];


    $id_sha1_projet__ = $dynamicVariables['id_sha1_projet'];
    ?>

    <h1>Lecteur de texte à voix haute</h1>

    <textarea style="display: none;" id="textToRead" placeholder="Collez votre texte HTML ici...">
        <?php echo AsciiConverter::asciiToString($description_projet__[0]); ?>
    </textarea>

    <div class="settings">
        <label>Voix : </label>
        <select id="voiceSelect"></select>
        
        <label>Vitesse : </label>
        <input type="range" id="rate" min="0.5" max="2" value="1.4" step="0.1">
        <span id="rateValue">1.4</span>
        
        <label>Hauteur : </label>
        <input type="range" id="pitch" min="0.5" max="2" value="1" step="0.1">
        <span id="pitchValue">1</span>
    </div>

    <div id="cleanedText"></div>

    <div id="controls">
        <button onclick="speak()">Lire</button>
        <button onclick="pause()">Pause</button>
        <button onclick="stop()">Stop</button>
    </div>

    <script>
        const synth = window.speechSynthesis;
        let utterance = null;
        const voiceSelect = document.getElementById('voiceSelect');
        const rateInput = document.getElementById('rate');
        const pitchInput = document.getElementById('pitch');
        const rateValue = document.getElementById('rateValue');
        const pitchValue = document.getElementById('pitchValue');

        function stripHtml(html) {
            let temp = document.createElement('div');
            temp.innerHTML = html;
            
            let text = temp.textContent || temp.innerText;
            text = text.replace(/&nbsp;/g, ' ');
            text = text.replace(/&amp;/g, '&');
            text = text.replace(/&lt;/g, '<');
            text = text.replace(/&gt;/g, '>');
            text = text.replace(/&quot;/g, '"');
            text = text.replace(/\s+/g, ' ').trim();
            
            return text;
        }

        function cleanAndShow() {
            const input = document.getElementById('textToRead').value;
            const cleanedText = stripHtml(input);
            document.getElementById('cleanedText').textContent = cleanedText;
        }

        // Charger les voix disponibles
        function loadVoices() {
        
            const voices = synth.getVoices();
            voiceSelect.innerHTML = '';
            
            // Filtrer pour n'avoir que les voix françaises
            const frenchVoices = voices.filter(voice => 
                voice.lang.startsWith('fr') 
            );
            
            frenchVoices.forEach(voice => {
                const option = document.createElement('option');
                option.value = voice.name;
                option.textContent = `${voice.name} (${voice.lang})`;
                // Sélectionner par défaut une voix masculine si disponible
                if (voice.name.toLowerCase().includes('thomas') || 
                    voice.name.toLowerCase().includes('male') || 
                    voice.name.toLowerCase().includes('homme')) {
                    option.selected = true;
                }
                voiceSelect.appendChild(option);
            });
        }

        // Initialisation au chargement
        const initTimeout = setTimeout(initializeText, 250);
        function initializeText() {
            cleanAndShow();
        }

        // Charger les voix
        loadVoices();
        if (speechSynthesis.onvoiceschanged !== undefined) {
            speechSynthesis.onvoiceschanged = loadVoices;
        }

        // Mise à jour des valeurs affichées
        rateInput.oninput = () => rateValue.textContent = rateInput.value;
        pitchInput.oninput = () => pitchValue.textContent = pitchInput.value;

        function speak() {
       
            const cleanedDiv = document.getElementById('cleanedText');
            const text = cleanedDiv.textContent || stripHtml(document.getElementById('textToRead').value);
            
            stop();
            
            utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'fr-FR';
            
            const voices = synth.getVoices();
            const selectedVoice = voices.find(voice => voice.name === voiceSelect.value);
            if (selectedVoice) utterance.voice = selectedVoice;
            
            utterance.rate = parseFloat(rateInput.value);
            utterance.pitch = parseFloat(pitchInput.value);
            
            synth.speak(utterance);
        }

        function pause() {
            if (synth.speaking) {
                if (synth.paused) {
                    synth.resume();
                } else {
                    synth.pause();
                }
            }
        }

        function stop() {
            synth.cancel();
        }
    </script>

<a href="../../blog.php/<?= $URL ?>">
<img width="50" height="50" src="https://img.icons8.com/dusk/50/google-blog-search.png" alt="google-blog-search"/>
</a>
 
</body>
</html>