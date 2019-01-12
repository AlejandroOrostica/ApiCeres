<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\User;
use App\Grade;
use App\Project;
use App\Page;
use App\Investigation;
use Illuminate\Support\Facades\Input;
use DB;
use App\Quotation;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data=request()->validate([
          'name'=>'required',
            'lastName'=>'required',
          'email'=>'required',
          'userType'=>'required',
        ]);
        User::create([
            'name'=>$data['name'],
            'lastName'=>$data['lastName'],
            'email'=>$data['email'],
            'userType'=>$data['userType'],
            //'userDescription'=>$data['userDescription'],
            //'userCharge'=>$data['userCharge']
        ]);

        return redirect()->route('pages.index')->with('notice', 'Se ha creado usuario.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $grades = DB::table('grades')->orderBy('gradeyear', 'desc')->get();
        $projects = DB::table('projects')->orderBy('projectInit', 'desc')->get();
        $investigations = DB::table('investigations')->orderBy('investigationYear', 'desc')->get();
        $pages =Page::all();
        return view('pages.user.show', compact('user', 'grades', 'projects', 'pages', 'investigations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $usuario = User::find($id);
           $usuario->name = Input::get('name');
           $usuario->lastName = Input::get('lastname');
           $usuario->email = Input::get('email');
           $usuario->save();
           return Redirect::to('user/'.$id)->with('notice', 'Se ha modificado correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return Redirect::to('user')->with('notice', 'Se ha modificado correctamente.');
        //return redirect()->route('pages.index');
    }
}
