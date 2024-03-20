<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'course' => 'required',
            'year_level' => 'required',
            'section' => 'required',
            'age' => 'required',
        ]);

        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Added!');
    }

    /**
     * Display the specified resource.
     */

    public function show(Student $student)
    {
        return view('students.show')->with('student', $student);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'course' => 'required',
            'year_level' => 'required',
            'section' => 'required',
            'age' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('flash_message', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted');
    }
    
}
