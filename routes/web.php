<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\checkStatus;
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


Route::middleware(['auth'])->group(function(){
    Route::view('/not-active', 'auth.not_active')->name('not_active');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->group(function() {
        
        Route::prefix('user')->group(function() {
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::get('/{id}/set-status', [UserController::class, 'setStatus'])->name('user.status');
        });

        Route::prefix('ticket')->group(function() {
        });
    });

    Route::prefix('ticket')->group(function(){
        Route::get('/', [TicketController::class, 'index'])->name('ticket.index');
        Route::get('/create', [TicketController::class, 'create'])->name('ticket.create');
    });
});
