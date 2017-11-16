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
        return view('exemptions/index');
    }
}
