<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function create()
    {
        return view('add-course');
    }

    public function store(Request $request)
    {
        Course::create([
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('/course');
    }


    public function index()
    {
        $courses = Course::withCount('students')->get();

        return view('course', compact('courses'));
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('course')
            ->with('success', 'Course deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'nullable'
        ]);

        $course = Course::findOrFail($id);

        $course->update([
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('course')
            ->with('success', 'Course updated successfully');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('edit-course', compact('course'));
    }
}
