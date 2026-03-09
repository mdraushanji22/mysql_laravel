<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StudentController extends Controller
{
    function getStudents()
    {
        return view("Add student");
        $data = new \App\Models\Student;
        echo $data->testFun();
        $students = \App\Models\Student::all();
        return view('students', ['data' => $students]);
    }
}
