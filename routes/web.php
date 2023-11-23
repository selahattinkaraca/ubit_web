<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use \App\Http\Controllers\SponsorController;
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
            Route::post('/slider/delete/{slider}', [SliderController::class, 'destroy'])->name('delete');
            // Delete
            //Route::get('/slider/image/delete/{slider}', [SliderController::class, 'delete'])->name('delete');
            // Update
            Route::get('/slider/{slider}', [SliderController::class, 'edit'])->name('edit');
            Route::post('/slider/{slider}', [SliderController::class, 'update'])->name('update');
        });

        Route::name('contacts.')->group(function (){
            // List
            Route::get('/contacts', [ContactController::class, 'index'])->name('index');
            // Addx
            Route::get('/contact/create', [ContactController::class, 'create'])->name('create');
            Route::post('/contact/create', [ContactController::class, 'store'])->name('store');
            // Delete
            Route::post('/contact/delete/{contact}', [ContactController::class, 'destroy'])->name('delete');
            // Update
            Route::get('/contact/{contact}', [ContactController::class, 'edit'])->name('edit');
            Route::post('/contact/{contact}', [ContactController::class, 'update'])->name('update');
        });

        Route::name('sponsors.')->group(function () {
            // List
            Route::get('/sponsors', [SponsorController::class, 'index'])->name('index');
            // Add
            Route::get('/sponsor/create', [SponsorController::class, 'create'])->name('create');
            Route::post('/sponsor/create', [SponsorController::class, 'store'])->name('store');

            // Update
            Route::get('/sponsor/{sponsor}', [SponsorController::class, 'edit'])->name('edit');
            Route::post('/sponsor/{sponsor}', [SponsorController::class, 'update'])->name('update');

            // Delete
            Route::post('/sponsor/delete/{sponsor}', [SponsorController::class, 'destroy'])->name('delete');
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
