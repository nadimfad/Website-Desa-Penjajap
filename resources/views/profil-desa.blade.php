<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Penjajap - Statistik</title>
    <!-- Bootstrap CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            margin-bottom: 20px;
        }
        .stat-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .stat-icon {
            width: 64px;
            height: 64px;
            object-fit: contain;
        }
        .stat-info h3 {
            color: #666;
            font-size: 1.25rem;
            margin-bottom: 5px;
            font-weight: normal;
        }
        .stat-value {
            color: #f44336;
            font-size: 2rem;
            font-weight: bold;
        }
        @media (max-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 640px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4thiZ_5NA1sgROsPdnfDQvmu7UQrNpmEagw&s" 
                    alt="Logo" style="width: 80px; height: 70px; object-fit: cover; margin-right: 10px;">
                <div>
                    <h3 class="m-0" style="font-size: 16px; font-weight: bold;">Desa Penjajap</h3>
                    <h4 class="m-0" style="font-size: 13px;">Kabupaten Sambas</h4>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/profil-desa">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/infografis">Infografis</a></li>
                    <li class="nav-item"><a class="nav-link" href="/peta-desa">Peta Desa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="text-center text-danger mb-5">Statistik Berdasarkan Perkawinan dan Agama</h1>

        <!-- Statistik Berdasarkan Perkawinan -->
        <h2 class="text-center mb-4">Berdasarkan Perkawinan</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="stat-card">
                    <img src="/api/placeholder/64/64" alt="Belum Kawin" class="stat-icon">
                    <div class="stat-info">
                        <h3>Belum Kawin</h3>
                        <div class="stat-value">606</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <img src="/api/placeholder/64/64" alt="Kawin" class="stat-icon">
                    <div class="stat-info">
                        <h3>Kawin</h3>
                        <div class="stat-value">457</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <img src="/api/placeholder/64/64" alt="Cerai Mati" class="stat-icon">
                    <div class="stat-info">
                        <h3>Cerai Mati</h3>
                        <div class="stat-value">70</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <img src="/api/placeholder/64/64" alt="Kawin Tercatat" class="stat-icon">
                    <div class="stat-info">
                        <h3>Kawin Tercatat</h3>
                        <div class="stat-value">0</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <img src="/api/placeholder/64/64" alt="Kawin Tidak Tercatat" class="stat-icon">
                    <div class="stat-info">
                        <h3>Kawin Tidak Tercatat</h3>
                        <div class="stat-value">0</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <img src="/api/placeholder/64/64" alt="Cerai Hidup" class="stat-icon">
                    <div class="stat-info">
                        <h3>Cerai Hidup</h3>
                        <div class="stat-value">0</div>
                    </div>
                </div>
            </div>
        </div>

     <!-- Statistik Berdasarkan Agama -->
<h2 class="text-center mt-5 mb-4">Berdasarkan Agama</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Islam -->
    <div class="col">
        <div class="stat-card">
            <img src="https://cdn.digitaldesa.com/statics/profil-v2/assets/icon-islam-B2-fwtBi.svg" alt="Islam" class="stat-icon">
            <div class="stat-info">
                <h3>Islam</h3>
                <div class="stat-value">1.135</div>
            </div>
        </div>
    </div>

    <!-- Buddha -->
    <div class="col">
        <div class="stat-card">
            <img src="https://cdn.digitaldesa.com/statics/profil-v2/assets/icon-buddha.svg" alt="Buddha" class="stat-icon">
            <div class="stat-info">
                <h3>Buddha</h3>
                <div class="stat-value">0</div>
            </div>
        </div>
    </div>

    <!-- Konghucu -->
    <div class="col">
        <div class="stat-card">
            <img src="https://cdn.digitaldesa.com/statics/profil-v2/assets/icon-konghucu.svg" alt="Konghucu" class="stat-icon">
            <div class="stat-info">
                <h3>Konghucu</h3>
                <div class="stat-value">0</div>
            </div>
        </div>
    </div>

    <!-- Kristen -->
    <div class="col">
        <div class="stat-card">
            <img src="https://cdn.digitaldesa.com/statics/profil-v2/assets/icon-kristen.svg" alt="Kristen" class="stat-icon">
            <div class="stat-info">
                <h3>Kristen</h3>
                <div class="stat-value">0</div>
            </div>
        </div>
    </div>

    <!-- Katolik -->
    <div class="col">
        <div class="stat-card">
            <img src="https://cdn.digitaldesa.com/statics/profil-v2/assets/icon-katolik.svg" alt="Katolik" class="stat-icon">
            <div class="stat-info">
                <h3>Katolik</h3>
                <div class="stat-value">0</div>
            </div>
        </div>
    </div>

    <!-- Hindu -->
    <div class="col">
        <div class="stat-card">
            <img src="https://cdn.digitaldesa.com/statics/profil-v2/assets/icon-hindu.svg" alt="Hindu" class="stat-icon">
            <div class="stat-info">
                <h3>Hindu</h3>
                <div class="stat-value">0</div>
            </div>
        </div>
    </div>

    <!-- Khonghucu -->
    <div class="col">
        <div class="stat-card">
            <img src="https://cdn.digitaldesa.com/statics/profil-v2/assets/icon-konghucu.svg" alt="Khonghucu" class="stat-icon">
            <div class="stat-info">
                <h3>Khonghucu</h3>
                <div class="stat-value">0</div>
            </div>
        </div>
    </div>

    <!-- Lainnya -->
    <div class="col">
        <div class="stat-card">
            <img src="https://cdn.digitaldesa.com/statics/profil-v2/assets/icon-lainnya.svg" alt="Lainnya" class="stat-icon">
            <div class="stat-info">
                <h3>Lainnya</h3>
                <div class="stat-value">0</div>
            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-light py-3 text-center">
        <p>&copy; 2024 Desa Penjajap - Kabupaten Sambas</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
