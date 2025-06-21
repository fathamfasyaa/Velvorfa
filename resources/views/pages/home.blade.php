@extends('layouts.app')

@section('title')

@section('description', 'Description for home page')
@section('keywords', 'keywords, for, home, page')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-carousel">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>

                    <div class="carousel-inner">
                        <!-- Slide 1 - Enhanced -->
                        <div class="carousel-item active">
                            <div class="carousel-bg floating" style="background-image: url('/assets/img/baraka.jpeg');">
                            </div>
                            <div class="container">
                                <div class="carousel-content">
                                    <h1 class="hero-title">Solusi Digital <span class="texthero shadow-sm">Modern</span>
                                        untuk Bisnis Anda</h1>
                                    <p class="hero-text">Kami menghadirkan website profesional dengan performa optimal dan
                                        desain yang memukau, membantu bisnis Anda tumbuh di era digital.</p>
                                    <div class="hero-buttons">
                                        <a href="#" class="btn btn-primary">Lihat Portofolio</a>
                                        <a href="#" class="btn btn-outline-light">Konsultasi Gratis</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 - Enhanced -->
                        <div class="carousel-item">
                            <div class="carousel-bg floating" style="background-image: url('/assets/img/baraka2.jpeg');">
                            </div>
                            <div class="container">
                                <div class="carousel-content">
                                    <h1 class="hero-title">Transformasi <span class="texthero shadow-sm">Digital</span>
                                        untuk Masa Depan</h1>
                                    <p class="hero-text">Bangun kehadiran digital yang powerful dengan teknologi terkini dan
                                        strategi yang terukur untuk kesuksesan bisnis Anda.</p>
                                    <div class="hero-buttons">
                                        <a href="#" class="btn btn-primary">Mulai Sekarang</a>
                                        <a href="#" class="btn btn-outline-light">Pelajari Lebih</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Arrows - Custom Version -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"
                        aria-label="Previous">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
                        aria-label="Next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Floating Elements (Optional) -->
            <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden"
                style="z-index: 1; pointer-events: none;">
                <div class="position-absolute"
                    style="top: 20%; left: 10%; width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 8s ease-in-out infinite 1s;">
                </div>
                <div class="position-absolute"
                    style="top: 60%; left: 80%; width: 60px; height: 60px; background: rgba(255,255,255,0.08); border-radius: 50%; animation: float 7s ease-in-out infinite 2s;">
                </div>
                <div class="position-absolute"
                    style="top: 30%; left: 70%; width: 30px; height: 30px; background: rgba(255,255,255,0.15); border-radius: 50%; animation: float 9s ease-in-out infinite 0.5s;">
                </div>
            </div>
        </section>
    </main>


    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center mb-1" data-aos="fade-up">
                <span>Teknologi Terdepan</span>
                <h2 class="display-4 fw-bold">Velvorfa</h2>
                <p class="lead">Specialist Web Development & Digital Solutions</p>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="about-img position-relative" style="margin-bottom: 80px;">
                        <img src="{{ asset('/assets/img/whatwedo.png') }}" alt="Velvorfa Logo" class="logo-img-wwd">
                        <div class="experience-badge">
                            <h3 class="mb-0">10+</h3>
                            <p class="mb-0">Tahun Inovasi</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="about-content ps-lg-4">
                        <h3 class="fw-bold mb-4">Membangun Masa Depan Digital Bisnis Anda</h3>
                        <div class="features-list">
                            <div class="feature-item d-flex mb-4">
                                <div class="feature-icon rounded-3 me-4" style="background-color: #e0f5f7; color: #003f44;">
                                    <i class="bi bi-globe fs-2"></i>
                                </div>
                                <div>
                                    <h4 class="fw-semibold">Web Development</h4>
                                    <p class="text-muted">Website performa tinggi dengan teknologi terkini</p>
                                </div>
                            </div>

                            <div class="feature-item d-flex mb-4">
                                <div class="feature-icon rounded-3 me-4"
                                    style="background-color: #e0f5f7; color: #003f44;">
                                    <i class="bi bi-phone fs-2"></i>
                                </div>
                                <div>
                                    <h4 class="fw-semibold">Mobile Friendly</h4>
                                    <p class="text-muted">Optimal di semua perangkat mobile</p>
                                </div>
                            </div>

                            <div class="feature-item d-flex mb-4">
                                <div class="feature-icon rounded-3 me-4"
                                    style="background-color: #e0f5f7; color: #003f44;">
                                    <i class="bi bi-graph-up fs-2"></i>
                                </div>
                                <div>
                                    <h4 class="fw-semibold">SEO Optimized</h4>
                                    <p class="text-muted">Peringkat terbaik di mesin pencari</p>
                                </div>
                            </div>
                        </div>


                        <a href="#portfolio" class="btn btn-velvorfa">
                            Lihat Portofolio Kami <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- What We Do Section -->
    <section id="what-we-do" class="what-we-do section" style="background-color: #f8f9fa;">

        <!-- Section Title -->
        <div class="container section-title pt-5" data-aos="fade-up">
            <h2 style="color: #0F4C5C;">Layanan Kami</h2>
            <p>Transformasi digital dimulai dari sini. Kami menghadirkan solusi website profesional untuk mengangkat brand
                bisnis Anda.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-box"
                        style="background-color: #0F4C5C; color: white; border-radius: 10px; padding: 30px; height: 100%;">
                        <h3 style="color: white !important;">Keunggulan Kami</h3>
                        <p>
                            Specialis pembuatan website profesional dengan pendekatan modern. Setiap proyek kami kerjakan
                            dengan detail, memastikan website Anda tidak hanya cantik tapi juga fungsional dan optimal untuk
                            bisnis.
                        </p>
                        <div class="text-center mt-3">
                            <a href="#" class="more-btn"
                                style=" padding: 8px 20px; border-radius: 30px; font-weight: 600; text-decoration: none; display: inline-block;"><span>Lihat
                                    Portofolio</span> <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

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
                                <p style="text-align: center;">Layanan perawatan website berkala untuk performa optimal</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </div>
    </section><!-- /What We Do Section -->




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
