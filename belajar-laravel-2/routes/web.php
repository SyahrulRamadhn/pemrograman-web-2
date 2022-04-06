<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController2;

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

Route::get('/halo', function () {
    return 'Selamat Datang di dunia laravel';
});

Route::get('/coba', function () {
    return view('coba');
});


Route::get('/input', [MahasiswaController::class, 'formInput']);//Route untuk form input data mahasiswa

Route::get('/lihat', [MahasiswaController::class, 'tabelData']);//Route untuk melihat tabel data mahasiswa
