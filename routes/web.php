<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::group(['prefix' => '/'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::post('/submit-rsvp', [HomeController::class, 'index'])->name('submit-rsvp');
});

Route::group(['prefix' => '/admin'], function() {
    Route::get('/index', [AdminController::class, 'index'])->name('index-admin');
});

