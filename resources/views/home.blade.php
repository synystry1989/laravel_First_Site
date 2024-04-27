
@extends('layouts.app')


@section('content')


    <div class="row">
        
       
    </div>

    <main id="container">
    @guest
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
    @endguest

@auth
    
  <p>Bem Vindo </p>
  <section class="animation">
   
    <div id="seconddiv"><div>utilizador</div></div>
    <div id="thirddiv"><div>{{Auth::user()->name}}</div></div>

  </section>
   @endauth
</main>

@endsection

