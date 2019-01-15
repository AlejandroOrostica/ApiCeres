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
//use App\Http\Controllers\Auth;
class InvestigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigations = Investigation::all();
        return $investigations;
    }

    public function user_page_investigation($user_id, $pageName)
    {
        $pages = Page::where('user_id', $user_id)->where('pageName', $pageName)->first();


        return $pages->investigations;
    }

    public function user_investigations($user_id)
    {
        $investigations = Investigation::where('user_id', $user_id)->get();
        return $investigations;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   

        $users = User::find($id);
        return view('pages.investigation.create', compact('user'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $investigation = Investigation::find($id);
        return view('pages.publicaciones.editar')->with('investigation', $investigation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $rules = array(
            'investigationName'       => 'required',
            'investigationYear'      => 'required',
            'investigationAuthors'      => 'required'
        );
        
            $investigation = Investigation::find($id);
            $investigation->investigationName = Input::get('investigationName');
            $investigation->investigationYear = Input::get('investigationYear');
            $investigation->investigationAuthors = Input::get('investigationAuthors');
            $investigation->save();

            $notificacion = array(
            'message' => 'Se guardaron los cambios', 
            'btn btn-primary' => 'success'
        );

       return redirect()->back()->with($notificacion);
        
        

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request  $request)
    {
        
        $user_id = \Auth::user()->id;

        //$paper = DB::table('papers')->where('pageName', 'Scopus')->whereIn('user_id', '$user->id')->get();
        $page = Page::where('user_id', $user_id)->where('pageName', 'Otros')->get()->first();
        $page_id = $page->id;
        $data=request()->validate([
          'investigationName'=>'required',
            'investigationYear'=>'required',
          'investigationAuthors'=>'required',
        ]);

        
        $investigation = Investigation::create($request->all());
        $investigation->page_id = $page_id;
        $investigation->save();

        return redirect()->route('pages.index')->with('notice', 'Se ha creado usuario.');
    }

    

    public function destroy($id)
    {
        
    }
}