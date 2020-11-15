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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/home/table', [App\Http\Controllers\HomeController::class, 'table'])->name('home.table');
});
