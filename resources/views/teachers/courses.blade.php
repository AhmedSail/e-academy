@extends('teachers.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Courses Page</h3>

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>Created At</th>
                        <th>Students</th>
                    </tr>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td><img width="50" src="{{ asset('uploads/course/' . $course->image) }}" alt=""></td>
                            <td>{{ $course->{'name_' . app()->currentLocale()} }}</td>
                            <td>{{ $course->price }} JOD</td>
                            <td>{{ $course->duration }}</td>
                            <td>{{ $course->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('teachers.courses_students', $course->id) }}">Show Students</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No data Found</td>
                        </tr>
                    @endforelse
                </table>
                {{ $courses->links() }}

            </div>


        </div>


@endsection

