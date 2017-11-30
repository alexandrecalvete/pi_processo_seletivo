<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quota as Quota;

class QuotaController extends Controller
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
        $quotas = Quotas::all();
        return view('quotas/index')->with('quotas', $quotas);
    }

    public function create()
    {
        return view('quotas/create');    
    }

    public function store(Request $request)
    {

        $quota = new Quota;
        $quota->nome = $request->input('nome');

        if($quota->save()) {
          return redirect()->route('quotas.index')->with('success_message', 'Cota cadastrada com sucesso.');
        } else {
          return redirect()->route('quotas.create')->with('error_message', 'Houve um erro ao cadastradar a cota.');
        }
   }

    public function edit(Request $request, $id)
    {
        $quota = Quota::findOrFail($id);
        return view('quotas/edit')->with('quota', $quota);
    }
 
    public function update(Request $request, $id)
    {
        $quota = Quota::findOrFail($id);
        $quota->nome = $request->input('nome');
        if($quota->save()) {
            return redirect()->route('quotas.index')->with('success_message', 'Cota alterada com sucesso.');
        } else {
            return redirect()->route('quotas.edit', $id)->with('error_message', 'Houve um erro ao alterar a cota.');
        }
    }
    public function destroy($id)
    {
        if (Quota::destroy($id)){
            return redirect()->route('quotas.index')->with('success_message', 'Cota deletada com sucesso.');
        } else {
            return redirect()->route('quotas.create')->with('error_message', 'Houve um erro ao deletar a cota.');
        }
    }
}

