<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StudentController extends Controller
{
    function getStudents()
    {
        $students = \App\Models\Student::all();
        return $students;
    }
}
