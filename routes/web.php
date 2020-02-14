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
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/motivatie', function () {
    return view('motivatie');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/blog', 'PostController@index');

Route::get('/blog/{id}', 'PostController@show');
