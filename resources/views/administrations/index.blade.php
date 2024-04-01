@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Administrations</h5>
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
                        <th>Department</th>
                        <th>Position</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($administrations as $administration)
                        <tr>
                            <td>{{ $administration->id }}</td>
                            <td>{{ $administration->department }}</td>
                            <td>{{ $administration->position }}</td>
                            <td>{{ $administration->name }}</td>
                            <td>{{ $administration->email }}</td>
                            <td>
                                <a href="{{ route('administrations.show', $administration->id) }}" class="btn btn-sm btn-info" title="View"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('administrations.edit', $administration->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('administrations.destroy', $administration->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this administration?')"><i class="bi bi-trash"></i></button>
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
