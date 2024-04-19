@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center;font-weight:bold;font-size: 20px"class="card-header">Update Editora {{$editora->nome}}
                </div>

                <div class="card-body">
                    <form action="{{ route('editora.update', $editora->id) }}" method="post">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" id="id" aria-describedby="emailHelp" value="{{$editora->id}}">
                         
                        </div>

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" value="{{$editora->nome}}">

                        </div>
                        <div class="form-group">
                            <label for="id">Morada</label>
                            <input type="text" class="form-control" name="morada" id="morada" aria-describedby="emailHelp" value="{{$editora->morada}}">
                         
                        </div>
                   
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="password" class="form-control" name="telefone" id="Password" value="{{$editora->telefone}}">                          
                       </div>

                       <div class="form-group">
                            <label for="contribuinte">Contribuinte</label>
                            <input type="text" class="form-control" name="contribuinte" id="contribuinte" aria-describedby="emailHelp" value="{{$editora->contribuinte}}">
                         
                        </div>
                        <p></p>

                    <div>
                       
                        <button type="submit" class="btn btn-success">gravar</button>
                        <a href="{{route('editora.show',$editora->id )}}" class="btn btn-primary" >retroceder</a>
                        
                    </div>
                

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
