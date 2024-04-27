
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div id="table1" class="card">
        <div id="titulo" class="card-header">Lista dos meus socios</div>
        <div class="card-body">
          <p></p>

          <div class="input-group mb-3">
            <div>
              <button style="background-color:#add8e6;" class="btn btn-success" type="button" id="button-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="color:black" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg></button>
            </div>
            <input type="text" id="search" class="form-control" placeholder="Meus Socios">
            <div id="caixa1" class="card-header ">Nº Socios: {{count($socios)}}
            </div>

          </div>
          <p></p>
          <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">codigo</th>
                <th scope="col">nome</th>
                <th scope="col">telefone</th>
                <th scope="col">Gestor</th>
                <th style="text-align: center;" scope="col"> Ações</th>
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
                <td><a href="{{route('socio.show',$socio->id )}}" id="botoes" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                    </svg>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            @if(session('msg'))
            <p class="btn btn-success">
              {{session('msg')}}
            </p>
            @endif
          </table>
          <p id="botoesFundo"><a href="{{route('socio.create')}}" style="background-color:#add8e6" class="btn btn-primary">Criar Socio</a></p>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection