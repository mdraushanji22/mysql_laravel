<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'users']);
Route::get('students', [StudentController::class, 'getStudents']);
Route::post('students', [StudentController::class, 'addStudent']);
Route::get('list', [StudentController::class, 'list']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
