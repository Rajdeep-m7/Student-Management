<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    public function create()
    {
        $courses = Course::all();

        return view('add-student', compact('courses'));
    }
    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'course_id' => $request->course_id,
            'enrollment_date' => $request->enrollment_date
        ]);

        return redirect('/student');
    }

    public function index()
    {
        $students = Student::with('course')->get();
        return view('student', compact('students'));
    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $courses = Course::all();

        return view('edit-student', compact('student', 'courses'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'course_id' => $request->course_id,
            'enrollment_date' => $request->enrollment_date
        ]);

        return redirect()->route('student')
            ->with('success', 'Student updated successfully');
    }
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student')
            ->with('success', 'Student deleted successfully');
    }
}
