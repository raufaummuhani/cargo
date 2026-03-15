<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>B2B Partnership - Adiyat Cargo</title>

  <!-- Favicons -->
  <link href="/landing-assets/img/favicon.png" rel="icon">

  <!-- Vendor CSS -->
  <link href="{{ asset('landing-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('landing-assets/css/main.css') }}" rel="stylesheet">
</head>

<body>

<!-- HEADER -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center">
      <img src="{{ asset('landing-assets/img/logo.png') }}" alt="">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/" data-i18n="nav.home">Home</a></li>
        <li><a href="/#about" data-i18n="nav.about">About</a></li>
        <li><a href="/#services" data-i18n="nav.services">Services</a></li>
        <li><a href="/#faq" data-i18n="nav.faq">FAQ</a></li>
        <li class="dropdown">
          <a href="#"><span data-i18n="nav.joinUs">Join With Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="/b2b">B2B</a></li>
            <li><a href="/kemitraan" data-i18n="nav.kemitraan">Kemitraan</a></li>
            <li><a href="/cek-kemitraan" data-i18n="nav.cekKemitraan">Cek Status Kemitraan</a></li>
          </ul>
        </li>
        <li><a href="/#contact" data-i18n="nav.contact">Contact</a></li>
        <li class="dropdown">
          <a href="#">
            <span id="current-lang">🇮🇩 ID</span>
            <i class="bi bi-chevron-down toggle-dropdown"></i>
          </a>
          <ul>
            <li><a href="#" onclick="setLanguage('id'); return false;">🇮🇩 Indonesia</a></li>
            <li><a href="#" onclick="setLanguage('en'); return false;">🇬🇧 English</a></li>
          </ul>
        </li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>


<!-- Hero B2B -->
<section class="hero section dark-background" style="
  padding-top:140px;
  padding-bottom:90px;
  background:#000;
  text-align:center;
  color:white;
">
  <div class="container">
    <h1 style="font-weight:700;font-size:42px;" data-i18n="hero.title">
      Bangun Kerja Sama Logistik Bersama
      <span style="color:#4fd1ff;">Adiyat Cargo</span>
    </h1>
    <p class="mt-3" style="max-width:650px;margin:auto;color:#cfd8dc;" data-i18n="hero.desc">
      Kami membuka peluang kerja sama B2B bagi perusahaan, distributor,
      maupun pelaku bisnis yang membutuhkan layanan pengiriman barang
      yang cepat, aman, dan terpercaya.
    </p>
  </div>
</section>


<!-- BENEFIT -->
<section class="services section">

  <div class="container section-title">
    <h2 data-i18n="benefit.title">Keuntungan Kerja Sama</h2>
    <p data-i18n="benefit.subtitle">Beberapa keuntungan bermitra dengan Adiyat Cargo</p>
  </div>

  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="service-item text-center">
          <div class="icon"><i class="bi bi-truck"></i></div>
          <h3 data-i18n="benefit.b1.title">Pengiriman Prioritas</h3>
          <p data-i18n="benefit.b1.desc">Mitra bisnis mendapatkan prioritas dalam proses pengiriman.</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item text-center">
          <div class="icon"><i class="bi bi-graph-up"></i></div>
          <h3 data-i18n="benefit.b2.title">Harga Khusus Mitra</h3>
          <p data-i18n="benefit.b2.desc">Kami menyediakan skema harga khusus untuk partner bisnis.</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item text-center">
          <div class="icon"><i class="bi bi-people"></i></div>
          <h3 data-i18n="benefit.b3.title">Support Dedicated</h3>
          <p data-i18n="benefit.b3.desc">Tim kami siap membantu kebutuhan distribusi bisnis Anda.</p>
        </div>
      </div>

    </div>
  </div>

</section>


