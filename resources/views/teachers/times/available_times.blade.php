@extends('teachers.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="box-title">Your Available Times</h3>
                    <a href="{{ route('teachers.times.create') }}" class="btn btn-info" style="font-weight: bold"><i class="fas fa-plus"></i> Add new Time</a>
                </div>
                <table class="table">
                    <tr class="table-dark" style="color: #fff">
                        <th>ID</th>
                        <th>Day</th>
                        <th>From</th>
                        <th>To</th>
                        <th>JoinAt</th>
                        <th>Status</th>
                    </tr>
                    @forelse ($times as $time)
                        <tr>
                            <td>{{ $time->id }}</td>
                            <td>{{ $time->day }}</td>
                            <td>{{ $time->time_from }}</td>
                            <td>{{ $time->time_to }}</td>
                            <td>{{ $time->created_at->diffForHumans() }}</td>
                            <td>
                                <form action="{{ route('teachers.times.destroy', $time->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" style="font-weight: bold"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                                <a href="{{ route('teachers.times.edit', $time->id) }}" class="btn btn-sm btn-info"
                                    style="font-weight: bold"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No data Found</td>
                        </tr>
                    @endforelse
                </table>
                {{ $times->links() }}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    @if (session('msg'))
        <script>
            Swal.fire(
                'Good Job!',
                '{{ session('msg') }}',
                'success'
            );
        </script>
    @endif
@endsection
