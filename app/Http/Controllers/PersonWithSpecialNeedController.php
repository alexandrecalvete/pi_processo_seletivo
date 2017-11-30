<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonWithSpecialNeedController as PersonWithSpecialNeed;

class PersonWithSpecialNeedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personWithSpecialNeed = PersonWithSpecialNeed::all();
        return view('personWithSpecialNeed/index')->with('personWithSpecialNeed', $personWithSpecialNeed);
    }

    public function create()
    {
        return view('personWithSpecialNeed/create');    
    }

    public function store(Request $request)
    {

        $personWithSpecialNeed = new PersonWithSpecialNeed;
        $personWithSpecialNeed->necessidadeEspeciais_id = $request->input('necessidadeEspeciais_id');
        $personWithSpecialNeed->permanente = $request->input('permanente');
        $personWithSpecialNeed->observacao = $request->input('observacao');
        

        if($personWithSpecialNeed->save()) {
          return redirect()->route('personWithSpecialNeed.index')->with('success_message', 'Pessoa com necessidade especiais cadastrado com sucesso.');
        } else {
          return redirect()->route('personWithSpecialNeed.create')->with('error_message', 'Houve um erro ao cadastradar a Pessoa com necessidade especiais.');
        }
   }

    public function edit(Request $request, $id)
    {
        $personWithSpecialNeed = PersonWithSpecialNeed::findOrFail($id);
        return view('personWithSpecialNeed/edit')->with('personWithSpecialNeed', $personWithSpecialNeed);
    }
 
    public function update(Request $request, $id)
    {
        $personWithSpecialNeed = PersonWithSpecialNeed::findOrFail($id);
        $personWithSpecialNeed->nome = $request->input('nome');
        if($personWithSpecialNeed->save()) {
            return redirect()->route('personWithSpecialNeed.index')->with('success_message', 'Pessoa com necessidade especiais alterado com sucesso.');
        } else {
            return redirect()->route('personWithSpecialNeed.edit', $id)->with('error_message', 'Houve um erro ao alterar a Pessoa com necessidade especiais.');
        }
    }
    public function destroy($id)
    {
        if (PersonWithSpecialNeed::destroy($id))
            return redirect()->route('personWithSpecialNeed.index')->with('success_message', 'Pessoa com necessidade especiais deletada com sucesso.');
        } else {
            return redirect()->route('personWithSpecialNeed.create')->with('error_message', 'Houve um erro ao deletar a Pessoa com necessidade especiais.');
        }
    }
}

