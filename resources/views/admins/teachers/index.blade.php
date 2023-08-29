@extends('admins.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h1 style="font-weight: bold" class="h3 mb-4 text-gray-800" style="margin-left:30px ">All Teachers</h1>
        <a style="font-weight: bold" class="mb-4 btn btn-info" href="{{ route('admin.teachers.create') }}"><i class="fas fa-plus"></i> Add New Teacher</a>
    </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Email</th>
            <th>Join At</th>
            <th>Actions</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td><img width="80" src="{{ asset('uploads/teacher/'.$teacher->image) }}" alt=""></td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->created_at->diffForHumans() }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.teachers.edit', $teacher->id) }}"><i
                            class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i></button>
                    <form class="d-inline" action="{{ route('admin.teachers.destroy', $teacher->id) }}" method="post">
                        @csrf
                        @method('delete')
                    </form>
                    <a class="btn btn-success btn-sm" href="{{ route('admin.teachers.show', $teacher->id) }}"><i
                            class="fas fa-eye"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $teachers->appends($_GET)->links() }}
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
