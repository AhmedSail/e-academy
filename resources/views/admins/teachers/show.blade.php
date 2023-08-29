@extends('admins.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h4 style="font-weight: bold">Teacher Information <span style="color: #4E73DF">{{ $teacher->name }}: </span></h4>
        <a style="font-weight: bold ;background: #4E73DF ;color: #fff" class="mb-4 btn "
            href="{{ route('admin.teachers.index') }}">All Teachers</a>
    </div>

    <div class="d-flex justify-content-between align-items-center w-50 my-5"
        style="border: 3px solid #4E73DF ; border-radius: 50px ; overflow: hidden;">
        <img width="300" src="{{ asset('uploads/teacher/' . $teacher->image) }}" alt="">
        <div class="info " style="margin-left: 20px;">
            <h6 style="margin: 30px" class="mt-4"><span style="color: #000 ; font-weight: bold">His Email : </span>
                {{ $teacher->email }}</h6>
            <hr style="color: #3C62D2">
            <h6 style="margin: 30px"><span style="color: #000 ; font-weight: bold">His Phone : </span> {{ $teacher->phone }}
            </h6>
            <hr style="color: #3C62D2">
            <h6 style="margin: 30px"><span style="color: #000 ; font-weight: bold">Experiance Phone :
                </span>{{ $teacher->ex_years }}</h6>
            <hr style="color: #3C62D2">
            <p style="margin: 30px"><span style="color: #000 ; font-weight: bold">Bio : </span>{{ $teacher->bio }}</p>
        </div>
    </div>
    @if (!$teacher->courses->isEmpty())
        <h4 class="mb-3">The subjects being studied :</h4>
        <table class="table table-bordered" style="text-align: center ; ">
            <tr class="table-primary">
                <th>Name</th>
                <th>Houres</th>
                <th>Price</th>
            </tr>

            @forelse ($teacher->courses as $course)
                <td>{{ $course->name_en }}</td>
                <td>{{ $course->Hours }}</td>
                <td>{{ $course->price }}</td>
            @empty
                <h4>No Courses fot this teacher</h4>
            @endforelse
        </table>
    @else
        <div class="d-flex justify-content-between align-items-center">
            <div class="alert alert-danger w-25" role="alert"
                style="text-align: center ; font-weight: bold; font-size: 25px ">No Courses for this teacher</div>
            <a style="font-weight: bold ;background: #4E73DF ;color: #fff" class="mb-4 btn "
                href="{{ route('admin.courses.create') }}"><i class="fas fa-plus"></i> Add New Courses</a>
        </div>
    @endif
@endsection
