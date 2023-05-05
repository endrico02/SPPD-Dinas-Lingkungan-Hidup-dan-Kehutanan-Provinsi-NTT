<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
    return view('login');
});
// ROUTE::GET('/', [LoginController::class, 'ceklogin']);
Route::POST('proses_login', [LoginController::class, 'proses_login']);
Route::GET('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::GET('data_pegawai', [HomeController::class, 'data_pegawai'])->name('data_pegawai')->middleware('auth');
Route::GET('tambah_data_pegawai', [HomeController::class, 'tambah_data_pegawai'])->name('tambah_data_pegawai')->middleware('auth');
Route::GET('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
