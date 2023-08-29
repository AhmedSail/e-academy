<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherTimeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/teacher')->name('teachers.')->middleware('auth:teacher')->group(function () {
    Route::get('/home',[TeacherController::class,'index'])->name('home');
    Route::get('/courses',[TeacherController::class,'courses'])->name('courses');
    Route::get('/course/{id}/students',[TeacherController::class,'courses_students'])->name('courses_students');
    Route::get('/available-times',[TeacherController::class,'available_times'])->name('available_times');
    Route::get('/appointments',[TeacherController::class,'appointments'])->name('appointments');
    Route::get('/profile',[TeacherController::class,'profile'])->name('profile');
    Route::put('/profile',[TeacherController::class,'profile_update']);
    Route::get('/profile/password',[TeacherController::class,'profile_password'])->name('profile_password');
    Route::put('/profile/password',[TeacherController::class,'profile_password_update'])->name('profile_password_update');
    Route::get('/appointments/{id}/{status}',[TeacherController::class,'appointments_status'])->name('appointments_status');
    Route::resource('times',TeacherTimeController::class);
});
