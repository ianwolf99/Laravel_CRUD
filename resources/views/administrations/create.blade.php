@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Create Administration</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('administrations.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" name="department" id="department" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" name="position" id="position" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="office_location">Office Location</label>
                    <input type="text" name="office_location" id="office_location" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="office_hours">Office Hours</label>
                    <input type="text" name="office_hours" id="office_hours" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="responsibilities">Responsibilities</label>
                    <textarea name="responsibilities" id="responsibilities" class="form-control" required></textarea>
                </div>
                <!-- Add more input fields for other attributes -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
