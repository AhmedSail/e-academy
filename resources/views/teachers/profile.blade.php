@extends('teachers.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="box-title">{{ $teacher->name }} Information</h1>
                    <a href="{{ route('teachers.profile_password') }}" class="btn btn-dark text-white" style="color: #1D1D1D"><i class="fas fa-key"></i> Change Password</a>
                </div>
                <img class="d-block mx-auto" width="400" src="{{ asset('uploads/teacher/' . $teacher->image) }}"
                    alt="">
                <form class="mt-5" action="{{ route('teachers.profile') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <Label>Name</Label>
                                <input type="text" placeholder="Name" name="name"
                                    class="form-control @error('name')
                            is-invalid
                            @enderror"
                                    value="{{ Auth::user()->name }}">
                                @error('name')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <Label>Email</Label>
                                <input type="email" disabled placeholder="Email" name="email"
                                    class="form-control @error('email')
                            is-invalid
                            @enderror"
                                    value="{{ Auth::user()->email }}">
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
                                    value="{{ Auth::user()->phone }}">
                                @error('phone')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <Label>Experience Year</Label>
                                <input type="number" placeholder="Experience Year" name="ex_years"
                                    class="form-control @error('ex_years')
                            is-invalid
                            @enderror"
                                    value="{{ Auth::user()->ex_years }}">
                                @error('ex_years')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <Label>Image</Label>
                                <input type="file" name="image"
                                    class="form-control @error('image')
                            is-invalid
                            @enderror">
                                @error('image')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <Label>Bio</Label>
                                <textarea maxlength="100" name="bio" rows="5"
                                    class="form-control @error('bio')
                            is-invalid
                            @enderror">{{ Auth::user()->bio }}</textarea>
                                @error('bio')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-success w-25 mx-auto" style="font-weight: bold"><i class="fas fa-save"></i>
                            Save</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
