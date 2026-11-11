<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WholesaleController;
use Illuminate\Support\Facades\Route;

// Public Front-End Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [ProductController::class, 'index'])->name('menu');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/wholesale', [WholesaleController::class, 'index'])->name('wholesale');
Route::post('/wholesale/inquiry', [WholesaleController::class, 'storeInquiry'])->name('wholesale.inquiry');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/order', [OrderController::class, 'storeQuote'])->name('order.store');
Route::get('/order/confirmed/{quote_number}', [OrderController::class, 'confirmation'])->name('order.confirmation');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Portal Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/inquiries/{id}/status', [AdminController::class, 'updateInquiryStatus'])->name('inquiry.update');
    Route::delete('/inquiries/{id}', [AdminController::class, 'deleteInquiry'])->name('inquiry.delete');
    Route::post('/quotes/{id}/status', [AdminController::class, 'updateQuoteStatus'])->name('quote.update');
});
