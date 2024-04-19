@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style="text-align:center;font-weight:bold;color:black;font-size: 20px;" class="card-header">Detalhes da Editora
                        {{ $editora->nome }}</div>

                    <div class="card-body">
                        <div>

                            
                            <p>Id Editora: {{ $editora->id }}</p>
                            <p>Nome: {{ $editora->nome }}</p>
                            <p>Morada: {{ $editora->morada }}</p>
                            <p>Telefone{{ $editora->telefone }}</p>                           
                            <p>Contribuinte: {{ $editora->contribuinte }}</p>
                     
                           
                            <br>
                         
                            <td>  <a href="{{ route('editora.index')}}" class="btn btn-primary">Retroceder</a> </td>

                            <td><a href="{{ route('editora.edit',$editora->id)}}"class="btn btn-warning">Editar</a> </td>

                            <td><a href="{{route('editora.confirma_destroy',$editora->id)}}" class="btn btn-danger" >Apagar</a></td>   
            
                            </table>

                        </div>
                        <br>
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
