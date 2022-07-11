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

    Route::get('/', [\App\Http\Controllers\AdsController::class, 'index'])->name('main');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/edit', [\App\Http\Controllers\AdsController::class, 'create'])->name('ads.edit')->middleware('auth');;
    Route::get('/{id}', [\App\Http\Controllers\AdsController::class, 'show'])->name('ads.show');
    Route::delete('/delete/{id}', [\App\Http\Controllers\AdsController::class, 'destroy'])->name('ads.destroy');
    Route::post('/', [\App\Http\Controllers\AdsController::class, 'store'])->name('ads.store');
    Route::get('/edit/{id}', [\App\Http\Controllers\AdsController::class, 'edit'])->middleware('auth');
    Route::put('/update/{id}', [\App\Http\Controllers\AdsController::class, 'update'])->name('ads.update')->middleware('auth');

