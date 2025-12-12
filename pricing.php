<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga & Paket - Trasa Coworking Space</title>

    <!-- Bootstrap + Font Awesome + AOS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS Khusus Pricing -->
    <link rel="stylesheet" href="../css/pricing.css">
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
                    <li class="nav-item"><a class="nav-link active" href="pricing.php">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.php">Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Pricing -->
    <section class="hero-pricing">
        <div class="container">
            <h1 data-aos="fade-up">Pilih Paketmu</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                Harga transparan, tanpa biaya tersembunyi — mulai dari Rp50.000/hari
            </p>
        </div>
    </section>

    <!-- Pricing Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">

                <!-- Hot Desk Harian -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="pricing-card">
                        <h4>Hot Desk</h4>
                        <p class="text-muted mb-4">Cocok untuk yang sesekali butuh tempat kerja</p>
                        <div class="price">Rp75.000<span>/hari</span></div>
                        <ul class="list-unstyled my-4 text-start">
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Akses 08.00–22.00</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> WiFi super cepat</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Kopi & teh gratis</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Print 10 lembar gratis</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20Hot%20Desk%20Harian" 
                           class="btn btn-choose d-block">Pilih Paket</a>
                    </div>
                </div>

                <!-- Dedicated Desk (PALING LARIS) -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <h4>Dedicated Desk</h4>
                        <p class="text-muted mb-4">Meja tetap + loker pribadi</p>
                        <div class="price">Rp2.200.000<span>/bulan</span></div>
                        <ul class="list-unstyled my-4 text-start">
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Meja & kursi tetap</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Loker pribadi</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Akses 24/7</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Alamat bisnis + mail handling</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 10 jam meeting room gratis</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20Dedicated%20Desk" 
                           class="btn btn-choose d-block">Pilih Paket</a>
                    </div>
                </div>

                <!-- Private Office -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-card">
                        <h4>Private Office</h4>
                        <p class="text-muted mb-4">Ruang kantor pribadi untuk tim</p>
                        <div class="price">Rp8.500.000<span>/bulan</span></div>
                        <ul class="list-unstyled my-4 text-start">
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 4–8 orang</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Furnitur lengkap</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Akses 24/7 + kunci pribadi</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 20 jam meeting room gratis</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Logo perusahaan di pintu</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20Private%20Office" 
                           class="btn btn-choose d-block">Hubungi Kami</a>
                    </div>
                </div>

            </div>

            <!-- Tombol WhatsApp Besar -->
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="https://wa.me/6281234567890?text=Halo%20Trasa,%20saya%20mau%20tanya%20paket%20tadi" 
                   class="btn btn-wa btn-lg px-5">
                    <i class="fab fa-whatsapp fs-4"></i> Tanya Langsung via WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
  <footer style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border-top: 1px solid #cbd5e1;">
        <div class="container py-5">
            <div class="row gy-5">
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
                <div class="col-lg-2 offset-lg-1 col-md-6">
                    <h6 class="fw-bold text-dark mb-4">Menu</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-muted text-decoration-none hover-blue">Home</a></li>
                        <li class="mb-2"><a href="about.php" class="text-muted text-decoration-none hover-blue">About</a></li>
                        <li class="mb-2"><a href="facilities.php" class="text-muted text-decoration-none hover-blue">Facilities</a></li>
                        <li class="mb-2"><a href="gallery.php" class="text-muted text-decoration-none hover-blue">Gallery</a></li>
                        <li class="mb-2"><a href="pricing.php" class="text-muted text-decoration-none hover-blue">Pricing</a></li>
                        <li class="mb-2"><a href="location.php" class="text-muted text-decoration-none hover-blue">Location</a></li>
                        <li class="mb-2"><a href="contact.php" class="text-muted text-decoration-none hover-blue">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold text-dark mb-4">Layanan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-blue">Ruang kerja kreatif dengan meeting room, area diskusi, dan workspace gratis untuk semua. Yuk produktif bareng</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="fw-bold text-dark mb-4">Hubungi Kami</h6>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                        <div>
                            <small class="text-muted d-block">Alamat</small>
                            <p class="mb-0 fw-medium">Jl. Jenderal Ahmad Yani No.43<br>Mingkrik, Pakembaran, Kec. Slawi<br>Kabupaten Tegal, Jawa Tengah 52411</p>
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