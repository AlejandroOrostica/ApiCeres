<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\User;
use App\Project;
use App\Member;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::find($id);
        $projects=Project::all();
        return view('pages.projects', compact('user','projects'));

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('pages.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response  'projectName','projectCost','projectInit', 'projectEnd', 'projectDescription','projectSponsor','user_id'
     ec*/
    public function update($id)
    {
        $rules = array(
            'projectName'       => 'required',
            'projectEnd'      => 'required|date',
            'memberName'      => 'required'
        );
        
            $project = Project::find($id);
            $project->projectName = Input::get('projectName');
            $project->projectEnd = Input::get('projectEnd');
            $project->memberName = Input::get('memberName');
            $project->save();

            $notificacion = array(
            'message' => 'Se guardaron los cambios', 
            'btn btn-primary' => 'success'
        );

       return redirect()->back()->with($notificacion);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
