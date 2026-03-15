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
}
