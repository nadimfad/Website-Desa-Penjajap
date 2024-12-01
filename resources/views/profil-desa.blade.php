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
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top: 100px; 
        }
        .nav-tittle {
            color: #347928;
        }
        .nav-tittle.scrolled {
             color: #E9EFEC; /* Warna setelah scroll */    
        }

        .navbar-transparent {
            background-color: rgba(255, 255, 255, 0.5); /* Transparan */
            transition: background-color 0.3s ease;
        }

        .navbar-solid {
            background-color:#347928; /* Warna solid */
            transition: background-color 0.3s ease;
        }

        .navbar .nav-link {
            color: #347928; /* Warna default teks */
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar .nav-link:hover::after,
        .navbar .nav-link.active::after {
            content: "";
            position: absolute;
            bottom: -2px; /* Posisi garis berada di bawah teks */
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #C0EBA6; /* Warna garis hijau */
            transition: all 0.3s ease;
        }

        .navbar .nav-link.active {
            color: green; /* Ubah warna teks saat menu aktif */
        }


        .navbar.scrolled .nav-link {
            color: #E9EFEC;
        }
            
        
        .navbar-nav .nav-item {
            margin-right: 17px; /* Memberikan jarak antar item */
        }

        .navbar-nav .nav-item:last-child {
            margin-right: 0; /* Menghilangkan margin pada item terakhir */
        }

        .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='red' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
        /* .navbar-transparent {
            background-color: rgba(255, 255, 255, 0.5); 
            transition: background-color 0.3s ease; 
        }

        .navbar-solid {
            background-color: rgba(255, 255, 255, 1); 
            transition: background-color 0.3s ease; 
        }
        .navbar-nav .nav-item {
            margin-right: 15px; 
        }
        .navbar-nav .nav-item:last-child {
            margin-right: 0; 
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        } */
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
            background: #347928;
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
            height: auto;
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
    <nav class="navbar navbar-expand-lg navbar-transparent fixed-top">
        <div class="container-fluid">
          <!-- Foto di kiri dan teks di samping -->
          <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('image/logo sambas.png') }}" alt="logo" 
              style="width: 80px; height: 75px; object-fit: cover; margin-right: 10px;">
            <div class="nav-tittle">
              <h1 class="m-2" style="font-size:20px; font-weight: bold;">Desa Penjajap</h1>
              <h4 class="m-2" style="font-size: 15px;">Kabupaten Sambas</h4>
            </div>
          </a>
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarScroll">
            <!-- Merapikan navbar ke tengah -->
            <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height:100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/profil-desa">Profil Desa</a>
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
                    <h2 class="mb-3" style="color: #347928; font-weight:bold " >DESA PENJAJAP</h2>
                    <p class="text-muted fw-bold">Kecamatan Pemangkat, Kabupaten Sambas, Provinsi Kalimantan Barat</p>
                    <div class="visitor-count d-inline-block"></div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title mb-4">VISI</h3>
                            <p class="card-text">{{$profiles->visi_misi}}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-4">MISI</h3>
                            <ol class="list-group list-group-flush list-group-numbered">
                                @foreach ($missions as $m)
                                <li class="list-group-item">{{$m->mission}}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagan Desa -->
        <p class="text-center" style="font-weight:bold; color:#347928; font-size:32px; margin-bottom:0px;">Bagan Desa</p>
        <p class="text-center text-muted" style="font-size: 18px;">Bagan Struktur Desa Penjajap</p>
        <img src="https://cdn.digitaldesa.com/uploads/profil/64.02.17.2005/common/f6f6d96a1cd6ee00b0df15c9ff8a2ae1.png" alt="" style="width: 100%; height: auto; padding:0px 50px; ">

        <!-- STRUKTUR ORGANISASI BADAN PERMUSYAWARATAN DESA -->
        <p class="text-center"  style="font-weight:bold; color:#347928; font-size:30px; margin-top:40px; margin-bottom:0px;">STRUKTUR ORGANISASI BADAN PERMUSYAWARATAN DESA</p>
        <img src="https://cdn.digitaldesa.com/uploads/profil/64.02.17.2005/common/f3070a5e9163d61f162d16e39d50f4e4.jpg" alt="" style="width: 100%; height: auto; padding:10px 50px; ">
    

    <!-- Footer -->
    <footer class="footer-container">
        <div class="footer-content">
            <div class="footer-logo" style="border-right: 1px solid white;">
                <img src="{{ asset('image/logo sambas.png') }}" alt="Logo Desa Penjajap">
                <h3 style="margin-left:30px; font-weight:bolder;">Desa Penjajap</h3>
                <p style="margin-left:30px; font-size:14px;">Kecamatan Pemangkat<br>
                Kabupaten Sambas<br>
                Provinsi Kalimantan Barat</p>
            </div>
            
            <div class="contact-info">
                <h4 class="footer-heading" style="font-size: 26px; font-weight:bold">Kontak Desa</h4>
                <p style="font-size: 18px; margin-bottom:-7px;">Nomor Telepon Desa</p>
                  <p style="font-size: 15px;">123456789</p>
                <p style="font-size: 18px; margin-bottom:-7px;">Email Desa</p>
                  <p style="font-size: 15px;">desapenjajap@gmail.com</p>
                <p style="font-size: 18px; ">Senin - Kamis (08.00 - 15.00) &<br>
                  Jum'at (08.00 - 11.00)</p>
                <p style="font-size: 18px; margin-bottom:-7px;">Alamat Desa </p>
                  <p style="font-size: 15px;"> Raya Desa Penjajap</p>
            </div>
      
            <div class="phone-numbers">
                <h4 class="footer-heading" style="font-size: 24px; font-weight:bold">Nomor Telepon Penting</h4>
                <p style="font-size: 18px; margin-bottom:-7px;">Nomor Kades</p>
                  <p style="font-size: 15px;">08124236848</p>
                <p style="font-size: 18px; margin-bottom:-7px;">Nomor Ambulan Penjajap</p>
                  <p style="font-size: 15px;">085392095123</p>
                <p style="font-size: 18px; margin-bottom:-7px;">Nomor Polisi</p>
                  <p style="font-size: 15px;">08123456789</p>
                <p style="font-size: 18px; margin-bottom:-7px;">Nomor Pemadam Kebakaran</p>
                  <p style="font-size: 15px;">08123456789</p>
            </div>
      
            <div class="links" style="margin-left: 50px;">
                <h4 class="footer-heading" style="font-size: 26px; font-weight:bold;">Jelajahi</h4>
                <a href="https://kemendesa.go.id/" style="color: white; margin-bottom:10px; font-size:18px; text-decoration: none;">Website Kemendesa</a>
                <a href="https://kemendagri.go.id/" style="color: white; margin-bottom:10px; font-size:18px; text-decoration: none;">Website Kemendagri</a>
                <a href="https://kalbarprov.go.id/" style="color: white; margin-bottom:10px; font-size:18px; text-decoration: none;">Website Kalimantan Barat</a>
                <a href="https://bkpsdmad.sambas.go.id/" style="color: white; margin-bottom:10px; font-size:18px; text-decoration: none;">Website Kabupaten Sambas</a>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.querySelector(".navbar");
        const navTitle = document.querySelector(".nav-tittle");
        const navLink = document.querySelector(".navbar");
      
        window.addEventListener("scroll", function () {
          if (window.scrollY > 50) { // Jika halaman digulir lebih dari 50px
            navbar.classList.remove("navbar-transparent");
            navbar.classList.add("navbar-solid");
            navTitle.classList.add("scrolled");
            navLink.classList.add("scrolled");
          } else {
            navbar.classList.remove("navbar-solid");
            navbar.classList.add("navbar-transparent");
            navTitle.classList.remove("scrolled");
            navLink.classList.remove("scrolled");
          }
        });
      });
      </script>
</body>
</html>
