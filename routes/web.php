<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SliderController;
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
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::middleware('auth')->group(function () {
        Route::name('sliders.')->group(function () {
            // List
            Route::get('/sliders', [SliderController::class, 'index'])->name('index');
            // Add
            Route::get('/slider/create', [SliderController::class, 'create'])->name('create');
            Route::post('/slider/create', [SliderController::class, 'store'])->name('store');
            // Delete
            Route::get('/slider/delete/{slider}', [SliderController::class, 'destroy'])->name('delete');
            // Delete
            Route::get('/slider/image/delete/{slider}', [SliderController::class, 'delete'])->name('delete');
            // Update
            Route::get('/slider/{slider}', [SliderController::class, 'edit'])->name('edit');
            Route::post('/slider/{slider}', [SliderController::class, 'update'])->name('update');
        });
    });



    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
