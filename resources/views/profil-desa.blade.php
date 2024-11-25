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
            padding-top: 100px; 
        }
        .navbar-transparent {
            background-color: rgba(255, 255, 255, 0.5); /* Transparan */
            transition: background-color 0.3s ease; /* Animasi transisi */
        }

        .navbar-solid {
            background-color: rgba(255, 255, 255, 1); /* Warna solid */
            transition: background-color 0.3s ease; /* Animasi transisi */
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
        .logo-img {
            width: 100px;
            height: auto;
        }
        .main-logo {
            width: 550px;
            height: auto;
            margin-top: 10px;
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
          <!-- Foto di kiri dan teks di samping v2-->
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
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profil-desa">Profil Desa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/infografis">Infografis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/peta-desa">Peta Desa</a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>

        <!-- Visi Misi -->
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('image/logo sambas.png') }}" alt="Logo Desa Kersik" class="main-logo mb-1">
                    <h2 class="mb-3">DESA KERSIK</h2>
                    <p class="text-muted fw-bold">Kecamatan Marang Kayu, Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur</p>
                    <div class="visitor-count d-inline-block"></div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title mb-4">VISI</h2>
                            <p class="card-text">"Desa Kersik sebagai Desa Wisata yang mampu mengelola potensi Desa dan pembangunan berkelanjutan untuk mewujudkan masyarakat yang sejahtera"</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mb-4">MISI</h2>
                            <ol class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">Mewujudkan tata kelola pemerintahan yang baik</li>
                                <li class="list-group-item">Mengembangkan kegiatan keagamaan</li>
                                <li class="list-group-item">Meningkatkan kualitas pendidikan dan sumber daya manusia</li>
                                <li class="list-group-item">Mengembangkan teknologi informasi</li>
                                <li class="list-group-item">Pembangunan infrastruktur, sarana dan prasarana</li>
                                <li class="list-group-item">Mengembangkan seluruh usaha potensi desa</li>
                                <li class="list-group-item">Meningkatkan kualitas dan membangun kesadaran kesehatan masyarakat</li>
                                <li class="list-group-item">Meningkatkan perekonomian dan kesejahteraan masyarakat</li>
                                <li class="list-group-item">Membangun kerjasama dan kemitraan strategis</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
      

    <!-- Footer -->
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

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
