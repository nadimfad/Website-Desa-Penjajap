<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Laravel Website</title>
    <!-- Bootstrap CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 70px; /* Untuk menghindari navbar fixed-top menutupi konten */
        }
        .navbar-transparent {
            background-color: rgba(255, 255, 255, 0.5); /* Transparan */
            transition: background-color 0.3s ease; /* Animasi transisi */
        }

        .navbar-solid {
            background-color: rgba(255, 255, 255, 1); /* Warna solid */
            transition: background-color 0.3s ease; /* Animasi transisi */
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
        .custom-card {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px #0000001a;
        }
        .logo-img {
            width: 50px;
            height: auto;
        }
        .job-list {
            max-height: 500px;
            overflow-y: auto;
        }
        .navbar-nav .nav-item {
            margin-right: 15px; /* Memberikan jarak antar item */
        }
        .navbar-nav .nav-item:last-child {
            margin-right: 0; /* Menghilangkan margin pada item terakhir */
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }

        footer {
            margin-top: 30px; /* Menambahkan ruang di atas footer */
        }

        .footer-container {
            background: linear-gradient(to right, #f02b2b, #ff6b6b);
            padding: 2rem;
            color: white;
            font-family: Arial, sans-serif;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .footer-logo {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .pekerjaan h4 {
            font-size: 12px;
            font-weight: 600
        }

        .pekerjaan h2 {
            font-size: 2.7rem;
        }

        .footer-logo img {
            width: 250px;
            height: 130px;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-icons a {
            color: white;
            text-decoration: none;
        }

        .visitor-count {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            display: inline-block;
        }

        .contact-info, .phone-numbers, .links {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .footer-heading {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .copyright {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 1024px) {
        .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <!-- Foto di kiri dan teks di samping -->
          <a class="navbar-brand d-flex align-items-" href="/">
            <img src="{{ asset('image/logo sambas.png') }}" alt="logo" 
              alt="Logo" style="width: 80px; height: 75px; object-fit: cover; margin-right: 10px;">
            <div>
              <h1 class="m-2" style="font-size: 18px; font-weight: bold;">Desa Penjajap</h1>
              <h4 class="m-2" style="font-size: 13px;">Kabupaten Sambas</h4>
            </div>
          </a>
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarScroll">
            <!-- Merapikan navbar ke tengah -->
            <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profil-desa">Profil Desa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/infografis">Infografis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/peta-desa">Peta Desa</a>
              </li>
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
      </div>
  <!-- Main Content -->
  <div class="container mt-5">
    <h2 class="mb-4">Berdasarkan Pekerjaan</h2>
    <div class="col d-flex">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body ">
                    <h4 class="card-title">Jenis Pekerjaan</h4>
                    <div class="job-list">
                        <table class="table table-borderless" >
                            <tbody>
                                <tr>
                                    <td>Pelajar/Mahasiswa</td>
                                    <td>316</td>
                                </tr>
                                <tr>
                                    <td>Belum/Tidak Bekerja</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>Mengurus Rumah Tangga</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>Karyawan Swasta</td>
                                    <td>108</td>
                                </tr>
                                <tr>
                                    <td>Nelayan/Perikanan</td>
                                    <td>51</td>
                                </tr>
                                <tr>
                                    <td>Petani/Pekebun</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>Wiraswasta</td>
                                    <td>27</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 pekerjaan">
        <div class="col">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Pelajar/Mahasiswa</h4>
                    <h2 class="display-4 text-center">316</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Belum/Tidak Bekerja</h4>
                    <h2 class="display-4 text-center">270</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Mengurus Rumah Tangga</h4>
                    <h2 class="display-4 text-center">270</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Karyawan Swasta</h4>
                    <h2 class="display-4 text-center">108</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Nelayan/Perikanan</h4>
                    <h2 class="display-4 text-center">51</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Petani/Pekebun</h4>
                    <h2 class="display-4 text-center">40</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


    <footer class="footer-container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="{{ asset('image/logo sambas.png') }}" alt="Logo Desa Kersik">
                <h3>Desa Kersik</h3>
                <p>Kecamatan Marang Kayu<br>
                Kabupaten Kutai Kartanegara<br>
                Provinsi Kalimantan Timur</p>
                <div class="social-icons">
                    <a href="#">📘</a>
                    <a href="#">📸</a>
                    <a href="#">𝕏</a>
                    <a href="#">▶️</a>
                    <a href="#">📱</a>
                </div>
            </div>

            <div class="contact-info">
                <h4 class="footer-heading">Kontak Desa</h4>
                <p>082150208664</p>
                <p>kersik.marangkayu@kukarkab.go.i</p>
                <p>Senin - Kamis (08.00 - 15.00) &<br>
                Jum'at (08.00 - 11.00)</p>
                <p>Jalan Langaseng Dusun Empang<br>
                RT.003</p>
            </div>

            <div class="phone-numbers">
                <h4 class="footer-heading">Nomor Telepon Penting</h4>
                <p>Jumadi/Kades Kersik<br>
                08124236847</p>
                <p>Yayan/Ambulan Kersik<br>
                085392095123</p>
            </div>

            <div class="links">
                <h4 class="footer-heading">Jelajahi</h4>
                <a href="#" style="color: white; text-decoration: none;">Website Kemendesa</a>
                <a href="#" style="color: white; text-decoration: none;">Website Kemendagri</a>
                <a href="#" style="color: white; text-decoration: none;">Website Kabupaten Kutai Kartanegara</a>
                <a href="#" style="color: white; text-decoration: none;">Cek DPT Online</a>
            </div>
        </div>

        <div class="copyright">
            © 2024 Powered by PT Digital Desa Indonesia
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          const navbar = document.querySelector(".navbar");
      
          window.addEventListener("scroll", function () {
            if (window.scrollY > 50) { // Jika halaman digulir lebih dari 50px
              navbar.classList.remove("navbar-light", "bg-light");
              navbar.classList.add("navbar-transparent");
            } else {
              navbar.classList.remove("navbar-transparent");
              navbar.classList.add("navbar-light", "bg-light");
            }
          });
        });
      </script>
    
</body>
</html>
