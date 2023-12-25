<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Materials;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    // show the form
    public function create(){
        return view('materials.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_link' => 'required',
            'course_id'=> 'required',
        ]);

        Materials::create($formFields);

        return redirect('/')->with('message', 'Membuat material berhasil');
    }

    // show edit form
    public function edit(Materials $material)
    {
        return view('materials.edit', [
            'material' => $material
        ]);
    }

    // edit form
    public function update(Request $request, Materials $material)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_link' => 'required',
            'course_id'=> 'required',
        ]);

        $material->update($formFields);

        return redirect('/courses/'.$material->course_id)->with('message', 'Course update successfully');

    }

    public function destroy(Materials $material)
    {
        $material->delete();
        return back()->with('message','Material deleted successfully');
    }
}
