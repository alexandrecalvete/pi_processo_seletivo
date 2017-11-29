<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course as Course;

class CourseController extends Controller
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
        return view('courses/index');
                $courses = Course::all();
        return view('courses/index')->with('course', $course);
    }

    public function create()
    {
        return view('courses/create');    
    }

    public function store(Request $request)
    {

        $course = new Course;
        $course->nome = $request->input('nome');

        if($course->save()) {
          return redirect()->route('courses.index')->with('success_message', 'Curso cadastrado com sucesso.');
        } else {
          return redirect()->route('courses.create')->with('error_message', 'Houve um erro ao cadastradar o curso.');
        }
   }

    public function edit(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        return view('courses/edit')->with('course', $course);
    }
 
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $courses->nome = $request->input('nome');
        if($course->save()) {
            return redirect()->route('courses.index')->with('success_message', 'Curso alterado com sucesso.');
        } else {
            return redirect()->route('courses.edit', $id)->with('error_message', 'Houve um erro ao alterar o curso.');
        }
    }
    public function destroy($id)
    {
        if (Course::destroy($id)){
            return redirect()->route('courses.index')->with('success_message', 'Curso deletado com sucesso.');
        } else {
            return redirect()->route('courses.create')->with('error_message', 'Houve um erro ao deletar o curso.');
        }
    }
}
    

