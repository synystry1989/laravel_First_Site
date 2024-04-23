@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="table1" class="card-body">
                <p></p>
                <div id="titulo" class="card">
                    <h2>Confirmar eliminação</h2>
                </div>
                <p></p>
                <p></p>

                <h3> Tem a certeza que pretende eliminar a editora {{ $id->nome }} ?</h3>
                <p></p>
                <p></p>
                <div id="botoesFundo">
                    <a href="{{ route('editora.delete', $id->id) }}"  class="btn btn-danger">Apagar</a>
                   <p></p>

                    <a href="{{ route('editora.index') }}" class="btn btn-primary">Voltar para editoras</a>
                  
                </div>
        
            </div>
           
        </div>
    </div>
</div>
</div>
@endsection