<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Galaxies</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">

    <!-- main CSS file -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a id="pageTitle" class="navbar-brand" href="{{ url('/home') }}">
                    Galaxies
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="GalaxieButton" onclick="showGalaxiesDropdown()" onmouseover="removeUserDropdown()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Galáxia
                        </button>
                        <div class="dropdown-menu" id="GalaxiesDropdown" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('galaxy.index') }}">Criar</a>
                            <a class="dropdown-item" href="/galaxy/search">Consultar</a>
                        </div>
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="UserButton" onclick="showUserDropdown()" onmouseover="removeGalaxiesDropdown()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu" id="UserDropdown" aria-labelledby="dropdownMenuButton">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">
                                        {{ __('Sair') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div id="msg">
                    @if(session('msg'))
                    <p class="msg">{{ session('msg')}}</p>
                    @endif
                </div>
                <div id="alertmsg">
                    @if(session('alertmsg'))
                    <p class="alertmsg">{{ session('alertmsg')}}</p>
                    @endif
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>

<!-- Scripts -->
<script src="{{ asset('js/dropdown.js') }}"></script>