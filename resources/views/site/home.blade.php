@extends('site.layout')

@section('title', 'Home Page do meu site')
<style>
    .bg_img {
        background-color: black;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
        filter: blur(4px);
        -webkit-filter: blur(4px);
    }
   
</style>

@section('content')

    <div class="row">
        
        <img src="{{ asset('images/home_bg.jpg') }}" class="bg_img" alt="A carregar">
    </div>

@endsection
