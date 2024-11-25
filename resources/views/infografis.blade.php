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
            width: 100px;
            height: 100px;
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

    <div class="container">
        <div class="custom-card mt-5">
            <h1>Welcome to Desa Penjajap</h1>
            <p>Selamat datang di website resmi Desa Penjajap.</p>
        </div>
    </div>

    <footer class="footer-container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="/api/placeholder/100/100" alt="Logo Desa Kersik">
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
                <div class="visitor-count">
                    <span>578</span> Kunjungan Hari Ini
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
</html>
