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
  
      </div>
    </div>
  </nav>

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
</body>
