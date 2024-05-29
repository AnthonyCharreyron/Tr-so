<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trésorerie</title>
    @vite('resources/css/app.scss')
    @yield('style')
    @yield('head')
</head>
<body class='d-flex flex-column min-vh-100'>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="route('accueil')">Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="route('entree-sortie')">Entrée/Sortie</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    @vite('resources/js/app.js')
    @yield('pagescripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
