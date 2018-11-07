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

//Student List
Route::get('students','StudentController@index');

//Single Student List
Route::get('student/{id}','StudentController@show');

//Create New Student
Route::post('student','StudentController@store');

//Update Student
Route::put('student/{id}','StudentController@update');

//Delete Student
Route::delete('student/{id}','StudentController@destroy');