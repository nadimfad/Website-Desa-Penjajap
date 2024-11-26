@extends('layouts.app')

@section('content')
    <h1>Infographic - Jumlah Penduduk & Kepala Keluarga</h1>

    <!-- Form untuk tambah atau edit infografis -->
    <form action="{{ isset($infographic) ? route('admin.infographics.update', $infographic) : route('admin.infographics.store') }}" method="POST">
        @csrf
        @if(isset($infographic))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="population" class="form-label">Jumlah Penduduk</label>
            <input type="number" name="population" class="form-control" required value="{{ old('population', isset($infographic) ? $infographic->population : '') }}">
        </div>
        <div class="mb-3">
            <label for="households" class="form-label">Kepala Keluarga</label>
            <input type="number" name="households" class="form-control" required value="{{ old('households', isset($infographic) ? $infographic->households : '') }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($infographic) ? 'Update' : 'Save' }}</button>
    </form>

    <hr>

    <h2>Data infografis terbaru</h2>
    @if(isset($infographic))
        <p><strong>Jumlah Penduduk:</strong> {{ $infographic->population }}</p>
        <p><strong>Kepala Keluarga:</strong> {{ $infographic->households }}</p>
    @else
        <p>Belum ada Data Tersedia.</p>
    @endif
@endsection
