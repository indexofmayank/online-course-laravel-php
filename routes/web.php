<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;



Route::get('/', [HomeController::class, 'index']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('home');
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/course', [CourseController::class, 'index']);
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/courses', [CourseController::class, 'getCourseForCategory']);
Route::get('/courses/{categoryId}', [CourseController::class, 'getCourseForCategory']);
Route::post('/student/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/studenttest', [StudentController::class, 'test']);
Route::put('/studentupdate/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'registerUser']);
