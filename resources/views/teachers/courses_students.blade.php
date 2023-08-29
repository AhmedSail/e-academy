@extends('teachers.master')

@section('content')
    <div class="white-box">
        <h3 class="box-title">Student Page For <span style="color: #f00">{{ $course->name_en }}</span> Course</h3>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Join At</th>
            </tr>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->created_at? $student->created_at->diffForHumans():'A little while ago'}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No data Found</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
