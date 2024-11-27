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

        <!-- Data Pekerjaan -->
        <h3>Data Pekerjaan</h3>

        <div class="mb-3">
            <label for="students" class="form-label">Jumlah Pelajar</label>
            <input type="number" name="students" class="form-control" value="{{ old('students', $infographic->students ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="unemployed" class="form-label">Jumlah Belum Bekerja</label>
            <input type="number" name="unemployed" class="form-control" value="{{ old('unemployed', $infographic->unemployed ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="housewife" class="form-label">Jumlah Ibu Rumah Tangga</label>
            <input type="number" name="housewife" class="form-control" value="{{ old('housewife', $infographic->housewife ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="private_employee" class="form-label">Jumlah Karyawan Swasta</label>
            <input type="number" name="private_employee" class="form-control" value="{{ old('private_employee', $infographic->private_employee ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="fisherman" class="form-label">Jumlah Nelayan</label>
            <input type="number" name="fisherman" class="form-control" value="{{ old('fisherman', $infographic->fisherman ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="farmer" class="form-label">Jumlah Petani</label>
            <input type="number" name="farmer" class="form-control" value="{{ old('farmer', $infographic->farmer ?? '') }}">
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

    <!-- Display Data -->
    <h2>Data Infografis Terbaru</h2>
    @if(isset($infographic))
        <p><strong>Jumlah Penduduk:</strong> {{ $infographic->population }}</p>
        <p><strong>Kepala Keluarga:</strong> {{ $infographic->households }}</p>
        <p><strong>Jumlah Perempuan:</strong> {{ $infographic->female }}</p>
        <p><strong>Jumlah Laki-laki:</strong> {{ $infographic->male }}</p>
        <p><strong>Jumlah Pelajar:</strong> {{ $infographic->students }}</p>
        <p><strong>Jumlah Belum Bekerja:</strong> {{ $infographic->unemployed }}</p>
        <p><strong>Jumlah Ibu Rumah Tangga:</strong> {{ $infographic->housewife }}</p>
        <p><strong>Jumlah Karyawan Swasta:</strong> {{ $infographic->private_employee }}</p>
        <p><strong>Jumlah Nelayan:</strong> {{ $infographic->fisherman }}</p>
        <p><strong>Jumlah Petani:</strong> {{ $infographic->farmer }}</p>
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
@endsection
