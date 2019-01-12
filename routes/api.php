<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('investigation:api')->get('/investigation', function (Request $request) {
    return $request->investigation();
});

Route::middleware('grade:api')->get('/grade', function (Request $request) {
    return $request->grade();
});

Route::middleware('project:api')->get('/project', function (Request $request) {
    return $request->project();
});

