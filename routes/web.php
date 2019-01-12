<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index', compact('users'));
})->name('pages.index');

Auth::routes();

Route::get("getData", function()
{
 
 $users = DB::table("users")->where('userType', '=', 1)
                            ->orwhere('userType', '=', 2)->get();
 return Response::json(array(
 "users" => $users
 ));
 
});




//CRUD
Route::resource('user','UserController');
Route::resource('project','ProjectController');
Route::resource('grade','GradeController');
Route::resource('file', 'FileController');
Route::resource('investigation', 'InvestigationController');

Route::get('/statistics', function () {
    return view('pages.statistics');
})->name('pages.statistics');

//creacion de usuario
Route::get('pages.projects/{id}', 'ProjectController@show');


Route::get('/user/create','UserController@create');
Route::post('/user/create','UserController@store');
Route::post('/investigation/store/{id}','InvestigationController@store');
Route::get('/publicaciones/create/{id}','InvestigationController@create');





//edicion de usuario
Route::get('editar/{id}', 'InvestigationController@edit');
//eliminacion de usuario
Route::delete('user/{id}','UserController@destroy')->name('user.destroy');

Route::get('/home', 'HomeController@index')->name('pages.home');


Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');
