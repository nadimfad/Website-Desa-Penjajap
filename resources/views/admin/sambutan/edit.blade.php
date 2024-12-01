@extends('layouts.app')

@section('content')
    <h1>Edit Sambutan</h1>

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
    <form action="{{ route('admin.sambutan.update', $sambutan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $sambutan->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="descriptions" class="form-label">Kata Sambutan</label>
            <textarea name="descriptions" class="form-control" rows="3" required>{{ old('descriptions', $sambutan->descriptions) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
