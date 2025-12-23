<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/dashboard'));

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/modules', [\App\Http\Controllers\AdminModuleController::class, 'index'])->name('admin.modules');
        Route::post('/admin/modules', [\App\Http\Controllers\AdminModuleController::class, 'store'])->name('admin.modules.store');
        Route::post('/admin/modules/{module}/toggle', [\App\Http\Controllers\AdminModuleController::class, 'toggleAvailability'])->name('admin.modules.toggle');
        Route::post('/admin/modules/{module}/assign-teacher', [\App\Http\Controllers\AdminModuleController::class, 'assignTeacher'])->name('admin.modules.assignTeacher');
        Route::post('/admin/modules/{module}/remove-student/{user}', [\App\Http\Controllers\AdminModuleController::class, 'removeStudent'])->name('admin.modules.removeStudent');

        Route::get('/admin/users', [\App\Http\Controllers\AdminUserController::class, 'index'])->name('admin.users');
        Route::post('/admin/teachers', [\App\Http\Controllers\AdminUserController::class, 'storeTeacher'])->name('admin.teachers.store');
        Route::post('/admin/users/{user}/role', [\App\Http\Controllers\AdminUserController::class, 'updateRole'])->name('admin.users.role');
        Route::delete('/admin/users/{user}', [\App\Http\Controllers\AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    });

    Route::middleware('role:teacher')->group(function () {
        Route::get('/teacher/modules', [\App\Http\Controllers\TeacherModuleController::class, 'index'])->name('teacher.modules');
        Route::post('/teacher/modules/{module}/students/{user}/result', [\App\Http\Controllers\TeacherModuleController::class, 'setResult'])->name('teacher.modules.result');
    });

    Route::middleware('role:student,old_student')->group(function () {
        Route::get('/student/modules', [\App\Http\Controllers\StudentModuleController::class, 'index'])->name('student.modules');
        Route::post('/student/modules/{module}/enroll', [\App\Http\Controllers\StudentModuleController::class, 'enroll'])->name('student.modules.enroll');
    });
});
