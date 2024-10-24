<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InternshipController;
<<<<<<< HEAD
use App\Http\Controllers\TagController;
=======
// use App\Http\Controllers\InternshipController;
// use App\Http\Controllers\InternshipController;
// use App\Http\Controllers\InternshipController;
// use App\Http\Controllers\InternshipController;
// use App\Http\Controllers\InternshipController;
>>>>>>> dd9a19ef659a634796e75593ae9eb87329ec0109

// Standard Routes
Route::get('/', [InternshipController::class, 'home'])->name('home');

// Resources
<<<<<<< HEAD
Route::resource('internships', InternshipController::class); //asad
Route::resource('tags', TagController::class); //asad
=======
Route::resource('internships', InternshipController::class); // Asad
Route::resource('tags', InternshipController::class); // Asad
Route::resource('company', InternshipController::class); // Rigon
Route::resource('reviews', InternshipController::class); // Rigon
Route::resource('users', InternshipController::class); // Appie
Route::resource('categories', InternshipController::class); // Appie
>>>>>>> dd9a19ef659a634796e75593ae9eb87329ec0109

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
