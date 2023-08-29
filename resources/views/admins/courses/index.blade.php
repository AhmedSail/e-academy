@extends('admins.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h1 style="font-weight: bold" class="h3 mb-4 text-gray-800" style="margin-left:30px ">All Courses</h1>
        <a style="font-weight: bold" class="mb-4 btn btn-info" href="{{ route('admin.courses.create') }}"><i class="fas fa-plus"></i> Add New course</a>
    </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Hours</th>
            <th>Duration</th>
            <th>Teacher Name</th>
            <th>Join At</th>
            <th>Actions</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course-> {'name_'.app()->currentLocale()} }}</td>
                <td><img width="80" src="{{ asset('uploads/course/'.$course->image) }}" alt=""></td>
                <td>{{ $course->price }} JOD </td>
                <td>{{ $course->Hours }} hour</td>
                <td>{{ $course->duration }}</td>
                <td>{{  $course->teacher->name}}</td>
                <td>{{ $course->created_at->diffForHumans() }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.courses.edit', $course->id) }}"><i
                            class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i></button>
                    <form class="d-inline" action="{{ route('admin.courses.destroy', $course->id) }}" method="post">
                        @csrf
                        @method('delete')
                    </form>
                    <a class="btn btn-success btn-sm" href="{{ route('admin.courses.show', $course->id) }}"><i
                            class="fas fa-eye"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- @if ($courses->links())
    {{ $courses->appends($_GET)->links() }}
    @endif --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <script>
        $('.btn-delete').on('click', function() {
            let form = $(this).next('form');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to delete this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        })
        </script>

@endsection
