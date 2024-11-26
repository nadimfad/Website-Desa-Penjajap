<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding: 20px;
        }
        .sidebar a {
            color: #ddd;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }
        .sidebar a:hover {
            color: #fff;
            background-color: #495057;
            padding-left: 10px;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>Admin Panel</h3>
        <a href="{{ route('admin.index') }}">Home</a>
        {{-- <a href="{{ route('admin.profile') }}">Profile Desa</a> --}}
        <a href="{{ route('admin.infographics') }}">Infografis</a>
        <a href="{{ route('admin.map') }}">Map</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
