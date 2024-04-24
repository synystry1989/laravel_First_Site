
@extends('site.layout')


@section('content')


    <div class="row">
        
        <img src="{{ asset('images/img1.png') }}" class="bg_img" alt="A carregar">
    </div>

    <main id="container">
  <p>Bem Vindo </p>
  <section class="animation">
   
    <div id="seconddiv"><div>utilizador</div></div>
    <div id="thirddiv"><div>{{Auth::user()->name}}</div></div>
 
  </section>
</main>

@endsection

