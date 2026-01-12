<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    // Admin Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    // Modules
    Route::get('/modules', [AdminController::class, 'modules'])
        ->name('admin.modules');

    Route::post('/modules', [AdminController::class, 'storeModule'])
        ->name('admin.modules.store');

    Route::get('/modules/toggle/{id}', [AdminController::class, 'toggleModule'])
        ->name('admin.modules.toggle');

    // Teachers
    Route::get('/teachers', [AdminController::class, 'teachers'])
        ->name('admin.teachers');

    Route::post('/teachers', [AdminController::class, 'storeTeacher'])
        ->name('admin.teachers.store');

    Route::delete('/teachers/{id}', [AdminController::class, 'destroyTeacher'])
        ->name('admin.teachers.destroy');

    // Assign teacher to module
    Route::post('/assign-teacher', [AdminController::class, 'assignTeacher'])
        ->name('admin.assign.teacher');

    // Remove student from module
    Route::delete('/remove-student/{user}/{module}', [AdminController::class, 'removeStudent'])
        ->name('admin.remove.student');

    // Change user role
    Route::post('/user/{id}/role', [AdminController::class, 'changeRole'])
        ->name('admin.user.role');
});



require __DIR__.'/auth.php';

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/teacher', function () {
    return view('teacher_dashboard');
})->name('teacher');


