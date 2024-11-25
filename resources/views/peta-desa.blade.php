<!-- resources/views/home.blade.php -->
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
        .custom-card {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px #0000001a;
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        padding-top: 100px;  {

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
    </style>
</head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <!-- Foto di kiri dan teks di samping kanan -->
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
        <!-- Merapikan navbar ke tengah 21-->
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
  <h1>Peta Desa Penjajap</h1>
  <h4>Menampilkan Peta Desa Dengan Interest Point Desa Penjajap</h4>
  <div class="map-container">
      <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12153.866873453797!2d108.97384167364818!3d1.187490384077525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e48325dc3b5689%3A0x9d98909ee32ca45c!2sPenjajap%2C%20Kec.%20Pemangkat%2C%20Kabupaten%20Sambas%2C%20Kalimantan%20Barat!5e1!3m2!1sid!2sid!4v1732296728087!5m2!1sid!2sid" 
          width="100%" 
          height="400px" 
          frameborder="0" 
          style="border: 0;" 
          allowfullscreen>
      </iframe>
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
</body>
