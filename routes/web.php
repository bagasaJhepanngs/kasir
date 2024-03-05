<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/barang', function () {
    return view('dashboard.barang.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard.index');
    });
});
Route::get('/barang', function () {
    return view('dashboard.barang.index');
});


Route::resource('/user', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
