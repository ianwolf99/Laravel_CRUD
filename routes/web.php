<?php


use App\Http\Controllers\AdministrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;


// Routes for CRUD operations on students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
//Routes for CRUD operations on Administrations
Route::get('/administrations', [AdministrationController::class, 'index'])->name('administrations.index');
Route::get('/administrations/create', [AdministrationController::class, 'create'])->name('administrations.create');
Route::post('/administrations', [AdministrationController::class, 'store'])->name('administrations.store');
Route::get('/administrations/{administration}', [AdministrationController::class, 'show'])->name('administrations.show');
Route::get('/administrations/{administration}/edit', [AdministrationController::class, 'edit'])->name('administrations.edit');
Route::put('/administrations/{administration}', [AdministrationController::class, 'update'])->name('administrations.update');
Route::delete('/administrations/{administration}', [AdministrationController::class, 'destroy'])->name('administrations.destroy');
//Routes for CRUD operations on Courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

