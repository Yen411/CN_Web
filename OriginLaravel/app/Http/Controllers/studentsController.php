<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\schools;

class studentsController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $students = students::with('schools')->paginate(10);
        return view('students.index', compact('students'));
    }

    
    public function create()
    {
        $restaurants = restaurant::all();
        return view('students.create', compact('restaurants'));
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'schools_id' => 'required|exists:schools,id',
            'full_name' => 'required|max:255',
            'student_id' => 'required',
            'email' => 'required|max:100',
            'phone' => 'required|numeric|min:0',
        ]);

        students::create($validate);

        return redirect()->route('students.index')
            ->with('success','học sinh đã được thêm thành công!');
    }
    public function edit(students $student)
    {
        return view('students.edit', compact('student'));
    }
    public function update(Request $request, students $student)
    {
        $request->validate([
            'schools_id' => 'required|exists:schools,id',
            'full_name' => 'required|max:255',
            'student_id' => 'required',
            'email' => 'required|max:100',
            'phone' => 'required|numeric|min:0',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success','Items updated successfully!');
    }
    public function destroy(students $student)
    {
        $student->delete();
        return redirect()->route('students.index')
            ->with('success','Items deleted successfully!');
    }
}
