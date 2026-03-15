<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

use App\Models\Student;
use App\Models\Course;


Route::get('/', function () {
    return view('home');
});


Route::get('/student', [StudentController::class,'index'])
    ->middleware(['auth','verified'])
    ->name('student');


Route::get('/course', [CourseController::class,'index'])
    ->middleware(['auth','verified'])
    ->name('course');


Route::get('/add-student', [StudentController::class,'create'])
    ->middleware(['auth','verified'])
    ->name('add-student');

Route::post('/students/store', [StudentController::class,'store'])
    ->middleware(['auth','verified'])
    ->name('students.store');


Route::get('/add-course', [CourseController::class,'create'])
    ->middleware(['auth','verified'])
    ->name('add-course');

Route::post('/courses/store', [CourseController::class,'store'])
    ->middleware(['auth','verified'])
    ->name('courses.store');


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

})->middleware(['auth','verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';