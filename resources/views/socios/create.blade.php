@extends('layouts.app')

@section('content')

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center;font-weight:bold;color:black;font-size: 30px;" class="card-header">Criar Sócios</div>
                <!-- para aparecer as mensagens -->
@if(session('msg'))
<p class="btn btn-success">
{{session('msg')}}
</p >
@endif

                <div style="font-weight:bold;font-size: 20px" class="card-body">
                    <form action="{{route('socio.store')}}" method="post">
                        <!-- para as def seguranca temos que acrescentar -->
                        @csrf
                        <fieldset>
                          <br>
                            <form action="/action_page.php">
  <h2>Preencha todos os campos</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">Register</button>
</form>
                            <div>




                                <!-- autfocus o cursor vai logo para o input
                        colocar value no campo gestor para colocar o campo id user
                    campo escondido
                --> <input class="form-control mb-2" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            </div>
                            <div>
                                <label for="nome">Nome</label>
                                <!-- autfocus o cursor vai logo para o input  require obriga a ser preenchido-->
                                <input class="form-control mb-2" type="text" name="nome" id="nome"  autofocus>
                            </div>
                            <div>
                                <label for="cc">cartao cidadao</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="cc" require id="cc">
                            </div>

                            <div>
                                <label for="morada">Morada</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="morada" id="morada" >
                            </div>
                               <div>
                                <label for="codigo_Postal">codigo postal</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="codigo_Postal" id="codigo-Postal" >
                            </div>

                            <div>
                                <label for="localidade">localidade</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="localidade" id="localidade" >
                            </div>
                            <div>
                                <label for="email">email</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="email" name="email" require id="email">
                            </div>
                            <div>
                                <label for="telefone">telemovel</label>
                                <!-- autfocus o cursor vai logo para o input -->
                                <input class="form-control mb-2" type="text" name="telefone" id="telefone" >
                            </div>


                            <div>
                                <button type="submit" class="btn btn-danger" value="gravar">Gravar</button>


                            </div>






                        </fieldset>





                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

    
</body>

@endsection


