<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FeatureController;
use Illuminate\Support\Facades\Route;


Route::resource('reviews', ReviewController::class);
Route::post('phones/{phone}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::delete('phones/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

Route::get('/phones', [PhoneController::class, 'index'])->name('phones.index');
Route::get('/phones/create', [PhoneController::class, 'create'])->name('phones.create');
Route::get('/phones/{phone}', [PhoneController::class, 'show'])->name('phones.show');
Route::get('/phones/{phone}/edit', [PhoneController::class, 'edit'])->name('phones.edit');
Route::put('/phones/{phone}', [PhoneController::class, 'update'])->name('phones.update');
Route::post('/phones', [PhoneController::class, 'store'])->name('phones.store');
Route::delete('/phones/{phone}', [PhoneController::class, 'destroy'])->name('phones.destroy');

Route::get('/features', [FeatureController::class, 'index'])->name('features.index');
Route::get('/features/create', [FeatureController::class, 'create'])->name('features.create');
Route::get('/features/{feature}', [FeatureController::class, 'show'])->name('features.show');
Route::get('/features/{feature}/edit', [FeatureController::class, 'edit'])->name('features.edit');
Route::put('/features/{feature}', [FeatureController::class, 'update'])->name('features.update');
Route::post('/features', [FeatureController::class, 'store'])->name('features.store');
Route::delete('/features/{feature}', [FeatureController::class, 'destroy'])->name('features.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::put('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('features', FeatureController::class)->middleware('auth');

require __DIR__.'/auth.php';
