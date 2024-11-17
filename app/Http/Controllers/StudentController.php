<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Teacher;

class StudentController extends Controller
{
    public function index() {

        $students = Students::with('teacher')->paginate(10);
        $teachers = Teacher::select('id', 'teacher_name')->get();
        return view('pages/Studentpage', compact('students', 'teachers'));
    }

    public function store(Request $request) {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'required|integer',
            'class' => 'required|string|max:255',
            'addmission_date' => 'required|date',
            'yearly_fees' => 'required|numeric',
        ]);

        Students::create($request->all());

        return redirect()->route('student.index');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'required|integer',
            'class' => 'required|string|max:255',
            'addmission_date' => 'required',
            'yearly_fees' => 'required|numeric',
        ]);
    
        echo "<pre>";
        print_r($id);
        echo "</pre>";
        die; 
    }
    
    public function test() {
        $students = Students::with('teacher')->paginate(10);
        echo "<pre>";
        print_r($students[0]);
        echo "</pre>";    }


}
