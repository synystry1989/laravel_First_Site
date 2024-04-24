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
