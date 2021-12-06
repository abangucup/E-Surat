<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'store']);
});
Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [LogoutController::class, 'store'])->name('logout');
    // Is Admin
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
    });
    // Is Dosen
    Route::group(['middleware' => 'role:dosen', 'prefix' => 'dosen'], function () {
        Route::get('/', [DosenController::class, 'index'])->name('dosen');
    });
    // Is Mahasiswa
    Route::group(['middleware' => 'role:mahasiswa', 'prefix' => 'mahasiswa'], function () {
        Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa');
    });
    // Is Surat
    Route::get('/suratmasuk', [SuratController::class, 'suratmasuk'])->name('suratmasuk');
    Route::get('/suratkeluar', [SuratController::class, 'suratkeluar'])->name('suratkeluar');
    Route::get('/surattugas', [SuratController::class, 'surattugas'])->name('surattugas');
    Route::get('/suratkegiatan', [SuratController::class, 'suratkegiatan'])->name('suratkegiatan');
});
