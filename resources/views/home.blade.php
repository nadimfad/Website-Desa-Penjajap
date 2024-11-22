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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
      
            <!-- Tombol search di pojok kanan -->
            <form class="d-flex ms-auto">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
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

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
