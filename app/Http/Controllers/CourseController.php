<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        Course::create($request->all());
        return redirect('home');
    }

    public function show()
    {
        $data = Course::with('materialrel')->get();
        return view('home', ['courselist' => $data]);
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('editcourse')->with('course',$course);
    }

    public function update(Request $request, $id)
    {
        $data = Course::findOrFail($id);

        $data->update($request->all());
        return redirect('/coursedata');
    }

    public function delete($id)
    {
        $data = Course::findOrFail($id);
        $data->delete();
        return redirect('/coursedata');
    }

    public function index()
    {
        $course = Course::all();
        return view('coursedata',compact('course'));
    }


}
