<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi - Trasa Coworking Space</title>

    <!-- Bootstrap + Font Awesome + AOS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS Khusus Location -->
    <link rel="stylesheet" href="../css/location.css">
</head>
<body>

    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <img src="../assets/logo coworking.png" 
         alt="Trasa Logo" 
         class="img-fluid" 
         style="height: 60px; width: auto;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link active" href="location.php">Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Location -->
    <section class="hero-location">
        <div class="container">
            <h1 data-aos="fade-up">Lokasi Trasa</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                Tempat strategis — mudah dijangkau dari mana saja
            </p>
        </div>
    </section>

    <!-- Map + Info -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Google Maps -->
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="map-container">
                      <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.614823865173!2d109.1366873!3d-6.9792153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbff9211f61ef%3A0xef6099b03a2cd42d!2sTrasa%20CoWorking%20Space!5e0!3m2!1sid!2sid!4v1733400000000!5m2!1sid!2sid" 
                         width="100%" 
                            height="500" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Info Alamat -->
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="location-info">
                        <h3>Kunjungi Kami</h3>
                        
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat</strong><br>
                              Jl. Jenderal Ahmad Yani No.43, Mingkrik, Pakembaran, Kec. Slawi,
                               Kabupaten Tegal, Jawa Tengah 52411
                            </div>
                        </div>

                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Jam Buka</strong><br>
                                Senin – Kamis: 09.00 – 16.00 WIB<br>
                                Jumat – Sabtu: 09.00 – 15.00 WIB<br>
                                <span class="text-danger fw-bold">Minggu & Tanggal Merah Libur!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   <footer style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border-top: 1px solid #cbd5e1;">
        <div class="container py-5">
            <div class="row gy-5">

                <!-- Logo + Deskripsi -->
                <div class="col-lg-4">
                    <a class="d-inline-block mb-4" href="#">
                        <img src="../assets/trasa-removebg-preview.png" alt="Trasa Logo" style="height: 58px; width: auto;">
                    </a>
                    <p class="text-muted mb-4" style="max-width: 320px; line-height: 1.7;">
                        Membantu startup & perusahaan berkembang pesat melalui strategi digital, konsultasi keuangan, dan eksekusi sempurna.
                    </p>
                    <div class="social-icons-footer">
                     <a href="#" class="me-3 text-primary"><i class="fab fa-whatsapp fs-5"></i></a>
                        <a href="https://www.instagram.com/coworkingtegal?igsh=MTlmN3ZhcDZlMmdiZw==" class="text-primary"><i class="fab fa-instagram fs-5"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 offset-lg-1 col-md-6">
                    <h6 class="fw-bold text-dark mb-4">Menu</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">About</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Facilities</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Gallery</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Pricing</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Location</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Contact</a></li>
                    </ul>
                </div>

                 <!-- Services -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold text-dark mb-4">Layanan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Ruang kerja kreatif dengan meeting room, area diskusi, dan workspace gratis untuk semua. Yuk produktif bareng</a></li>
                </div>

                <!-- Contact & Location -->
                 <div class="col-lg-3">
                    <h6 class="fw-bold text-dark mb-4">Hubungi Kami</h6>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                        <div>
                            <small class="text-muted d-block">Alamat</small>
                            <p class="mb-0 fw-medium">Jl. Jenderal Ahmad Yani No.43<br>Mingkrik, Pakembaran, Kec. Slawi<br> Kabupaten Tegal, Jawa Tengah 52411</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-phone-alt text-primary me-3 mt-1"></i>
                        <div>
                            <small class="text-muted d-block">Telepon</small>
                            <p class="mb-0 fw-medium">+62851 3460 5295</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                        <div>
                            <small class="text-muted d-block">Email</small>
                            <p class="mb-0 fw-medium">coworkingspacetrasa@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-5 pt-4 border-top border-light">
                <p class="mb-0 text-muted small">
                    © 2025 <span class="text-primary fw-bold">Trasa</span>. All rights reserved. 
                    <span class="mx-2">•</span>
                    Dibuat dengan <i class="fas fa-heart text-danger"></i> di Indonesia
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 900, once: true });
        window.addEventListener('scroll', () => {
            document.querySelector('.navbar-custom').classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>
</body>
</html>