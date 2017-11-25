<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialNeeds as SpecialNeeds;

class SpecialNeedsController extends Controller
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
        $profile = SpecialNeeds::all();
        return view('specialNeeds/index')->with('profiles', $profiles);
    }
}
