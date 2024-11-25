<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tambahkan CSS framework seperti Bootstrap (opsional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin_asset/css/admin.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            height: 100vh;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }
        .sidebar a:hover {
            background: #495057;
            padding: 5px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="{{ route('admin.home') }}">Dashboard</a>
        <a href="{{ route('admin.profile') }}">Profile Desa</a>
        <a href="{{ route('admin.pengumuman') }}">Pengumuman</a>
        <a href="{{ route('admin.kegiatan') }}">Kegiatan</a>
        <a href="{{ route('admin.kontak') }}">Kontak</a>
        <a href="{{ route('admin.pengguna') }}">Pengguna</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content') <!-- Tempat konten halaman admin -->
    </div>

    <!-- Tambahkan Script (opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
