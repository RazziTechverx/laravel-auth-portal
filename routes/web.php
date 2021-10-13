<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () { return view('login'); })->name('login');
Route::post('register', [UserController::class, 'register'])->name('register');
Route::get('verify/{token}', [UserController::class, 'verify'])->name('verify');

Route::group(['middleware' => 'checkToken'], function () {
    Route::get('home', function () { return view('main.home'); })->name('home');
    Route::get('reset-email', function () { return view('main.reset-email'); })->name('reset-email');
    Route::post('reset-email', [UserController::class, 'resetEmail'])->name('post-reset-email');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});
