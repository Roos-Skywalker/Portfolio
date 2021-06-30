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

Route::resource('/assignments', AssignmentController::class)->only([
    'index'
]);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/assignments', AssignmentController::class)->except([
        'index'
    ]);
});

Route::view('/motivatie', 'motivatie');

Route::view('/beroepsbeeld', 'beroepsbeeld');

Route::get('error/{error}', function($error) {
    abort($error);
});

Route::delete('/user', function(Request $request) {
    $user = Auth::user();
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    $user->delete();
    return redirect('/');
})->name('user.destroy');
