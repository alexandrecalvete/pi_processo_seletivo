<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialNeeds as SpecialNeeds;

class SpecialNeedsController extends Controller
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
        $specialNeed = SpecialNeeds::all();
        return view('specialNeeds/index')->with('specialNeeds', $specialNeeds);
    }

    public function create()
    {
        return view('specialNeeds/create');    
    }

    public function store(Request $request)
    {

        $specialNeed = new Profile;
        $specialNeed->nome = $request->input('nome');

        if($specialNeeds->save()) {
          return redirect()->route('specialNeeds.index')->with('success_message', 'Necessidade Especiais cadastrado com sucesso.');
        } else {
          return redirect()->route('specialNeeds.create')->with('error_message', 'Houve um erro ao cadastradar a necessidade especiais.');
        }
   }

    public function edit(Request $request, $id)
    {
        $specialNeed = SpecialNeed::findOrFail($id);
        return view('specialNeeds/edit')->with('specialNeed', $specialNeed);
    }
 
    public function update(Request $request, $id)
    {
        $specialNeed = SpecialNeed::findOrFail($id);
        $specialNeed->nome = $request->input('nome');
        if($specialNeed->save()) {
            return redirect()->route('specialNeeds.index')->with('success_message', 'Necessidade Especiais alterada com sucesso.');
        } else {
            return redirect()->route('specialNeeds.edit', $id)->with('error_message', 'Houve um erro ao alterar a necessidade especiais.');
        }
    }
    public function destroy($id)
    {
        if (SpecialNeed::destroy($id)){
            return redirect()->route('specialNeeds.index')->with('success_message', 'Necessidade Especiais deletada com sucesso.');
        } else {
            return redirect()->route('specialNeeds.create')->with('error_message', 'Houve um erro ao deletar a necessidade especiais.');
        }
    }
}


