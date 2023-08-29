@extends('admins.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h1 style="font-weight: bold" class="h3 mb-4 text-gray-800" style="margin-left:30px ">Update Teacher</h1>
        <a style="font-weight: bold" class="mb-4 btn btn-info" href="{{ route('admin.teachers.index') }}">All Teachers</a>
    </div>
    <form action="{{ route('admin.teachers.update', $teacher->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <Label>Name</Label>
                    <input type="text" placeholder="Name" name="name"
                        class="form-control @error('name')
                    is-invalid
                    @enderror"
                        value="{{ old('name', $teacher->name) }}">
                    @error('name')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <Label>Email</Label>
                    <input type="email" placeholder="Email" name="email"
                        class="form-control @error('email')
                    is-invalid
                    @enderror"
                        value="{{ old('email', $teacher->email) }}">
                    @error('email')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <Label>Phone</Label>
                    <input type="text" placeholder="Phone" name="phone"
                        class="form-control @error('phone')
                    is-invalid
                    @enderror"
                        value="{{ old('phone', $teacher->phone) }}">
                    @error('phone')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image"
                        class="form-control
                    @error('image')
                        is-invalid
                    @enderror">
                    @error('image')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                    @if ($teacher->image)
                        <img style="width: 80px" src="{{ asset('uploads/teacher/' . $teacher->image) }}">
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <Label>Experience Year</Label>
                    <input type="number" placeholder="Experience Year" name="ex_years"
                        class="form-control @error('ex_years')
                    is-invalid
                    @enderror"
                        value="{{ old('ex_years', $teacher->ex_years) }}">
                    @error('ex_years')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <Label>Bio</Label>
                    <textarea name="bio" rows="5"
                        class="form-control @error('bio')
                    is-invalid
                    @enderror">{{ old('bio', $teacher->bio) }}</textarea>
                    @error('bio')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
            </div>

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
