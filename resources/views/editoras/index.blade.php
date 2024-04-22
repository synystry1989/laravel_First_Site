<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div id="titulo" class="card-header">Lista de Editoras</div>

        <div id="table1" class="card-body">
        <p></p>
          <p></p>
          <div class="input-group mb-3">
            <div>
              <button style="background-color:#add8e6;" class="btn btn-success" type="button" id="button-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="color:black" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg></button>
            </div>
            <input type="text" class="form-control" placeholder="Editoras">
            <div id="caixa1" class="card-header ">Editoras registadas: {{count($editoras)}}
            </div>

          </div>
          <p></p>
          @if(session('msg'))
          <p class="btn btn-success">
            {{session('msg')}}
          </p>
          @endif

          <table class="table">
            <thead >
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Morada</th>
                <th scope="col">Telefone</th>
                <th scope="col">Contribuinte</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($editoras as $editora)
              <tr>
                <th scope="row">{{$editora->id}}</th>
                <td>{{$editora-> nome}}</td>
                <td>{{$editora->morada}}</td>
                <td>{{$editora->telefone}}</td>
                <td>{{$editora->contribuinte}}</td>


                <td><a href="{{route('editora.show',$editora->id )}}" id="botoes" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg></a></td>

              </tr>
              @endforeach

              <!-- colocar a paginacao a funcionar -->
              <tr>
                <td id="table1" colspan="4">{{$editoras->links()}}</td>

                <td id="table1" colspan="2"><a href="{{route('editora.create')}}" id="botoes" class="btn btn-primary">Criar Editora</a></td>
              </tr>

            </tbody>


          </table>
        </div>



      </div>

    </div>
  </div>
</div>
@endsection