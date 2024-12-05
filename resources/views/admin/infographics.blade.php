@extends('layouts.app')

@section('title', 'Infografis - Jumlah Penduduk & Kepala Keluarga')

@section('content')
    <h2>Form Infografis | Jumlah Penduduk</h2>

    <!-- Form untuk tambah atau edit data -->
    <form action="{{ isset($infographic) ? route('admin.infographics.update', $infographic) : route('admin.infographics.store') }}" method="POST">
        @csrf
        @if(isset($infographic))
            @method('PUT')
        @endif

        <!-- Data Umum -->
        <div class="mb-3">
            <label for="population" class="form-label">Jumlah Penduduk</label>
            <input type="number" name="population" class="form-control" value="{{ old('population', $infographic->population ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="households" class="form-label">Jumlah Kepala Keluarga</label>
            <input type="number" name="households" class="form-control" value="{{ old('households', $infographic->households ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="female" class="form-label">Jumlah Perempuan</label>
            <input type="number" name="female" class="form-control" value="{{ old('female', $infographic->female ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="male" class="form-label">Jumlah Laki-laki</label>
            <input type="number" name="male" class="form-control" value="{{ old('male', $infographic->male ?? '') }}" required>
        </div>

        <!-- Data Agama -->
        <h3>Data Agama</h3>
        
    <div class="mb-3">
        <label for="islam" class="form-label">Islam</label>
        <input type="number" name="islam" class="form-control" value="{{ old('islam', $infographic->islam ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="kristen" class="form-label">Kristen</label>
        <input type="number" name="kristen" class="form-control" value="{{ old('kristen', $infographic->kristen ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="katolik" class="form-label">Katholik</label>
        <input type="number" name="katolik" class="form-control" value="{{ old('katolik', $infographic->katolik ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="buddha" class="form-label">Buddha</label>
        <input type="number" name="buddha" class="form-control" value="{{ old('buddha', $infographic->buddha ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="hindu" class="form-label">Hindu</label>
        <input type="number" name="hindu" class="form-control" value="{{ old('hindu', $infographic->hindu ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="konghucu" class="form-label">Konghucu</label>
        <input type="number" name="konghucu" class="form-control" value="{{ old('konghucu', $infographic->konghucu ?? '') }}">
    </div>

    <!-- Data Perkawinan -->
    <h3>Data Kawin</h3>

    <div class="mb-3">
        <label for="belum_kawin" class="form-label">Belum Kawin</label>
        <input type="number" name="belum_kawin" class="form-control" value="{{ old('belum_kawin', $infographic->belum_kawin ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="kawin" class="form-label">Kawin</label>
        <input type="number" name="kawin" class="form-control" value="{{ old('kawin', $infographic->kawin ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="cerai_mati" class="form-label">Cerai Mati</label>
        <input type="number" name="cerai_mati" class="form-control" value="{{ old('cerai_mati', $infographic->cerai_mati ?? '') }}">
    </div>
    
    <div class="mb-3">
        <label for="kawin_tercatat" class="form-label">Kawin Tercatat</label>
        <input type="number" name="kawin_tercatat" class="form-control" value="{{ old('kawin_tercatat', $infographic->kawin_tercatat ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="kawin_tidak_tercatat" class="form-label">Kawin Tidak Tercatat</label>
        <input type="number" name="kawin_tidak_tercatat" class="form-control" value="{{ old('kawin_tidak_tercatat', $infographic->kawin_tidak_tercatat ?? '') }}">
    </div>
    
    <div class="mb-3">
        <label for="cerai_hidup" class="form-label">Cerai Hidup</label>
        <input type="number" name="cerai_hidup" class="form-control" value="{{ old('cerai_hidup', $infographic->cerai_hidup ?? '') }}">
    </div>

        <button type="submit" class="btn btn-primary">{{ isset($infographic) ? 'Update' : 'Save' }}</button>
    </form>

    <hr>
    <!-- Data Pekerjaan -->
    <h3>Data Pekerjaan</h3>
<!-- Form untuk tambah pekerjaan -->
<form action="{{ route('admin.infographics.storeJob') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="job_type" class="form-label">Jenis Pekerjaan</label>
        <input type="text" name="job_type" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Jumlah</label>
        <input type="number" name="total" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Tambah Pekerjaan</button>
</form>


<!-- Display Data Umum -->
<h2>Data Infografis Terbaru</h2>
    @if(isset($infographic))
        <p><strong>Jumlah Penduduk:</strong> {{ $infographic->population }}</p>
        <p><strong>Kepala Keluarga:</strong> {{ $infographic->households }}</p>
        <p><strong>Jumlah Perempuan:</strong> {{ $infographic->female }}</p>
        <p><strong>Jumlah Laki-laki:</strong> {{ $infographic->male }}</p>
        <p><strong>Jumlah Islam:</strong> {{ $infographic->islam }}</p>
        <p><strong>Jumlah Kristen:</strong>{{ $infographic->kristen }}</p>
        <p><strong>Jumlah Katolik:</strong> {{ $infographic->katolik }}</p>
        <p><strong>Jumlah Buddha:</strong> {{ $infographic->buddha }}</p>
        <p><strong>Jumlah Hindu:</strong> {{ $infographic->hindu }}</p>
        <p><strong>Jumlah Konghucu:</strong> {{ $infographic->konghucu }}</p>
        <p><strong>Jumlah Belum Kawin</strong>{{ $infographic->belum_kawin }}</p>
        <p><strong>Jumlah Kawin:</strong> {{ $infographic->kawin }}</p>
        <p><strong>Jumlah Cerai Mati:</strong>{{ $infographic->cerai_mati }}</p>
        <p><strong>Jumlah Kawin Tercatat:</strong> {{ $infographic->kawin_tercatat }}</p>
        <p><strong>Jumlah Kawin Tidak Tercatat:</strong>{{ $infographic->kawin_tidak_tercatat}}</p>
        <p><strong>Jumlah Cerai Hidup:</strong>{{ $infographic->cerai_hidup }}</p>
    @else
    <p>Belum ada data tersedia.</p>
    @endif
    <!-- Display Data Pekerjaan -->
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Jenis Pekerjaan</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $job->job_type }}</td>
                    <td>{{ $job->total }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('admin.infographics.editJob', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
    
                        <!-- Tombol Hapus -->
                        <form action="{{ route('admin.infographics.destroyJob', $job->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pekerjaan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
