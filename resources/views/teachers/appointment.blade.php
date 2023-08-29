@extends('teachers.master')

@section('css')
<style>
    tr.success {
    background: #efffed;
}

tr.danger {
    background: #fff3f3;
}
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Appointment Page</h3>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Student</th>
                    <th>Day</th>
                    <th>From</th>
                    <th>To</th>
                    <th>JoinAt</th>
                    <th>Status</th>
                </tr>
                @forelse ($appointments as $appointment)
                    <tr @if ($appointment->status)
                        @if ($appointment->status==1)
                        class='success'
                        @endif
                        @if ($appointment->status==0)
                        class=''
                        @endif
                        @if ($appointment->status==2)
                        class='danger'
                        @endif
                    @endif>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->student->name}}</td>
                        <td>{{ $appointment->available_times->day }}</td>
                        <td>{{ $appointment->available_times->time_from }}</td>
                        <td>{{ $appointment->available_times->time_to }}</td>
                        <td>{{ $appointment->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('teachers.appointments_status',[$appointment->id,1]) }}" class="btn btn-sm btn-success" style="font-weight: bold"><i class="fas fa-check"></i> Accept</a>
                            <a href="{{ route('teachers.appointments_status',[$appointment->id,2]) }}" class="btn btn-sm btn-danger" style="font-weight: bold"><i class="fas fa-times"></i> Reject</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No data Found</td>
                    </tr>
                @endforelse
            </table>
            {{ $appointments->links() }}
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    @if (session('msg'))
        @if (strpos(session('msg'), 'Rejected') !== false)
            Swal.fire(
                'Error!',
                '{{ session('msg') }}',
                'error'
            );
        @else
            Swal.fire(
                'Good job!',
                '{{ session('msg') }}',
                'success'
            );
        @endif
    @endif
</script>


@endsection
