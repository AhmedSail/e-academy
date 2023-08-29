<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::latest()->paginate(10);
        return view('admins.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::select('id', 'name')->get();
        $course = new Course();

        return view('admins.courses.create', compact('course','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $char = range('a', 'z');
        $ex = $request->file('image')->getClientOriginalName();
        $img_name = time() . rand() . rand() . '_' . $char[rand(0, count($char) - 1)] . '.' . $ex;
        $request->file('image')->move(public_path('uploads/course'), $img_name);

        $data = $request->except('_token', 'image');
        $data['image'] = $img_name;

        // dd($data);

        Course::create($data);


        return redirect()->route('admin.courses.index')->with('msg', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);
        return view('admins.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers=Teacher::select('id','name')->get();
        $course = Course::find($id);
        return view('admins.courses.edit',compact('course','teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, string $id)
    {
        $course = Course::find($id);
        $data = $request->except('_token', 'image');

        if($request->hasFile('image')) {
            // upload file
            File::delete(public_path('uploads/course/'.$course->image));
            $img_name = rand() . time() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/course'), $img_name);
            $data['image'] = $img_name;
        }
        // dd($data);

        $course->update($data);
        return redirect()->route('admin.courses.index')->with('msg', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        File::delete(public_path('uploads/course/'.$course->image));
        $course->delete();
        return redirect()->back()->with('msg', 'Course deleted successfully');
    }










}
