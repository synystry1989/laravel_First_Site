@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center;font-weight:bold;color:black;font-size: 20px;" class="card-header">Confirmar eliminação
                </div>

                <p style="font-size: 20px;">Tem a certeza que pretende eliminar a editora: {{ $id->nome }} ?</p>

                <div class="card-body">
                     <p><a href="{{ route('editora.delete', $id->id) }}"
                                        class="btn btn-danger">Apagar</a></p>

                    <a href="{{ route('editora.index') }}" class="btn btn-primary">Voltar para editoras</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
