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

Route::get('/', [\App\Http\Controllers\PublicController::class, 'pageLanding'])->name('landing');

Route::get('/form', [\App\Http\Controllers\PublicController::class, 'pageForm'])->name('form');
Route::post('/form/send', [\App\Http\Controllers\PublicController::class, 'sendForm'])->name('form.send');

Route::get('du30', '\App\Http\Controllers\Auth\LoginController@showLoginForm');

Route::get('login', fn() => redirect()->route('landing'));

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/home/table', [App\Http\Controllers\HomeController::class, 'table'])->name('home.table');
    Route::get('/home/preview/{id}', [App\Http\Controllers\HomeController::class, 'preview'])->name('home.preview');

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users')->middleware('can:admin');
    Route::post('/users/table', [App\Http\Controllers\UserController::class, 'table'])->name('users.table');
    Route::post('/users/register', [App\Http\Controllers\UserController::class, 'register'])->name('users.register');
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');

    Route::get('/users/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::post('/users/update', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('/users/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});
