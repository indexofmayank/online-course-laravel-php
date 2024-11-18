<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Teacher;

class StudentController extends Controller
{
    public function index(Request $request) {

        $query = Students::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('student_name', 'like', '%' . $search . '%')
                  ->orWhere('class', 'like', '%' . $search . '%');
            $students = $query->with('teacher')->paginate(10);
        } else {
            $students = Students::with('teacher')->paginate(10);
        }
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
            'addmission_date' => 'required|date',
            'yearly_fees' => 'required|numeric',
        ]);
    
        $student = Students::find($id);
    
        if (!$student) {
            return redirect()->route('student.index')->with('error', 'Student not found!');
        }
    
        if ($student->student_name === $request->student_name &&
            $student->class_teacher_id === $request->class_teacher_id &&
            $student->class === $request->class &&
            $student->addmission_date === $request->addmission_date &&
            $student->yearly_fees === $request->yearly_fees) {
            
            return redirect()->route('student.index')->with('info', 'No changes detected.');
        }
    
        $student->update([
            'student_name' => $request->student_name,
            'class_teacher_id' => $request->class_teacher_id,
            'class' => $request->class,
            'addmission_date' => $request->addmission_date,
            'yearly_fees' => $request->yearly_fees,
        ]);
    
        return redirect()->route('student.index');
    }

    public function destroy($id) {
        $student = Students::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index');
    }
    
    public function test() {
        $students = Students::with('teacher')->paginate(10);
        echo "<pre>";
        print_r($students[0]);
        echo "</pre>";    }


}
