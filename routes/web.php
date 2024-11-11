<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\PhoneController;



Route::get('/phones', [PhoneController::class, 'index'])->name('phones.index');
Route::get('/phones/create', [PhoneController::class, 'create'])->name('phones.create');
Route::get('/phones/{phone}', [PhoneController::class, 'show'])->name('phones.show');
Route::get('/phones/{phone}/edit', [PhoneController::class, 'edit'])->name('phones.edit');
Route::put('/phones/{phone}', [PhoneController::class, 'update'])->name('phones.update');
Route::post('/phones', [PhoneController::class, 'store'])->name('phones.store');
Route::delete('/phones/{phone}', [PhoneController::class, 'destroy'])->name('phones.destroy');




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


// Route::resources('phones', PhoneController::class)->only(['index', 'create', 'store','edit','update', 'destory', 'show']);

require __DIR__.'/auth.php';
