@extends('layouts.app')

@section('content')

<div class="card-body">
    <form action="{{ route('socio.socios_update', $socio->id) }}" method = "post">

        <!-- para as def seguranca temos que acrescentar -->
        @csrf
        @method('PUT')
        <fieldset>

            <legend>editar campos</legend>

            <!-- autfocus o cursor vai logo para o input
                        colocar value no campo gestor para colocar o campo id user
                    campo escondido-->

            <div>
                <label for="nome">Nome</label>
                <!-- autfocus o cursor vai logo para o input  require obriga a ser preenchido-->
                <input class="form-control mb-2" type="text" name="nome" id="nome" autofocus>
            </div>
            <div>
                <label for="cc">cartao cidadao</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="cc" id="cc">
            </div>

            <div>
                <label for="morada">Morada</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="morada" id="morada">
            </div>
            <div>
                <label for="codigo_Postal">codigo postal</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="codigo_Postal" id="codigo_Postal">
            </div>

            <div>
                <label for="localidade">localidade</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="localidade" id="localidade">
            </div>
            <div>
                <label for="email">email</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="email" name="email" id="email">
            </div>
            <div>
                <label for="telefone">telemovel</label>
                <!-- autfocus o cursor vai logo para o input -->
                <input class="form-control mb-2" type="text" name="telefone" id="telefone">
            </div>


            <div>
                <button type="submit" class="btn btn-primary" value="gravar">Gravar</button>

                <button type="reset" class="btn btn-primary" value="limpar">limpar</button>


            </div>




        </fieldset>





    </form>


</div>

@endsection
