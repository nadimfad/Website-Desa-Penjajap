@extends('layouts.app')

@section('content')
    <h1>Edit Galeri</h1>

    {{-- <!-- Tampilkan error jika validasi gagal -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <!-- Form untuk edit galeri -->
    <form action="{{ route('admin.employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $employee->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="3" required>{{ old('description', $employee->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control" accept="image/jpeg,image/png">
            <small>Biarkan kosong jika tidak ingin mengganti foto.</small>
            <br>
            <img src="{{ asset('storage/' . $employee->photo) }}" alt="Foto Galeri" width="150">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
