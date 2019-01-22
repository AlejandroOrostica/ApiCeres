<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB as DB1;
use Illuminate\Support\Facades\DB as DB2;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = File::all();
        return $file;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        
        $pages = $user->pages;
        $pagesStats = array();

        $investigationNumber = 0;
        $investigationPerYear = 0;
       
        $yearsCollection = array();
        $yearsAvg = 0;

        if($pages->count() > 0){
            foreach($pages as $page) {
                $investigations = $page->investigations;
                if ($investigations->count() > 0) {
                    foreach($investigations as $investigation){
                        array_push($yearsCollection, $investigation->investigationYear);

                    }
                    $pagesStats[$page->pageName] = $page->investigations->count();
                    $investigationNumber += $page->investigations->count();
                }
                
            }
            $yearsCollection = array_count_values($yearsCollection);
            foreach( $yearsCollection as $key => $value) {
                $yearsAvg += $value;
            }
            if (count($yearsCollection)>0) {
                $investigationPerYear = $yearsAvg / count(array_count_values($yearsCollection));
            }
        }

        $file = $user->file;

        if($file != null){
            if (count($pagesStats) == 0) {
                DB1::table('files')->where('id',$file->id)->update(
                    [
                        'investigationsNumber' => $investigationNumber,
                        'investigationsPerYear' => (int)$investigationPerYear,
                        'authorsPerInvestigation' => 1,
                        'mostRevelevantPage' => 'none',
                        'mostUnusedPage' =>  'none',
                        'user_id' => $id,
                    ]
                );
            }
            else{
                DB1::table('files')->where('id',$file->id)->update(
                    [
                        'investigationsNumber' => $investigationNumber,
                        'investigationsPerYear' => (int)$investigationPerYear,
                        'authorsPerInvestigation' => 1,
                        'mostRevelevantPage' => array_search(max($pagesStats), $pagesStats),
                        'mostUnusedPage' =>  array_search(min($pagesStats), $pagesStats),
                        'user_id' => $id,
                    ]
                );
            }
           

        }
        elseif($file == null){
            if(count($pagesStats) == 0){
                DB1::table('files')->insert(
                    [
                        'investigationsNumber' => $investigationNumber,
                        'investigationsPerYear' => (int)$investigationPerYear,
                        'authorsPerInvestigation' => 1,
                        'mostRevelevantPage' => 'none',
                        'mostUnusedPage' => 'none',
                        'user_id' => $id,
                    ]
                );
            }
            else{
                DB1::table('files')->insert(
                    [
                        'investigationsNumber' => $investigationNumber,
                        'investigationsPerYear' => (int)$investigationPerYear,
                        'authorsPerInvestigation' => 1,
                        'mostRevelevantPage' => array_search(max($pagesStats), $pagesStats),
                        'mostUnusedPage' =>  array_search(min($pagesStats), $pagesStats),
                        'user_id' => $id,
                    ]
                );

            }



            

        }

        return view('pages.mystatistics', compact('user', 'file', 'investigationNumber', 'investigationPerYear', 'pagesStats', 'yearsCollection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showGeneral()
    {

        $users = DB2::table('users')->get();
        
        $papersPerYear = array();
        $papersPerAcademic = array();
        $papersPerPage = array();

        foreach($users as $user2){
            $user = User::find($user2->id);
            $pages = $user->pages;
            if(!array_key_exists ($user->name,$papersPerAcademic)){
                $papersPerAcademic[$user->name] = 0;
            }
            if($pages->count() > 0){
                foreach($pages as $page) {
                    $investigations = $page->investigations;
                    if(!array_key_exists ($page->pageName, $papersPerPage)){
                        $papersPerPage[$page->pageName] = 0;
                    }
                    if ($investigations->count() > 0) {
                        $papersPerPage[$page->pageName] += $investigations->count();
                        $papersPerAcademic[$user->name] += $investigations->count();
                        foreach($investigations as $investigation){
                            array_push($papersPerYear, $investigation->investigationYear);
                            if(!array_key_exists ($investigation->investigationYear, $papersPerYear)){
                                $papersPerYear[$investigation->investigationYear] = 0;
                            }
                            array_push($papersPerYear, $investigation->investigationYear);
                        }
                    }
                    
                }
            }
        }
        $papersPerYear =  array_count_values($papersPerYear);

        return view('pages.statistics', compact('users', 'papersPerYear','papersPerAcademic','papersPerPage'));
    }
}
