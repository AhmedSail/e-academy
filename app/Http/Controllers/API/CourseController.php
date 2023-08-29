<?php

namespace App\Http\Controllers\API;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (request()->has('token') && request()->token==123) {
            return [
                'status'=>true,
                'message'=>'All Courses',
                'data'=>Course::all()
            ];
        // }else{
            // return [
            //     'status'=>true,
            //     'message'=>'No Courses',
            //     'data'=>[]
            // ];
        // }
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

        $course=Course::create($data);
        return response()->json([
            'status'=>true,
            'message'=>'All Courses',
            'data'=>$course
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
