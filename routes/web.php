<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Models\Student;
use App\Models\Course;


Route::get('/', function () {
    return view('home');
});


Route::get('/student', [StudentController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('student');

Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/update-student/{id}', [StudentController::class, 'update'])->name('students.update');

Route::get('/add-student', [StudentController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('add-student');

Route::delete('/delete-student/{id}', [StudentController::class,'destroy'])
    ->name('students.destroy');

Route::post('/students/store', [StudentController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('students.store');

Route::get('/course', [CourseController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('course');

Route::get('/add-course', [CourseController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('add-course');

Route::post('/courses/store', [CourseController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('courses.store');

Route::get('/edit-course/{id}', [CourseController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('courses.edit');

Route::put('/update-course/{id}', [CourseController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('courses.update');

Route::delete('/delete-course/{id}', [CourseController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('courses.destroy');

Route::get('/dashboard', function () {

    $totalStudents = Student::count();
    $totalCourses = Course::count();

    $latestStudents = Student::with('course')
        ->latest()
        ->take(3)
        ->get();

    return view('dashboard', compact(
        'totalStudents',
        'totalCourses',
        'latestStudents'
    ));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

require __DIR__ . '/auth.php';
