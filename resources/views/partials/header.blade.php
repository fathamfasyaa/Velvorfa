<header id="header" class="header header-transparent d-flex align-items-center sticky-top">
  <div class="container-fluid d-flex align-items-center justify-content-between position-relative">

    <!-- ======= Logo ======= -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('/assets/img/logovelvorfakecil.png') }}" loading="lazy" alt="Velvorfa Logo" class="logo-img">
    </a>

    <!-- ======= Desktop Navigation ======= -->
    <div class="nav-wrapper position-absolute start-50 translate-middle-x d-none d-xl-block">
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about-us">Tentang Kami</a></li>
          <li><a href="#what-we-do">Layanan Kami</a></li>
          <li><a href="#layanan-velvorfa">Portofolio</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav>
    </div>

    <!-- ======= Mobile Navigation ======= -->
    <nav id="navmenu-mobile" class="navmenu d-xl-none">
      <ul>
        <li><a href="#hero" class="active">Beranda</a></li>
        <li><a href="#about-us">Tentang Kami</a></li>
        <li><a href="#what-we-do">Layanan Kami</a></li>
        <li><a href="#layanan-velvorfa">Portofolio</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- ======= Social Media Links ======= -->
    <div class="header-social-links d-none d-xl-flex">
      <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/velvorfa?igsh=MWdrN2kwbmd2enVpMg==" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

  </div>
</header>

<!-- ======= Script (Letakkan sebelum </body>) ======= -->
<script>
  // ======= Toggle Mobile Menu =======
  const toggle = document.querySelector('.mobile-nav-toggle');
  const body = document.body;
  const mobileMenu = document.querySelector('#navmenu-mobile');

  toggle.addEventListener('click', () => {
    body.classList.toggle('mobile-nav-active');
  });

  // ======= Active Link Handling =======
  document.querySelectorAll('#navmenu a, #navmenu-mobile a').forEach(link => {
    link.addEventListener('click', function () {
      // Hapus class active dari semua link
      document.querySelectorAll('#navmenu a, #navmenu-mobile a').forEach(link => link.classList.remove('active'));
      
      // Tambahkan class active ke link yang diklik
      this.classList.add('active');

      // Tutup menu setelah diklik (mobile)
      if (body.classList.contains('mobile-nav-active')) {
        body.classList.remove('mobile-nav-active');
      }
    });
  });
</script>
