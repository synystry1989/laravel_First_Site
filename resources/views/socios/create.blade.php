@extends('layouts.app')

@section('content')

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div id="titulo" class="card-header">Criar Sócios</div>
                    <!-- para aparecer as mensagens -->
                    @if(session('msg'))
                    <p class="btn btn-success">
                        {{session('msg')}}
                    </p>
                    @endif

                    <div id="table1" class="card-body">
                        <form action="{{route('socio.store')}}" method="post">
                            <!-- para as def seguranca temos que acrescentar -->
                            @csrf

                            <br>

                            <h2>Preencha todos os campos</h2>

                            <div class="input-container">

                                <input class="input-field" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            </div>
                            <div class="input-container">
                                <i class="fa fa-user icon"></i>
                                <input class="input-field" type="text" placeholder="nome" name="nome" id="nome" autofocus>
                            </div>

                            <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                                <input class="input-field" type="email" placeholder="Email" name="email" id="email">
                            </div>

                            <div class="input-container">
                                <i class="fa fa-phone icon"></i>
                                <input class="input-field" type="telefone" placeholder="Telefone" name="telefone">
                            </div>

                            <div class="input-container">
                                <i class="fa fa-address-card icon"></i>
                                <input class="input-field" type="text" placeholder="cc" name="cc" id="cc">
                            </div>

                            <div class="input-container">
                                <i class="fa fa-house icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                    </svg></i>
                                <input class="input-field" type="text" placeholder="morada" name="morada" id="morada">
                            </div>

                            <div class="input-container">
                                <i class="fa fa-city icon"></i>
                                <input class="input-field" type="text" placeholder="localidade" name="localidade" id="localidade">
                            </div>

                            <div class="input-container">
                                <i class="fa fa-usps icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M460.3 241.7c25.8-41.3 15.2-48.8-11.7-48.8h-27c-.1 0-1.5-1.4-10.9 8-11.2 5.6-37.9 6.3-37.9 8.7 0 4.5 70.3-3.1 88.1 0 9.5 1.5-1.5 20.4-4.4 32-.5 4.5 2.4 2.3 3.8 .1zm-112.1 22.6c64-21.3 97.3-23.9 102-26.2 4.4-2.9-4.4-6.6-26.2-5.8-51.7 2.2-137.6 37.1-172.6 53.9l-30.7-93.3h196.6c-2.7-28.2-152.9-22.6-337.9-22.6L27 415.8c196.4-97.3 258.9-130.3 321.2-151.5zM94.7 96c253.3 53.7 330 65.7 332.1 85.2 36.4 0 45.9 0 52.4 6.6 21.1 19.7-14.6 67.7-14.6 67.7-4.4 2.9-406.4 160.2-406.4 160.2h423.1L549 96z" />
                                    </svg></i>
                                <input class="input-field" type="text" placeholder="codigo_Postal" name="codigo_Postal" id="codigo_Postal">
                            </div>



                            <div id="botoesFundo">
                                <button type="submit" class="btn btn-danger">Gravar</button>
                                <p></p>

                            </div>
                        </form>
                        <div id="botoesFundo">
                            <a href="{{route('socio.user', Auth::user()->id)}}" class="btn btn-primary">Retroceder</a>
                        </div>
                    </div>


</body>

@endsection



