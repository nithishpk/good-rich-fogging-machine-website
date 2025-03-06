<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PartsController;
use App\Http\Controllers\ChemicalController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products');

// Parts
Route::get('/parts', [PartsController::class, 'index'])->name('parts');
Route::prefix('parts')->group(function () {
    Route::get('/spraying', [PartsController::class, 'spraying'])->name('parts.spraying');
    Route::get('/maintenance', [PartsController::class, 'maintenance'])->name('parts.maintenance');
});

// Chemicals
Route::get('/chemicals', [ChemicalController::class, 'index'])->name('chemicals');
Route::prefix('chemicals')->group(function () {
    Route::get('/insecticides', [ChemicalController::class, 'insecticides'])->name('chemicals.insecticides');
    Route::get('/sanitizers', [ChemicalController::class, 'sanitizers'])->name('chemicals.sanitizers');
});

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Contact & Enquiry
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::middleware('recaptcha')->group(function () {
    Route::post('/enquiry', [ContactController::class, 'submitEnquiry'])->name('enquiry.submit');
});
