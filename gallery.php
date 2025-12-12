<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Trasa Coworking Space</title>

    <!-- Bootstrap + Font Awesome + AOS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">

    <!-- CSS Khusus Gallery -->
    <link rel="stylesheet" href="../css/gallery.css">
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
                    <li class="nav-item"><a class="nav-link active" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.php">Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Gallery — biru muda soft, TIDAK TABRAK NAVBAR -->
    <section class="hero-gallery">
        <div class="container">
            <h1 data-aos="fade-up">Gallery Trasa</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                Lihat suasana nyata, orang-orang produktif, dan vibe keren di Trasa setiap hari
            </p>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- 12 Foto cantik (ganti dengan foto asli nanti) -->
                <div class="col-6 col-md-4 col-lg-3 gallery-item" data-aos="fade-up">
                    <a href="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200" data-lightbox="trasa" data-title="Hot Desk Area">
                        <img src="../assets/Ruang Tamu.jpeg" class="img-fluid" alt="Hot Desk">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1200" data-lightbox="trasa" data-title="Meeting Room">
                        <img src="../assets/Tangga Coworking.jpeg" class="img-fluid" alt="Meeting Room">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200" data-lightbox="trasa" data-title="Coffee Corner">
                        <img src="../assets/Spot.jpeg" class="img-fluid" alt="Coffee Corner">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://images.unsplash.com/photo-1517457373959-539f7f8c718c?w=1200" data-lightbox="trasa" data-title="Workshop & Event">
                        <img src="../assets/Ruang Spot.webp" class="img-fluid" alt="Event">
                    </a>
                </div>
                <!-- Tambah 8 lagi kalau mau, atau cukup segini juga udah keren -->
                <div class="col-6 col-md-4 col-lg-3 gallery-item" data-aos="fade-up" data-aos-delay="400">
                    <a href="https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200" data-lightbox="trasa">
                        <img src="../assets/Banner Senam.jpeg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://images.unsplash.com/photo-1606851094291-106b05c018b3?w=1200" data-lightbox="trasa">
                        <img src="../assets/Aktifitas Coworking.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item" data-aos="fade-up" data-aos-delay="600">
                    <a href="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=1200" data-lightbox="trasa">
                        <img src="../assets/Aktifitas Coworking 2.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item" data-aos="fade-up" data-aos-delay="700">
                    <a href="https://images.unsplash.com/photo-1516321318423-f06f85e504b4?w=1200" data-lightbox="trasa">
                        <img src="../assets/Pameran UKM.jpg" class="img-fluid" alt="">
                    </a>
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
                        <a href="https://wa.me/6285134605295?" class="me-3 text-primary"><i class="fab fa-whatsapp fs-5"></i></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script>
        AOS.init({ duration: 900, once: true });
        window.addEventListener('scroll', () => {
            document.querySelector('.navbar-custom').classList.toggle('scrolled', window.scrollY > 50);
        });
        lightbox.option({
            resizeDuration: 200,
            wrapAround: true,
            albumLabel: "Foto %1 dari %2"
        });
    </script>
</body>
</html>