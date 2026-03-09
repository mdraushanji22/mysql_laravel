<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'users']);
Route::post('students', [StudentController::class, 'getStudents']);
