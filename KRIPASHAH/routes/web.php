<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Auth routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ------------------- ADMIN ROUTES -------------------
Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Modules
    Route::get('/modules', [AdminController::class, 'modules'])->name('admin.modules');
    Route::post('/modules', [AdminController::class, 'storeModule'])->name('admin.modules.store');
    Route::get('/modules/toggle/{id}', [AdminController::class, 'toggleModule'])->name('admin.modules.toggle');

    // Teachers
    Route::get('/teachers', [AdminController::class, 'teachers'])->name('admin.teachers');
    Route::post('/teachers', [AdminController::class, 'storeTeacher'])->name('admin.teachers.store');
    Route::delete('/teachers/{id}', [AdminController::class, 'destroyTeacher'])->name('admin.teachers.destroy');

    // Assign teacher to module
    Route::post('/assign-teacher', [AdminController::class, 'assignTeacher'])->name('admin.assign.teacher');

    // Remove student from module
    Route::delete('/remove-student/{user}/{module}', [AdminController::class, 'removeStudent'])->name('admin.remove.student');

    // Change user role
    Route::post('/user/{id}/role', [AdminController::class, 'changeRole'])->name('admin.user.role');
});

// ------------------- TEACHER ROUTES -------------------
Route::middleware(['auth','teacher'])->prefix('teacher')->group(function () {

    // Dashboard
    Route::get('/dashboard', [TeacherController::class,'dashboard'])->name('teacher.dashboard');

    // Modules assigned to teacher
    Route::get('/modules', [TeacherController::class,'modules'])->name('teacher.modules');

    // Students in a module
    Route::get('/modules/{module}/students', [TeacherController::class,'students'])->name('teacher.module.students');

    // Set PASS/FAIL for a student
    Route::post('/modules/{module}/students/{student}/grade', [TeacherController::class,'setGrade'])->name('teacher.module.student.grade');
});
