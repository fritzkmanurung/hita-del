<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes untuk PPKHA
    Route::middleware(['ppkha'])->group(function () {
        Route::get('/ppkha/dashboard', function () {
            return view('ppkha.dashboard');
        })->name('ppkha.dashboard');
        
        // Tambahkan routes PPKHA lainnya di sini
    });

    // Routes untuk Mahasiswa
    Route::middleware(['mahasiswa'])->group(function () {
        Route::get('/mahasiswa/dashboard', function () {
            return view('mahasiswa.dashboard');
        })->name('mahasiswa.dashboard');
        
        // Tambahkan routes Mahasiswa lainnya di sini
    });

    // Routes untuk Dosen
    Route::middleware(['dosen'])->group(function () {
        Route::get('/dosen/dashboard', function () {
            return view('dosen.dashboard');
        })->name('dosen.dashboard');
        
        // Tambahkan routes Dosen lainnya di sini
    });

    // Routes untuk Lulusan
    Route::middleware(['lulusan'])->group(function () {
        Route::get('/lulusan/dashboard', function () {
            return view('lulusan.dashboard');
        })->name('lulusan.dashboard');
        
        // Tambahkan routes Lulusan lainnya di sini
    });
});

require __DIR__.'/auth.php';