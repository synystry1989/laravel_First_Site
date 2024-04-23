@extends('layouts.app')

@section('content')

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div id="titulo" class="card-header">Criar Editora</div>
                    <!-- para aparecer as mensagens -->
                    @if(session('msg'))
                    <p class="btn btn-success">
                        {{session('msg')}}
                    </p>
                    @endif

                    <div id="table1" class="card-body">
                        <form action="{{route('editora.store')}}" method="post">
                            <!-- para as def seguranca temos que acrescentar -->
                            @csrf

                            <br>

                            <h2>Preencha todos os campos</h2>

                            <div class="input-container">

                                <input class="input-field" type="hidden" name="id" >
                            </div>


                            <div class="input-container">
                                <i class="fa fa-user icon"></i>
                                <input class="input-field" type="text" placeholder="Nome" name="nome" id="nome" autofocus>
                            </div>

                            <div class="input-container">
                                <i class="fa fa-house icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                    </svg></i>
                                <input class="input-field" type="text" placeholder="Morada" name="morada" id="morada">
                            </div>

                            <div class="input-container">
                                <i class="fa fa-phone icon"></i>
                                <input class="input-field" type="text" placeholder="Telefone" name="telefone" id="telefone">
                            </div>

                            <div class="input-container">
                                <i class="fa fa-address-card icon"></i>
                                <input class="input-field" type="text" placeholder="Contribuinte" name="contribuinte" id="contribuinte">
                            </div>


                            <div id="botoesFundo">
                                <button type="submit" class="btn btn-danger">Gravar</button>
                                <p></p>

                            </div>
                        </form>
                        <div id="botoesFundo">
                            <a href="{{route('editora.index')}}" class="btn btn-primary">Retroceder</a>
                        </div>
                    </div>


</body>

@endsection