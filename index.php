<?php
// Force HTTPS redirect
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    $redirect_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect_url);
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<!-- ... konten lainnya tetap sama ... -->
<?php
// index.php → FINAL FIX: Autoplay 3 detik PASTI JALAN + Full Screen
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trasa Coworking Space</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- CSS Custom -->
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a href="https://coworkingtegal.com" target="_blank">
                <img src="../assets/logo coworking.png" alt="Trasa Logo" class="img-fluid" style="height: 60px;">
            </a>
            <a href="https://coworkingtegal.com" target="_blank">
                <img src="../assets/trasa-removebg-preview.png" alt="Trasa Logo" class="img-fluid" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.php">Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-section" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <h1>TRASA <br>COWORKING SPACE</h1>
                    <p class="lead my-4">Sedang mencari ruang kerja yang nyaman, fokus, dan penuh inspirasi? Trasa Coworking Space hadir sebagai tempat kekinian dengan suasana profesional yang membantu kamu lebih produktif, lebih kreatif, dan lebih semangat setiap hari.</p>
                    <div>
                        <a href="#" class="btn btn-primary btn-lg me-4">Discover More</a>
                        <a href="#" class="btn-watch"><i class="fas fa-play-circle"></i> Watch Video</a>
                    </div>
                </div>
                <div class="col-lg-6 text-end" data-aos="fade-left" data-aos-delay="400">
                    <img src="../assets/Gedung Coworking.jpeg" alt="Gedung Trasa" class="hero-img img-fluid">
                </div>
            </div>
        </div> 
    </section>

           
    <!-- CAROUSEL BESAR TAPI SEDIKIT LEBIH KECIL (75vh) – AUTOPLAY 3 DETIK STABIL -->
<section class="py-5 bg-white" style="padding: 40px 0 !important;">
    <div class="container-fluid px-0">
        <div class="row g-0 justify-content-center">
            <div class="col-12 col-xl-11">

                <div class="swiper teamSwiper rounded-4 overflow-hidden shadow-lg" 
                     style="height: 75vh; min-height: 650px; max-height: 800px;">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="../assets/slide1.jpeg" 
                                 class="d-block w-100" 
                                 alt="Gedung Trasa" 
                                 style="height: 100%; width: 100%;">
                        </div>

                        <div class="swiper-slide">
                            <img src="../assets/slide2.jpeg" 
                                 class="d-block w-100" 
                                 alt="Meeting Room" 
                                 style="height: 100%; width: 100%; ">
                        </div>

                        <div class="swiper-slide">
                            <img src="../assets/slide3.jpeg" 
                                 class="d-block w-100" 
                                 alt="Ruang Kerja" 
                                 style="height: 100%; width: 100%;">
                        </div>

                    </div>

        
            </div>
        </div>
    </div>
