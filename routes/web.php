<?php

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

});

require __DIR__ . '/auth.php';
