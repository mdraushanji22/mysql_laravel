<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Student;

class StudentController extends Controller
{
    function getStudents(Request $request)
    {
        return $request->input();
        // $data = new \App\Models\Student;
        // echo $data->testFun();
        // $students = \App\Models\Student::all();
        // return view('students', ['data' => $students]);
    }
}
