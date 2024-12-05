@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Pekerjaan</h3>
    <!-- Form untuk edit pekerjaan -->
    <form action="{{ route('admin.infographics.updateJob', $job->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="job_type" class="form-label">Jenis Pekerjaan</label>
            <input type="text" name="job_type" class="form-control" value="{{ $job->job_type }}" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Jumlah</label>
            <input type="number" name="total" class="form-control" value="{{ $job->total }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('admin.infographics') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
