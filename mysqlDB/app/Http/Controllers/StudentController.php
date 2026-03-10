<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show students list
    function getStudents()
    {
        $students = Student::all();
        return view('students', ['data' => $students]);
    }

    // Add student
    function addStudent(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
        $student->save();

        return redirect('students');
    }
}
