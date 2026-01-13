<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome'); // Make sure the file name is exact: welcome.blade.php
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


// ---------------- AUTH ROUTES ----------------
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ---------------- ADMIN ROUTES ----------------
Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/modules', [AdminController::class, 'modules'])->name('admin.modules');
    Route::post('/modules', [AdminController::class, 'storeModule'])->name('admin.modules.store');
    Route::get('/modules/toggle/{id}', [AdminController::class, 'toggleModule'])->name('admin.modules.toggle');
    Route::get('/teachers', [AdminController::class, 'teachers'])->name('admin.teachers');
    Route::post('/teachers', [AdminController::class, 'storeTeacher'])->name('admin.teachers.store');
    Route::delete('/teachers/{id}', [AdminController::class, 'destroyTeacher'])->name('admin.teachers.destroy');
    Route::post('/assign-teacher', [AdminController::class, 'assignTeacher'])->name('admin.assign.teacher');
    Route::delete('/remove-student/{user}/{module}', [AdminController::class, 'removeStudent'])->name('admin.remove.student');
    Route::post('/user/{id}/role', [AdminController::class, 'changeRole'])->name('admin.user.role');
});

// ---------------- TEACHER ROUTES ----------------
Route::middleware(['auth','teacher'])->prefix('teacher')->group(function () {
    Route::get('/dashboard', [TeacherController::class,'dashboard'])->name('teacher.dashboard');
    Route::get('/modules', [TeacherController::class,'modules'])->name('teacher.modules');
    Route::get('/modules/{module}/students', [TeacherController::class,'students'])->name('teacher.module.students');
    Route::post('/modules/{module}/students/{student}/grade', [TeacherController::class,'setGrade'])->name('teacher.module.student.grade');
});

// ---------------- STUDENT ROUTES ----------------
Route::middleware(['auth','student'])->prefix('student')->group(function () {
    Route::get('/dashboard', [StudentController::class,'dashboard'])->name('student.dashboard');
    Route::get('/modules', [StudentController::class,'availableModules'])->name('student.modules');
    Route::post('/enroll/{module}', [StudentController::class,'enroll'])->name('student.enroll');
    Route::get('/history', [StudentController::class,'history'])->name('student.history');
});
