<?php

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

Route::get('/', function () {
    return redirect('/login');
});

Route::any('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::any('/signup', [App\Http\Controllers\LoginController::class, 'signup'])->name('signup');
Route::any('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
