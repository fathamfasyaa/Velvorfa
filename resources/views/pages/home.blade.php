@extends('layouts.app')

@section('title')

@section('description', 'Description for home page')
@section('keywords', 'keywords, for, home, page')

@section('content')


   
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section" style="background: url('{{ asset('assets/img/hero-bg.png') }}') top center no-repeat;">
    
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
            <p data-aos="fade-up" data-aos-delay="100">We are team of talented designers making websites with Bootstrap</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ asset('assets/img/11060576.jpg') }}"
            class="img-fluid animated">
          
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Section -->
    <section id="about-us" class="about-us section py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Gambar Ilustrasi -->
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('assets/img/aboutvelvorfa.png') }}" alt="Tentang Velvorfa"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Konten Teks -->
                <div class="col-lg-6" data-aos="fade-left">
                    <span class="badge bg-light text-dark mb-2" style="font-weight: 500;">Tentang Velvorfa</span>
                    <h2 class="fw-bold mb-4" style="color: #0F4C5C;">Kami Bukan Sekadar Developer,<br> Kami Mitra Digital
                        Anda.</h2>
                    <p class="text-muted mb-4">
                        Velvorfa hadir sebagai solusi teknologi kreatif bagi UMKM dan bisnis lokal yang ingin bertumbuh di
                        era digital.
                        Kami percaya bahwa website bukan hanya soal tampilan, tapi juga alat strategis untuk membangun
                        kepercayaan dan meningkatkan penjualan.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            Tim muda, adaptif, dan berpengalaman
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            Fokus pada hasil nyata, bukan hanya kode
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            Komitmen jangka panjang untuk klien lokal
                        </li>
                    </ul>
                    <a href="#contact" class="btn btn-velvorfa mt-3">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->

    <section id="layanan-velvorfa" class="layanan-velvorfa section">
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
                        <img src="{{ asset('/assets/img/layanan.jpg') }}" alt="Velvorfa Logo" class="logo-img-wwd">
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="about-content ps-lg-4">
                        <h3 class="fw-bold mb-4">Membangun Masa Depan Digital Bisnis Anda</h3>
                        <div class="features-list">
                            <div class="feature-item d-flex mb-4">
                                <div class="feature-icon rounded-3 me-4"
                                    style="background-color: #e0f5f7; color: #003f44;">
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
    <section id="what-we-do" class="what-we-do section">

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
@endsection
