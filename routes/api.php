<?php

use Illuminate\Http\Request;


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
Route::get('/students','StudentController@index')->middleware('auth');

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
| Profile API
|
*/

//Single Profile List
Route::get('/profiles','ProfileController@index')->middleware('auth');

//Update Profile
Route::put('/profile/{id}','ProfileController@update');



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



