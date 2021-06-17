<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;

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

Route::view('/', 'welcome');

Route::view('/profile', 'profile');

Route::resource('/assignments', \App\Http\Controllers\AssignmentController::class);

Route::group(['middleware' => ['auth']], function () {
//    Route::get('/assignments/create', [AssignmentController::class], 'create');
//    Route::post('/assignments/', [AssignmentController::class], 'store');
//
//    Route::get('/assignments/{assignment}/edit', [AssignmentController::class], 'edit');
//    Route::put('/assignments/{assignment}', [AssignmentController::class], 'update');
//
//    Route::get('/assignments/{assignment}', [AssignmentController::class], 'destroy');
});

Route::view('/motivatie', 'motivatie');

Route::view('/beroepsbeeld', 'beroepsbeeld');

Route::get('error/{error}', function($error) {
    abort($error);
});
