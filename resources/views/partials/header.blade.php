<header id="header" class="header header-transparent d-flex align-items-center sticky-top">
  <div class="container-fluid d-flex align-items-center justify-content-between position-relative">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('/assets/img/logovelvorfakecil.png') }}" alt="Velvorfa Logo" class="logo-img">
    </a>

    <!-- Centered Nav Menu -->
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

    <!-- Mobile Nav (Hidden on xl) -->
    <nav id="navmenu" class="navmenu d-xl-none">
      <ul>
        <li><a href="#hero" class="active">Beranda</a></li>
        <li><a href="#about-us">Tentang Kami</a></li>
        <li><a href="#what-we-do">Layanan Kami</a></li>
        <li><a href="#layanan-velvorfa">Portofolio</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
      <div class="header-social-links-mobile d-xl-none mt-3 px-3">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Social Media -->
    <div class="header-social-links d-none d-xl-flex">
      <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</header>

<!-- Tambahkan script berikut sebelum tag </body> -->
<script>
  // Toggle mobile menu
  const toggle = document.querySelector('.mobile-nav-toggle');
  const body = document.body;

  toggle.addEventListener('click', function () {
    body.classList.toggle('mobile-nav-active');
  });

  // Aktifkan menu yang diklik (untuk semua navmenu)
  document.querySelectorAll('#navmenu a').forEach(link => {
    link.addEventListener('click', function () {
      // Hapus semua class active dari semua link
      document.querySelectorAll('#navmenu a').forEach(link => link.classList.remove('active'));
      // Tambahkan ke link yang diklik
      this.classList.add('active');

      // Jika sedang di mobile, tutup menu setelah klik
      if (document.body.classList.contains('mobile-nav-active')) {
        document.body.classList.remove('mobile-nav-active');
      }
    });
  });
</script>
