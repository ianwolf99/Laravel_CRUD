@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Edit Course</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('courses.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $course->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $course->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" name="code" id="code" class="form-control" value="{{ $course->code }}" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" name="department" id="department" class="form-control" value="{{ $course->department }}" required>
                </div>
                <div class="form-group">
                    <label for="credits">Credits</label>
                    <input type="text" name="credits" id="credits" class="form-control" value="{{ $course->credits }}" required>
                </div>
                <!-- Add more fields for additional attributes as needed -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
