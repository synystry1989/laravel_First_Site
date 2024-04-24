<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">


                <button><a class="navbar-brand" href="{{ route('users.index') }}">
                        Utilizadores
                    </a></button>

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
                    <a class="dropdown-item" href="{{ route('site.servicos') }}">Lista Geral Socios</a>
                    <a class="dropdown-item" href="{{route('site.galeria')}}">Galeria</a>
                    <a class="dropdown-item" href="{{ route('site.contacto') }}">Lista Geral Socios</a>
                    </div>
                </div>

                <button> <a class="navbar-brand" href="{{ route('editora.index') }}">
                        Editoras
                    </a>
                </button>

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
                               <p style="text-align: center;"> {{ Auth::user()->name }}  &nbsp&nbsp&nbsp  {{ Auth::user()->email }}    </p>
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
            @yield('content')
        </main>
