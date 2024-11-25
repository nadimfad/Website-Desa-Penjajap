<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-dark text-white p-3" style="height: 100vh;">
                <h4>Admin Panel</h4>
                <ul class="nav flex-column">
                        <a class="nav-link text-white" href="{{ route('admin.home') }}">Home</a>
                        {{-- <a class="nav-link text-white" href="{{ route('admin.village-gallery.index') }}">Village Gallery</a> --}}
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.infographics') }}">Infographics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.map') }}">Map</a>
                    </li>
                </ul>
            </div>

            <!-- Content Area -->
            <div class="col-md-9 p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
