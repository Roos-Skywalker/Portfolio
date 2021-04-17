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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beroepsbeeld', function () {
    return view('beroepsbeeld');
});
Route::get('/construction', function () {
    return view('construction');
});

Route::get('/motivatie', function () {
    return view('motivatie');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/blog', 'PostController@index');
Route::get('/blog/create', 'PostController@create');
Route::post('/blog', 'PostController@store');
Route::get('/blog/{id}', 'PostController@show');
Route::get('/blog/{id}/edit', 'PostController@edit');
Route::put('/blog/{id}', 'PostController@update');

Route::resource('/dashboard', 'AssignmentController');
Route::put('/dashboard/{id}', 'PostController@update');
Route::post('/dashboard', 'PostController@store');
Route::delete('/dashboard/{id}', 'PostController@destroy');

Route::get('error/{error}', function($error) {
    abort($error);
});
