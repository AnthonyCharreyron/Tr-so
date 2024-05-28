<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trésorerie</title>
    <link rel="stylesheet" href="{{asset('dataTables/css/dataTables.v1.13.4-custom.min.css')}}">
    @vite('resources/css/app.scss')
    @yield('style')
    @yield('head')
</head>
<body class='d-flex flex-column min-vh-100'>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    @vite('resources/js/app.js')
    @yield('pagescripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{asset('dataTables/js/dataTables.v1.13.2.min.js')}}"></script>
</body>

</html>
