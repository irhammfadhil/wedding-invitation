<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    Route::get('/{name}', [HomeController::class, 'get_invitation_by_name'])->name('invitation-uuid');
    Route::get('/{name}/open', [HomeController::class, 'open_invitation'])->name('invitation-uuid-open');
    Route::post('/user/submit-rsvp', [HomeController::class, 'saveRsvps'])->name('submit-rsvp');
    Route::get('/user/get-rsvp', [HomeController::class, 'getAllRsvps'])->name('get-rsvp');
});

Route::group(['prefix' => '/admin'], function() {
    Route::get('/index', [AdminController::class, 'index'])->name('index-admin')->middleware('auth');
    Route::prefix('invitation')->middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'getAllGuests'])->name('index-invitation');
        Route::post('/new', [AdminController::class, 'submitInvitation'])->name('submit-new-invitation');
        Route::get('/{id}', [AdminController::class, 'viewInvitation'])->name('view-invitation');
        Route::put('/edit', [AdminController::class, 'submitEditInvitation'])->name('submit-edit-invitation');
        Route::delete('/delete/{id}', [AdminController::class, 'deleteInvitation'])->name('delete-invitation');
        Route::get('/mark-as-sent/{id}', [AdminController::class, 'markInvitaitonAsSent'])->name('mark-invitation-as-sent');
    });
    Route::prefix('rsvp')->middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'getAllRsvps'])->name('index-rsvp');
    });
    Route::get('/login', [UserController::class, 'getLogin'])->name('login');
    Route::post('/login', [UserController::class, 'doLogin'])->name('submit-login');
    Route::post('/register', [UserController::class, 'register'])->name('submit-register');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

