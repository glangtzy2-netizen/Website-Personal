<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Trasa Coworking Space</title>

    <!-- Bootstrap + Font Awesome + AOS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS Khusus Contact -->
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <img src="../assets/logo coworking.png" alt="Trasa Logo" class="img-fluid" style="height: 60px; width: auto;">
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
                    <li class="nav-item"><a class="nav-link" href="location.php">Location</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Contact -->
    <section class="hero-contact">
        <div class="container">
            <h1 data-aos="fade-up">Hubungi Kami</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                Jika ada yang diperlukan, silahkan isi form di bawah ini!
            </p>
        </div>
    </section>

    <!-- Contact Form + Info -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">

                <!-- FORM WHATSAPP OTOMATIS (SUDAH 100% JALAN) -->
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="contact-form">
                        <h3 class="mb-4">Kirim Pesan Langsung</h3>
                        <form id="waForm" onsubmit="sendToWhatsApp(event)">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" id="nohp" class="form-control" placeholder="No. WhatsApp (aktif)" required>
                                </div>
                                <div class="col-12">
                                    <select id="kebutuhan" class="form-control" required>
                                        <option value="" disabled selected>Pilih Kebutuhan</option>
                                        <option>Booking Tour</option>
                                        <option>Hot Desk Harian</option>
                                        <option>Dedicated Desk</option>
                                        <option>Private Office</option>
                                        <option>Pertanyaan Umum</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea id="pesan" class="form-control" rows="5" placeholder="Pesan kamu... (opsional)"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" id="btnKirim" class="btn btn-submit btn-lg">
                                        Kirim via WhatsApp
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- AKHIR FORM -->

                <!-- Info + Kontak Cepat -->
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="contact-info mb-4">
                        <h3>Kontak Cepat</h3>
                        <div class="info-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <strong>Telepon</strong><br>
                                <a href="tel:+6285134605295" class="text-dark">+62851 3460 5295</a>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <strong>WhatsApp</strong><br>
                                <a href="https://wa.me/6285134605295" class="text-success fw-bold">+62851 3460 5295</a>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email</strong><br>
                                hello@trasa.com
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat</strong><br>
                                Jl. Jenderal Ahmad Yani No.43<br>
                                Mingkrik, Pakembaran, Kec. Slawi<br>
                                Kabupaten Tegal, Jawa Tengah 52411
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="tel:+6285134605295" class="btn btn-call">Telepon</a>
                            <a href="https://wa.me/6285134605295" class="btn btn-wa" target="_blank">WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (tetap sama) -->
    <footer style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border-top: 1px solid #cbd5e1;">
        <div class="container py-5">
            <div class="row gy-5">
                <div class="col-lg-4">
                   <a class="d-inline-block mb-4" href="https://coworkingtegal.com" target="_blank" rel="noopener">
        <img src="../assets/trasa-removebg-preview.png" alt="Trasa Logo" style="height: 58px; width: auto;">
    </a>

    <p class="text-muted mb-4" style="max-width: 320px; line-height: 1.7;">
        Membantu startup & perusahaan berkembang pesat melalui strategi digital, konsultasi keuangan, dan eksekusi sempurna.
    </p>

    <div class="social-icons-footer">
        <!-- WhatsApp – buka di tab/aplikasi baru -->
        <a href="https://wa.me/6285134605295" class="me-3 text-primary" target="_blank" rel="noopener" title="Chat via WhatsApp">
            <i class="fab fa-whatsapp fs-5"></i>
        </a>

        <!-- Instagram – buka di tab baru -->
        <a href="https://www.instagram.com/coworkingtegal" class="text-primary" target="_blank" rel="noopener" title="Instagram Coworking Tegal">
            <i class="fab fa-instagram fs-5"></i>
        </a>
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

    <!-- SCRIPT WHATSAPP OTOMATIS (INI YANG BIKIN FORM JALAN) -->
    <script>
        // GANTI NOMOR INI KALAU MAU GANTI TUJUAN WHATSAPP
        const nomorWA = "6285134605295"; // ← Nomor tujuan (tanpa + atau spasi)

        function sendToWhatsApp(event) {
            event.preventDefault();

            const nama      = document.getElementById('nama').value.trim();
            const nohp      = document.getElementById('nohp').value.trim();
            const kebutuhan = document.getElementById('kebutuhan').value;
            const pesan     = document.getElementById('pesan').value.trim();

            if (!nama || !nohp || !kebutuhan) {
                alert("Harap isi Nama Lengkap, No. WhatsApp, dan Kebutuhan!");
                return;
            }

            let teks = `Halo Trasa!%0A%0A`;
            teks += `*Nama Lengkap* : ${nama}%0A`;
            teks += `*No. WhatsApp* : ${nohp}%0A`;
            teks += `*Kebutuhan*    : ${kebutuhan}%0A`;
            if (pesan) teks += `%0A*Pesan* : ${pesan}`;

            const url = `https://wa.me/${nomorWA}?text=${teks}`;
            window.open(url, '_blank');

            // Reset form + tombol kembali normal
            document.getElementById('waForm').reset();
            document.getElementById('btnKirim').innerHTML = 'Kirim via WhatsApp';
        }
    </script>
</body>
</html>