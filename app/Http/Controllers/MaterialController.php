<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function store(Request $request)
    {
        Material::create($request->all());
        return redirect('home');
    }

    public function index()
    {
        $course = Course::all();
        return view('addmaterial', ['courselist' => $course]);
    }

    public function show()
    {
        $material = Material::all();
        return view('materialdata', ['materiallist' => $material]);
    }

    public function edit($id)
    {
        $material = Material::find($id);
        return view('editmaterial', ['course' => Course::all()])->with('material',$material);
    }

    public function update(Request $request, $id)
    {
        $data = Material::findOrFail($id);

        $data->update($request->all());
        return redirect('/materialdata');
    }

    public function delete($id)
    {
        $data = Material::findOrFail($id);
        $data->delete();
        return redirect('/materialdata');
    }
}
