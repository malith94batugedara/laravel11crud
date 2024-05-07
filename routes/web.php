<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-students',[StudentController::class,'create'])->name('student.create');

Route::post('/add-students',[StudentController::class,'store'])->name('student.store');

Route::get('/all-students',[StudentController::class,'index'])->name('student.index');
