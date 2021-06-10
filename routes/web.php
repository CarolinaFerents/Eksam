<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BurgerController;


Route::get('/', [BurgerController::class, 'index']);


Route::middleware(['auth'])->group(function() {
    Route::get('/home', function() {
        return view('home');
    })->name('home');

    Route::get('/user/profile', function() {
        return view('profile');
    })->name('profile');
    Route::resource('burgers', BurgerController::class);
});
Route::get('/detail', function() {
    return view('detail');
})->name('detail');

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

/*Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/home', function() {
        return view('home');
    })->name('home');

    Route::get('/user/profile', function() {
        return view('profile');
    })->name('profile');

    Route::resource('burgers', BurgerController::class);
});*/

