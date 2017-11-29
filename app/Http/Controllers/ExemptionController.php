<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exemption as Exemption;

class ExemptionController extends Controller
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
        $exemptions = Exemptions::all();
        return view('exemptions/index')->with('exemptions', $exemptions);
    }

    public function create()
    {
        return view('exemptions/create');    
    }

    public function store(Request $request)
    {

        $exemption = new Exemption;
        $exemption->nome = $request->input('nome');

        if($exemption->save()) {
          return redirect()->route('exemptions.index')->with('success_message', 'Isenção cadastrado com sucesso.');
        } else {
          return redirect()->route('exemptions.create')->with('error_message', 'Houve um erro ao cadastradar a isenção.');
        }
   }

    public function edit(Request $request, $id)
    {
        $exemption = Exemption::findOrFail($id);
        return view('exemptions/edit')->with('exemption', $exemption);
    }
 
    public function update(Request $request, $id)
    {
        $exemption = Exemption::findOrFail($id);
        $exemption->nome = $request->input('nome');
        if($exemption->save()) {
            return redirect()->route('exemptions.index')->with('success_message', 'Isenção alterado com sucesso.');
        } else {
            return redirect()->route('exemptions.edit', $id)->with('error_message', 'Houve um erro ao alterar a isenção.');
        }
    }
    public function destroy($id)
    {
        if (Exemption::destroy($id)) {
            return redirect()->route('exemptions.index')->with('success_message', 'Isenção deletado com sucesso.');
        } else {
            return redirect()->route('exemptions.create')->with('error_message', 'Houve um erro ao deletar a isenção.');
        }
    }
}

