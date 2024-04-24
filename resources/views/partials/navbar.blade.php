<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Navegação
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('site.home') }}">Home</a></li>
                        <li><a class="dropdown-item" href="{{ route('users.index') }}">Utilizadores</a></li>
                        <li><a class="dropdown-item" href="{{ route('socio.create') }}">Sócios</a></li>
                        <li><a class="dropdown-item" href="{{ route('editora.create') }}">Editoras</a></li>
                        <li><a class="dropdown-item" href="{{ route('site.servicos') }}">Serviços</a><li>
                        <li><a class="dropdown-item" href="{{ route('site.galeria') }}">Galeria</a></li>
                        <li><a class="dropdown-item" href="{{ route('site.contacto') }}">Contactos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            Laravel
        </a>
        <a class="navbar-brand" href="{{ route('user.index') }}">
            Utilizadores
        </a>
        <a class="navbar-brand" href="{{ route('socio.create') }}">
            Sócios
        </a>
        <a class="navbar-brand" href="{{ route('editora.create') }}">
            Editoras
        </a> --}}
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
                        {{ Auth::user()->name }}
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
