@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Edit Student</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $student->first_name }}" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $student->last_name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}" required>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ $student->date_of_birth }}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="Male" {{ $student->gender === 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $student->gender === 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" name="nationality" id="nationality" class="form-control" value="{{ $student->nationality }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $student->address }}" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $student->phone_number }}" required>
                </div>
                <div class="form-group">
                    <label for="admission_date">Admission Date</label>
                    <input type="date" name="admission_date" id="admission_date" class="form-control" value="{{ $student->admission_date }}" required>
                </div>
                <div class="form-group">
                    <label for="graduation_date">Graduation Date (optional)</label>
                    <input type="date" name="graduation_date" id="graduation_date" class="form-control" value="{{ $student->graduation_date }}">
                </div>
                <!-- Add more input fields for additional attributes if needed -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
