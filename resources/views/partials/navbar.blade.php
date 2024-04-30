<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    @vite(['resources/css/cssNavBlade.css', 'resources/css/cssNavBlade.css'])

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/js/searchBar.js', 'resources/js/searchBar.js'])





</head>


<body>
    <div id="app">

        <nav style="text-align: left;" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">

                <div class="container">

                    <button class="btn btn-outline secondary">
                        <a style="background-color: white; font-size: 20px; " class="navbar-brand" href="{{ route('site.home') }}">
                            Home
                        </a>
                    </button>
                </div>
                <div class="container">

                    <a style="background-color: white; font-size: 20px; " class="navbar-brand" href="{{ route('site.galeria') }}">
                        Galeria
                    </a>

                    <a style="background-color: white; font-size: 20px;" class="navbar-brand" href="{{ route('site.servicos') }}">
                        Serviços
                    </a>


                    <a style="background-color: white; font-size: 20px; " class="navbar-brand" href="{{ route('site.contacto') }}">
                        Contactos
                    </a>

                </div>

                <div>
                    <ul class="navbar-nav me-auto">

                        <!-- consegui fazer desaparecer os botoes login desta nav nova e aparecer so quando nao tem login feito e vice versa os butoes de logout e nome aparecem so com login feito -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif



                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @endguest

                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ Auth::user()->email }}</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </li>
                        @endauth
                    </ul>

                </div>





            </div>
        </nav>

        <main class="py-4">
    
        </main>
    </div>
</body>

</html>