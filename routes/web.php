<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::get('/', [App\Http\Controllers\Beranda::class, 'index']) -> name('beranda');

// Grub khusus admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/login', [LoginController::class, 'ShowLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::middleware(['auth', 'is_admin'])->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // Untuk tambahkan route lain untuk admin disini
    });
});

Route::get('/datadiri', [App\Http\Controllers\DataDiri::class, 'index']) -> name('datadiri');
Route::resource('/aktivitas', App\Http\Controllers\AktivitasController::class) -> names([
    'index' => 'aktivitas',
    'create' => 'aktivitas.create',
    'store' => 'aktivitas.store',
    'edit' => 'aktivitas.edit',
    'update' => 'aktivitas.update',
    'destroy' => 'aktivitas.destroy'
]);
Route::get('/kontak', [App\Http\Controllers\Kontak::class, 'index']) -> name('kontak');
Route::post('/kontak/kirim', [App\Http\Controllers\Kontak::class, 'kirim']) -> name('kontak.kirim');
