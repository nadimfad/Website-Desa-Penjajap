@extends('layouts.app')

@section('content')
<!-- Form untuk tambah banner Desa -->
<h1>Home | Banner Desa</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" name="description" required></textarea>
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Foto</label>
        <input type="file" class="form-control" name="photo" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Simpan Banner Desa</button>
</form>

<hr>

<!-- Form Kata Sambutan Kepala Desa -->
<h1>Home | Kata Sambutan Kepala Desa</h1>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<form action="{{ route('admin.sambutan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama Kepala Desa</label>
        <input type="text" class="form-control" name="name" required>
        </div>
    <div class="mb-3">
        <label for="descriptions" class="form-label">Kata Sambutan</label>
        <textarea class="form-control" name="descriptions" required></textarea>
        </div>
    <button type="submit" class="btn btn-primary">Simpan Kata Sambutan</button>
</form>
<hr>
<!-- Form untuk tambah data employee-->
<h1>Home | Employee</h1>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<form action="{{ route('admin.employee.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Jabatan</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Perangkat Desa</button>
    </form>
    
    <hr>
    
    <!-- Form untuk tambah galeri desa -->
    <h1>Home | Galeri Desa</h1>
    @if(session('success'))
    <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control" accept="image/jpeg, image/png" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Galeri Desa</button>
    </form>
    <hr>
    <!-- Menampilkan Data Banner Desa -->
    <h2>Banner Desa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td><img src="{{ asset('storage/' . $banner->photo) }}" alt="foto" width="100"></td>
                    <td>{{ $banner->title }}</td>
                    <td>{{ $banner->description }}</td>
                    <td>
                        <a href="{{ route('admin.banner.edit', $banner) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.banner.destroy', $banner) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>

    <!-- Menampilkan Data Kata Sambutan -->
    <h2>Kata Sambutan</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Kepala Desa</th>
                <th>Kata Sambutan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sambutans as $sambutan)
            <tr>
                <td>{{ $sambutan->name }}</td>
                <td>{{ $sambutan->descriptions }}</td>
                <td>
                    <a href="{{ route('admin.sambutan.edit', $sambutan) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.sambutan.destroy', $sambutan) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    <!-- Daftar Employees -->
    <h2>Daftar Perangkat Desa</h2>
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
                        <a href="{{ route('admin.employee.edit', $employee) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.employee.destroy', $employee) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <!-- Daftar Galeri Desa -->
    <h2>Galeri Desa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr>
                    <td><img src="{{ asset('storage/' . $gallery->photo) }}" alt="foto" width="100"></td>
                    <td>{{ $gallery->title }}</td>
                    <td>{{ $gallery->description }}</td>
                    <td>
                        <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
