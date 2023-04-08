<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TabelController;


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
});
Route::get('form', function () {
    return view('form');
});
Route::get('table', function () {
    return view('table');
});

// Route::get('table', function () {
//     return view('table');
// });
Route::get('/table', [TabelController::class, 'index'])->name('data.distribusi');
Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/dashboard',[LoginController::class,'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/penjualan',[TabelController::class,'table'])->name('penjualan.simpan');
Route::get('/penjualan/create',[TabelController::class,'create'])->name('penjualan.create');