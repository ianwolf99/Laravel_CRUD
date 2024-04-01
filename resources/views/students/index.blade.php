@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Students</h5>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Nationality</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Admission Date</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->nationality }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>{{ $student->admission_date }}</td>
                            
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info" title="View"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this student?')"><i class="bi bi-trash"></i></button>
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
