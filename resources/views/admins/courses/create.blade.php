@extends('admins.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h1 style="font-weight: bold" class="h3 mb-4 text-gray-800" style="margin-left:30px ">Add New Course</h1>
        <a style="font-weight: bold ;background: #4E73DF ;color: #fff" class="mb-4 btn "
                href="{{ route('admin.courses.index') }}">All Courses</a>
    </div>
    <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('admins.courses.form')

        <button class="btn btn-success px-5"><i class="fas fa-save"></i> Add</button>

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
    {{-- <script>
        $('.btn-add').on('click', function() {
            let form = $(this).next('form');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to create this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, create it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        })
    </script> --}}
@endsection
