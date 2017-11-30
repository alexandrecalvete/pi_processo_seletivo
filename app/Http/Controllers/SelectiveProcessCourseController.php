<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectiveProcessCourse as SelectiveProcessCourse;

class SelectiveProcessCourseController extends Controller
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
        $courses = SelectiveProcessesCourse::all();
        return view('selectiveProcessesCourses/index')->with('courses', $courses);
    }

    public function create()
    {
        return view('profiles/create');    
    }

    public function store(Request $request)
    {

        $courses = new Courses;
        $courses->nome = $request->input('nome');

        if($courses->save()) {
          return redirect()->route('selectiveProcessesCourses.index')->with('success_message', 'Processo seletivo cursos cadastrado com sucesso.');
        } else {
          return redirect()->route('selectiveProcessesCourses.create')->with('error_message', 'Houve um erro ao cadastradar o Processo seletivo cursos.');
        }
   }

    public function edit(Request $request, $id)
    {
        $courses = Courses::findOrFail($id);
        return view('selectiveProcessesCourses/edit')->with('profile', $profile);
    }
 
    public function update(Request $request, $id)
    {
        $courses = Courses::findOrFail($id);
        $courses->nome = $request->input('nome');
        if($courses->save()) {
            return redirect()->route('selectiveProcessesCourses.index')->with('success_message', 'Processo seletivo cursos alterado com sucesso.');
        } else {
            return redirect()->route('selectiveProcessesCourses.edit', $id)->with('error_message', 'Houve um erro ao alterar o Processo seletivo cursos.');
        }
    }
    public function destroy($id)
    {
        if (Courses::destroy($id)){
            return redirect()->route('selectiveProcessesCourses.index')->with('success_message', 'Processo seletivo cursos deletado com sucesso.');
        } else {
            return redirect()->route('selectiveProcessesCourses.create')->with('error_message', 'Houve um erro ao deletar o Processo seletivo cursos.');
        }
    }
}


