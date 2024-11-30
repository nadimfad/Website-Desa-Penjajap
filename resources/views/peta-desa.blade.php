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
            background: linear-gradient(to right, green, #61b14b);
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
    </style>
</head>
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
          <a class="nav-link" href="/profil-desa">Profil Desa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/infografis">Infografis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/peta-desa">Peta Desa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

 
  <p style="font-size: 30px; margin:30px 40px 0px; color:#347928; font-weight: bold;">Peta Desa Penjajap</p>
  <p class="text-muted" style="font-size: 18px; margin:0px 40px 20px;">Menampilkan Peta Desa Dengan Interest Point Desa Penjajap</p>
  <div class="map-container">
    <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12153.866873453797!2d108.97384167364818!3d1.187490384077525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e48325dc3b5689%3A0x9d98909ee32ca45c!2sPenjajap%2C%20Kec.%20Pemangkat%2C%20Kabupaten%20Sambas%2C%20Kalimantan%20Barat!5e1!3m2!1sid!2sid!4v1732296728087!5m2!1sid!2sid" 
    width="100%" 
    height="600px" 
    frameborder="0" 
    style="border: 0;" 
    allowfullscreen>
</iframe>
  </div>
 
  <footer class="footer-container">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="{{ asset('image/logo sambas.png') }}" alt="Logo Desa Penjajap">
            <h3>Desa Penjajap</h3>
            <p>Kecamatan Pemangkat<br>
            Kabupaten Sambas<br>
            Provinsi Kalimantan Barat</p>
        </div>
        
        <div class="contact-info">
            <h4 class="footer-heading">Kontak Desa</h4>
            <p>Nomor Telepon Desa <br>
            123456789</p>
            <p>Email Desa<br>
            desapenjajap@gmail.com</p>
            <p>Senin - Kamis (08.00 - 15.00) &<br>
            Jum'at (08.00 - 11.00)</p>
            <p>Alamat Desa <br>
            Jl. Raya Desa Penjajap</p>
        </div>
  
        <div class="phone-numbers">
            <h4 class="footer-heading">Nomor Telepon Penting</h4>
            <p>Nomor Kades<br>
            08124236848</p>
            <p>Nomor Ambulan Penjajap<br>
            085392095123</p>
            <p>Nomor Polisi<br>
            08123456789</p>
            <p>Nomor Pemadam Kebakaran<br>
            08123456789</p>
        </div>
  
        <div class="links">
            <h4 class="footer-heading">Jelajahi</h4>
            <a href="https://kemendesa.go.id/" style="color: white; text-decoration: none;">Website Kemendesa</a>
            <a href="https://kemendagri.go.id/" style="color: white; text-decoration: none;">Website Kemendagri</a>
            <a href="https://kalbarprov.go.id/" style="color: white; text-decoration: none;">Website Kalimantan Barat</a>
            <a href="https://bkpsdmad.sambas.go.id/" style="color: white; text-decoration: none;">Website Kabupaten Sambas</a>
        </div>
    </div>
  
    <div class="copyright">
        © 2024 Powered by PT Digital Desa Indonesia
    </div>
  </footer>
  
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
