<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kemitraan - Adiyat Cargo</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="/landing-assets/img/favicon.png" rel="icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <link href="{{ asset('landing-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-assets/css/main.css') }}" rel="stylesheet">

  <style>
    .kemitraan-hero {
      padding-top: 160px;
      padding-bottom: 100px;
      background: #000;
      text-align: center;
      color: #fff;
    }
    .kemitraan-hero h1 { font-size: 48px; font-weight: 800; margin-bottom: 16px; color: #fff !important; }
    .kemitraan-hero h1 span { color: #00d4ff !important; }
    .kemitraan-hero p { max-width: 650px; margin: auto; color: #cfcfcf; font-size: 17px; line-height: 1.8; }

    .form-section { padding: 70px 0 80px; background: #f8f9fa; }
    .form-card { background: #fff; border-radius: 16px; padding: 48px 40px; box-shadow: 0 4px 30px rgba(0,0,0,.08); }
    .form-card h4 { font-weight: 700; font-size: 22px; color: #1a1a2e; margin-bottom: 32px; text-align: center; }
    .form-card h4 span { color: #4fd1ff; }

    .form-label { font-weight: 600; font-size: 14px; color: #444; margin-bottom: 6px; }
    .form-control, .form-select {
      border: 1.5px solid #e0e0e0; border-radius: 10px;
      padding: 11px 14px; font-size: 14px; color: #333;
      transition: border-color .2s, box-shadow .2s;
    }
    .form-control:focus, .form-select:focus {
      border-color: #4fd1ff; box-shadow: 0 0 0 3px rgba(79,209,255,.15); outline: none;
    }
    .form-control.is-invalid, .form-select.is-invalid { border-color: #dc3545; }
    .invalid-feedback { font-size: 12px; }

    .btn-submit {
      background: #4fd1ff; color: #000; font-weight: 700; font-size: 15px;
      border: none; border-radius: 30px; padding: 12px 44px;
      letter-spacing: .5px; transition: background .2s, transform .15s; min-width: 180px;
    }
    .btn-submit:hover { background: #00b8e6; transform: translateY(-2px); }
    .btn-submit:disabled { opacity: .7; cursor: not-allowed; transform: none; }

    .field-divider { border: none; border-top: 1px solid #f0f0f0; margin: 24px 0; }

    .alert-success-custom {
      display: none; background: #e8fdf5; border: 1.5px solid #4fd1ff;
      border-radius: 12px; padding: 20px 24px; text-align: center;
      color: #1a1a2e; margin-bottom: 28px;
    }
    .alert-success-custom i { font-size: 36px; color: #4fd1ff; display: block; margin-bottom: 8px; }
    .alert-success-custom p { margin: 0; font-size: 15px; }

    footer.footer { background: #f8f9fa; padding: 28px 0; text-align: center; font-size: 14px; color: #666; }
    footer .sitename { font-weight: 700; color: #1a1a2e; display: block; font-size: 18px; margin-bottom: 4px; }
  </style>
</head>

<body>

  <!-- HEADER -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset('landing-assets/img/logo.png') }}" alt="Logo">
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

  <!-- HERO -->
  <section class="kemitraan-hero">
    <div class="container">
      <h1 data-i18n="hero.title">Daftar Kemitraan <span>Adiyat Cargo</span></h1>
      <p data-i18n="hero.desc">
        Isi formulir berikut untuk mendaftarkan perusahaan Anda sebagai
        mitra resmi Adiyat Cargo dan nikmati kemudahan layanan
        pengiriman cargo terpercaya di seluruh Indonesia.
      </p>
    </div>
  </section>

  <!-- FORM -->
  <section class="form-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="form-card">

            <h4 data-i18n="form.heading">Form Pendaftaran <span>Mitra</span></h4>

            <!-- Alert sukses -->
            <div class="alert-success-custom" id="successAlert">
              <i class="bi bi-check-circle-fill"></i>
              <p id="successMsg">Pengajuan kemitraan berhasil dikirim! Tim kami akan segera menghubungi Anda.</p>
            </div>

            <form id="kemitraan-form" novalidate>
              @csrf

              <!-- Nama Perusahaan → disimpan sebagai nama_mitra -->
              <div class="mb-3">
                <label class="form-label" data-i18n="form.companyName">Nama Perusahaan</label>
                <input type="text" id="nama_mitra" name="nama_mitra" class="form-control"
                  data-i18n-placeholder="form.companyPlaceholder" placeholder="Nama perusahaan">
                <div class="invalid-feedback" id="err-nama_mitra"></div>
              </div>

              <!-- Nama PIC -->
              <div class="mb-3">
                <label class="form-label" data-i18n="form.pic">Nama PIC</label>
                <input type="text" id="nama_pic" name="nama_pic" class="form-control"
                  data-i18n-placeholder="form.picPlaceholder" placeholder="Nama penanggung jawab">
                <div class="invalid-feedback" id="err-nama_pic"></div>
              </div>

              <hr class="field-divider">

              <!-- Email -->
              <div class="mb-3">
                <label class="form-label" data-i18n="form.email">Email</label>
                <input type="email" id="email" name="email" class="form-control"
                  data-i18n-placeholder="form.emailPlaceholder" placeholder="Email perusahaan">
                <div class="invalid-feedback" id="err-email"></div>
              </div>

              <!-- WhatsApp → field name: whatsapp (sesuai kolom tabel) -->
              <div class="mb-3">
                <label class="form-label" data-i18n="form.wa">Nomor WhatsApp</label>
                <input type="text" id="whatsapp" name="whatsapp" class="form-control" placeholder="08xxxxxxxxxx">
                <div class="invalid-feedback" id="err-whatsapp"></div>
              </div>

              <hr class="field-divider">

              <!-- Jenis Bisnis -->
              <div class="mb-3">
                <label class="form-label" data-i18n="form.bizType">Jenis Bisnis</label>
                <select id="jenis_bisnis" name="jenis_bisnis" class="form-select">
                  <option data-i18n-opt="opt.distributor">Distributor</option>
                  <option data-i18n-opt="opt.supplier">Supplier</option>
                  <option data-i18n-opt="opt.umkm">UMKM</option>
                  <option data-i18n-opt="opt.logistics">Perusahaan Logistik</option>
                  <option data-i18n-opt="opt.other">Lainnya</option>
                </select>
              </div>

              <!-- Volume -->
              <div class="mb-3">
                <label class="form-label" data-i18n="form.volume">Perkiraan Volume Pengiriman</label>
                <select id="volume_pengiriman" name="volume_pengiriman" class="form-select">
                  <option data-i18n-opt="vol.1">1 - 10 kiriman / bulan</option>
                  <option data-i18n-opt="vol.2">10 - 50 kiriman / bulan</option>
                  <option data-i18n-opt="vol.3">50 - 100 kiriman / bulan</option>
                  <option data-i18n-opt="vol.4">&gt; 100 kiriman / bulan</option>
                </select>
              </div>

              <hr class="field-divider">

              <!-- Alamat -->
              <div class="mb-4">
                <label class="form-label" data-i18n="form.address">Alamat Perusahaan</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="3"
                  data-i18n-placeholder="form.addressPlaceholder"
                  placeholder="Jl. Contoh No. 1, Kota, Provinsi"></textarea>
                <div class="invalid-feedback" id="err-alamat"></div>
              </div>

              <div class="text-center">
                <button type="button" id="submitBtn" class="btn-submit" onclick="submitKemitraan()" data-i18n="form.submitBtn">
                  Kirim Pengajuan
                </button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <span class="sitename">Adiyat Cargo</span>
      <p data-i18n="footer.tagline">Layanan pengiriman barang cepat, aman dan terpercaya.</p>
      <div>© Adiyat Cargo — <span data-i18n="footer.allRights">All Rights Reserved</span></div>
    </div>
  </footer>

  <!-- JS -->
  <script src="{{ asset('landing-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing-assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('landing-assets/js/main.js') }}"></script>

  <script>
    AOS.init({ duration: 700, once: true });

    // =============================================
    // TRANSLATION DICTIONARY
    // =============================================
    const translations = {
      id: {
        "nav.home": "Home", "nav.about": "About", "nav.services": "Services",
        "nav.faq": "FAQ", "nav.joinUs": "Join With Us", "nav.kemitraan": "Kemitraan",
        "nav.cekKemitraan": "Cek Status Kemitraan", "nav.contact": "Contact",
        "hero.title": 'Daftar Kemitraan <span>Adiyat Cargo</span>',
        "hero.desc": "Isi formulir berikut untuk mendaftarkan perusahaan Anda sebagai mitra resmi Adiyat Cargo dan nikmati kemudahan layanan pengiriman cargo terpercaya di seluruh Indonesia.",
        "form.heading": 'Form Pendaftaran <span>Mitra</span>',
        "form.companyName": "Nama Perusahaan", "form.companyPlaceholder": "Nama perusahaan",
        "form.pic": "Nama PIC", "form.picPlaceholder": "Nama penanggung jawab",
        "form.email": "Email", "form.emailPlaceholder": "Email perusahaan",
        "form.wa": "Nomor WhatsApp",
        "form.bizType": "Jenis Bisnis",
        "form.volume": "Perkiraan Volume Pengiriman",
        "form.address": "Alamat Perusahaan", "form.addressPlaceholder": "Jl. Contoh No. 1, Kota, Provinsi",
        "form.submitBtn": "Kirim Pengajuan", "form.submitting": "Mengirim...",
        "form.successMsg": "Pengajuan kemitraan berhasil dikirim! Tim kami akan segera menghubungi Anda.",
        "opt.distributor": "Distributor", "opt.supplier": "Supplier",
        "opt.umkm": "UMKM", "opt.logistics": "Perusahaan Logistik", "opt.other": "Lainnya",
        "vol.1": "1 - 10 kiriman / bulan", "vol.2": "10 - 50 kiriman / bulan",
        "vol.3": "50 - 100 kiriman / bulan", "vol.4": "> 100 kiriman / bulan",
        "footer.tagline": "Layanan pengiriman barang cepat, aman dan terpercaya.",
        "footer.allRights": "All Rights Reserved",
      },
      en: {
        "nav.home": "Home", "nav.about": "About", "nav.services": "Services",
        "nav.faq": "FAQ", "nav.joinUs": "Join With Us", "nav.kemitraan": "Partnership",
        "nav.cekKemitraan": "Check Partnership Status", "nav.contact": "Contact",
        "hero.title": 'Register for <span>Adiyat Cargo</span> Partnership',
        "hero.desc": "Fill in the form below to register your company as an official Adiyat Cargo partner and enjoy reliable cargo delivery services across Indonesia.",
        "form.heading": 'Partner <span>Registration Form</span>',
        "form.companyName": "Company Name", "form.companyPlaceholder": "Your company name",
        "form.pic": "PIC Name", "form.picPlaceholder": "Person in charge name",
        "form.email": "Email", "form.emailPlaceholder": "Company email",
        "form.wa": "WhatsApp Number",
        "form.bizType": "Business Type",
        "form.volume": "Estimated Shipping Volume",
        "form.address": "Company Address", "form.addressPlaceholder": "Street, City, Province",
        "form.submitBtn": "Submit Application", "form.submitting": "Submitting...",
        "form.successMsg": "Partnership application submitted! Our team will contact you shortly.",
        "opt.distributor": "Distributor", "opt.supplier": "Supplier",
        "opt.umkm": "Small & Medium Business", "opt.logistics": "Logistics Company", "opt.other": "Other",
        "vol.1": "1 - 10 shipments / month", "vol.2": "10 - 50 shipments / month",
        "vol.3": "50 - 100 shipments / month", "vol.4": "> 100 shipments / month",
        "footer.tagline": "Fast, safe, and reliable freight delivery services.",
        "footer.allRights": "All Rights Reserved",
      }
    };

    let currentLang = localStorage.getItem('adiyat_lang') || 'id';

    function setLanguage(lang) {
      currentLang = lang;
      localStorage.setItem('adiyat_lang', lang);
      const dict = translations[lang];
      document.documentElement.lang = lang;
      document.getElementById('current-lang').textContent = lang === 'id' ? '🇮🇩 ID' : '🇬🇧 EN';
      document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (dict[key] !== undefined) el.innerHTML = dict[key];
      });
      document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
        const key = el.getAttribute('data-i18n-placeholder');
        if (dict[key] !== undefined) el.placeholder = dict[key];
      });
      document.querySelectorAll('[data-i18n-opt]').forEach(el => {
        const key = el.getAttribute('data-i18n-opt');
        if (dict[key] !== undefined) el.textContent = dict[key];
      });
    }

    document.addEventListener('DOMContentLoaded', () => setLanguage(currentLang));

    // =============================================
    // SUBMIT → AJAX ke MitraController@kemitraanStore
    // =============================================
    function clearErrors() {
      document.querySelectorAll('.form-control, .form-select').forEach(el => el.classList.remove('is-invalid'));
      document.querySelectorAll('[id^="err-"]').forEach(el => el.textContent = '');
    }

    function showError(field, msg) {
      const input = document.getElementById(field);
      const errEl = document.getElementById('err-' + field);
      if (input)  input.classList.add('is-invalid');
      if (errEl)  errEl.textContent = msg;
    }

    async function submitKemitraan() {
      clearErrors();

      const btn  = document.getElementById('submitBtn');
      const dict = translations[currentLang];

      const payload = {
        nama_mitra        : document.getElementById('nama_mitra').value.trim(),
        nama_pic          : document.getElementById('nama_pic').value.trim(),
        email             : document.getElementById('email').value.trim(),
        whatsapp          : document.getElementById('whatsapp').value.trim(),
        jenis_bisnis      : document.getElementById('jenis_bisnis').value,
        volume_pengiriman : document.getElementById('volume_pengiriman').value,
        alamat            : document.getElementById('alamat').value.trim(),
      };

      btn.disabled    = true;
      btn.textContent = dict['form.submitting'];

      try {
        const response = await fetch('/kemitraan', {
          method : 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept'       : 'application/json',
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content,
          },
          body: JSON.stringify(payload),
        });

        const data = await response.json();

        if (response.ok && data.success) {
          const alertEl = document.getElementById('successAlert');
          document.getElementById('successMsg').textContent = dict['form.successMsg'];
          alertEl.style.display = 'block';
          document.getElementById('kemitraan-form').reset();
          alertEl.scrollIntoView({ behavior: 'smooth', block: 'center' });

        } else if (response.status === 422 && data.errors) {
          Object.entries(data.errors).forEach(([field, messages]) => showError(field, messages[0]));

        } else {
          alert('Terjadi kesalahan. Silakan coba lagi.');
        }

      } catch (err) {
        console.error(err);
        alert('Gagal terhubung ke server. Periksa koneksi Anda.');
      } finally {
        btn.disabled    = false;
        btn.textContent = dict['form.submitBtn'];
      }
    }
  </script>

</body>
</html>