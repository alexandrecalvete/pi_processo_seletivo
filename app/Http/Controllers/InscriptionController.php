<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription as Inscription;

class InscriptionController extends Controller
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
        $inscriptions = Inscriptions::all();
        return view('inscriptions/index')->with('inscriptions', $inscriptions);
    }

    public function create()
    {
        return view('inscriptions/create');    
    }

    public function store(Request $request)
    {

        $inscriptions = new Inscription;
        $inscription->processo_seletivo_id = $request->input('processo_seletivo_id');
        $inscription->data_pagamento = $request->input('data_pagamento');
        $inscription->pago = $request->input('pago');
        $inscription->primeira_opcao = $request->input('primeira_opcao');
        $inscription->data_inscricao = $request->input('data_inscricao');
        $inscription->cotas_id = $request->input('cotas_id');


        if($inscription->save()) {
          return redirect()->route('inscriptions.index')->with('success_message', 'Inscrição cadastrado com sucesso.');
        } else {
          return redirect()->route('inscriptions.create')->with('error_message', 'Houve um erro ao cadastradar a inscrição.');
        }
   }

    public function edit(Request $request, $id)
    {
        $inscription = Inscription::findOrFail($id);
        return view('inscriptions/edit')->with('inscription', $inscription);
    }
 
    public function update(Request $request, $id)
    {
        $inscription = Inscription::findOrFail($id);
        $inscription->nome = $request->input('nome');
        if($inscription->save()) {
            return redirect()->route('inscriptions.index')->with('success_message', 'Inscrição alterado com sucesso.');
        } else {
            return redirect()->route('inscription.edit', $id)->with('error_message', 'Houve um erro ao alterar a inscrição.');
        }
    }
    public function destroy($id)
    {
        if (Inscription::destroy($id)) {
            return redirect()->route('inscriptions.index')->with('success_message', 'Inscrição deletado com sucesso.');
        } else {
            return redirect()->route('inscriptions.create')->with('error_message', 'Houve um erro ao deletar a inscrição.');
        }
    }
}

