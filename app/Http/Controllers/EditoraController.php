<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;
use App\Models\Socio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('editoras.index', [
            'editoras' => Editora::orderby('nome')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('editoras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $editora = new Editora();
        // cada campo do formulario corresponde a um campo da tabela
        //colocar pela mesma sequencia da tabala na BD
        $editora->id = $request->id;
        $editora->nome = $request->nome;
        $editora->morada = $request->morada;
        $editora->telefone = $request->telefone;       
        $editora->contribuinte = $request->contribuinte;
        $editora->save();

        return redirect()->route('editora.index')->with('msg', ('registo efetuado com sucesso'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Editora $editora)
    {
        return view('editoras.show',['editora' => Editora::findOrFail($editora->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editora $editora)
    {
       
        return view('editoras.edit', ['editora' => Editora::findOrFail($editora->id)]);
      
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editora $editora)
    {
        $editora->update($request->all());

          //redirecionar
        return redirect()->route('editora.show', $editora)->with('msg', ('editora modificada com sucesso'));
    }

    /**
     * Remove the specified resource from storage.
     */
    // nao consegui colocar a funcionar com o destroy do ressources criei delete e funcionou 
    public function delete(Editora $id)
    {
        
        $editora = Editora::findOrFail($id->id);
        $editora->delete();
        return redirect()->route('editora.index')->with('msg', ('editora eliminada com sucesso'));;

    }


    public function confirma_destroy(Editora $id){

        return view('editoras.confirma_destroy',['id'=>$id]);
     }

 
   


}
