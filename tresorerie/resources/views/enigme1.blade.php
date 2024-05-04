<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Escape</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
        /* Style pour positionner les boutons */
        .button-container {
            position: relative;
            width: 1000px; /* Largeur de votre conteneur */
            height: 580px; /* Hauteur de votre conteneur */
            border: 1px solid #ccc; /* Bordure pour le conteneur */
        }
        .random-button {
            position: absolute;
            width: 50px; /* Largeur du bouton */
            height: 30px; /* Hauteur du bouton */
            cursor: pointer; /* Curseur de la souris en forme de main */
        }
        .background-color {
            background-color: green; /* Couleur de fond lors du clic */
        }
    </style>
</head>
<body>
    <h3>Enigme 1</h3>
    <p id='code'></p>
    <div>
        <div class="button-container">
            <div class="random-button" style="left: 50px; top: 50px;">
                <img src="images/enigme1/1.png" style="width: 80px; height: 80px;">
                <button id="1" class="btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 700px; top: 100px;">
                <img src="images/enigme1/2.png" style="width: 80px; height: 80px;">
                <button id="2" class="btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 250px; top: 180px;">
                <img src="images/enigme1/3.png" style="width: 80px; height: 80px;">
                <button id="3" class="btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 100px; top: 250px;">
                <img src="images/enigme1/4.png" style="width: 80px; height: 80px;">
                <button id="4" class="1 btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 450px; top: 400px;">
                <img src="images/enigme1/5.png" style="width: 80px; height: 80px;">
                <button id="5" class="btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 550px; top: 250px;">
                <img src="images/enigme1/6.png" style="width: 80px; height: 80px;">
                <button id="6" class="btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 800px; top: 400px;">
                <img src="images/enigme1/7.png" style="width: 80px; height: 80px;">
                <button id="7" class="btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 250px; top: 450px;">
                <img src="images/enigme1/8.png" style="width: 80px; height: 80px;">
                <button id="8" class="btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 850px; top: 250px;">
                <img src="images/enigme1/9.png" style="width: 80px; height: 80px;">
                <button id="9" class="btn">Cliquer</button>
            </div>
            <div class="random-button" style="left: 500px; top: 50px;">
                <img src="images/enigme1/0.png" style="width: 80px; height: 80px;">
                <button id="10" class="btn">Cliquer</button>
            </div>
        </div>
        <div>
            <p>Dans un paisible vallon, bordé de montagnes majestueuses, se trouvait une petite ferme. Au cœur de cette ferme vivait Marguerite, qui passait ses journées à brouter l'herbe fraîche des vastes étendues verdoyantes.
    Un matin ensoleillé, alors que Marguerite se prélassait sous le doux rayonnement du soleil, elle entendit un léger clapotis provenant de l'étang voisin. Curieuse, elle se dirigea vers le bord de l'eau et découvrit Nemo, nageant gracieusement dans les eaux cristallines.
    Intriguée par cette rencontre inhabituelle, Marguerite continua son exploration de la ferme. Elle rencontra bientôt Félix qui se faufilait agilement à travers les recoins de la ferme, à la recherche de nouvelles aventures.
    Alors que la journée avançait, Marguerite leva les yeux vers le ciel et aperçut Aria, planant gracieusement au-dessus de la ferme. Fascinée par cette créature majestueuse, Marguerite ne put s'empêcher de suivre son vol avec admiration.
    Cependant, la tranquillité de la ferme fut bientôt perturbée par l'arrivée soudaine d'une tempête violente. Les nuages sombres obscurcirent le ciel, et les premières gouttes de pluie commencèrent à tomber. Marguerite, Nemo, Félix et Aria se retrouvèrent tous confrontés à la furie de la nature.
    Alors que la tempête s'intensifiait, Marguerite, Nemo, Félix et Aria firent preuve de courage et de solidarité pour affronter les défis qui se présentaient à eux. Ensemble, ils firent face aux éléments déchaînés, trouvant force et réconfort dans leur amitié naissante.
    Malgré les difficultés et les dangers, Marguerite, Nemo, Félix et Aria restèrent unis, démontrant que même dans les moments les plus sombres, l'entraide et la solidarité pouvaient triompher de l'adversité. Et ainsi, dans le calme qui suivit la tempête, la ferme retrouva sa quiétude, renforcée par les liens d'amitié tissés entre ses habitants.</p>
        </div>
    </div>
    <br>
    <div>
        <label for="codeInput">Entrez le code :</label>
        <input type="text" id="codeInput" name="codeInput" required>
        <button id='valideCode' >Valider</button>
        <p id='verifCode'></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{asset('js/enigme1.js')}}"></script>
</body>
</html>
