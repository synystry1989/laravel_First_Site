@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="table1" class="card">
                <div id="titulo" class="card-header">Confirmar eliminacao</div>
                <p></p>
                <p></p>
                <p></p>

                <h2>Tem a certeza que pretende eliminar o socio: {{ $id->nome }}?</h2>

                <div id="botoesFundo"  class="card-body">
                    <a href="{{ route('socio.delete', $id->id) }}" class="btn btn-danger">Apagar</a>
                    <p></p>

                    <a href="{{route('socio.show_all',$id )}}" class="btn btn-primary">Retroceder</a>
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