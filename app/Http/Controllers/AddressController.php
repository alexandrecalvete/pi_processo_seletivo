<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address as Address;

class AddressController extends Controller
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
        $addresses = Addresses::all();
        return view('addresses/index')->with('addresses', $addresses);
    }

    public function create()
    {
        return view('addresses/create');    
    }

    public function store(Request $request)
    {

        $address = new Address;
        $address->nome = $request->input('nome');

        if($address->save()) {
          return redirect()->route('addresses.index')->with('success_message', 'Endereço cadastrado com sucesso.');
        } else {
          return redirect()->route('addresses.create')->with('error_message', 'Houve um erro ao cadastradar o endereço.');
        }
   }

    public function edit(Request $request, $id)
    {
        $address = Address::findOrFail($id);
        return view('addresses/edit')->with('address', $address);
    }
 
    public function update(Request $request, $id)
    {
        $address = ::findOrFail($id);
        $address->nome = $request->input('nome');
        if($address->save()) {
            return redirect()->route('addresses.index')->with('success_message', 'Endereço alterado com sucesso.');
        } else {
            return redirect()->route('addresses.edit', $id)->with('error_message', 'Houve um erro ao alterar o endereço.');
        }
    }
    public function destroy($id)
    {
        if (Address::destroy($id))
            return redirect()->route('addresses.index')->with('success_message', 'Endereço deleto com sucesso.');
        } else {
            return redirect()->route('addresses.create')->with('error_message', 'Houve um erro ao deletar o endereço.');
        }
    }
}

