<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReceiptController;

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

// User Profile
Route::get('/profile', [Users::class, 'profile'])->name('profile');
// Invoices
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
// Receipts
Route::get('/receipts', [ReceiptController::class, 'index'])->name('receipts');
});
