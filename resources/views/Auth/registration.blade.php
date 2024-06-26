@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Registration Page</h2>
            <form method="post" action="{{ route('registration.post') }}">
                @csrf
                <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label">Name</label>
                    <div class="col-md-8">
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                        @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label">Email</label>
                    <div class="col-md-8">
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                        @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label">Password</label>
                    <div class="col-md-8">
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
