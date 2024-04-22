@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


<div class="card-body">
    <form action="{{ route('socio.update_all', $socio->id) }}" method = "post">

        <!-- para as def seguranca temos que acrescentar -->
        @csrf
        @method('PUT')

            <legend id=""titulo>Editar campos</legend>

            @if(session('msg'))
            <p class="btn btn-success">
            {{session('msg')}}
            </p >
            @endif


            <!-- autfocus o cursor vai logo para o input
                        colocar value no campo gestor para colocar o campo id user
                    campo escondido-->

            <div>
                <label for="nome">Nome</label>
                <!-- autfocus o cursor vai logo para o input  require obriga a ser preenchido-->
                <input class="form-control mb-2" type="text" name="nome" id="nome" value="{{$socio->nome}}" autofocus>
            </div>
            <div>
                <label for="cc">cartao cidadao</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="cc" id="cc" value="{{$socio->cc}}">
            </div>

            <div>
                <label for="morada">Morada</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="morada" id="morada" value="{{$socio->morada}}">
            </div>
            <div>
                <label for="codigo_Postal">codigo postal</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="codigo_Postal" id="codigo_Postal" value="{{$socio->codigo_Postal}}">
            </div>

            <div>
                <label for="localidade">localidade</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="localidade" id="localidade" value="{{$socio->localidade}}">
            </div>
            <div>
                <label for="email">email</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="email" name="email" id="email" value="{{$socio->email}}">
            </div>
            <div>
                <label for="telefone">telemovel</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="telefone" value="{{$socio->telefone}}" id="telefone">
            </div>


            <div>
                <button type="submit" class="btn btn-primary" value="gravar">Gravar</button>

               


            </div>
    </form>


</div>

@endsection
