<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReceiptController;

// Welcome Route (home page)
Route::get('/', function () {
    return view('welcome');
});

// // User Profile Route
// Route::get('/profile', [Users::class, 'profile'])->name('profile');

// // Invoices Route
// Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');

// // Receipts Route
// Route::get('/receipts', [ReceiptController::class, 'index'])->name('receipts');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
