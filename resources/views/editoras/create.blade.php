@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center;font-weight:bold;color:black;font-size: 30px " class="card-header">Criar Editora</div>
                <!-- para aparecer as mensagens -->
@if(session('msg'))
<p class="btn btn-success">
{{session('msg')}}
</p >
@endif

 <!-- <p class="btn btn-outline-secondary"><a href="{{route('socio.index')}}" >Listar todos os Sócios</a>  -->
</p>


<!-- <p class="btn btn-outline-secondary"><a href="{{route('socio.user', Auth::user()->id)}}">listar os meus socios</a>  -->
</p>

                <div style="font-weight:bold;font-size: 20px" class="card-body">
                    <form action="{{route('editora.store')}}" method="post">
                        <!-- para as def seguranca temos que acrescentar -->
                        @csrf
                        <fieldset>


                            <legend >Preencha todos os campos</legend>
                            <br>

                            <div>
                                <label for="id">Id</label>
                                <!-- autfocus o cursor vai logo para o input  require obriga a ser preenchido-->
                                <input class="form-control mb-2" type="text" name="id" id="id"  autofocus>
                            </div>
                          

                            <div>
                                <label for="nome">Nome</label>
                                <!-- autfocus o cursor vai logo para o input  require obriga a ser preenchido-->
                                <input class="form-control mb-2" type="text" name="nome" id="nome"  autofocus>
                            </div>
                          
                        
                            
                            <div>
                                <label for="morada">Morada</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="morada" id="morada" >
                            </div>
                               
                            <div>
                                <label for="telefone">telefone</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="telefone" id="telefone" >
                            </div>
                            <div>
                                <label for="contribuinte">contribuinte</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="contribuinte" id="contribuinte" >
                            </div>


                            <div>
                                <button type="submit" class="btn btn-danger" value="gravar">Gravar</button>
                            </div>
                            <br>
                            <div style ="text-align: center;">
                               

                            <p class="btn btn-outline-primary"><a href="{{route('editora.index')}}" >Listar Editoras</a> </p>


                            </div>

                        </fieldset>





                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
