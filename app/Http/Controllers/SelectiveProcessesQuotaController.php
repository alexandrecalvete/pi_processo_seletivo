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
        $quotas = SelectiveProcessesQuota::all();
        return view('selectiveProcessesQuotas/index')->with('quotas', $quotas);
    }
}
