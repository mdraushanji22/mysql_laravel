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

        return redirect('list');
    }
    function list()
    {
        // return ("student");
        $studentData = Student::all();
        return view("student-list", ["student" => $studentData]);
    }
    function delete($id)
    {
        $isDeleted = Student::destroy($id);
        return redirect('list');
    }
    function edit($id)
    {
        $student = Student::find($id);
        return view('edit', ['data' => $student]);
    }
    function editStudent(Request $request, $id)
    {
        return $id;
    }
}
