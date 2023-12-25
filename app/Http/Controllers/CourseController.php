<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Show the main page
    public function index()
    {
        return view('courses.index', [
            'courses' => Courses::latest()->filter(request(['search','tag' ]))->paginate(6)
        ]);
    }

    // Show the course detail
    public function show(Courses $course)
    {
         // Menggunakan relasi materials untuk mendapatkan data materials
         $materials = $course->materials()->where('course_id', $course->id)->get();

        return view('courses.show', [
            'course' => $course,
            'materials' => $materials,
        ]);
    }

    // Show create course form
    public function create()
    {
        return view('courses.create');
    }

    // Store course data
    public function store(Request $request)
    {

        // dd($request);
        $formFields = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'description' => 'required',
        ]);

        Courses::create($formFields);
        return redirect('/')->with('message','Courses created successfully!');
    }

    // Edit form
    public function edit(Courses $course)
    {
        return view('courses.edit', [
            'course' => $course
        ]);
    }

     // Store course data
     public function update(Request $request, Courses $course)
     {
 
         // dd($request);
         $formFields = $request->validate([
             'title' => 'required',
             'duration' => 'required',
             'description' => 'required',
         ]);
 
         $course->update($formFields);
         return redirect('/')->with('message','Courses update successfully!');
     }

    // Delete course
    public function destroy(Courses $course)
    {
        // Delete or detach related materials first
        $course->materials()->delete();
        $course->delete();
        return redirect('/')->with('message','Courses delete successfully!');
    }
}
