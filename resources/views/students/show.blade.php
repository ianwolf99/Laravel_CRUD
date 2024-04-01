@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Student Details</h5>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>
            <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection
