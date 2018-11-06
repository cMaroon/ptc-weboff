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
Route::get('online/admin/student-list','StudentController@index');

//Single Student List
Route::get('online/admin/student-list/{id}','StudentController@show');

//Create New Student
Route::post('online/admin/new-student','StudentController@store');

//Update Student
Route::put('online/admin/student-list','StudentController@store');

//Delete Student
Route::delete('online/admin/student-list/{id_num}','StudentController@destroy');