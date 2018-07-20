<?php

/*
|--------------------------------------------------------------------------
| Pages Routes
|--------------------------------------------------------------------------
*/
// Route::get('/', 'PagesController@landing')->name('landing');
Route::get('/', 'PagesController@home')->name('home');

Auth::routes();
Route::get('/ptc-admin/adminDashboard/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/ptc-admin/adminDashboard/addStudent', 'DashboardController@addStudent')->name('addStudent');


/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
Route::resource('posts','PostsController');




