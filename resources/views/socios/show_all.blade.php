@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="titulo" class="card-header">Detalhes do Socios
                    {{ $socio->nome }}
                </div>

                <div id="table1" class="card-body">
                    <div>
                        <p></p>
                        <p></p>
                        <table>
                            <!-- span permite mudar formatacao texto a meio do paragrafo -->
                            <p id="p1" :>Nome: <span style="font-weight: normal">{{ $socio->nome }}</p>
                            <p id="p1">Id Socio:<span style="font-weight: normal"> {{ $socio->id }}</p>
                            <p id="p1">Cartão cidadão:<span style="font-weight: normal"> {{ $socio->cc }}</p>
                            <p id="p1">Telefone:<span style="font-weight: normal"> {{ $socio->telefone }}</p>
                            <p id="p1">Morada: <span style="font-weight: normal">{{ $socio->morada }}</p>
                            <p id="p1">Email:<span style="font-weight: normal"> {{ $socio->email }}</p>
                            <p id="p1">Localidade:<span style="font-weight: normal"> {{ $socio->localidade }}</p>
                            <p id="p1">Codigo-Postal:<span style="font-weight: normal"> {{ $socio->codigo_Postal }}</p>
                            <br>
                            <td><a href="{{ route('socio.edit_all', $socio->id) }}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                    </svg></a> </td>

                            <td><a href="{{ route('socio.confirma_destroy', $socio->id) }}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                    </svg></a> </td>
                          
                            <td><a href="{{ route('socio.index') }}" class="btn btn-primary">Retroceder</a></td>
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