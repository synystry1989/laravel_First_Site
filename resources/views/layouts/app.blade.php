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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <style>
        * {
            box-sizing: border-box;
        }

        /* estilo do input container */
        .input-container {
            display: flex;
            width: 100%;
            margin-bottom: 15px;

        }

        /* estilo para os icones do formulario */
        .icon {
            padding: 15px 15px;
            background: #add8e6;
            color: black;
            min-width: 50px;
            text-align: center;
            border-top-left-radius: 10px;
        }

        /* estilo dos campos de input */
        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;

        }

        .input-field:focus {
            border: 2px solid #F4A460;

        }

        .btn {

            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }

        #botoes {
            padding: 5px 7px;
        }



        #botoesFundo {

            padding-left: 200px;
            padding-right: 200px;
        }


        #caixa1 {
            border-radius: 10px;
            background-color: #add8e6;

        }

        #table1 {
            background-color: #48D1CC;
        }

        #titulo {
            background-color: #F08080;
            text-align: center;
            font-weight: bold;
            color: white;
            font-size: 30px;
        }

        #search {
            background-color: white;
        }

        #p1 {
            font-weight: bold;
            font-size: 20px
        }

        body {
            background-image: url('{{ asset('imagens/img1.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">


                <div class="btn-group" role="group" aria-label="Vertical button group">
                    <button style="background-color: white; font-size: 20px; color:black" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Utilizadores
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('users.index') }}">Lista Utilizadores</a>

                    </div>
                </div>

                <div class="btn-group" role="group" aria-label="Vertical button group">
                    <button style="background-color: white; font-size: 20px; color:black" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Socios
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('socio.create')}}">Criar Socio</a>
                        <a class="dropdown-item" href="{{route('socio.index')}}">Lista Geral Socios</a>
                        @auth
                        <a class="dropdown-item" href="{{route('socio.user', Auth::user()->id)}}">Minha Lista Socios</a>
                        @endauth

                    </div>
                </div>

                <div class="btn-group" role="group" aria-label="Vertical button group">
                    <button style="background-color: white; font-size: 20px; color:black" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Editoras
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('editora.index') }}">Lista Editoras</a>
                        <a class="dropdown-item" href="{{route('editora.create' )}}">Adicionar Editora</a>

                    </div>
                </div>

               

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <p style="text-align: center;"> {{ Auth::user()->name }} &nbsp&nbsp&nbsp {{ Auth::user()->email }} </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>


                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
         
        </main>
    </div>
</body>

</html>