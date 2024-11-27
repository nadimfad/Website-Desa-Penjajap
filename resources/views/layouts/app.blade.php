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
                    <li>
                        <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.profile') }}">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="infographicsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Infografis
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            <li class="dropdown dropend">
                                <a class="dropdown-item dropdown-toggle text-white" href="#" id="populationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jumlah Penduduk
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="populationDropdown">
                                    <li><a class="dropdown-item text-white" href="{{ route('admin.infographics', ['filter' => 'TotalPopulation']) }}">Total Penduduk</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('admin.infographics', ['filter' => 'HeadOfFamily']) }}">Kepala Keluarga</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('admin.infographics', ['filter' => 'Female']) }}">Perempuan</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('admin.infographics', ['filter' => 'Male']) }}">Laki-laki</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('admin.infographics', ['filter' => 'Work']) }}">Pekerjaan</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('admin.infographics', ['filter' => 'Religion']) }}">Agama</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('admin.infographics', ['filter' => 'Married']) }}">Data Pernikahan</a>
                            </li>
                        </ul>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>