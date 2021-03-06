<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile as Profile;

class ProfileController extends Controller
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
        
        $profiles = Profile::all();
        return view('profiles/index')->with('profiles', $profiles);
    }

    public function create()
    {
        return view('profiles/create');    
    }

    public function store(Request $request)
    {

        $profile = new Profile;
        $profile->nome = $request->input('nome');
        $profile->data_nascimento = $request->input('data_nascimento');
        $profile->rg = $request->input('rg');
        $profile->cpf = $request->input('cpf');
        $profile->sexo = $request->input('sexo');
        $profile->nomePai = $request->input('nomePai');
        $profile->nomeMae = $request->input('nomeMae');
        $profile->passaporte = $request->input('passaporte');
        $profile->telefone = $request->input('telefone');
        $profile->celular = $request->input('celular');
        $profile->naturalidade = $request->input('naturalidade');
        $profile->escolaridade = $request->input('escolaridade');
        $profile->emissor_rg = $request->input('emissor_rg');


        if($profile->save()) {
          return redirect()->route('profile.index')->with('success_message', 'Perfil cadastrado com sucesso.');
        } else {
          return redirect()->route('profile.create')->with('error_message', 'Houve um erro ao cadastradar o perfil.');
        }
   }

    public function edit(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles/edit')->with('profile', $profile);
    }
 
    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $profile->nome = $request->input('nome');
        if($profile->save()) {
            return redirect()->route('profiles.index')->with('success_message', 'Perfil alterado com sucesso.');
        } else {
            return redirect()->route('profiles.edit', $id)->with('error_message', 'Houve um erro ao alterar o perfil.');
        }
    }
    public function destroy($id)
    {
        if (Profile::destroy($id)) {
            return redirect()->route('profiles.index')->with('success_message', 'Perfil deleto com sucesso.');
        } else {
            return redirect()->route('profiles.create')->with('error_message', 'Houve um erro ao deletar o perfil.');
        }
    }
}
