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
                    <p style="font-weight:bold" :>Nome: <span style="font-weight: normal">{{ $socio->nome }}</p>
                    <p style="font-weight:bold">Id Socio:<span style="font-weight: normal"> {{ $socio->id }}</p>
                    <p style="font-weight:bold">Cartão cidadão:<span style="font-weight: normal"> {{ $socio->cc }}</p>
                    <p style="font-weight:bold">Telefone:<span style="font-weight: normal"> {{ $socio->telefone }}</p>
                    <p style="font-weight:bold">Morada: <span style="font-weight: normal">{{ $socio->morada }}</p>
                    <p style="font-weight:bold">Email:<span style="font-weight: normal"> {{ $socio->email }}</p>
                    <p style="font-weight:bold">Localidade:<span style="font-weight: normal"> {{ $socio->localidade }}</p>
                    <p style="font-weight:bold">Codigo-Postal:<span style="font-weight: normal"> {{ $socio->codigo_Postal }}</p>
                    <br>
                    <div id="botoesFundo"><a href="{{ route('socio.edit', $socio->id) }}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                            </svg></a></div>
                    <p></p>

                   <div id="botoesFundo"> <a href="{{ route('socio.confirma_delete', $socio->id) }}" id="botoesFundo" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                            </svg></a> </div>
                    <p></p>

                    <div id="botoesFundo"><a href="{{ route('socio.user', Auth::user()->id) }}"  class="btn btn-primary">Retroceder</a></div>

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

@endsection