</section>


    <!-- Competitive Business -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="../assets/Tempat Admin.jpeg" class="img-fluid rounded-4 mb-3 shadow" alt="">
                    <img src="../assets/Ruang Kerja.jpeg" class="img-fluid rounded-4 mb-3 shadow" alt="">
                    <img src="../assets/Tempat Meating.jpeg" class="img-fluid rounded-4 shadow" alt="">
                    <div class="experience-badge mt-4 mt-md-5" data-aos="zoom-in" data-aos-delay="300">
                        25+ <span>Years of Experience</span>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Kami Membangun Sektor Bisnis Yang Kompetitif</h2>
                    <p class="mt-2">Strategi terbukti, tim berpengalaman, hasil nyata.</p>
                    <div class="mb-4">
                        <span class="badge-custom">Company Values</span>
                        <p class="mt-2">Inovasi, integritas, dan fokus pada pertumbuhan berkelanjutan.</p>
                    </div>
                    <div class="mb-4">
                        <span class="badge-custom">Company Mission</span>
                        <p class="mt-2">Memberdayakan bisnis untuk mencapai potensi maksimal di era digital.</p>
                    </div>
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-3 mb-3" width="150" alt="Manager">
                    <p class="fw-bold">Joko Prabowo <span class="text-muted">– Manager</span></p>
                    <a href="#" class="btn btn-primary">More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 data-aos="fade-up">Tempat Kerja Impian Semua Kalangan</h2>
            <h5 class="mt-3" data-aos="fade-up" data-aos-delay="100">
                Solusi ruang kerja nyaman, cepat, dan terjangkau untuk mahasiswa, freelancer, sampai startup.
            </h5>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-number">01</div>
                        <h5>Mahasiswa & Siswa</h5>
                        <p>Tempat nongkrong produktif buat ngerjain skripsi, tugas kelompok, atau persiapan lomba.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-number">02</div>
                        <h5>Freelancer</h5>
                        <p>Penetration pasar baru lewat alamat kantor prestisius, ruang meeting untuk ketemu klien.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-number">03</div>
                        <h5>Wirausaha</h5>
                        <p>Perencanaan bisnis, pengembangan produk, hingga strategi pendanaan startup.</p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-lg mt-5" data-aos="fade-up" data-aos-delay="500">Selengkapnya Tentang Coworking</a>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border-top: 1px solid #cbd5e1;">
        <div class="container py-5">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <a class="d-inline-block mb-4" href="https://coworkingtegal.com" target="_blank">
                        <img src="../assets/trasa-removebg-preview.png" alt="Trasa Logo" style="height: 58px; width: auto;">
                    </a>
                    <p class="text-muted mb-4" style="max-width: 320px; line-height: 1.7;">
                        Membantu startup & perusahaan berkembang pesat melalui strategi digital, konsultasi keuangan, dan eksekusi sempurna.
                    </p>
                    <div class="social-icons-footer">
                        <a href="https://wa.me/6285134605295" target="_blank" rel="noopener" class="me-3 text-primary"><i class="fab fa-whatsapp fs-5"></i></a>
                        <a href="https://www.instagram.com/coworkingtegal" target="_blank" rel="noopener" class="text-primary"><i class="fab fa-instagram fs-5"></i></a>
                    </div>
                </div>
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
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold text-dark mb-4">Layanan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Ruang kerja kreatif dengan meeting room, area diskusi, dan workspace gratis untuk semua.</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="fw-bold text-dark mb-4">Hubungi Kami</h6>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                        <div><small class="text-muted d-block">Alamat</small><p class="mb-0 fw-medium">Jl. Jenderal Ahmad Yani No.43<br>Mingkrik, Pakembaran, Kec. Slawi<br>Kabupaten Tegal, Jawa Tengah 52411</p></div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-phone-alt text-primary me-3 mt-1"></i>
                        <div><small class="text-muted d-block">Telepon</small><p class="mb-0 fw-medium">+62851 3460 5295</p></div>
                    </div>
                    <div class="d-flex align-items-start">
                        <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                        <div><small class="text-muted d-block">Email</small><p class="mb-0 fw-medium">coworkingspacetrasa@gmail.com</p></div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 pt-4 border-top border-light">
                <p class="mb-0 text-muted small">© 2025 <span class="text-primary fw-bold">Trasa</span>. All rights reserved • Dibuat dengan <i class="fas fa-heart text-danger"></i> di Indonesia</p>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        // Navbar shrink
        window.addEventListener('scroll', () => {
            document.querySelector('.navbar-custom').classList.toggle('scrolled', window.scrollY > 50);
        });

        // SWIPER FIX: Autoplay 3 detik PASTI JALAN (bahak setelah drag/hover)
        const swiper = new Swiper('.teamSwiper', {
            loop: true,
            speed: 1000,
            grabCursor: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,   // PENTING: tetap jalan setelah drag
                pauseOnMouseEnter: false       // PENTING: tidak pause otomatis saat hover
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            }
        });

        // Manual pause hanya saat hover (tapi autoplay tetap restart setelah keluar)
        const swiperEl = document.querySelector('.teamSwiper');
        swiperEl.addEventListener('mouseenter', () => swiper.autoplay.stop());
        swiperEl.addEventListener('mouseleave', () => swiper.autoplay.start());
    </script>
</body>
</html>