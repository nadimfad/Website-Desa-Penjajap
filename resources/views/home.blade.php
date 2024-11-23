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
        .navbar-transparent {
  background-color: rgba(255, 255, 255, 0.5); /* Transparan */
  transition: background-color 0.3s ease; /* Animasi transisi */
}

.navbar-solid {
  background-color: rgba(255, 255, 255, 1); /* Warna solid */
  transition: background-color 0.3s ease; /* Animasi transisi */
}

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <!-- Foto di kiri dan teks di samping -->
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4thiZ_5NA1sgROsPdnfDQvmu7UQrNpmEagw&s" 
              alt="Logo" style="width: 80px; height: 70px; object-fit: cover; margin-right: 10px;">
            <div>
              <h3 class="m-0" style="font-size: 16px; font-weight: bold;">Desa Penjajap</h3>
              <h4 class="m-0" style="font-size: 13px;">Kabupaten Sambas</h4>
            </div>
          </a>
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarScroll">
            <!-- Merapikan navbar ke tengah -->
            <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
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
              
          </div>
        </div>
      </nav>
      
      <!-- Menambahkan padding-top yang lebih besar agar konten tidak tertutup -->
      <div class="container mt-5 pt-5" style="padding-top: 120px;">
        <h1 class="text-center mb-4">Welcome to My Simple Laravel Website</h1>
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
            <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <div class="carousel-caption">
                <h2>Title for Image 2</h2>
                <p>Description for Image 2</p>
            </div>
            <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <div class="carousel-caption">
                <h2>Title for Image 3</h2>
                <p>Description for Image 3</p>
            </div>
            <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Image 3">
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

<style>
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
</style>


    <!-- Card Section -->
    <h2>SOTK</h2>
<h4>Struktur Organisasi dan Tata Kerja Desa Penjajap</h4>

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

<h3>Peta Desa Penjajap</h3>
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

<style>
.map-container iframe {
    width: 100%;
    height: 400px;
    border: none;
}

</style>

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
