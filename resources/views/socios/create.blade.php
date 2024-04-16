@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar Socios</div>
@if(session('msg'))
<p class="btn btn-success">
{{session('msg')}}
</p >
@endif




<p class="btn btn-outline-secondary"><a href="{{route('socio.index')}}" >Listar todos os Sócios</a>
</p>


<p class="btn btn-outline-secondary"><a href="{{route('socio.user', Auth::user()->id)}}">listar os meus socios</a>
</p>




                <div class="card-body">
                    <form action="{{route('socio.store')}}" method="post">
                        <!-- para as def seguranca temos que acrescentar -->
                        @csrf
                        <fieldset>


                            <legend>Preencha todos os campos</legend>
                            <div>
                                <!-- autfocus o cursor vai logo para o input
                        colocar value no campo gestor para colocar o campo id user
                    campo escondido
                --> <input class="form-control mb-2" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            </div>
                            <div>
                                <label for="nome">Nome</label>
                                <!-- autfocus o cursor vai logo para o input  require obriga a ser preenchido-->
                                <input class="form-control mb-2" type="text" name="nome" id="nome" require autofocus>
                            </div>
                            <div>
                                <label for="cc">cartao cidadao</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="cc" require id="cc">
                            </div>

                            <div>
                                <label for="morada">Morada</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="morada" id="morada" require>
                            </div>
                               <div>
                                <label for="codigo_Postal">codigo postal</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="codigo_Postal" id="codigo-Postal" require>
                            </div>

                            <div>
                                <label for="localidade">localidade</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="localidade" id="localidade" require>
                            </div>
                            <div>
                                <label for="email">email</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="email" name="email" require id="email">
                            </div>
                            <div>
                                <label for="telefone">telemovel</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="telefone" id="telefone" require>
                            </div>


                            <div>
                                <button type="submit" class="btn btn-primary" value="gravar">Gravar</button>

                                <button type="reset" class="btn btn-primary" value="limpar">limpar</button>


                            </div>




                        </fieldset>





                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
