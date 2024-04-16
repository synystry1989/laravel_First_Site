<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;
use App\Models\User;


class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //CONTROLADOR DA VIEW
    //queremos o display apenas dos nossos socios nao de todos criamos uma view para isso e temos que dar a rota
    // para a pagina socio_user/(id)

    public function socios_user(User $id)
    {
         //$user=User::find($id->id);
         $user = User::where('id', $id->id)->first();
         $socios = $user->socios()->get();

        return view('socios.socios_user',['socios'=>$socios]);
    }

    public function index()
    {
        return view('socios.index', [
            'socios' => Socio::orderby('nome')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('socios.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socio = new Socio();
        // cada campo do formulario corresponde a um campo da tabela
        //colocar pela mesma sequencia da tabala na BD
        $socio->user_id = $request->user_id;
        $socio->nome = $request->nome;
        $socio->cc = $request->cc;
        $socio->morada = $request->morada;
        $socio->codigo_Postal = $request->codigo_Postal;
        $socio->localidade = $request->localidade;
        $socio->email = $request->email;
        $socio->telefone = $request->telefone;
        $socio->save();

        return redirect()->route('socio.create')->with('msg', ('registo efetuado com sucesso'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Socio $socio)
    {//caminho view pasta socios ficheiro nome show
        return view('socios.show',['socio'=>$socio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Socio $id)
    {
        return view('socios.edit', ['socio' => Socio::findOrFail($id)]);

        //  $user = User::where('id',$id->id)->first();
        //  $socios = $user->socios()->get();

        // return view('socios.edit',['socios'=>$socios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Socio $socio)
    {
        User::findOrFail($id->id)->update($id->all());
        //redirecioanr
        return redirect()->route('socios.socios_user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        $user = User::where('id', $id->id)->first();
         $socios = $user->socios()->get();

        return view('socios.socios_user',['socios'=>$socios]);
    }
}
