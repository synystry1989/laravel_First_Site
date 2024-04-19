@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center;font-weight:bold;color:black;font-size: 30px;"class="card-header">Lista de Sócios</div>

                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Gestor</th>
    </tr>
  </thead>
  <tbody>
  @foreach($socios as $socio)
    <tr>
      <th scope="row">{{$socio->id}}</th>
      <td>{{$socio->nome}}</td>
      <td>{{$socio->telefone}}</td>
      <!-- vams buscar o nome ao campo user de users -->
      <td>{{$socio->user->name}}</td>
      <td><a href="{{route('socio.show_all',$socio->id )}}" class="btn btn-primary" >Visualizar</a></td>

    </tr>
@endforeach

  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
