<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('assets/img/logo1.png') }}">
    <title>Wakaf Yuk!</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .navbar-brand img {
          height: 60px;
        }
    
        .carousel-item img {
          height: 450px;
          object-fit: cover;
          border-radius: 20px;
        }
    
        .carousel-indicators-custom {
          position: absolute;
          bottom: 10px;
          left: 50%;
          transform: translateX(-50%);
          display: flex;
          justify-content: center;
          gap: 10px;
        }
    
        .carousel-indicators-custom div {
          width: 50px;
          height: 3px;
          background-color: #bbb;
          transition: background-color 0.3s;
        }
    
        .carousel-indicators-custom .active {
          background-color: #444;
        }

    /* Style untuk section */
    .custom-section {
      background-color: white;
      border-radius: 20px;
      padding: 40px;
      margin-top: 50px;
    }

    /* Header Text */
    .section-header {
      text-align: center;
      margin-bottom: 50px;
    }

    .section-header h2 {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .section-header p {
      color: #6c757d;
    }

    /* Divider (garis pemisah) */
    .divider {
      height: 1px;
      background-color: rgba(0, 0, 0, 0.1);
      margin: 40px 0;
    }

    /* Style untuk kolom */
    .custom-column h3 {
      font-weight: bold;
      margin-bottom: 20px;
    }

    .custom-column ul {
      padding-left: 0;
      list-style: none;
    }

    .custom-column ul li {
      margin-bottom: 10px;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
      .custom-section {
        padding: 20px;
      }
    }
      </style>
    </head>
    <body>
    
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="assets/img/logo1.png" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link mx-4" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-4" href="#">Program Wakaf</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-4" href="#">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-4" href="#">Laporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-4" href="#">Tentang Kami</a>
              </li>
            </ul>
            <div class="d-flex">
              <button class="btn btn-outline-dark me-4">Masuk</button>
              <button class="btn btn-success">Daftar</button>
            </div>
          </div>
        </div>
      </nav>
    
      <!-- Carousel Section -->
      <div class="container mt-5 position-relative">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://via.placeholder.com/800x400?text=Slide+1" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="https://via.placeholder.com/800x400?text=Slide+2" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="https://via.placeholder.com/800x400?text=Slide+3" class="d-block w-100" alt="Slide 3">
            </div>
          </div>
    
          <!-- Custom Indicators -->
          <div class="carousel-indicators-custom">
            <div class="indicator active" data-bs-target="#imageCarousel" data-bs-slide-to="0"></div>
            <div class="indicator" data-bs-target="#imageCarousel" data-bs-slide-to="1"></div>
            <div class="indicator" data-bs-target="#imageCarousel" data-bs-slide-to="2"></div>
          </div>
        </div>
      </div>

      <div class="container shadow-lg">
        <!-- Section Utama -->
        <div class="custom-section">
          <!-- Header -->
          <div class="section-header">
            <h2>Wakaf itu apa sih?</h2>
            <p>Wakaf adalah amal jariyah yang terus memberikan manfaat tanpa henti. 
              Dengan berwakaf, Anda bisa berkontribusi untuk pembangunan masyarakat 
              melalui aset yang produktif dan terus berkembang.</p>
          </div>
    
          <!-- Garis Pembatas -->
          <div class="divider"></div>
    
          <!-- Konten 2 Kolom -->
          <div class="row">
            <!-- Kolom Kiri: Manfaat Berwakaf -->
            <div class="col-md-6 custom-column">
              <h3>Manfaat Berwakaf?</h3>
              <ul>
                <li>1. Amal jariyah: Pahala terus mengalir selama wakaf dimanfaatkan.</li>
                <li>2. Membangun infrastruktur: Membantu pembangunan masjid, sekolah, dll.</li>
                <li>3. Ekonomi produktif: Wakaf tunai bisa diinvestasikan untuk usaha produktif.</li>
                <li>4. Kesejahteraan masyarakat: Mendukung layanan kesehatan, pendidikan, dan sosial.</li>
                <li>5. Mengurangi kesenjangan sosial: Membantu masyarakat miskin dan dhuafa.</li>
              </ul>
            </div>
    
            <!-- Kolom Kanan: Cara Wakaf secara Online -->
            <div class="col-md-6 custom-column">
              <h3>Cara Wakaf secara Online</h3>
              <ul>
                <li>1. Pilih platform: Masuk ke website wakaf yuk.</li>
                <li>2. Pilih program: Tentukan program wakaf.</li>
                <li>3. Isi data: Lengkapi formulir online.</li>
                <li>4. Bayar: Transfer dana secara online.</li>
                <li>5. Konfirmasi: Terima sertifikat atau konfirmasi.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        // Script to manage the active class for custom indicators
        const indicators = document.querySelectorAll('.carousel-indicators-custom .indicator');
        const carousel = document.getElementById('imageCarousel');
    
        carousel.addEventListener('slide.bs.carousel', function (event) {
          indicators.forEach((indicator) => indicator.classList.remove('active'));
          indicators[event.to].classList.add('active');
        });
      </script>
    </body>
    </html>