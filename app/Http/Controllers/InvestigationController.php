<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\User;
use App\Grade;
use App\Project;
use App\Page;
use App\Investigation;
//use Illuminate\Support\Facades\Input;
use DB;
//use App\Quotation;
use Validator;
//use App\Http\Controllers\Auth;
class InvestigationController extends Controller
{
    public function rules(){
        return[
        'destino' =>  'required|string',
        'nombre_actividad' => 'required|string',
        'precio' => 'required|numeric',
        'cantidad_adulto' => 'required|numeric',
        'cantidad_ninos' => 'required|numeric',
        'fecha_ida' => 'required|date',
        'fecha_vuelta' => 'required|date',
        ];
    }

    public function rules2(){
        return[
        'destino' =>  'nullable|string',
        'nombre_actividad' => 'nullable|string',
        'precio' => 'nullable|numeric',
        'cantidad_adulto' => 'nullable|numeric',
        'cantidad_ninos' => 'nullable|numeric',
        'fecha_ida' => 'nullable|date',
        'fecha_vuelta' => 'nullable|date',
        ];
    }





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

  /*  public function user_investigations($user_id)
    {
        $ids_pages = Page::where('user_id', $user_id)->get('id'); 

        $investigations = Investigation::where('page_id', $ids_pages)->get(); 
        return $investigations;
    } defeat  */ 

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
        $investigation = Investigation::find($id);
        return $investigation;
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
     * @param  \App\Investigation $investigation
     * @return \Illuminate\Http\Response
     */
    public function update($request ,$id)
    {
        $validador = Validator::make($request->all(),$this->rules2());
        if($validador->fails()){
            return $validador->messages();
        }
        $investigation = Investigation::where('id', $id)->first();
        $investigation->update($request->all());
        return $investigation;
        
        

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
    public function guardar(Request  $request)
    {
        


        //$paper = DB::table('papers')->where('pageName', 'Scopus')->whereIn('user_id', '$user->id')->get();
     /*   $page = Page::where('user_id', $user_id)->where('pageName', 'Otros')->get()->first();
        $page_id = $page->id;
        $data=request()->validate([
          'investigationName'=>'required',
            'investigationYear'=>'required',
          'investigationAuthors'=>'required',
        ]);

        
        $investigation = Investigation::create($request->all());
        $investigation->page_id = $page_id;
        $investigation->save();

        return redirect()->route('pages.index')->with('notice', 'Se ha creado usuario.');*/

        $validador = Validator::make($request->all(),$this->rules());
        if($validador->fails()){
            return $validador->messages();
        } 

        $investigation = Investigation::create($request->all());
        $investigation = save();
        return $investigation;

    }

    

    public function destroy($id)
    {
        
    }
}