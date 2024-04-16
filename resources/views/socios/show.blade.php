@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style ="text-align:center;font-weight:bold " class="card-header">Detalhes do Socios {{$socio->nome}}</div>

                <div class="card-body">
                    <div>

                        <p>Nome: {{$socio->nome}}</p>
                        <p>Id Socio: {{$socio->id}}</p>
                        <p>Cartão cidadão: {{$socio->cc}}</p>
                        <p>Telefone{{$socio->telefone}}</p>
                        <p>Morada: {{$socio->morada}}</p>
                        <p>Email: {{$socio->email}}</p>
                        <p>Localidade: {{$socio->localidade}}</p>
                        <p>Codigo-Postal: {{$socio->codigo_Postal}}</p>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
