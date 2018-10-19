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
Route::get('/ptc-admin/adminDashboard/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/ptc-admin/adminDashboard/addStudent', 'DashboardController@addStudent')->name('addStudent');
Route::get('/ptc-admin/adminDashboard/managePosts', 'DashboardController@managePosts')->name('managePosts');
Route::get('/ptc-admin/adminDashboard/createNews', 'DashboardController@createNews')->name('createNews');
Route::get('/ptc-admin/adminDashboard/createAnnouncement', 'DashboardController@createAnnouncement')->name('createAnnouncement');
                                                    
/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/
Route::resource('posts','PostsController');
Route::resource('admission','AdmissionController');



