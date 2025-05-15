<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
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

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/chefs', [HomeController::class, 'chefs'])->name('chefs');

// Reservation routes
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservation/confirmation', [ReservationController::class, 'confirmation'])->name('reservation.confirmation');

// Review routes
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store')->middleware('auth');

// Auth routes
Auth::routes();

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // Restaurant management
    Route::resource('restaurants', RestaurantController::class);
    
    // Article management
    Route::resource('articles', ArticleController::class);
    
    // Reservation management
    Route::get('/reservations', [ReservationController::class, 'adminIndex'])->name('reservations.index');
    Route::get('/reservations/{reservation}', [ReservationController::class, 'adminShow'])->name('reservations.show');
    Route::put('/reservations/{reservation}', [ReservationController::class, 'adminUpdate'])->name('reservations.update');
    
    // Review management
    Route::get('/reviews', [ReviewController::class, 'adminIndex'])->name('reviews.index');
    Route::get('/reviews/{review}', [ReviewController::class, 'adminShow'])->name('reviews.show');
    Route::delete('/reviews/{review}', [ReviewController::class, 'adminDestroy'])->name('reviews.destroy');
});
