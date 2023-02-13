<?php

use App\Http\Controllers\TestController;
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

Route::controller(TestController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/buatPemilihan', 'buatPemilihan');
    Route::get('/daftarPemilihan', 'daftarPemilihan');
    Route::get('/kandidatPemilihan', 'kandidatPemilihan');
    Route::get('/daftarKandidat', 'daftarKandidat');
    Route::get('/tambahKandidat', 'tambahKandidat');
    Route::get('/pemilihPemilihan', 'pemilihPemilihan');
    Route::get('/daftarPemilih', 'daftarPemilih');
    Route::get('/tambahPemilih', 'tambahPemilih');
    Route::get('/detailPemilihan', 'detailPemilihan');
    Route::get('/login', 'login');
    Route::get('/voting', 'voting');
});
