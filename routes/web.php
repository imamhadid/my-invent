<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::delete( '/home/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('delete');
Route::post('/home/{id}', [ App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
