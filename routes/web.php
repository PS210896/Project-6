<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\TagController;

// Standard Routes
Route::get('/', [InternshipController::class, 'home'])->name('home');

// Resources
Route::resource('internships', InternshipController::class); //asad
Route::resource('tags', TagController::class); //asad

// Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
