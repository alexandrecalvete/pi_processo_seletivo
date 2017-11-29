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
        return view('selectiveProcesses/index');
            $addresses = Addresses::all();
        return view('addresses/index')->with('addresses', $addresses);
    }

    public function create()
    {
        return view('profiles/create');    
    }

    public function store(Request $request)
    {

        $profile = new Profile;
        $profile->nome = $request->input('nome');

        if($profile->save()) {
          return redirect()->route('profiles.index')->with('success_message', 'Perfil cadastrado com sucesso.');
        } else {
          return redirect()->route('profiles.create')->with('error_message', 'Houve um erro ao cadastradar o perfil.');
        }
   }

    public function edit(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles/edit')->with('profile', $profile);
    }
 
    public function update(Request $request, $id)
    {
        $profile = ::findOrFail($id);
        $profile->nome = $request->input('nome');
        if($profile->save()) {
            return redirect()->route('profiles.index')->with('success_message', 'Perfil alterado com sucesso.');
        } else {
            return redirect()->route('profiles.edit', $id)->with('error_message', 'Houve um erro ao alterar o perfil.');
        }
    }
    public function destroy($id)
    {
        if (Profile::destroy($id))
            return redirect()->route('profiles.index')->with('success_message', 'Perfil deleto com sucesso.');
        } else {
            return redirect()->route('profiles.create')->with('error_message', 'Houve um erro ao deletar o perfil.');
        }
    }
}

