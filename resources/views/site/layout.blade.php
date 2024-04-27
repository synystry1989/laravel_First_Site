<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
@vite(['resources/css/cssNavBlade.css', 'resources/css/cssNavBlade.css'])
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/js/searchBar.js', 'resources/js/searchBar.js'])

   
  

</head>



<!DOCTYPE html>
<html lang="en-gb;pt-pt">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    {{-- link css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <title>@yield('title')</title>
 
    <style>
        .lorem {
            margin: 5%;
            width: 90%;
        }
 
        h1 {
            padding-top: 30px;
            align-content: center;
            text-align: center;
            margin-top: 100px;
        }
    </style>
 
<body>
    {{-- navbar --}}
    @include('partials.navbar')
 
    {{-- conteudo principal --}}
    @yield('content')
    {{-- link jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    {{-- link JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
 
</html>
