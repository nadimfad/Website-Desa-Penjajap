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
            height: 450px;
            object-fit: cover;
        }
        .carousel-item {
            position: relative;
            font-family: Arial, sans-serif;
        }
        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            text-align: center;
        }
        .carousel-caption h2 {
           font-size: 2rem;
        }

        .carousel-caption p {
          font-size: 1.2rem;
        }
        
        .gallery-item {
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        .gallery-item:hover {
            transform: scale(1.02);
        }
        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }
        .section-title {
            position: relative;
            padding-bottom: 0px;
            margin-bottom: 0px;
            margin-top: 60px;
        }
        .map-container iframe {
            width: 100%;
            height: 450px;
            border: none;
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
  
      
      <!-- Menambahkan padding-top yang lebih besar agar konten tidak tertutup -->
      <div class="container mt-5 pt-5" style="padding-top: 120px;">
        <h2 class="text-center mb-2 mt-4">Selamat Datang di Website Desa Penjajap</h2>
        <h3 class="text-center mb-3">Sumber Informasi Tentang Pemerintahan di Desa Penjajap</h3>
        <!-- Konten lainnya di sini -->
      </div>
      
      
   <!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption">
                <h2>Title for Image 1</h2>
                <p>Description for Image 1</p>
            </div>
            <img src="{{ asset('image/foto1.png') }}" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <div class="carousel-caption">
                <h2>Title for Image 2</h2>
                <p>Description for Image 2</p>
            </div>
            <img src="{{ asset('image/foto2.png') }}" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <div class="carousel-caption">
                <h2>Title for Image 3</h2>
                <p>Description for Image 3</p>
            </div>
            <img src="{{ asset('image/foto3.png') }}" class="d-block w-100" alt="Image 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Main Content -->
<div class="container mt-5">
  <div class="row align-items-center">
      <div class="col-md-4 text-center">
        <img src="{{ asset('image/logo sambas.png') }}" alt="Logo Kabupaten" style="width: 380px; height: 200px;">


      </div>
      <div class="col-md-8">
          <h1 class="font-weight-bold" style="color: #347928">Sambutan Kepala Desa</h1>
          <h3 class="mb-1">JUMADI</h3>
          <h5 class="text-muted mb-4">Kepala Desa Kersik</h5>
          
          <p class="mb-0">Assalamualaikum Warahmatullahi Wabarakatuh.</p>
          
          <p class="mb-4">Website ini hadir sebagai wujud transformasi desa Kersik menjadi desa yang 
          mampu memanfaatkan teknologi informasi dan komunikasi, terintegrasi kedalam sistem online. 
          Keterbukaan informasi publik, pelayanan publik dan kegiatan perekonomian di desa, 
          guna mewujudkan desa Kersik sebagai desa wisata yang berkelanjutan, adaptasi dan 
          mitigasi terhadap perubahan iklim serta menjadi desa yang mandiri.</p>
          
          <p>Terima kasih kepada semua pihak yang telah banyak memberi dukungan</p>
          
       
      </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Card Section -->
    
<p class="mt-5 mb-0" style="padding-top: 50px; margin-left:70px; font-size:35px; color:#347928; font-weight:bolder; ">SOTK</p>
<p style="margin-left: 70px; font-size:22px;">Struktur Organisasi dan Tata Kerja Desa Penjajap</p>

<div class="container mt-4">
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="custom-card p-4 border d-flex flex-column align-items-center">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Image 1">
                <h5>Nama Foto 1</h5>
                <p>This is a simple card with custom style applied using inline CSS.</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="custom-card p-4 border d-flex flex-column align-items-center">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Image 2">
                <h5>Nama Foto 2</h5>
                <p>This is another card with custom styling applied.</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-3">
            <div class="custom-card p-4 border d-flex flex-column align-items-center">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Image 3">
                <h5>Nama Foto 3</h5>
                <p>This is the third card with similar style as the others.</p>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-3">
            <div class="custom-card p-4 border d-flex flex-column align-items-center">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Image 4">
                <h5>Nama Foto 4</h5>
                <p>This is the fourth card with similar style as the others.</p>
            </div>
        </div>
    </div>
</div>

<h3 class="mt-5" style="margin-left: 70px; color:#347928; font-weight:bold; ">Peta Desa Penjajap</h3>
<p style="margin-left: 70px; font-size:18px; ">Menampilkan Peta Desa Dengan Desa Dengan Interest Point Desa Penjajap</p>
<div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12153.866873453797!2d108.97384167364818!3d1.187490384077525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e48325dc3b5689%3A0x9d98909ee32ca45c!2sPenjajap%2C%20Kec.%20Pemangkat%2C%20Kabupaten%20Sambas%2C%20Kalimantan%20Barat!5e1!3m2!1sid!2sid!4v1732296728087!5m2!1sid!2sid" 
    width="350" 
    height="350" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div>

<div class="container py-5">
  <div class="row">
      <div class="col-12">
          <h2 class=" font-weight-bold section-title" style="color:#347928;">GALERI DESA</h2>
          <p class="text-normal mb-5" style="margin-top:5px; margin-left:2px;">Menampilkan kegiatan-kegiatan yang berlangsung di desa</p>
      </div>
  </div>

  <div class="row">
      <!-- Gallery Item 1 -->
      <div class="col-md-4 gallery-item">
          <div class="card border-0 shadow-sm">
              <img src="{{ asset('image/foto4.png') }}" class="gallery-img" alt="Kegiatan Makan Bersama">
              <div class="card-body">
                  <h5 class="card-title">Penyebrangan Masyarakat</h5>
                  <p class="card-text text-muted">Penyebrangan masyarakat di pelabuhan penjajap</p>
              </div>
          </div>
      </div>

      <!-- Gallery Item 2 -->
      <div class="col-md-4 gallery-item">
          <div class="card border-0 shadow-sm">
              <img src="{{ asset('image/foto5.png') }}" class="gallery-img" alt="Pelatihan">
              <div class="card-body">
                  <h5 class="card-title">Pertemuan Warga</h5>
                  <p class="card-text text-muted">Pertemuan Rutin Yang Dilakukan Oleh Warga Desa Penjajap</p>
              </div>
          </div>
      </div>

      <!-- Gallery Item 3 -->
      <div class="col-md-4 gallery-item">
          <div class="card border-0 shadow-sm">
              <img src="{{asset ('image/foto6.png')}}" class="gallery-img" alt="Olahraga">
              <div class="card-body">
                  <h5 class="card-title">Tempat Pelelangan Ikan</h5>
                  <p class="card-text text-muted">Tempat Pelelangan Ikan Yang Ada di Desa Penjajap</p>
              </div>
          </div>
      </div>

      <!-- Gallery Item 4 -->
      <div class="col-md-4 gallery-item">
          <div class="card border-0 shadow-sm">
              <img src="{{asset ('image/foto7.png')}}" class="gallery-img" alt="Musrenbang">
              <div class="card-body">
                  <h5 class="card-title">Musrenbang Desa</h5>
                  <p class="card-text text-muted">Musyawarah Perencanaan Pembangunan Desa</p>
              </div>
          </div>
      </div>

      <!-- Gallery Item 5 -->
      <div class="col-md-4 gallery-item">
          <div class="card border-0 shadow-sm">
              <img src="{{asset ('image/foto9.png')}}" class="gallery-img" alt="Pertemuan Warga">
              <div class="card-body">
                  <h5 class="card-title">Pertemuan Warga</h5>
                  <p class="card-text text-muted">Pertemuan rutin warga desa</p>
              </div>
          </div>
      </div>

      <!-- Gallery Item 6 -->
      <div class="col-md-4 gallery-item">
          <div class="card border-0 shadow-sm">
              <img src="{{asset ('image/foto10.png')}}" class="gallery-img" alt="Kunjungan Tim">
              <div class="card-body">
                  <h5 class="card-title">Kunjungan Tim Juri</h5>
                  <p class="card-text text-muted">Kunjungan tim penilai ke desa</p>
              </div>
          </div>
      </div>
  </div>
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

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
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
