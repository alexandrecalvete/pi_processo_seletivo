<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectiveProcessesQuota as SelectiveProcessesQuota;

class SelectiveProcessesQuotaController extends Controller
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
        $selectiveProcessesQuotas = SelectiveProcessesQuota::all();
        return view('selectiveProcessesQuotas/index')->with('selectiveProcessesQuotas', $selectiveProcessesQuotas);
    }

    public function create()
    {
        return view('selectiveProcessesQuotas/create');    
    }

    public function store(Request $request)
    {

        $selectiveProcessesQuota = new SelectiveProcessesQuotas;
        $selectiveProcessesQuota->nome = $request->input('nome');

        if($selectiveProcessesQuota->save()) {
          return redirect()->route('selectiveProcessesQuotas.index')->with('success_message', 'Processo seletivo cotas cadastrado com sucesso.');
        } else {
          return redirect()->route('selectiveProcessesQuotas.create')->with('error_message', 'Houve um erro ao cadastradar o processo seletivo cotas.');
        }
   }

    public function edit(Request $request, $id)
    {
        $selectiveProcessesQuota = SelectiveProcessesQuota::findOrFail($id);
        return view('selectiveProcessesQuotas/edit')->with('selectiveProcessesQuotas', $selectiveProcessesQuotas);
    }
 
    public function update(Request $request, $id)
    {
        $selectiveProcessesQuota = SelectiveProcessesQuota::findOrFail($id);
        $selectiveProcessesQuota->nome = $request->input('nome');
        if($selectiveProcessesQuota->save()) {
            return redirect()->route('selectiveProcessesQuotas.index')->with('success_message', 'Processo seletivo cotas alterado com sucesso.');
        } else {
            return redirect()->route('selectiveProcessesQuotas.edit', $id)->with('error_message', 'Houve um erro ao alterar o processo seletivo cotas.');
        }
    }
    public function destroy($id)
    {
        if (SelectiveProcessesQuota::destroy($id)){
            return redirect()->route('selectiveProcessesQuotas.index')->with('success_message', 'Processo seletivo cotas deletado com sucesso.');
        } else {
            return redirect()->route('selectiveProcessesQuotas.create')->with('error_message', 'Houve um erro ao deletar o processo seletivo cotas.');
        }
    }
}


