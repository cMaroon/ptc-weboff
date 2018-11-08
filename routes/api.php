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

/*
|
| User API
|
*/

//Update User
Route::put('/user','UserController@store');

/*
|
| Student API
|
*/

//Student List
Route::get('/students','StudentController@index');

//Single Student List
Route::get('/student/{id}','StudentController@show');

//Create New Student
Route::post('/student','StudentController@store');

//Update Student
Route::put('/student','StudentController@store');

//Delete Student
Route::delete('/student/{id}','StudentController@destroy');


/*
|
| Courses API
|
*/
//Course List
Route::get('/courses','CoursesController@index');

//Single Course List
Route::get('/course/{id}','CoursesController@show');

//Create New Course
Route::post('/course','CoursesController@store');

//Update Course
Route::put('/course','CoursesController@store');

//Delete Course
Route::delete('/course/{id}','CoursesController@destroy');

/*
|
| Programs API
|
*/
//Program List
Route::get('/programs','ProgramsController@index');

//Single Program List
Route::get('/program/{id}','ProgramsController@show');

//Create New Program
Route::post('/program','ProgramsController@store');

//Update Program
Route::put('/program','ProgramsController@store');

//Delete Program
Route::delete('/program/{id}','ProgramsController@destroy');