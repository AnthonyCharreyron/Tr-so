<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Escape</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <h3>Enigme 5</h3>
    <p id='code'></p>
    <div>
        <label for="codeInput">Entrez le code :</label>
        <input type="text" id="codeInput" name="codeInput" required>
        <button id='valideCode' >Valider</button>
        <p id='verifCode'></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{asset('js/enigme5.js')}}"></script>
</body>
</html>
