<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvailableTime;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeacherTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher=Auth::user();
        $times=$teacher->available_times()->latest()->paginate();
        return view('teachers.times.available_times',compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $times=new AvailableTime();
        return view('teachers.times.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required',
            'time_from' => 'required',
            'time_to' => 'required'
        ]);

        $data = $request->except('_token');
        $data['teacher_id'] = Auth::id();

        AvailableTime::create( $data );
        return redirect()->route('admin.teachers.index')->with('msg','Time Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher=Auth::user();
        $time=AvailableTime::find($id);
        return view('teachers.times.edit',compact('time','teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'day'=>'required',
            'time_from'=>'required',
            'time_to'=>'required',
        ]);
        $time = AvailableTime::find($id);
        $data=$request->except('_token');
        $time->update($data);


        return redirect()->route('teachers.times.index')->with('msg','Time Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AvailableTime::destroy($id);
        return redirect()->route('teachers.times.index')->with('msg','This Time Deleted Successfully');
    }
}
