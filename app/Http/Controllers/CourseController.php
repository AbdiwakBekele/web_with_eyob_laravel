<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;


class CourseController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $courses = Course::all();
        return view('courses.indexCourse', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $students = Student::all();
        return view('courses.createCourse', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $course = Course::create([
            'student_id' => $request->student_id,
            'course_name' => $request->course_name,
        ]);

        if ($course) {
            return redirect('students');
        }
        return 'error';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
