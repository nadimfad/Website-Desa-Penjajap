@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>

    <!-- Form untuk tambah data employee-->
    <form action="{{ route('admin.employee.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <hr>

    <h2>Employees</h2>
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
                    <td><img src="{{ asset('storage/' . $employee->photo) }}" alt="photo" width="100"></td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <a href="{{ route('admin.employee.edit', $employee) }}">Edit</a>
                        <form action="{{ route('admin.employee.destroy', $employee) }}" method="POST" style="display:inline;">
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
