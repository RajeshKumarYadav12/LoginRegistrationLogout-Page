@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Dashboard</h2>
            <p>Hello, {{ $user->name }}</p>
        </div>
    </div>
</div>
@endsection
