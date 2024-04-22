@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center;font-weight:bold;color:black;font-size: 30px;" class="card-header">Confirmar eliminacao</div>

                <p style="font-size: 20px" >Tem a certeza que pretende eliminar o socio: {{ $id->nome }} ?</p>

                <div class="card-body">
                     <p><a href="{{ route('socio.delete', $id->id) }}"
                                        class="btn btn-warning">Apagar</a></p>

                                        <a href="{{ route('socio.index') }}" class="btn btn-primary">Voltar para os socios</a>
                    @if (session('msg'))
                    <p class="btn btn-success">
                        {{ session('msg') }}
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
