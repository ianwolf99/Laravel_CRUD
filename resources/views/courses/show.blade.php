@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Course Details</h5>
        </div>
        <div class="card-body">
            <p><strong>Title:</strong> {{ $course->title }}</p>
            <p><strong>Description:</strong> {{ $course->description }}</p>
            <p><strong>Code:</strong> {{ $course->code }}</p>
            <p><strong>Department:</strong> {{ $course->department }}</p>
            <p><strong>Credits:</strong> {{ $course->credits }}</p>
            <!-- Add more details for additional attributes as needed -->
        </div>
    </div>
</div>
@endsection
