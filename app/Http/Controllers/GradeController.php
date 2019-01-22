<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Función Inicial que redirige a la vista index de grades
        //Retorna una lista con todos los grades existentes
        $grade = Grade::all();
        return $grade;
    }

    public function user_grades($user_id)
    {
        $grades = Grade::where('user_id', $user_id)->get();
        return $grades;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna a la vista para crear
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$rules = array(
            'gradeName'       => 'required',
            'gradeyear'      => 'required',
            'gradeInstitution' => 'required'
        );
        
            $grade = new Grade;
            $grade->gradeName = Input::get('gradeName');
            $grade->gradeyear = Input::get('año');
            $grade->gradeInstitution= Input::get('gradeInstitution');
            $grade->save();

            // redirect
            //Session::flash('message', 'Successfully created nerd!');
           // return redirect()->back()->with($notificacion);     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grade = Grade::find($id);
        return $grade;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade = Grade::find($id);
        return view('pages.grade.edit')->with('grade', $grade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
      public function update($id)
    {
        $rules = array(
            'gradeName'       => 'required',
            'gradeInstitution'      => 'required',
            'gradeyear' => 'required|number'
        );
       
            // store
            $grade = Grade::find($id);
            $grade->gradeName  = Input::get('gradeName');
            $grade->gradeInstitution= Input::get('gradeInstitution');
            $grade->gradeyear = Input::get('gradeyear');
            $grade->save();

             $notificacion = array(
            'message' => 'Se guardaron los cambios', 
            'btn btn-primary' => 'success'
        );

       return redirect()->back()->with($notificacion);
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        
        //Si no funciona con grade find, probar con solo grade
        Grade::find($grade)->delete();
        return redirect()->route('grades.index')->with('success','Grade deleted');
    }
}
