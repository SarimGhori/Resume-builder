<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeProfileController;
use App\Http\Controllers\EducationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // Breeze Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Resume Profile
    Route::get('/resume-profile/create', [ResumeProfileController::class, 'create'])
        ->name('resume-profile.create');

    Route::post('/resume-profile/store', [ResumeProfileController::class, 'store'])
        ->name('resume-profile.store');

    // Education CRUD
    Route::resource('education', EducationController::class);
});

require __DIR__.'/auth.php';