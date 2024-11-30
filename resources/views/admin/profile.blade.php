@extends('layouts.app')

@section('content')
    <h1>Profile | Visi</h1>

    <!-- Form untuk tambah atau edit visi -->
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

    <h2>Profile | Misi</h2>

    <!-- Form untuk tambah misi -->
    <form action="{{ route('admin.profile.mission.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="mission" class="form-label">Tambah Misi</label>
            <textarea name="mission" class="form-control" rows="2" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>

    <hr>

    <!-- Daftar misi -->
    <h3>Misi List Update</h3>
    @if($missions->isNotEmpty())
        <ul>
            @foreach($missions as $mission)
                <li>
                    {{ $mission->mission }}
                    <!-- Form untuk update misi -->
                    <form action="{{ route('admin.profile.mission.update', $mission->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('PUT')
                        <textarea name="mission" class="form-control" rows="1" required>{{ $mission->mission }}</textarea>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No missions available.</p>
    @endif
    <h3>Visi Update</h3>
    @if(isset($profile))
        <p>{{ $profile->visi_misi }}</p>
    @else
        <p>Belum ada Visi</p>
    @endif
@endsection
