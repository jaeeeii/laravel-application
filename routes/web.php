<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\QrCodeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'Hello, world!';
});

Route::get('/student    ', function () {
    $students = App\Models\Student::all();
    return view('students.index', ['students' => $students]);
});


// Route to store a new student
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Route to display the form for creating a new student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Route to display a specific student
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');

// Route to display the form for editing a specific student
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

// Route to update a specific student
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

// Route to delete a specific student
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');



Route::resource('students', StudentController::class);

Route::get('/qrcode', [QrCodeController::class, 'index']);

Route::get('/students/(student)', 'Student Controller@show")->name("students.show');