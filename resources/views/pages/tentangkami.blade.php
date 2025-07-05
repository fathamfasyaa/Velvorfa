@extends('layouts.app')

@section('title', 'Tentang Kami - Velvorfa')
@section('description', 'Kenali lebih dekat Velvorfa, mitra digital untuk UMKM dan bisnis lokal.')
@section('keywords', 'tentang velvorfa, web developer lokal, solusi digital UMKM')

@section('content')


<section class="py-5 text-center">
  <div class="container-fluid p-0">
      <div id="blog" class="row" style="padding-top: 80px">
          <!-- Enhanced Breadcrumb -->
          <nav aria-label="breadcrumb" class="d-inline-flex align-items-center gap-2" data-aos="fade-down" data-aos-duration="800">
              <ol class="breadcrumb custom-breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <i class="fas fa-home me-1"></i>
                      Beranda
                  </li>
                  <li class="breadcrumb-item active text-success" aria-current="page">
                      <i class="fas fa-info-circle me-1"></i>
                      Tentang Kami
                  </li>
              </ol>
          </nav>
        </section>

        <section class="hero-tentangkami pt-1">
          <!-- Enhanced Background Section -->
          <div id="background" class="container-fluid">
              <!-- Floating Particles -->
              <div class="particle"></div>
              <div class="particle"></div>
              <div class="particle"></div>
              
              <div id="velvo" class="text-center position-relative pt-5">
                  <!-- Logo with Continuous Animation -->
                  <div class="logo-container" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                      <div class="logo-glow"></div>
                      <img src="{{ asset('/assets/img/logovelvorfakecil.png') }}" 
                           alt="Logo Velvorfa" 
                           class="img-fluid pb-4 floating-logo" 
                           style="max-width: 80px; position: relative; z-index: 2;">
                  </div>
                  
                  <!-- Subtitle with Animation -->
                  <h6 class="text-light fs-6 fw-light mb-3 subtitle" 
                      data-aos="fade-up" 
                      data-aos-duration="1000" 
                      data-aos-delay="400">
                      Tentang Velvorfa
                  </h6>
                  
                  <!-- Main Title with Shimmer Effect -->
                  <h2 class="fs-1 fw-bold text-light main-title mb-4" 
                      data-aos="fade-up" 
                      data-aos-duration="1200" 
                      data-aos-delay="600">
                      Build Beyond Code
                  </h2>
                  
                  <!-- Additional Description -->
                  <p class="text-light fs-5 fw-light opacity-75 mx-auto" 
                     style="max-width: 600px;"
                     data-aos="fade-up" 
                     data-aos-duration="1000" 
                     data-aos-delay="800">
                      Menciptakan solusi teknologi yang menginspirasi dan mengubah dunia
                  </p>
                  
                  <!-- Decorative Elements -->
                  <div class="mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                      <div class="d-inline-flex align-items-center gap-3">
                          <div style="width: 40px; height: 2px; background: linear-gradient(90deg, transparent, #ffffff, transparent);"></div>
                          <i class="fas fa-code text-light" style="font-size: 1.2rem;"></i>
                          <div style="width: 40px; height: 2px; background: linear-gradient(90deg, transparent, #ffffff, transparent);"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Mission & Vision Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="p-4 h-100 border-start border-4 border-primary bg-light-blue">
                    <h2 class="fw-bold mb-3" style="color: #0F4C5C;">Visi Kami</h2>
                    <p class="mb-0">Menjadi mitra digital utama bagi bisnis lokal di Indonesia untuk tumbuh secara berkelanjutan di dunia online dengan solusi teknologi yang inovatif dan terjangkau.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <div class="p-4 h-100 border-start border-4 border-warning bg-light-yellow">
                    <h2 class="fw-bold mb-3" style="color: #0F4C5C;">Misi Kami</h2>
                    <ul class="list-unstyled">
                        <li class="mb-2 d-flex align-items-start" data-aos="fade-left" data-aos-delay="300">
                            <span class="badge bg-primary me-2 p-2">1</span>
                            Memberikan solusi web development yang terjangkau & efektif
                        </li>
                        <li class="mb-2 d-flex align-items-start" data-aos="fade-left" data-aos-delay="400">
                            <span class="badge bg-primary me-2 p-2">2</span>
                            Mendampingi UMKM sejak perencanaan hingga publikasi
                        </li>
                        <li class="mb-2 d-flex align-items-start" data-aos="fade-left" data-aos-delay="500">
                            <span class="badge bg-primary me-2 p-2">3</span>
                            Terus berinovasi mengikuti tren teknologi & desain
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold" style="color: #0F4C5C;">Nilai yang Kami Junjung</h2>
            <p class="text-muted">Prinsip-prinsip yang menjadi dasar setiap pekerjaan kami</p>
        </div>

        <div class="row gy-4">
            <div class="col-md-4" data-aos="flip-left" data-aos-duration="500">
                <div class="p-4 border-0 rounded shadow-sm h-100 text-center bg-white">
                    <div class="icon-box bg-primary-light mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="bi bi-lightbulb fs-3 text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Inovatif</h5>
                    <p class="text-muted">Selalu mencari cara kreatif untuk menjawab kebutuhan klien dengan solusi teknologi terkini.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
                <div class="p-4 border-0 rounded shadow-sm h-100 text-center bg-white">
                    <div class="icon-box bg-primary-light mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="bi bi-people fs-3 text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Kolaboratif</h5>
                    <p class="text-muted">Proses pembangunan website yang transparan dengan komunikasi terbuka bersama klien.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="flip-left" data-aos-duration="500" data-aos-delay="400">
                <div class="p-4 border-0 rounded shadow-sm h-100 text-center bg-white">
                    <div class="icon-box bg-primary-light mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="bi bi-graph-up-arrow fs-3 text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Berorientasi Pertumbuhan</h5>
                    <p class="text-muted">Fokus pada solusi yang memberikan dampak nyata bagi perkembangan bisnis klien.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How We Work Section -->
