<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::group(['middleware' => 'auth'], function () {
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
});
