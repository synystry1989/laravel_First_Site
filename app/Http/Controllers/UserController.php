<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {  //vai acrescentar a view index da pasta users (users.index)criada por nos  a tabela users
        return view(
            'users.index',
            [
                'users' => DB::table('users')->orderby('name')->paginate('10')
            ]
        );
    }

    public function edit($id)
    { //ir ao model user encontrar o id do cliente e editar
        return view('users.edit', ['user' => User::findOrFail($id)]);
    }

    public function update(Request $id)
    {
        User::findOrFail($id->id)->update($id->all());
        //redirecioanr
        return redirect()->route('users.index');
}

public function delete(Request $id)
{

    User::findOrFail($id->id)->delete();
    return redirect()->route('users.index');

}
}
