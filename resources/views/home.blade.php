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
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
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
            background-color: #EEEEEE;
            border: 10px solid #ddd;
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
            /* height: 250px; */
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
            height: 550px;
            border: none;
        }
        footer {
            margin-top: 30px; /* Menambahkan ruang di atas footer */
        }

        .footer-container {
            background:#347928;
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
          style="width: 80px; height: 75px; object-fit: cover;">
        <div class="nav-tittle">
          <h1 class="mt-1" style="font-size:25px; font-weight: 1000;">Desa Penjajap</h1>
          <h4 class="mt-1" style="font-size: 12px;">Kabupaten Sambas</h4>
        </div>
      </a>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarScroll" style="">
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
      <div class="container mt-5" style="padding-top: 10px;">
        <p class="text-center mb-1 mt-5 font-weight-bold" style="color: #347928; font-size:30px;">Selamat Datang di Website Desa Penjajap</p>
        <p class="text-center mb-3" style="font-size: 14px; color:#4A4947;">Sumber Informasi Tentang Pemerintahan di Desa Penjajap</p>
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
    @foreach($banners as $key=>$banner)
            <div class="carousel-item {{$key == 0 ?'active':''}}">
                <div class="carousel-caption">
                    <h2><a style="font-size: 36px; text-decoration:none; color:#ffffff; font-weight:bold;" href="/infografis">{{$banner->title}}</a></h2>
                    <p>{{$banner->description}}</p>
                </div>
                <img src="{{ $banner->photo ? asset("storage/".$banner->photo) : asset("image/foto1.png") }}" class="d-block w-100" alt="Image 1">
            </div>
        @endforeach
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
      <div class="col-md-4  text-center" style="margin-top: 50px;">
        <img src="{{ asset('image/logo sambas.png') }}" alt="Logo Kabupaten" style="width: 380px; height: 200px; margin-left:-120px;">
      </div>
      <div class="col-md-9" style="margin-left: 270px; margin-top: -200px; border-left: 1px solid black; padding-left:50px;">
          <h1 class="font-weight-bold mb-3" style="color: #347928">Sambutan Kepala Desa</h1>
          <h3 class="mb-1" style="color: #434343; font-weight:600;">{{$sambutans->name}}</h3>
          <h5 class="text-muted mb-4" style="font-size: 16px;">Kepala Desa Penjajap</h5>
          
          <p class="mb-0">Assalamualaikum Warahmatullahi Wabarakatuh.</p>
          <p class="mb-4" style="text-align:justify;">{{$sambutans->descriptions}}</p>
          
          <p>Terima kasih kepada semua pihak yang telah banyak memberi dukungan</p>
          
       
      </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Card Section -->
    
<p class="mt-5 mb-0 text-center" style="text-decoration:underline; padding-top: 50px; font-size:35px; color:#347928; font-weight:bolder;">SOTP</p>
<p class="text-center" style="font-size:18px; color:#4A4947;">Struktur Organisasi dan Tata Kerja Desa Penjajap</p>
<div class="container mt-4">
    <div class="row justify-content-center">
        <!-- Card 1 -->
        @foreach($employees as $employee)
        <div class="col-md-3">
            <div class="custom-card p-4 border d-flex flex-column align-items-center">
                <img src="{{ asset('storage/'.$employee->photo) }}" class="img-fluid mb-3" alt="Image 1" style= "height:200px; border: 1px solid rgb(109, 109, 109); border-radius:10px;">
                <h5 style="font-weight: 800; font-size:18px;">{{$employee->position}}</h5>
                <p>{{$employee->name}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<p class="text-center" style="color:#347928; font-weight:bold; margin-top:100px; margin-bottom:10px; font-size:32px; text-decoration:underline;">Peta Desa Penjajap</p>
<p style="text-align:center; font-size:18px; color:#4A4947; ">Menampilkan Peta Desa Dengan Desa Dengan Interest Point Desa Penjajap</p>
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

<div class="container py-5">
  <div class="row">
      <div class="col-12">
          <p class="mb-0 text-center" style=" margin-top:0px; text-decoration:underline; padding-top: 10px; font-size:36px; color:#347928; font-weight:bolder;">Galeri Desa</p>
          <p class="mb-5" style="margin-top:5px; margin-left:2px; color:#4A4947; font-size:16px; text-align:center;">Menampilkan kegiatan-kegiatan yang berlangsung di desa</p>
      </div>
  </div>

  <div class="row">
      <!-- Gallery Item 1 -->
      @foreach($galleries as $gallery)
      <div class="col-md-4 gallery-item">
          <div class="card border-0 shadow-sm">
              <img src="{{ asset('storage/'.$gallery->photo) }}" class="gallery-img" alt="Kegiatan Makan Bersama">
              <div class="card-body">
                  <h5 class="card-title">{{$gallery->title}}</h5>
                  <p class="card-text text-muted">{{$gallery->description}}</p>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>

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
