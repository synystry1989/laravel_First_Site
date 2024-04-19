
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center;font-weight:bold;color:black;font-size: 30px;" class="card-header">Lista de Editoras</div>

                <div class="card-body">
                @if(session('msg'))
<p class="btn btn-success">
{{session('msg')}}
</p >
@endif
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">nome</th>
      <th scope="col">morada</th>
      <th scope="col">telefone</th>
      <th scope="col">contribuinte</th>
    </tr>
  </thead>
  <tbody>
  @foreach($editoras as $editora)
    <tr>
      <td>{{$editora->id}}</td>
      <td>{{$editora->nome}}</td>
      <td>{{$editora->morada}}</td>
      <td>{{$editora->telefone}}</td>
      <td>{{$editora->contribuinte}}</td>  

      <td><a href="{{route('editora.show',$editora->id )}}" class="btn btn-success" >Visualizar</a></td>
     
    </tr>
@endforeach
  </tbody>
  

</table>
    </div>
        <p style="text-align:center" ><a href="{{route('editora.create' )}}" class="btn btn-primary" >______ Criar Editora______</a></p>
         <br>
                
                
    </div>
           
</div>
</div>
</div>
@endsection
