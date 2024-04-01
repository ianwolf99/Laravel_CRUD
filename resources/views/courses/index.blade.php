@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Courses</h5>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Create New Course</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Code</th>
                        <th>Department</th>
                        <th>Credits</th>
                        <!-- Add more table headers for additional attributes if needed -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->description }}</td>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->department }}</td>
                            <td>{{ $course->credits }}</td>
                            <!-- Add more table cells for additional attributes if needed -->
                            <td>
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-info" title="View"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this course?')"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
