@extends('layouts.app')

@section('title')

@section('description', 'Description for home page')
@section('keywords', 'keywords, for, home, page')

@section('content')



    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section"
            style="background: url('{{ asset('assets/img/hero-bg.png') }}') top center no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        style="padding-bottom: 80px">
                        <h1 data-aos="fade-up">Solusi Digital Kreatif untuk Bisnis Masa Kini</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Velvorfa adalah mitra terpercaya dalam membangun website
                            profesional, modern, dan responsif untuk menunjang pertumbuhan bisnis Anda.</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="#" target="_blank" class="btn-get-started">
                                Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i>
                            </a>
                            
                            <a href ="#"
                                class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i
                                    class="bi bi-play-circle"></i><span>Lihat Portfolio</span></a>
                        </div>
                    </div>
                    @php
                    $hero = \App\Models\HeroSection::first();
                    $image = $hero && $hero->image
                        ? asset('storage/' . $hero->image)
                        : asset('assets/img/imghero.png');
                @endphp
                
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ $image }}" loading="lazy" class="img-fluid animated">
                </div>
                
                
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about-us" class="about-us section py-3">
            <div class="container section-title py-3" data-aos="fade-up">
                <h2 style="color: #0F4C5C;">Tentang Kami</h2>
            </div>
            <div class="container">
                <div class="row align-items-center g-5">
                    <!-- Gambar Ilustrasi -->
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ asset('assets/img/aboutvelvorfa.png') }}" loading="lazy" alt="Tentang Velvorfa"
                            class="img-fluid rounded shadow-sm">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <span class="badge bg-light text-dark mb-2" style="font-weight: 500;">Tentang Velvorfa</span>
                        <h2 class="fw-bold mb-4" style="color: #0F4C5C;">Mitra Digital untuk UMKM & Bisnis Lokal</h2>
                        <p class="text-muted mb-4">
                            Kami percaya bahwa setiap bisnis punya cerita — dan kami bantu menerjemahkannya ke dalam website
                            yang menarik, responsif, dan siap bersaing di era digital.
                            Velvorfa hadir bukan hanya sebagai developer, tapi sebagai partner tumbuh bersama Anda.
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Tim muda, kreatif, dan cepat adaptif terhadap tren teknologi
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Desain & fitur disesuaikan dengan kebutuhan bisnis Anda
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Siap mendampingi sejak perencanaan hingga maintenance
                            </li>
                        </ul>
                        <a href="{{ route('tentang') }}" class="btn btn-velvorfa mt-3">
                            Pelajari Lebih Lanjut <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Akhir About Section -->

        {{-- Tentang Kami --}}
        <section id="what-we-do" class="what-we-do section pt-5">

            <!-- Section Title -->
            <div class="container section-title pt-4" data-aos="fade-up">
                <h2 style="color: #0F4C5C;">Layanan Kami</h2>
                <p>Transformasi digital dimulai dari sini. Kami menghadirkan solusi website profesional untuk mengangkat
                    brand
                    bisnis Anda.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box"
                            style="background-color: #0F4C5C; color: white; border-radius: 10px; padding: 30px; height: 100%;">
                            <h3 style="color: white !important;">Keunggulan Kami</h3>
                            <p>
                                Specialis pembuatan website profesional dengan pendekatan modern. Setiap proyek kami
                                kerjakan
                                dengan detail, memastikan website Anda tidak hanya cantik tapi juga fungsional dan optimal
                                untuk
                                bisnis.
                            </p>
                            <div class="text-center mt-3">
                                <a href="#" class="more-btn"
                                    style=" padding: 8px 20px; border-radius: 30px; font-weight: 600; text-decoration: none; display: inline-block;"><span>Lihat
                                        Portofolio</span> <i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-xl-4">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center"
                                    style="background-color: white; border-radius: 10px; padding: 30px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #0F4C5C;">
                                    <i class="bi bi-code-square" style="font-size: 2.5rem; margin-bottom: 15px;"></i>
                                    <h4 style="color: #0F4C5C; text-align: center;">Website Perusahaan</h4>
                                    <p style="text-align: center;">Website profesional untuk mempresentasikan bisnis Anda
                                        dengan
                                        elegan</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="600">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center"
                                    style="background-color: white; border-radius: 10px; padding: 30px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #0F4C5C;">
                                    <i class="bi bi-phone" style="font-size: 2.5rem; margin-bottom: 15px;"></i>
                                    <h4 style="color: #0F4C5C; text-align: center;">Responsive Design</h4>
                                    <p style="text-align: center;">Tampilan sempurna di semua perangkat (desktop, tablet,
                                        mobile)</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="700">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center"
                                    style="background-color: white; border-radius: 10px; padding: 30px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #0F4C5C;">
                                    <i class="bi bi-headset" style="font-size: 2.5rem; margin-bottom: 15px;"></i>
                                    <h4 style="color: #0F4C5C; text-align: center;">Maintenance</h4>
                                    <p style="text-align: center;">Layanan perawatan website berkala untuk performa optimal
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- Tentang Kami --}}


        {{-- Portfolio --}}
        <section id="portfolio" class="portfolio section pt-5">
        <div class="floating-elements">
            <div class="floating-circle circle-1"></div>
            <div class="floating-circle circle-2"></div>
            <div class="floating-circle circle-3"></div>
        </div>
    
        <section class="portfolio-section">
                <!-- Section Header -->
                <div class="container section-title" data-aos="fade-up">
                    <h2 style="color: #0F4C5C;">Portfolio</h2>
                
    
                <!-- Filter Buttons -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6">
                        <div class="filter-container d-flex justify-content-center flex-wrap gap-2">
                            <button class="filter-btn active" data-filter="all">All Projects</button>
                            <button class="filter-btn" data-filter="mobile">Mobile</button>
                            <button class="filter-btn" data-filter="web">Website</button>
                        </div>
                    </div>
                </div>
    
                <!-- Portfolio Grid -->
                <div class="row g-4" id="portfolio-grid">
                    <!-- Project 1 -->
                    <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                        <div class="portfolio-card h-100">
                            <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=400&fit=crop');">
                                <div class="card-overlay">
                                    <button class="view-btn">
                                        <i class="bi bi-arrow-up-right me-2"></i>View Project
                                    </button>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="card-category">Website</span>
                                <h3 class="card-title">EcoTech Platform</h3>
                                <p class="card-description">Sustainable technology marketplace with advanced filtering and real-time analytics dashboard.</p>
                                <div class="card-technologies">
                                    <span class="tech-tag">React</span>
                                    <span class="tech-tag">Node.js</span>
                                    <span class="tech-tag">MongoDB</span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project 2 -->
                    <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile">
                        <div class="portfolio-card h-100">
                            <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1592464491611-0ad7f73c5d8b?w=600&h=400&fit=crop');">
                                <div class="card-overlay">
                                    <button class="view-btn">
                                        <i class="bi bi-arrow-up-right me-2"></i>View Project
                                    </button>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="card-category">Mobile App</span>
                                <h3 class="card-title">MindFlow Wellness</h3>
                                <p class="card-description">Mental health tracking app with meditation guides and mood analytics.</p>
                                <div class="card-technologies">
                                    <span class="tech-tag">Flutter</span>
                                    <span class="tech-tag">Firebase</span>
                                    <span class="tech-tag">AI/ML</span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project 3 -->
                    <div class="col-lg-4 col-md-6 portfolio-item" data-category="branding">
                        <div class="portfolio-card h-100">
                            <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1558655146-d09347e92766?w=600&h=400&fit=crop');">
                                <div class="card-overlay">
                                    <button class="view-btn">
                                        <i class="bi bi-arrow-up-right me-2"></i>View Project
                                    </button>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="card-category">Branding</span>
                                <h3 class="card-title">Ocean Brew Identity</h3>
                                <p class="card-description">Complete brand identity for premium coffee roastery with sustainable packaging design.</p>
                                <div class="card-technologies">
                                    <span class="tech-tag">Illustrator</span>
                                    <span class="tech-tag">Photoshop</span>
                                    <span class="tech-tag">InDesign</span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project 4 -->
                    <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                        <div class="portfolio-card h-100">
                            <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop');">
                                <div class="card-overlay">
                                    <button class="view-btn">
                                        <i class="bi bi-arrow-up-right me-2"></i>View Project
                                    </button>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="card-category">Website</span>
                                <h3 class="card-title">FinanceFlow Dashboard</h3>
                                <p class="card-description">Advanced financial analytics platform with interactive charts and real-time data visualization.</p>
                                <div class="card-technologies">
                                    <span class="tech-tag">Vue.js</span>
                                    <span class="tech-tag">D3.js</span>
                                    <span class="tech-tag">Python</span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project 5 -->
                    <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile">
                        <div class="portfolio-card h-100">
                            <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop');">
                                <div class="card-overlay">
                                    <button class="view-btn">
                                        <i class="bi bi-arrow-up-right me-2"></i>View Project
                                    </button>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="card-category">Mobile App</span>
                                <h3 class="card-title">StudySync Platform</h3>
                                <p class="card-description">Collaborative learning app with video calls, shared whiteboards, and progress tracking.</p>
                                <div class="card-technologies">
                                    <span class="tech-tag">React Native</span>
                                    <span class="tech-tag">WebRTC</span>
                                    <span class="tech-tag">AWS</span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project 6 -->
                    <div class="col-lg-4 col-md-6 portfolio-item" data-category="branding">
                        <div class="portfolio-card h-100">
                            <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1572044162444-ad60f128bdea?w=600&h=400&fit=crop');">
                                <div class="card-overlay">
                                    <button class="view-btn">
                                        <i class="bi bi-arrow-up-right me-2"></i>View Project
                                    </button>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="card-category">Branding</span>
                                <h3 class="card-title">GreenTech Startup</h3>
                                <p class="card-description">Modern brand identity for renewable energy startup including logo, guidelines, and marketing materials.</p>
                                <div class="card-technologies">
                                    <span class="tech-tag">Figma</span>
                                    <span class="tech-tag">After Effects</span>
                                    <span class="tech-tag">Sketch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- KONTAK --}}
        <div class="container py-5">
            <h2 class="text-center mb-5" style="color: #0F4C5C;">Kontak</h2>

            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row g-4">
                <!-- Kolom Kiri: Informasi Kontak -->
                <div class="col-lg-6">
                    <div class="contact-info h-100">
                        <h4 class="mb-4" style="color: #0F4C5C;">Informasi Kontak</h4>

                        <!-- Alamat -->
                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-start">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-map-marker-alt" style="color: #0F4C5C; font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Alamat</h6>
                                    <p class="text-muted mb-0">
                                        Jl. Contoh No. 123<br>
                                        Padalarang, Bandung Barat<br>
                                        Jawa Barat 40553
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-start">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-phone" style="color: #0F4C5C; font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Telepon</h6>
                                    <p class="text-muted mb-0">
                                        <a href="tel:+6281234567890" class="text-decoration-none text-muted">
                                            +62 812-3456-7890
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-start">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-envelope" style="color: #0F4C5C; font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Email</h6>
                                    <p class="text-muted mb-0">
                                        <a href="mailto:info@perusahaan.com" class="text-decoration-none text-muted">
                                            info@perusahaan.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Jam Operasional -->
                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-start">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-clock" style="color: #0F4C5C; font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Jam Operasional</h6>
                                    <p class="text-muted mb-0">
                                        Senin - Jumat: 08:00 - 17:00<br>
                                        Sabtu - Minggu: Tutup
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Media Sosial -->
                        <div class="contact-item">
                            <h6 class="mb-3">Ikuti Kami</h6>
                            <div class="social-links">
                                <a href="#" class="me-3 text-decoration-none" style="color: #0F4C5C;">
                                    <i class="fab fa-facebook fa-lg"></i>
                                </a>
                                <a href="#" class="me-3 text-decoration-none" style="color: #0F4C5C;">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                                <a href="#" class="me-3 text-decoration-none" style="color: #0F4C5C;">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                                <a href="#" class="text-decoration-none" style="color: #0F4C5C;">
                                    <i class="fab fa-linkedin fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Form Hubungi Kami -->
                <div class="col-lg-6">
                    <div class="contact-form h-100">
                        <h4 class="mb-4" style="color: #0F4C5C;">Hubungi Kami</h4>

                        <form action="{{ route('kontak.kirim') }}" method="POST" class="g-3">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subjek" class="form-label">Subjek</label>
                                <input type="text" name="subjek" id="subjek" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea name="pesan" id="pesan" class="form-control" rows="6" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-velvorfa px-4 py-2">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>


    @endsection