<!-- CTA -->
<section class="call-to-action section dark-background">
  <div class="container text-center">
    <h3 data-i18n="cta.title">Tertarik Menjadi Partner?</h3>
    <p data-i18n="cta.desc">
      Daftarkan perusahaan Anda untuk menjadi mitra resmi
      Adiyat Cargo dan nikmati berbagai keuntungan kerja sama.
    </p>
    <a href="/kemitraan" class="cta-btn" data-i18n="cta.btn">Ajukan Kemitraan</a>
  </div>
</section>


<!-- FOOTER -->
<footer class="footer light-background">
  <div class="container text-center">
    <h3>Adiyat Cargo</h3>
    <p data-i18n="footer.tagline">Layanan pengiriman barang cepat, aman dan terpercaya.</p>
    <div class="copyright">
      © Adiyat Cargo - <span data-i18n="footer.allRights">All Rights Reserved</span>
    </div>
  </div>
</footer>


<!-- JS -->
<script src="{{ asset('landing-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landing-assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('landing-assets/js/main.js') }}"></script>

<script>
  // =============================================
  // TRANSLATION DICTIONARY — B2B PAGE
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

      // Hero
      "hero.title": 'Bangun Kerja Sama Logistik Bersama <span style="color:#4fd1ff;">Adiyat Cargo</span>',
      "hero.desc": "Kami membuka peluang kerja sama B2B bagi perusahaan, distributor, maupun pelaku bisnis yang membutuhkan layanan pengiriman barang yang cepat, aman, dan terpercaya.",

      // Benefit
      "benefit.title": "Keuntungan Kerja Sama",
      "benefit.subtitle": "Beberapa keuntungan bermitra dengan Adiyat Cargo",
      "benefit.b1.title": "Pengiriman Prioritas",
      "benefit.b1.desc": "Mitra bisnis mendapatkan prioritas dalam proses pengiriman.",
      "benefit.b2.title": "Harga Khusus Mitra",
      "benefit.b2.desc": "Kami menyediakan skema harga khusus untuk partner bisnis.",
      "benefit.b3.title": "Support Dedicated",
      "benefit.b3.desc": "Tim kami siap membantu kebutuhan distribusi bisnis Anda.",

      // CTA
      "cta.title": "Tertarik Menjadi Partner?",
      "cta.desc": "Daftarkan perusahaan Anda untuk menjadi mitra resmi Adiyat Cargo dan nikmati berbagai keuntungan kerja sama.",
      "cta.btn": "Ajukan Kemitraan",

      // Footer
      "footer.tagline": "Layanan pengiriman barang cepat, aman dan terpercaya.",
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

      // Hero
      "hero.title": 'Build a Logistics Partnership with <span style="color:#4fd1ff;">Adiyat Cargo</span>',
      "hero.desc": "We open B2B collaboration opportunities for companies, distributors, and business owners who need fast, safe, and reliable freight delivery services.",

      // Benefit
      "benefit.title": "Partnership Benefits",
      "benefit.subtitle": "Some of the advantages of partnering with Adiyat Cargo",
      "benefit.b1.title": "Priority Delivery",
      "benefit.b1.desc": "Business partners receive priority processing for their shipments.",
      "benefit.b2.title": "Exclusive Partner Pricing",
      "benefit.b2.desc": "We offer special pricing schemes tailored for business partners.",
      "benefit.b3.title": "Dedicated Support",
      "benefit.b3.desc": "Our team is ready to support all your business distribution needs.",

      // CTA
      "cta.title": "Interested in Becoming a Partner?",
      "cta.desc": "Register your company as an official Adiyat Cargo partner and enjoy a range of collaboration benefits.",
      "cta.btn": "Apply for Partnership",

      // Footer
      "footer.tagline": "Fast, safe, and reliable freight delivery services.",
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

    document.documentElement.lang = lang;
    document.getElementById('current-lang').textContent = lang === 'id' ? '🇮🇩 ID' : '🇬🇧 EN';

    document.querySelectorAll('[data-i18n]').forEach(el => {
      const key = el.getAttribute('data-i18n');
      if (dict[key] !== undefined) {
        el.innerHTML = dict[key];
      }
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    setLanguage(currentLang);
  });
</script>

</body>
</html>