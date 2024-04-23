@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="titulo" class="card-header">Edição de {{$user->name}}

                </div>

                <div id="table1" class="card-body">

                    <form action="{{route('users.update',$user->id)}}" method="post">

                        @csrf
                        @method('PUT')

                       <p></p>
                       <p></p>
                            <h2>Preencha todos os campos</h2>
                            <div class="input-container">
                                <i class="fa fa-user icon"></i>

                                <input class="input-field" type="text" id="nome" value="{{$user->name}}" name="nome">
                                <i class="fa fa-pen icon"></i>
                               
                                <select name="level">
                                    <option  value="{{$user->level}}" selected disabled > Administrator level </option>
                                    <option value="user">utilizador</option>
                                    <option value="admin">administrador</option>
                                </select>
                            </div>

                            <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                                <input class="input-field" type="text" value="{{$user->email}}" name="email">
                            </div>
                            <div class="input-container">
                                <i class="fa fa-key icon"></i>
                                <input class="input-field" type="password" value="{{$user->password}}" name="psw">
                            </div>
                            <p id="botoesFundo"><button  type="submit" class="btn btn-danger">Gravar</button></p>
                           
                        </form>
                         
                       
                        <P id="botoesFundo"><a href="{{route('users.index')}}"  class="btn btn-primary">Retroceder</a></p>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection