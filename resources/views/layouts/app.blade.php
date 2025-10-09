<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Velvorfa @yield('title', '')</title>
    <meta name="description" content="@yield('description', 'Deskripsi halaman Velvorfa')">
    <meta name="keywords" content="@yield('keywords', 'velvorfa, digital, jasa website')">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logovelvorfakecil.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files (prioritize CDN, remove duplicates) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="index-page">
    @include('partials.header')

    <main class="main">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files (prioritize CDN, remove duplicates) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">
    {{-- <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}

    

    <!-- AOS Init -->
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: false,
            mirror: true
        });
    </script>

    <!-- Custom Scripts -->
    <script>
        function toggleHeaderScrolled() {
            const header = document.querySelector('#header');
            if (window.scrollY > 100) {
                header.classList.add('header-scrolled');
                header.classList.remove('header-transparent');
            } else {
                header.classList.remove('header-scrolled');
                header.classList.add('header-transparent');
            }
        }
        window.addEventListener('load', toggleHeaderScrolled);
        document.addEventListener('scroll', toggleHeaderScrolled);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logo = document.querySelector('.floating-logo');
            if (logo) {
                logo.addEventListener('click', function() {
                    this.style.animation = 'none';
                    setTimeout(() => {
                        this.style.animation = 'float 3s ease-in-out infinite';
                    }, 100);
                });
            }
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const particles = document.querySelectorAll('.particle');
                particles.forEach((particle, index) => {
                    const speed = (index + 1) * 0.5;
                    particle.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            if (form) {
                // Auto-hide toasts after 5 seconds
                const toasts = document.querySelectorAll('.toast.show');
                toasts.forEach(toast => {
                    setTimeout(() => {
                        toast.classList.remove('show');
                    }, 5000);
                });
                // Form validation
                form.addEventListener('submit', function(e) {
                    form.classList.add('was-validated');
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    portfolioItems.forEach(item => {
                        const card = item.querySelector('.portfolio-card');
                        
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                });
            });

            // Add smooth scrolling animation on page load
            portfolioItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
