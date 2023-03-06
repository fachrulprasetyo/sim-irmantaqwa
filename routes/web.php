<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SKController;
use App\Http\Controllers\SMController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //Master Anggota
    Route::get('/anggota', [AnggotaController::class, 'index']);
    Route::post('/anggota/create', [AnggotaController::class, 'create']);
    Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit']);
    Route::post('/anggota/{id}/update', [AnggotaController::class, 'update']);
    Route::get('/anggota/{id}/delete', [AnggotaController::class, 'delete']);
    Route::get('/anggota/{id}/profile', [AnggotaController::class, 'profile']);
    //laporan
    Route::get('/laporan/cetak_anggota', [AnggotaController::class, 'cetak_anggota']);

    //Master Surat Masuk
    Route::get('/surat_masuk', [SMController::class, 'index']);
    Route::post('/surat_masuk/create', [SMController::class, 'create']);
    Route::get('/surat_masuk/{id}/edit', [SMController::class, 'edit']);
    Route::post('/surat_masuk/{id}/update', [SMController::class, 'update']);
    Route::get('/surat_masuk/{id}/delete', [SMController::class, 'delete']);
    //laporan
    Route::get('/laporan/surat_masuk_form', [SMController::class, 'surat_masuk_form']);
    Route::get('/laporan/surat_masuk/cetak_data_pertanggal/{tgl_awal}/{tgl_akhir}', [SMController::class, 'cetak_data_pertanggal']);

    //Master Surat Keluar
    Route::get('/surat_keluar', [SKController::class, 'index']);
    Route::post('/surat_keluar/create', [SKController::class, 'create']);
    Route::get('/surat_keluar/{id}/edit', [SKController::class, 'edit']);
    Route::post('/surat_keluar/{id}/update', [SKController::class, 'update']);
    Route::get('/surat_keluar/{id}/delete', [SKController::class, 'delete']);
    //laporan
    Route::get('/laporan/surat_keluar_form', [SKController::class, 'surat_keluar_form']);
    Route::get('/laporan/surat_keluar/cetak_data_pertanggal/{tgl_awal}/{tgl_akhir}', [SKController::class, 'cetak_data_pertanggal']);

    //INFO
    Route::get('/info', [InfoController::class, 'info']);
});
