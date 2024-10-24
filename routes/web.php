<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;


// Standard Routes
Route::get('/', [InternshipController::class, 'home'])->name('home');
Route::get('/account', [InternshipController::class, 'account'])->name('account');


// Resources
Route::resource('internships', InternshipController::class); //asad
Route::resource('tags', TagController::class); //asad
Route::resource('users', UserController::class); //rigon
Route::resource('roles', RoleController::class); //rigon
Route::resource('companies', CompanyController::class); //appie
Route::resource('contracts', ContractController::class);  //appie


// Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Not in use
// Route::get('/dashboard', function () {
//     return redirect()->route('home');
// })->middleware(['auth', 'verified'])->name('dashboard');
