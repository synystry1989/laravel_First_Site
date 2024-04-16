@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">lista de socios</div>

                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">codigo</th>
      <th scope="col">nome</th>
      <th scope="col">telefone</th>
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
      <td><a href="{{route('socio.show',$socio->id )}}" class="btn btn-success" >Visualizar</a></td>
      <td><a href=""class="btn btn-warning">Editar</a></td>
      <td><a href=""class="btn btn-danger">Apagar</a></td>
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
