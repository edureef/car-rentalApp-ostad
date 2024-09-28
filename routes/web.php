<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Frontend\CarController::class, 'index']);
Route::post('/', [\App\Http\Controllers\Frontend\CarController::class, 'searchFilter'])->name('filterCars');
Route::get('/about', [PageController::class, 'aboutPage']);
Route::get('/contact', [PageController::class, 'contactPage']);

Route::get('/dashbord', [DashboardController::class, 'index'])->name('admin.dashbord')->middleware('auth');

Route::middleware(['auth', 'customer'])->prefix('customer')->group(function () {
    Route::get('/cars/{car}', [\App\Http\Controllers\Frontend\CarController::class, 'show'])->name('frontend.cars.show');
    Route::post('/cars', [\App\Http\Controllers\Frontend\RentalController::class, 'setBook'])->name('frontend.cars.book');
    Route::get('/rentals/{id}', [\App\Http\Controllers\Frontend\RentalController::class, 'showHistory'])->name('frontend.rentals.history');
    Route::get('/currentBooking/{id}', [\App\Http\Controllers\Frontend\RentalController::class, 'showCurrentBooking'])->name('frontend.rentals.currentBooking');
    Route::post('/cancelBooking', [\App\Http\Controllers\Frontend\RentalController::class, 'cancelBooking'])->name('frontend.rentals.cancel');
});

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::resource('cars', CarController::class);
    Route::resource('rentals', RentalController::class);
});
