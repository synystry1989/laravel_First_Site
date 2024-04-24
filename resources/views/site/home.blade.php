@extends('site.layout')

@section('title', 'Home Page do meu site')

@section('content')


<div class="row">

    <img src="{{ asset('images/img1.png') }}" class="bg_img" alt="A carregar">
</div>

<main id="container">
    <p>Bem Vindo à</p>
    <section class="animation">
        <div id="firstdiv">
            <div>Biblioteca</div>
        </div>
        <div id="seconddiv">
            <div>Leitura</div>
        </div>
        <div id="thirddiv">
            <div>Real</div>
        </div>
    </section>
</main>

@endsection