@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style="text-align:center;font-weight:bold;color:black;font-size: 20px;" class="card-header">Detalhes do Socios
                        {{ $socio->nome }}</div>

                    <div class="card-body">
                        <div>

                            <p>Nome: {{ $socio->nome }}</p>
                            <p>Id Socio: {{ $socio->id }}</p>
                            <p>Cartão cidadão: {{ $socio->cc }}</p>
                            <p>Telefone{{ $socio->telefone }}</p>
                            <p>Morada: {{ $socio->morada }}</p>
                            <p>Email: {{ $socio->email }}</p>
                            <p>Localidade: {{ $socio->localidade }}</p>
                            <p>Codigo-Postal: {{ $socio->codigo_Postal }}</p>
                            <br>
                            <!-- {{-- <a href="{{route('socio.index')}}" class="btn btn-primary">Voltar para o geral</a> --}} -->

                            <a href="{{ route('socio.user', Auth::user()->id) }}" class="btn btn-primary">Retroceder</a>

                            <a href="{{ route('socio.index') }}" class="btn btn-primary">Voltar para os socios</a>

                            <td><a href="{{ route('socio.edit', $socio->id) }}"class="btn btn-warning">Editar</a> </td>

                            <td><a href="{{ route('socio.confirma_delete', $socio->id) }}"class="btn btn-danger">Apagar</a>                            </td>
                         

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
