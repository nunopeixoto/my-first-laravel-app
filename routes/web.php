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

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');

// Route::get('/hello', function () {
//     return '<h1>Hello world</h1>';
// });


// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/users/{id}', function ($id) {
//     return 'This is '.$id;
// });
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
