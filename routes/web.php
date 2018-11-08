<?php

/*
|--------------------------------------------------------------------------
| Pages Routes
|--------------------------------------------------------------------------
*/
// Route::get('/', 'PagesController@landing')->name('landing');
Route::get('/', 'PagesController@home')->name('home');
Route::get('/collegeapplication', 'PagesController@collegeapplication')->name('collegeapplication');


Auth::routes();
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/online/', 'DashboardController@dashboard')->name('dashboard');
Route::get('/online/studentlist/','DashboardController@studentlist')->name('studentlist');
Route::get('/online/courses', 'DashboardController@manageCourses')->name('manageCourses');
Route::get('/online/programs', 'DashboardController@managePrograms')->name('managePrograms');

Route::get('/ptc-admin/adminDashboard/managePosts', 'DashboardController@managePosts')->name('managePosts');
Route::get('/ptc-admin/adminDashboard/createNews', 'DashboardController@createNews')->name('createNews');
Route::get('/ptc-admin/adminDashboard/createAnnouncement', 'DashboardController@createAnnouncement')->name('createAnnouncement');

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/
Route::get('/online/profile', 'DashboardController@studentprofile')->name('studentprofile');

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/
Route::resource('posts','PostsController');
Route::resource('admission','AdmissionController');



