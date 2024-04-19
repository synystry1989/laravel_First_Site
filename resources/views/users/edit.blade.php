@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center;font-weight:bold;font-size: 20px"class="card-header">Edicao do utilizador {{$user->name}}</div>

                <div class="card-body">
                    <form action="{{route('users.update',$user->id)}}" method="post">

                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" value="{{$user->name}}">

                        </div>
                        <div class="form-group">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" value="{{$user->email}}">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" value="{{$user->password}}">
                            <br>
                            <select name="level">
                                <option value="{{$user->level}}" selected disabled>{{$user->level}}</option>
                                <option value="user">utilizador</option>
                                <option value="admin">administrador</option>
                            </select>
                            <br>
                        </div>
                        <div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-danger">gravar</button>
                    </div>

                    </form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
