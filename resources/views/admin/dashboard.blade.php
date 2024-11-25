@extends('layouts.app')

@section('content')
    <h1>Employee Dashboard</h1>

    <!-- Form untuk tambah data -->
    <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo (optional)</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Employee</button>
    </form>

    <h2>Employee List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>
                        @if ($employee->photo)
                            <img src="{{ Storage::url($employee->photo) }}" alt="photo" width="50">
                        @else
                            No photo
                        @endif
                    </td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ $employee->id }}">Edit</a>
                        <!-- Delete Button -->
                        <form action="{{ route('admin.employees.destroy', $employee) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
