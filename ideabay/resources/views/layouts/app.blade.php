<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ideabay') }}</title>
    <link rel="icon" href="{{{ asset('assets/favicon.ico') }}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @guest
        <div id="login-container">
            <div class="row">
                <div class="col login-banner">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <h1><i class="far fa-lightbulb pr-4"></i>Ideabay</h1>
                            <p>We bring investors and entrepreneurs together. <br> Start sharing your ideas today!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center align-items-center">
                    
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    @else

    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="{{ url('/') }}">IdeaBay</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create-idea">Create Idea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search for ideas..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    @yield('content')

    <footer class="mt-auto">
        <p>© Copyright 2019 Ideabay. All rights reserved.</p>
    </footer>

    @endguest
</body>

</html>
