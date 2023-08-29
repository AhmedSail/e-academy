<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\TeacherController as ControllersTeacherController;
use App\Http\Requests\TeacherRequest;
use App\Mail\WelcomeTeacher;
use App\Models\Course;
use Illuminate\Support\Facades\Mail;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::orderByDesc('id')->paginate(10);
        return view('admins.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = new Teacher();
        return view('admins.teachers.create', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        $char = range('a', 'z');
        $ex = $request->file('image')->getClientOriginalName();
        $img_name = time() . rand() . rand() . '_' . $char[rand(0, count($char) - 1)] . '.' . $ex;
        $request->file('image')->move(public_path('uploads/teacher'), $img_name);

        Teacher::create([

            'name' => $request->name,
            'email' => $request->email,
            // 'password'=>Hash::make($request->password),
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'image' => $img_name,
            'ex_years' => $request->ex_years,
            'bio' => $request->bio,
        ]);

        //send welcome Mail with credential data
        $info=$request->only('name','email','password');
        Mail::to($request->email)->send(new WelcomeTeacher($info));

        return redirect()->route('admin.teachers.index')->with('msg', 'Teacher created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher=Teacher::find($id);
        return view('admins.teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::find($id);
        return view('admins.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, string $id)
    {
        $teacher = Teacher::find($id);

        $img_name = $teacher->image;
        if ($request->has('image')) {
            File::delete(public_path('uploads/teacher/'.$teacher->image));
            $char = range('a', 'z');
            $ex = $request->file('image')->getClientOriginalName();
            $img_name = time() . rand() . rand() . '_' . $char[rand(0, count($char) - 1)] . '.' . $ex;
            $request->file('image')->move(public_path('uploads/teacher'), $img_name);
        }

        // $teacher::update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     // 'password'=>Hash::make($request->password),
        //     'password' => bcrypt($request->password),
        //     'phone' => $request->phone,
        //     'image' => $img_name,
        //     'ex_years' => $request->ex_years,
        //     'bio' => $request->bio,
        // ]);
        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $img_name,
            'ex_years' => $request->ex_years,
            'bio' => $request->bio,
        ]);


        return redirect()->route('admin.teachers.index')->with('msg','Teacher Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::find($id);
        File::delete(public_path('uploads/teacher/'.$teacher->image));

        $teacher->delete();
        return redirect()->back()->with('msg', 'Teacher deleted successfully');
    }
    // public function destroy_course(string $id)
    // {
    //     $courses = Course::all();
    //     $teacher = Teacher::find($id);
    //     $course=Course::find($courses->$teacher);
    //     return redirect()->back()->with('msg', 'Course deleted successfully');
    // }
}
