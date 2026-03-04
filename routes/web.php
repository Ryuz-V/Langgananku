<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProfileController;

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Produk dan kategori
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Transaksi
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
Route::post('/transaction/process', [TransactionController::class, 'process'])->name('transaction.process');
Route::get('/transaction/history', [TransactionController::class, 'history'])->name('transaction.history');

// Profil pengguna
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// Halaman bantuan
Route::view('/help', 'help')->name('help');
Route::view('/about', 'about')->name('about');

// Halaman admin (dibuat sederhana)
Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/products', 'admin.products')->name('admin.products');
    Route::view('/transactions', 'admin.transactions')->name('admin.transactions');
});
