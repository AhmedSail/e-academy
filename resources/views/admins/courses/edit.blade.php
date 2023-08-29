@extends('admins.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h1 style="font-weight: bold" class="h3 mb-4 text-gray-800" style="margin-left:30px ">Update Course</h1>
        <a style="font-weight: bold" class="mb-4 btn btn-info" href="{{ route('admin.courses.index') }}">All Courses</a>
    </div>
    <form action="{{ route('admin.courses.update',$course->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admins.courses.form')

            <button class="btn btn-success w-25 mx-auto" style="font-weight: bold"><i class="fas fa-save"></i> Update</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    @if (session('msg'))
        <script>
            Swal.fire(
                'Good job!',
                '{{ session('msg') }}',
                'success'
            )
        </script>
    @endif
@endsection