<section id="background" class="py-4">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="fw-bold text-white mb-2">Bagaimana Kami Bekerja</h2>
            <p class="text-white-50">Proses kerja yang terstruktur untuk hasil maksimal</p>
            <div class="mt-3">
                <div class="d-inline-flex align-items-center gap-2">
                    <div style="width: 30px; height: 2px; background: linear-gradient(90deg, transparent, #ffffff, transparent);"></div>
                    <i class="fas fa-cogs text-white" style="font-size: 1rem;"></i>
                    <div style="width: 30px; height: 2px; background: linear-gradient(90deg, transparent, #ffffff, transparent);"></div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                <div class="work-step-card h-100 text-center position-relative">
                    <div class="step-number">01</div>
                    <div class="step-icon-container mb-3">
                        <div class="step-icon bg-white shadow rounded-circle d-flex align-items-center justify-content-center mx-auto">
                            <i class="fas fa-comments text-primary fs-4"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-white mb-2">Konsultasi & Analisis</h5>
                    <p class="text-white-50 mb-3" style="font-size: 0.9rem;">Diskusi mendalam tentang kebutuhan bisnis, target audience, dan goals yang ingin dicapai</p>
                    <div class="step-features">
                        <span class="badge bg-white text-primary me-1 mb-1">Analisis Bisnis</span>
                        <span class="badge bg-white text-primary me-1 mb-1">Riset Kompetitor</span>
                        <span class="badge bg-white text-primary me-1 mb-1">Strategi Digital</span>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <div class="work-step-card h-100 text-center position-relative">
                    <div class="step-number">02</div>
                    <div class="step-icon-container mb-3">
                        <div class="step-icon bg-white shadow rounded-circle d-flex align-items-center justify-content-center mx-auto">
                            <i class="fas fa-pencil-ruler text-warning fs-4"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-white mb-2">Desain & Prototyping</h5>
                    <p class="text-white-50 mb-3" style="font-size: 0.9rem;">Membuat wireframe, mockup, dan prototype yang sesuai dengan brand identity klien</p>
                    <div class="step-features">
                        <span class="badge bg-white text-warning me-1 mb-1">UI/UX Design</span>
                        <span class="badge bg-white text-warning me-1 mb-1">Wireframing</span>
                        <span class="badge bg-white text-warning me-1 mb-1">Brand Identity</span>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                <div class="work-step-card h-100 text-center position-relative">
                    <div class="step-number">03</div>
                    <div class="step-icon-container mb-3">
                        <div class="step-icon bg-white shadow rounded-circle d-flex align-items-center justify-content-center mx-auto">
                            <i class="fas fa-code text-success fs-4"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-white mb-2">Development & Testing</h5>
                    <p class="text-white-50 mb-3" style="font-size: 0.9rem;">Pengembangan website dengan teknologi terkini dan testing menyeluruh untuk performa optimal</p>
                    <div class="step-features">
                        <span class="badge bg-white text-success me-1 mb-1">Clean Code</span>
                        <span class="badge bg-white text-success me-1 mb-1">Responsive Design</span>
                        <span class="badge bg-white text-success me-1 mb-1">Performance Testing</span>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                <div class="work-step-card h-100 text-center position-relative">
                    <div class="step-number">04</div>
                    <div class="step-icon-container mb-3">
                        <div class="step-icon bg-white shadow rounded-circle d-flex align-items-center justify-content-center mx-auto">
                            <i class="fas fa-rocket text-danger fs-4"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-white mb-2">Launch & Support</h5>
                    <p class="text-white-50 mb-3" style="font-size: 0.9rem;">Peluncuran website dan dukungan berkelanjutan untuk memastikan website selalu optimal</p>
                    <div class="step-features">
                        <span class="badge bg-white text-danger me-1 mb-1">Website Launch</span>
                        <span class="badge bg-white text-danger me-1 mb-1">SEO Setup</span>
                        <span class="badge bg-white text-danger me-1 mb-1">Maintenance</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Process Timeline -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="process-timeline" data-aos="fade-up" data-aos-duration="800">
                    <div class="timeline-container">
                        <div class="timeline-line"></div>
                        <div class="timeline-steps">
                            <div class="timeline-step active" data-step="1">
                                <div class="timeline-dot"></div>
                                <span class="timeline-label">Konsultasi</span>
                            </div>
                            <div class="timeline-step" data-step="2">
                                <div class="timeline-dot"></div>
                                <span class="timeline-label">Desain</span>
                            </div>
                            <div class="timeline-step" data-step="3">
                                <div class="timeline-dot"></div>
                                <span class="timeline-label">Development</span>
                            </div>
                            <div class="timeline-step" data-step="4">
                                <div class="timeline-dot"></div>
                                <span class="timeline-label">Launch</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-4 pb-5" data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
            <h4 class="text-white fw-bold mb-2">Siap Memulai Proyek Anda?</h4>
            <p class="text-white-50 mb-3">Mari diskusikan kebutuhan digital bisnis Anda bersama tim expert kami</p>
            <a href="#" class="btn btn-light btn-lg px-4 py-2 rounded-pill fw-bold">
                <i class="fas fa-phone me-2"></i>
                Konsultasi Gratis
            </a>
        </div>
    </div>
</section>





<!-- Team Section (Optional) -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold" style="color: #0F4C5C;">Tim Kami</h2>
            <p class="text-muted">Orang-orang berdedikasi di balik Velvorfa</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-duration="600">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">John Doe</h5>
                        <p class="card-text text-muted">Lead Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Jane Smith</h5>
                        <p class="card-text text-muted">UI/UX Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Michael Brown</h5>
                        <p class="card-text text-muted">Marketing Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
