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
Route::get('/ptc-admin/adminDashboard/newsPosts', 'DashboardController@newsPosts')->name('newsPosts');
Route::get('/ptc-admin/adminDashboard/announcementPosts', 'DashboardController@announcementPosts')->name('announcementPosts');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
Route::resource('posts','PostsController');




