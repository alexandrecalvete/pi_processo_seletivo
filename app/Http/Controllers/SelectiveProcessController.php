<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectiveProcess as SelectiveProcess;

class SelectiveProcessController extends Controller
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
        
        

$selectiveProcesses = SelectiveProcesses::all();
        return view('selectiveProcesses/index')->with('selectiveProcesses', $selectiveProcesses);
    }

    public function create()
    {
        return view('selectiveProcesses/create');    
    }

    public function store(Request $request)
    {

        $selectiveProcess = new Profile;
        $selectiveProcess->nome = $request->input('nome');

        if($selectiveProcess->save()) {
          return redirect()->route('selectiveProcesses.index')->with('success_message', 'Processo Seletivo cadastrado com sucesso.');
        } else {
          return redirect()->route('selectiveProcesses.create')->with('error_message', 'Houve um erro ao cadastradar o proceso seletivo.');
        }
   }

    public function edit(Request $request, $id)
    {
        $selectiveProcess = SelectiveProcess::findOrFail($id);
        return view('selectiveProcesses/edit')->with('selectiveProcess', $selectiveProcess);
    }
 
    public function update(Request $request, $id)
    {
        $selectiveProcess = SelectiveProcess::findOrFail($id);
        $selectiveProcess->nome = $request->input('nome');
        if($selectiveProcess->save()) {
            return redirect()->route('selectiveProcesses.index')->with('success_message', 'Processo Seletivo alterado com sucesso.');
        } else {
            return redirect()->route('selectiveProcesses.edit', $id)->with('error_message', 'Houve um erro ao alterar o processo seletivo.');
        }
    }
    public function destroy($id)
    {
        if (SelectiveProcess::destroy($id)){
            return redirect()->route('selectiveProcesses.index')->with('success_message', 'Processo Seletivo deletado com sucesso.');
        } else {
            return redirect()->route('selectiveProcesses.create')->with('error_message', 'Houve um erro ao deletar o processo seletivo.');
        }
    }
}

