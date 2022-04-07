<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IndexController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/register', '\Laravel\Fortify\Http\Controllers\RegisteredUserController@create')->name('register');
    //Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('maintenance.index');

    //Route::get('/register', [IndexController::class, 'register'])->name('register');
    //Route::post('/register', [IndexController::class, 'registerStore'])->name('register.store');
});


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/me', [IndexController::class, 'me'])->name('index.me');
    Route::get('/logout', 'Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy')
        ->name('auth.logout');
});
