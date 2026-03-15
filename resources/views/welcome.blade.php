<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Adiyat Cargo </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="landing-assets/img/favicon.png" rel="icon">
  <link href="landing-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="landing-assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset('landing-assets/img/logo.png') }}" alt="Logo">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active" data-i18n="nav.home">Home</a></li>
          <li><a href="#about" data-i18n="nav.about">About</a></li>
          <li><a href="#services" data-i18n="nav.services">Services</a></li>
          <li><a href="#faq" data-i18n="nav.faq">FAQ</a></li>
          <li class="dropdown">
            <a href="#"><span data-i18n="nav.joinUs">Join With Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/b2b">B2B</a></li>
              <li><a href="/kemitraan" data-i18n="nav.kemitraan">Kemitraan</a></li>
              <li><a href="/cek-kemitraan" data-i18n="nav.cekKemitraan">Cek Status Kemitraan</a></li>
            </ul>
          </li>
          <li><a href="#contact" data-i18n="nav.contact">Contact</a></li>
          <li class="dropdown">
            <a href="#">
              <span id="current-lang">🇮🇩 ID</span>
              <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>
            <ul>
              <li><a href="#" onclick="setLanguage('id')">🇮🇩 Indonesia</a></li>
              <li><a href="#" onclick="setLanguage('en')">🇬🇧 English</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown" data-i18n="hero.slide1.title">
              Pengiriman Cepat, Tepat, dan Aman bersama <span>Adiyat Cargo</span>
            </h2>
            <p class="animate__animated animate__fadeInUp" data-i18n="hero.slide1.desc">
              Layanan pengiriman barang dengan sistem LTL dan FTL untuk berbagai kebutuhan bisnis Anda. 
              Kami menangani pengiriman barang pecah belah, dokumen penting, frozen food, hingga bahan industri 
              dengan proses yang aman dan profesional.
            </p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-i18n="hero.slide1.btn">
              Pelajari Layanan
            </a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown" data-i18n="hero.slide2.title">
              Layanan Logistik untuk Berbagai Jenis Barang
            </h2>
            <p class="animate__animated animate__fadeInUp" data-i18n="hero.slide2.desc">
              Kami melayani pengiriman berbagai jenis barang seperti dokumen penting, 
              frozen food, dry goods, bahan kimia, minyak, hingga oli mesin dengan 
              penanganan yang aman selama perjalanan.
            </p>
            <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-i18n="hero.slide2.btn">
              Lihat Layanan
            </a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown" data-i18n="hero.slide3.title">
              Proses Pengiriman Mudah & Cepat
            </h2>
            <p class="animate__animated animate__fadeInUp" data-i18n="hero.slide3.desc">
              Pemesanan dapat dilakukan dengan mudah melalui WhatsApp atau Telegram. 
              Tim kami akan melakukan pickup barang, proses pengiriman, hingga konfirmasi 
              barang sampai dengan bukti foto atau video kepada pelanggan.
            </p>
            <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-i18n="hero.slide3.btn">
              Hubungi Kami
            </a>
          </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1"><use xlink:href="#wave-path" x="50" y="3"></use></g>
        <g class="wave2"><use xlink:href="#wave-path" x="50" y="0"></use></g>
        <g class="wave3"><use xlink:href="#wave-path" x="50" y="9"></use></g>
      </svg>

    </section>

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row position-relative">
          <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="landing-assets/img/about.jpg">
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h2 class="inner-title" data-i18n="about.title">Tentang Adiyat Cargo</h2>
            <div class="our-story">
              <p data-i18n="about.p1">
                Adiyat Cargo merupakan layanan pengiriman barang dengan sistem LTL (Less Truck Load) 
                dan FTL (Full Truck Load). Perusahaan ini merupakan pengembangan dari Adiyat Courier 
                yang berdiri sejak tahun 2024 dengan tujuan memberikan solusi pengiriman barang yang 
                cepat, aman, dan terpercaya bagi berbagai kebutuhan bisnis maupun individu.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span data-i18n="about.li1">Pengiriman barang pecah belah dan dokumen penting</span></li>
                <li><i class="bi bi-check-circle"></i> <span data-i18n="about.li2">Distribusi frozen food, dry goods, dan pasta goods</span></li>
                <li><i class="bi bi-check-circle"></i> <span data-i18n="about.li3">Pengiriman bahan kimia, minyak, dan oli mesin</span></li>
              </ul>
              <p data-i18n="about.p2">
                Dengan dukungan tim profesional serta sistem pengiriman yang terorganisir, 
                Adiyat Cargo berkomitmen memberikan layanan logistik yang efisien dan 
                membantu pelanggan dalam proses distribusi barang dengan aman hingga 
                sampai ke tujuan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features 2 Section -->
    <section id="features-2" class="features section features-2">

      <div class="container section-title" data-aos="fade-up">
        <h2 data-i18n="features.title">Keunggulan Kami</h2>
        <p data-i18n="features.subtitle">Adiyat Cargo menghadirkan layanan pengiriman yang aman, cepat, dan terpercaya untuk berbagai kebutuhan bisnis maupun individu.</p>
      </div>

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="features-image col-lg-4 d-flex align-items-center" data-aos="fade-up">
            <img src="landing-assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center">

            <div class="features-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-truck flex-shrink-0"></i>
              <div>
                <h4 data-i18n="features.f1.title">Pengiriman Cepat & Aman</h4>
                <p data-i18n="features.f1.desc">Kami memastikan setiap pengiriman barang dilakukan dengan proses yang aman dan efisien hingga sampai ke tujuan.</p>
              </div>
            </div>

            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-box-seam flex-shrink-0"></i>
              <div>
                <h4 data-i18n="features.f2.title">Menangani Berbagai Jenis Barang</h4>
                <p data-i18n="features.f2.desc">Kami melayani pengiriman dokumen penting, dry goods, frozen food, bahan kimia, minyak, hingga oli mesin.</p>
              </div>
            </div>

            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4 data-i18n="features.f3.title">Distribusi Luas</h4>
                <p data-i18n="features.f3.desc">Layanan distribusi kami menjangkau berbagai wilayah dengan sistem logistik yang terorganisir.</p>
              </div>
            </div>

            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-shield-check flex-shrink-0"></i>
              <div>
                <h4 data-i18n="features.f4.title">Terpercaya & Profesional</h4>
                <p data-i18n="features.f4.desc">Didukung oleh tim profesional yang berpengalaman dalam bidang logistik dan pengiriman barang.</p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container section-title" data-aos="fade-up">
        <h2 data-i18n="services.title">Layanan Kami</h2>
        <p data-i18n="services.subtitle">Adiyat Cargo menyediakan berbagai layanan pengiriman untuk memenuhi kebutuhan distribusi barang secara cepat dan aman.</p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-truck"></i></div>
              <h3 data-i18n="services.s1.title">Pengiriman LTL</h3>
              <p data-i18n="services.s1.desc">Layanan Less Truck Load untuk pengiriman barang dalam jumlah kecil tanpa harus menyewa satu kendaraan penuh.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-truck-flatbed"></i></div>
              <h3 data-i18n="services.s2.title">Pengiriman FTL</h3>
              <p data-i18n="services.s2.desc">Full Truck Load untuk pengiriman barang dalam jumlah besar dengan satu kendaraan khusus.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-box"></i></div>
              <h3 data-i18n="services.s3.title">Pengiriman Barang Umum</h3>
              <p data-i18n="services.s3.desc">Melayani pengiriman berbagai jenis barang seperti dokumen penting, barang dagangan, dan kebutuhan industri.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-snow"></i></div>
              <h3 data-i18n="services.s4.title">Distribusi Frozen Food</h3>
              <p data-i18n="services.s4.desc">Layanan distribusi untuk produk makanan beku dengan penanganan khusus selama proses pengiriman Bandung-Bekasi dan Bandung-Jogja.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-droplet"></i></div>
              <h3 data-i18n="services.s5.title">Pengiriman Barang Khusus</h3>
              <p data-i18n="services.s5.desc">Pengiriman oli, bahan bakar, gas pecah belah, dan elektronik dengan standar keamanan yang terjaga.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-globe"></i></div>
              <h3 data-i18n="services.s6.title">Distribusi Nasional</h3>
              <p data-i18n="services.s6.desc">Menjangkau hingga wilayah jawa dan sumatera untuk FTL dan menjangkau seluruh indonesia untuk LTL.</p>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="landing-assets/img/cta-bg.jpg" alt="">
      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3 data-i18n="cta.title">Butuh Pengiriman Cepat dan Aman?</h3>
              <p data-i18n="cta.desc">Adiyat Cargo siap membantu kebutuhan distribusi barang Anda dengan layanan pengiriman yang profesional, aman, dan terpercaya.</p>
              <a class="cta-btn" href="#contact" data-i18n="cta.btn">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container section-title" data-aos="fade-up">
        <h2 data-i18n="faq.title">Pertanyaan yang Sering Ditanyakan</h2>
        <p data-i18n="faq.subtitle">Informasi umum mengenai layanan pengiriman Adiyat Cargo.</p>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3 data-i18n="faq.q1.q">Apa saja jenis barang yang dapat dikirim?</h3>
                <div class="faq-content">
                  <p data-i18n="faq.q1.a">Kami melayani pengiriman berbagai jenis barang seperti dokumen penting, dry goods, frozen food, bahan kimia, minyak, dan oli mesin.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3 data-i18n="faq.q2.q">Apakah Adiyat Cargo melayani pengiriman dalam jumlah kecil?</h3>
                <div class="faq-content">
                  <p data-i18n="faq.q2.a">Ya, kami menyediakan layanan LTL (Less Truck Load) yang memungkinkan pengiriman barang dalam jumlah kecil.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3 data-i18n="faq.q3.q">Apakah tersedia layanan pengiriman dalam jumlah besar?</h3>
                <div class="faq-content">
                  <p data-i18n="faq.q3.a">Tersedia layanan FTL (Full Truck Load) untuk pengiriman barang dalam jumlah besar menggunakan satu armada khusus.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3 data-i18n="faq.q4.q">Bagaimana cara melakukan pemesanan pengiriman?</h3>
                <div class="faq-content">
                  <p data-i18n="faq.q4.a">Anda dapat menghubungi tim kami melalui halaman kontak atau melalui nomor yang tersedia untuk melakukan pemesanan pengiriman.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3 data-i18n="faq.q5.q">Apakah barang dijamin aman selama pengiriman?</h3>
                <div class="faq-content">
                  <p data-i18n="faq.q5.a">Kami memastikan setiap pengiriman ditangani dengan standar keamanan yang baik oleh tim profesional.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Location Mitra Section -->
    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="landing-assets/img/cta-bg.jpg" alt="">
      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in">
          <div class="col-xl-10">
            <div class="text-center">
              <h3 data-i18n="mitra.title">Cari lokasi agen terdekat kami di kota Anda!</h3>
              <div class="mitra-section mt-4">
                <select class="form-select mitra-dropdown" onchange="showCabang(this.value)">
                  <option value="" data-i18n-option="mitra.selectPlaceholder">Pilih Kota Mitra</option>
                  <option value="bandung">Bandung Raya</option>
                  <option value="bekasi">Bekasi Raya</option>
                  <option value="jogja">Yogyakarta</option>
                  <option value="DKI">DKI Jakarta</option>
                </select>
                <div id="cabang-list" class="cabang-list mt-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container section-title" data-aos="fade-up">
        <h2 data-i18n="contact.title">Hubungi Kami</h2>
        <p data-i18n="contact.subtitle">Silakan hubungi tim Adiyat Cargo untuk informasi layanan pengiriman atau konsultasi logistik.</p>
      </div>

      <div class="container" data-aos="fade">
        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3 data-i18n="contact.addressLabel">Alamat</h3>
                <p>Jl. H. Alpi No. 72 Kota Bandung</p>
              </div>
            </div>

            <div class="info-item d-flex mt-4">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3 data-i18n="contact.phoneLabel">Telepon / WhatsApp</h3>
                <p>+62 896-7223-6611</p>
              </div>
            </div>

            <div class="info-item d-flex mt-4">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3 data-i18n="contact.emailLabel">Email</h3>
                <p>info@adiyatcargo.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="row gy-4">
              <div class="col-md-6">
                <input type="text" id="name" class="form-control" data-i18n-placeholder="contact.namePlaceholder" placeholder="Nama Anda">
              </div>
              <div class="col-md-6">
                <input type="email" id="email" class="form-control" data-i18n-placeholder="contact.emailPlaceholder" placeholder="Email Anda">
              </div>
              <div class="col-md-12">
                <input type="text" id="subject" class="form-control" data-i18n-placeholder="contact.subjectPlaceholder" placeholder="Subjek">
              </div>
              <div class="col-md-12">
                <textarea id="message" class="form-control" rows="6" data-i18n-placeholder="contact.messagePlaceholder" placeholder="Tulis kebutuhan pengiriman Anda"></textarea>
              </div>
              <div class="col-md-12 text-center">
                <button onclick="sendWhatsApp()" class="btn btn-success" data-i18n="contact.sendBtn">
                  Kirim via WhatsApp
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <h3 class="sitename">Adiyat Cargo</h3>
      <p data-i18n="footer.tagline">Layanan pengiriman barang yang cepat, aman, dan terpercaya untuk kebutuhan distribusi bisnis maupun personal Anda.</p>
      <div class="container">
        <div class="copyright">
          <span data-i18n="footer.copyright">Copyright</span>
          <strong class="px-1 sitename">Adiyat Cargo</strong>
          <span data-i18n="footer.allRights">All Rights Reserved</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing-assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('landing-assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('landing-assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="landing-assets/js/main.js"></script>

  <script>
    // =============================================
    // TRANSLATION DICTIONARY
    // =============================================
    const translations = {
      id: {
        // Navbar
        "nav.home": "Home",
        "nav.about": "About",
        "nav.services": "Services",
        "nav.faq": "FAQ",
        "nav.joinUs": "Join With Us",
        "nav.kemitraan": "Kemitraan",
        "nav.cekKemitraan": "Cek Status Kemitraan",
        "nav.contact": "Contact",

        // Hero Slide 1
        "hero.slide1.title": 'Pengiriman Cepat, Tepat, dan Aman bersama <span>Adiyat Cargo</span>',
        "hero.slide1.desc": "Layanan pengiriman barang dengan sistem LTL dan FTL untuk berbagai kebutuhan bisnis Anda. Kami menangani pengiriman barang pecah belah, dokumen penting, frozen food, hingga bahan industri dengan proses yang aman dan profesional.",
        "hero.slide1.btn": "Pelajari Layanan",

        // Hero Slide 2
        "hero.slide2.title": "Layanan Logistik untuk Berbagai Jenis Barang",
        "hero.slide2.desc": "Kami melayani pengiriman berbagai jenis barang seperti dokumen penting, frozen food, dry goods, bahan kimia, minyak, hingga oli mesin dengan penanganan yang aman selama perjalanan.",
        "hero.slide2.btn": "Lihat Layanan",

        // Hero Slide 3
        "hero.slide3.title": "Proses Pengiriman Mudah & Cepat",
        "hero.slide3.desc": "Pemesanan dapat dilakukan dengan mudah melalui WhatsApp atau Telegram. Tim kami akan melakukan pickup barang, proses pengiriman, hingga konfirmasi barang sampai dengan bukti foto atau video kepada pelanggan.",
        "hero.slide3.btn": "Hubungi Kami",

        // About
        "about.title": "Tentang Adiyat Cargo",
        "about.p1": "Adiyat Cargo merupakan layanan pengiriman barang dengan sistem LTL (Less Truck Load) dan FTL (Full Truck Load). Perusahaan ini merupakan pengembangan dari Adiyat Courier yang berdiri sejak tahun 2024 dengan tujuan memberikan solusi pengiriman barang yang cepat, aman, dan terpercaya bagi berbagai kebutuhan bisnis maupun individu.",
        "about.li1": "Pengiriman barang pecah belah dan dokumen penting",
        "about.li2": "Distribusi frozen food, dry goods, dan pasta goods",
        "about.li3": "Pengiriman bahan kimia, minyak, dan oli mesin",
        "about.p2": "Dengan dukungan tim profesional serta sistem pengiriman yang terorganisir, Adiyat Cargo berkomitmen memberikan layanan logistik yang efisien dan membantu pelanggan dalam proses distribusi barang dengan aman hingga sampai ke tujuan.",

        // Features
        "features.title": "Keunggulan Kami",
        "features.subtitle": "Adiyat Cargo menghadirkan layanan pengiriman yang aman, cepat, dan terpercaya untuk berbagai kebutuhan bisnis maupun individu.",
        "features.f1.title": "Pengiriman Cepat & Aman",
        "features.f1.desc": "Kami memastikan setiap pengiriman barang dilakukan dengan proses yang aman dan efisien hingga sampai ke tujuan.",
        "features.f2.title": "Menangani Berbagai Jenis Barang",
        "features.f2.desc": "Kami melayani pengiriman dokumen penting, dry goods, frozen food, bahan kimia, minyak, hingga oli mesin.",
        "features.f3.title": "Distribusi Luas",
        "features.f3.desc": "Layanan distribusi kami menjangkau berbagai wilayah dengan sistem logistik yang terorganisir.",
        "features.f4.title": "Terpercaya & Profesional",
        "features.f4.desc": "Didukung oleh tim profesional yang berpengalaman dalam bidang logistik dan pengiriman barang.",

        // Services
        "services.title": "Layanan Kami",
        "services.subtitle": "Adiyat Cargo menyediakan berbagai layanan pengiriman untuk memenuhi kebutuhan distribusi barang secara cepat dan aman.",
        "services.s1.title": "Pengiriman LTL",
        "services.s1.desc": "Layanan Less Truck Load untuk pengiriman barang dalam jumlah kecil tanpa harus menyewa satu kendaraan penuh.",
        "services.s2.title": "Pengiriman FTL",
        "services.s2.desc": "Full Truck Load untuk pengiriman barang dalam jumlah besar dengan satu kendaraan khusus.",
        "services.s3.title": "Pengiriman Barang Umum",
        "services.s3.desc": "Melayani pengiriman berbagai jenis barang seperti dokumen penting, barang dagangan, dan kebutuhan industri.",
        "services.s4.title": "Distribusi Frozen Food",
        "services.s4.desc": "Layanan distribusi untuk produk makanan beku dengan penanganan khusus selama proses pengiriman Bandung-Bekasi dan Bandung-Jogja.",
        "services.s5.title": "Pengiriman Barang Khusus",
        "services.s5.desc": "Pengiriman oli, bahan bakar, gas pecah belah, dan elektronik dengan standar keamanan yang terjaga.",
        "services.s6.title": "Distribusi Nasional",
        "services.s6.desc": "Menjangkau hingga wilayah jawa dan sumatera untuk FTL dan menjangkau seluruh indonesia untuk LTL.",

        // CTA
        "cta.title": "Butuh Pengiriman Cepat dan Aman?",
        "cta.desc": "Adiyat Cargo siap membantu kebutuhan distribusi barang Anda dengan layanan pengiriman yang profesional, aman, dan terpercaya.",
        "cta.btn": "Hubungi Kami",

        // FAQ
        "faq.title": "Pertanyaan yang Sering Ditanyakan",
        "faq.subtitle": "Informasi umum mengenai layanan pengiriman Adiyat Cargo.",
        "faq.q1.q": "Apa saja jenis barang yang dapat dikirim?",
        "faq.q1.a": "Kami melayani pengiriman berbagai jenis barang seperti dokumen penting, dry goods, frozen food, bahan kimia, minyak, dan oli mesin.",
        "faq.q2.q": "Apakah Adiyat Cargo melayani pengiriman dalam jumlah kecil?",
        "faq.q2.a": "Ya, kami menyediakan layanan LTL (Less Truck Load) yang memungkinkan pengiriman barang dalam jumlah kecil.",
        "faq.q3.q": "Apakah tersedia layanan pengiriman dalam jumlah besar?",
        "faq.q3.a": "Tersedia layanan FTL (Full Truck Load) untuk pengiriman barang dalam jumlah besar menggunakan satu armada khusus.",
        "faq.q4.q": "Bagaimana cara melakukan pemesanan pengiriman?",
        "faq.q4.a": "Anda dapat menghubungi tim kami melalui halaman kontak atau melalui nomor yang tersedia untuk melakukan pemesanan pengiriman.",
        "faq.q5.q": "Apakah barang dijamin aman selama pengiriman?",
        "faq.q5.a": "Kami memastikan setiap pengiriman ditangani dengan standar keamanan yang baik oleh tim profesional.",

        // Mitra
        "mitra.title": "Cari lokasi agen terdekat kami di kota Anda!",
        "mitra.selectPlaceholder": "Pilih Kota Mitra",

        // Contact
        "contact.title": "Hubungi Kami",
        "contact.subtitle": "Silakan hubungi tim Adiyat Cargo untuk informasi layanan pengiriman atau konsultasi logistik.",
        "contact.addressLabel": "Alamat",
        "contact.phoneLabel": "Telepon / WhatsApp",
        "contact.emailLabel": "Email",
        "contact.namePlaceholder": "Nama Anda",
        "contact.emailPlaceholder": "Email Anda",
        "contact.subjectPlaceholder": "Subjek",
        "contact.messagePlaceholder": "Tulis kebutuhan pengiriman Anda",
        "contact.sendBtn": "Kirim via WhatsApp",

        // Footer
        "footer.tagline": "Layanan pengiriman barang yang cepat, aman, dan terpercaya untuk kebutuhan distribusi bisnis maupun personal Anda.",
        "footer.copyright": "Copyright",
        "footer.allRights": "All Rights Reserved",
      },

      en: {
        // Navbar
        "nav.home": "Home",
        "nav.about": "About",
        "nav.services": "Services",
        "nav.faq": "FAQ",
        "nav.joinUs": "Join With Us",
        "nav.kemitraan": "Partnership",
        "nav.cekKemitraan": "Check Partnership Status",
        "nav.contact": "Contact",

        // Hero Slide 1
        "hero.slide1.title": 'Fast, Precise, and Secure Delivery with <span>Adiyat Cargo</span>',
        "hero.slide1.desc": "Freight delivery services with LTL and FTL systems for all your business needs. We handle fragile goods, important documents, frozen food, and industrial materials safely and professionally.",
        "hero.slide1.btn": "Explore Our Services",

        // Hero Slide 2
        "hero.slide2.title": "Logistics Services for All Types of Goods",
        "hero.slide2.desc": "We handle the delivery of various goods including important documents, frozen food, dry goods, chemicals, oil, and engine lubricants with safe handling throughout the journey.",
        "hero.slide2.btn": "View Services",

        // Hero Slide 3
        "hero.slide3.title": "Easy & Fast Delivery Process",
        "hero.slide3.desc": "Orders can be placed easily via WhatsApp or Telegram. Our team will handle pickup, shipping, and delivery confirmation with photo or video proof to the customer.",
        "hero.slide3.btn": "Contact Us",

        // About
        "about.title": "About Adiyat Cargo",
        "about.p1": "Adiyat Cargo is a freight delivery service operating with LTL (Less Truck Load) and FTL (Full Truck Load) systems. The company is an expansion of Adiyat Courier, established in 2024, with the goal of providing fast, safe, and reliable shipping solutions for both businesses and individuals.",
        "about.li1": "Delivery of fragile goods and important documents",
        "about.li2": "Distribution of frozen food, dry goods, and pasta goods",
        "about.li3": "Shipping of chemicals, oil, and engine lubricants",
        "about.p2": "Backed by a professional team and an organized delivery system, Adiyat Cargo is committed to providing efficient logistics services and helping customers distribute their goods safely to their destination.",

        // Features
        "features.title": "Our Advantages",
        "features.subtitle": "Adiyat Cargo delivers safe, fast, and reliable shipping services for all kinds of business and personal needs.",
        "features.f1.title": "Fast & Safe Delivery",
        "features.f1.desc": "We ensure every shipment is handled safely and efficiently until it reaches its destination.",
        "features.f2.title": "Handles All Types of Goods",
        "features.f2.desc": "We ship important documents, dry goods, frozen food, chemicals, oil, and engine lubricants.",
        "features.f3.title": "Wide Distribution",
        "features.f3.desc": "Our distribution service covers a wide range of areas with an organized logistics system.",
        "features.f4.title": "Trusted & Professional",
        "features.f4.desc": "Supported by an experienced and professional team in the field of logistics and freight delivery.",

        // Services
        "services.title": "Our Services",
        "services.subtitle": "Adiyat Cargo provides a wide range of delivery services to meet your freight distribution needs quickly and safely.",
        "services.s1.title": "LTL Delivery",
        "services.s1.desc": "Less Truck Load service for shipping small quantities of goods without renting a full vehicle.",
        "services.s2.title": "FTL Delivery",
        "services.s2.desc": "Full Truck Load for shipping large quantities of goods using a dedicated vehicle.",
        "services.s3.title": "General Goods Delivery",
        "services.s3.desc": "Handles delivery of various goods such as important documents, merchandise, and industrial supplies.",
        "services.s4.title": "Frozen Food Distribution",
        "services.s4.desc": "Distribution service for frozen food products with special handling during shipment on Bandung–Bekasi and Bandung–Jogja routes.",
        "services.s5.title": "Special Goods Delivery",
        "services.s5.desc": "Shipping of lubricants, fuel, fragile gases, and electronics with maintained safety standards.",
        "services.s6.title": "National Distribution",
        "services.s6.desc": "Covering Java and Sumatra for FTL, and all of Indonesia for LTL shipments.",

        // CTA
        "cta.title": "Need Fast and Secure Delivery?",
        "cta.desc": "Adiyat Cargo is ready to support your freight distribution needs with professional, safe, and reliable delivery services.",
        "cta.btn": "Contact Us",

        // FAQ
        "faq.title": "Frequently Asked Questions",
        "faq.subtitle": "General information about Adiyat Cargo's delivery services.",
        "faq.q1.q": "What types of goods can be shipped?",
        "faq.q1.a": "We handle the delivery of various goods including important documents, dry goods, frozen food, chemicals, oil, and engine lubricants.",
        "faq.q2.q": "Does Adiyat Cargo handle small shipments?",
        "faq.q2.a": "Yes, we provide LTL (Less Truck Load) service that allows shipping of small quantities of goods.",
        "faq.q3.q": "Is large-volume shipping available?",
        "faq.q3.a": "FTL (Full Truck Load) service is available for shipping large quantities of goods using a dedicated fleet.",
        "faq.q4.q": "How do I place a delivery order?",
        "faq.q4.a": "You can contact our team via the contact page or through the available number to place a delivery order.",
        "faq.q5.q": "Are goods guaranteed to be safe during delivery?",
        "faq.q5.a": "We ensure every shipment is handled to good safety standards by our professional team.",

        // Mitra
        "mitra.title": "Find the nearest agent location in your city!",
        "mitra.selectPlaceholder": "Select Partner City",

        // Contact
        "contact.title": "Contact Us",
        "contact.subtitle": "Please contact the Adiyat Cargo team for shipping service information or logistics consultation.",
        "contact.addressLabel": "Address",
        "contact.phoneLabel": "Phone / WhatsApp",
        "contact.emailLabel": "Email",
        "contact.namePlaceholder": "Your Name",
        "contact.emailPlaceholder": "Your Email",
        "contact.subjectPlaceholder": "Subject",
        "contact.messagePlaceholder": "Describe your shipping needs",
        "contact.sendBtn": "Send via WhatsApp",

        // Footer
        "footer.tagline": "Fast, safe, and reliable freight delivery services for your business and personal distribution needs.",
        "footer.copyright": "Copyright",
        "footer.allRights": "All Rights Reserved",
      }
    };

    // =============================================
    // LANGUAGE SWITCHER
    // =============================================
    let currentLang = localStorage.getItem('adiyat_lang') || 'id';

    function setLanguage(lang) {
      currentLang = lang;
      localStorage.setItem('adiyat_lang', lang);

      const dict = translations[lang];

      // Update label in navbar
      document.getElementById('current-lang').textContent = lang === 'id' ? '🇮🇩 ID' : '🇬🇧 EN';

      // Update html lang attribute
      document.documentElement.lang = lang;

      // Update all elements with data-i18n attribute
      document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (dict[key] !== undefined) {
          el.innerHTML = dict[key];
        }
      });

      // Update placeholder attributes
      document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
        const key = el.getAttribute('data-i18n-placeholder');
        if (dict[key] !== undefined) {
          el.placeholder = dict[key];
        }
      });

      // Update select option placeholders
      document.querySelectorAll('[data-i18n-option]').forEach(el => {
        const key = el.getAttribute('data-i18n-option');
        if (dict[key] !== undefined) {
          el.textContent = dict[key];
        }
      });

      // Re-render cabang list if a city is already selected
      const dropdown = document.querySelector('.mitra-dropdown');
      if (dropdown && dropdown.value) {
        showCabang(dropdown.value);
      }

      // Prevent default link behavior
      return false;
    }

    // Apply saved language on page load
    document.addEventListener('DOMContentLoaded', function () {
      setLanguage(currentLang);
    });

    // =============================================
    // WHATSAPP CONTACT
    // =============================================
    function sendWhatsApp() {
      var name    = document.getElementById("name").value;
      var email   = document.getElementById("email").value;
      var subject = document.getElementById("subject").value;
      var message = document.getElementById("message").value;

      var url = "https://wa.me/6289672236611?text="
        + "Nama: " + name + "%0a"
        + "Email: " + email + "%0a"
        + "Subjek: " + subject + "%0a"
        + "Pesan: " + message;

      window.open(url, '_blank').focus();
    }
  </script>

</body>

</html>