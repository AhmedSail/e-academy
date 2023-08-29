<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::prefix('/student')->name('students.')->middleware('auth:web')->group(function () {
    Route::get('/home',[StudentController::class,'index'])->name('home');
    Route::get('/courses',[StudentController::class,'courses'])->name('courses');
    Route::get('/appointments',[StudentController::class,'appointments'])->name('appointments');
});
