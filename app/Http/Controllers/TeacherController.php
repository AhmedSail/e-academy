<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    function index() {
        return view('teachers.home');
    }

    function courses() {
        $teacher = Auth::user();

        $courses = $teacher->courses()->paginate(20);

        return view('teachers.courses',compact('courses'));
    }

    function appointments() {
        $teacher=Auth::user();
        $appointments =$teacher->appointments()->paginate(20);
        return view('teachers.appointment',compact('appointments'));
    }
    function appointments_status($id, $status) {
        $appointment = Appointment::find($id);

        $appointment->update([
            'status' => $status
        ]);

        if ($status == 1) {
            return redirect()->back()->with('msg', 'This Appointment Accepted Successfully');
        } elseif($status == 2) {
            return redirect()->back()->with('msg', 'This Appointment Rejected Successfully');
        }else{

            // return redirect()->back()->with('msg', 'This Appointment Rejected Successfully');
        }
    }
    function courses_students($id) {
        $course = Course::find($id);
        $students=$course->students;
        return view('teachers.courses_students',compact('course','students'));
    }
    function profile(){
        $teacher=Auth::user();
        return view('teachers.profile',compact('teacher'));
    }
    function profile_update(Request $request) {
        // upload file
        $img_name = Auth::user()->image;

        if($request->hasFile('image')) {
            $char=range('a','z');
            $ex=$request->file('image')->getClientOriginalName();
            $img_name = rand() . time() . '_'.$char[rand(0,count($char)-1)].'.'.$ex;
            $request->file('image')->move(public_path('uploads/teacher'), $img_name);
        }

        Auth::user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'ex_years' => $request->ex_years,
            'image' => $img_name,
            'bio' => $request->bio,
        ]);

        return redirect()->back()->with('msg','Your profile updated successfully');

    }
    function profile_password() {
        return view('teachers.password') ;
    }

    function profile_password_update(Request $request) {
        // $request->validate([
        //     'old_password'=>'required',
        //     'password'=>['required','confirmed' ,'min:6','max:9','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'],
        //     'password_confirmation'=>'required',
        // ]);
        $validator=Validator::make($request->all(),[
                'old_password'=>'required',
                'password'=>['required','confirmed' ,'min:6','max:9','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'],
                'password_confirmation'=>'required',
        ]);
        if(!Hash::check($request->old_password, Auth::user()->password)) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'old_password', 'Old Password doesn\'t match'
                );
            });
        }
        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if (Hash::check($request->old_password, Auth::user()->password)) {
            if (!Hash::check($request->password,Auth::user()->password)) {
                $teacher=Auth::user();
                $teacher->update([
                    'password'=>bcrypt($request->password)
                ]);
                Auth::logout();
                return redirect('teacher/login');
            }else{
                $validator->after(function ($validator) {
                    $validator->errors()->add(
                        'Same Password', 'Old Password and new Password have similarity'
                    );
                });
                return redirect()->back();
            }
        }else{
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
}
