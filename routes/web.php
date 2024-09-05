<?php

use App\Http\Controllers\CleaningController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts1.welcome');
// });


Route::get('/', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('profile', ProfileController::class)->names('profile');

    Route::resource('cleaning', CleaningController::class)->names('cleaning');

    Route::resource('laundry', LaundryController::class)->names('laundry');

    Route::resource('pest', PestController::class)->names('pest');

    Route::resource('order', OrderController::class)->names('order');

});

require __DIR__ . '/auth.php';
