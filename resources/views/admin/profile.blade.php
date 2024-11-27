@extends('layouts.app')

@section('content')
    <h1>Profile - Visi-Misi</h1>

    <!-- Form untuk tambah atau edit visi-misi -->
    <form action="{{ isset($profile) ? route('admin.profile.update', $profile->id) : route('admin.profile.store') }}" method="POST">
        @csrf
        @if(isset($profile))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="visi_misi" class="form-label">Vision & Mission</label>
            <textarea name="visi_misi" class="form-control" rows="5" required>{{ old('visi_misi', $profile->visi_misi ?? '') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($profile) ? 'Update' : 'Save' }}</button>
    </form>    

    <hr>

    <h2>Visi-Misi Ter-Update</h2>
    @if(isset($profile))
        <p>{{ $profile->visi_misi }}</p>
    @else
        <p>No Vision and Mission set yet.</p>
    @endif
@endsection
