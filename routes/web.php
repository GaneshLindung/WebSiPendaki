<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;



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

Auth::routes();
Route::get('/', function () {
    return view('SiPendaki');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/test', function () {
    return view('master');
});


Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', function () {
        return view('register');
    });

    Route::get('/login', function () {
        return view('login');
    });
});

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirect'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'callbackGoogle'])->name('google.callback');
