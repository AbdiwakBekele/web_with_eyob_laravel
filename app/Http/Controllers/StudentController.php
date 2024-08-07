<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {


    public function index() {
        $students = Student::all();
        return view('students.indexStudent', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('students.createStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $student = Student::create([
            'name' => $request->fullname,
            'age' => $request->age,
            'phone' => $request->phone,
            'city' => $request->city,
            'subcity' => $request->subcity,
        ]);

        if ($student) {
            return redirect('students');
        }
        return 'error';
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $student = Student::find($id);
        return view('students.showStudent', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $student = Student::find($id);
        return view('students.editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $student = Student::find($id);

        $student->name = $request->fullname;
        $student->age = $request->age;
        $student->phone = $request->phone;
        $student->city = $request->city;
        $student->subcity = $request->subcity;

        if ($student->save()) {
            return redirect('students');
        }
        return 'error';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');
    }
}
