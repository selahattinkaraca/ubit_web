<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("index");
/*

/*-----------Admin----------*/
Route::prefix('/ubitcms')->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name("admin");
  /*  Route::get('/login', function () {
        return view('admin.auth.login');
    })->name("index");
*/
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);






    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
