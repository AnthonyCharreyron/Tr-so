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
        .container {
            display: flex; /* Utilisation de Flexbox pour disposer les éléments côte à côte */
        }
        .items {
            margin-right: 20px; /* Marge pour séparer les éléments */
        }
    </style>
</head>
<body>
    <h3>Enigme 2</h3>
    <div class="container">
        <div class="items">
            <table>
                <tr>
                    <td>Sapin</td>
                    <td>Chaise</td>
                </tr>
                <tr>
                    <td>Batterie</td>
                    <td>Micro-onde</td>
                </tr>
                <tr>
                    <td>Chips</td>
                    <td>Pâte</td>
                </tr>
                <tr>
                    <td>Parfum</td>
                    <td>Lit</td>
                </tr>
                <tr>
                    <td>Mouchoir</td>
                    <td>Sel</td>
                </tr>
                <tr>
                    <td>Poivre</td>
                    <td>Caméra</td>
                </tr>
                <tr>
                    <td>Fenêtre</td>
                    <td>Duvet</td>
                </tr>
            </table>
        </div>
        <div class="items">
            <img src="images/enigme2/dessin.webp" style="width: 500px;" alt="Dessin">
        </div>
    </div>
    <div>
        <label for="codeInput">Entrez le code :</label>
        <input type="text" id="codeInput" name="codeInput" required>
        <button id='valideCode' >Valider</button>
        <p id='verifCode'></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{asset('js/enigme2.js')}}"></script>
</body>
</html>
