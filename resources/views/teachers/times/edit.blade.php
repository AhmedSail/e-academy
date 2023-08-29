@extends('teachers.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Create New Available Times</h3>
                <form action="{{ route('teachers.times.update',$time->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <label>Name</label>
                            <input type="text" name="name"  class="form-control" disabled value="{{ old('name',$teacher->name) }}">
                        </div>
                        <div class="col-md-12">
                            <label>Day</label>
                            <input type="date" name="day" placeholder="Day" class="form-control
                            @error('day')
                            is-invalid
                            @enderror" value="{{ old('day',$time->day) }}">
                            @error('day')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label>From</label>
                            <input type="time" name="time_from" placeholder="From" class="form-control
                            @error('time_from')
                            is-invalid
                            @enderror" value="{{ old('time_from',$time->time_from) }}">
                            @error('time_from')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label>To</label>
                            <input type="time" name="time_to" placeholder="To" class="form-control
                            @error('time_to')
                            is-invalid
                            @enderror" value="{{ old('time_to',$time->time_to) }}">
                            @error('time_to')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                    <button class="btn btn-success d-block w-25 mx-auto mt-3" style="font-weight: bold"><i class="fas fa-save"></i> Add</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    @if (session('msg'))
        <script>
            Swal.fire(
                'Error!',
                '{{ session('msg') }}',
                'success'
            );
        </script>
    @endif
@endsection
