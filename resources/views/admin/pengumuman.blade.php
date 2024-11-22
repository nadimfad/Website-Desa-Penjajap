@extends('layouts.admin') <!-- Menggunakan Layout -->
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('public/admin_asset/css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Panel</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.profile') }}">Profile Desa</a></li>
                <li><a href="{{ route('admin.pengumuman') }}">Pengumuman</a></li>
                <li><a href="{{ route('admin.kegiatan') }}">Kegiatan</a></li>
                <li><a href="{{ route('admin.kontak') }}">Kontak</a></li>
                <li><a href="{{ route('admin.pengguna') }}">Pengguna</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Manage your content from the sidebar.</p>
        </div>
    </div>
</body>
</html>
@endsection