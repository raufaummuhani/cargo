<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cek Status Kemitraan - Adiyat Cargo</title>

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
    .cek-hero {
      padding-top: 160px;
      padding-bottom: 100px;
      background: #000;
      text-align: center;
      color: #fff;
    }
    .cek-hero h1 { font-size: 48px; font-weight: 800; margin-bottom: 16px; color: #fff !important; }
    .cek-hero h1 span { color: #00d4ff !important; }
    .cek-hero p { max-width: 650px; margin: auto; color: #cfcfcf; font-size: 17px; line-height: 1.8; }

    .cek-section { padding: 70px 0 80px; background: #f8f9fa; }

    .cek-card {
      background: #fff;
      border-radius: 16px;
      padding: 48px 40px;
      box-shadow: 0 4px 30px rgba(0,0,0,.08);
    }
    .cek-card h4 {
      font-weight: 700;
      font-size: 22px;
      color: #1a1a2e;
      margin-bottom: 32px;
      text-align: center;
    }
    .cek-card h4 span { color: #4fd1ff; }

    .form-label { font-weight: 600; font-size: 14px; color: #444; margin-bottom: 6px; }
    .form-control {
      border: 1.5px solid #e0e0e0; border-radius: 10px;
      padding: 11px 14px; font-size: 14px; color: #333;
      transition: border-color .2s, box-shadow .2s;
    }
    .form-control:focus {
      border-color: #4fd1ff; box-shadow: 0 0 0 3px rgba(79,209,255,.15); outline: none;
    }
    .form-control.is-invalid { border-color: #dc3545; }
    .invalid-feedback { font-size: 12px; }

    .btn-cek {
      background: #4fd1ff; color: #000; font-weight: 700; font-size: 15px;
      border: none; border-radius: 30px; padding: 12px 44px;
      letter-spacing: .5px; transition: background .2s, transform .15s; min-width: 160px;
    }
    .btn-cek:hover { background: #00b8e6; transform: translateY(-2px); }
    .btn-cek:disabled { opacity: .7; cursor: not-allowed; transform: none; }

    /* Result card */
    .result-box {
      display: none;
      margin-top: 28px;
      border-radius: 12px;
      padding: 24px;
      border: 1.5px solid #e0e0e0;
    }
    .result-box.show { display: block; }
    .result-box .result-label {
      font-size: 12px; font-weight: 600; color: #888;
      text-transform: uppercase; letter-spacing: .5px; margin-bottom: 4px;
    }
    .result-box .result-value { font-size: 15px; font-weight: 600; color: #1a1a2e; margin-bottom: 16px; }
    .result-box .result-value:last-child { margin-bottom: 0; }

    /* Status badge */
    .badge-status {
      display: inline-block;
      padding: 5px 16px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 700;
    }
    .badge-diproses  { background: #fff8e1; color: #f59e0b; border: 1.5px solid #f59e0b; }
    .badge-diterima  { background: #e8fdf5; color: #10b981; border: 1.5px solid #10b981; }
    .badge-ditolak   { background: #fff0f0; color: #ef4444; border: 1.5px solid #ef4444; }
    .badge-default   { background: #f0f0f0; color: #666;    border: 1.5px solid #ccc; }

    /* Not found */
    .not-found-box {
      display: none;
      margin-top: 28px;
      text-align: center;
      padding: 28px;
      border-radius: 12px;
      background: #fff0f0;
      border: 1.5px solid #ef4444;
      color: #ef4444;
    }
    .not-found-box.show { display: block; }
    .not-found-box i { font-size: 32px; display: block; margin-bottom: 8px; }

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
  <section class="cek-hero">
    <div class="container">
      <h1 data-i18n="hero.title">Cek Status <span>Kemitraan</span></h1>
      <p data-i18n="hero.desc">
        Masukkan email atau nomor WhatsApp yang digunakan saat mendaftar
        untuk melihat status pengajuan kemitraan Anda.
      </p>
    </div>
  </section>


  <!-- FORM CEK -->
  <section class="cek-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6" data-aos="fade-up">
          <div class="cek-card">

            <h4 data-i18n="form.heading">Cek Pengajuan <span>Mitra</span></h4>

            <div class="mb-3">
              <label class="form-label" data-i18n="form.label">Email / Nomor WhatsApp</label>
              <input
                type="text"
                id="cek-input"
                class="form-control"
                data-i18n-placeholder="form.placeholder"
                placeholder="Masukkan email atau nomor WA"
              >
              <div class="invalid-feedback" id="err-input"></div>
            </div>

            <div class="text-center">
              <button class="btn-cek" id="cek-btn" onclick="cekStatus()" data-i18n="form.btn">
                Cek Status
              </button>
            </div>

            <!-- Hasil ditemukan -->
            <div class="result-box" id="result-box">
              <div class="result-label" data-i18n="result.company">Nama Perusahaan</div>
              <div class="result-value" id="res-nama"></div>

              <div class="result-label" data-i18n="result.pic">Nama PIC</div>
              <div class="result-value" id="res-pic"></div>

              <div class="result-label" data-i18n="result.submitted">Tanggal Daftar</div>
              <div class="result-value" id="res-date"></div>

              <div class="result-label" data-i18n="result.status">Status</div>
              <div class="result-value"><span class="badge-status" id="res-status"></span></div>
            </div>

            <!-- Tidak ditemukan -->
            <div class="not-found-box" id="not-found-box">
              <i class="bi bi-x-circle-fill"></i>
              <p id="not-found-msg" data-i18n="result.notFound">
                Data tidak ditemukan. Pastikan email atau nomor WhatsApp yang dimasukkan sudah benar.
              </p>
            </div>

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

        "hero.title": 'Cek Status <span>Kemitraan</span>',
        "hero.desc": "Masukkan email atau nomor WhatsApp yang digunakan saat mendaftar untuk melihat status pengajuan kemitraan Anda.",

        "form.heading": 'Cek Pengajuan <span>Mitra</span>',
        "form.label": "Email / Nomor WhatsApp",
        "form.placeholder": "Masukkan email atau nomor WA",
        "form.btn": "Cek Status",
        "form.checking": "Mengecek...",

        "result.company": "Nama Perusahaan",
        "result.pic": "Nama PIC",
        "result.submitted": "Tanggal Daftar",
        "result.status": "Status",
        "result.notFound": "Data tidak ditemukan. Pastikan email atau nomor WhatsApp yang dimasukkan sudah benar.",

        "status.diproses": "Diproses",
        "status.diterima": "Diterima",
        "status.ditolak": "Ditolak",

        "footer.tagline": "Layanan pengiriman barang cepat, aman dan terpercaya.",
        "footer.allRights": "All Rights Reserved",
      },
      en: {
        "nav.home": "Home", "nav.about": "About", "nav.services": "Services",
        "nav.faq": "FAQ", "nav.joinUs": "Join With Us", "nav.kemitraan": "Partnership",
        "nav.cekKemitraan": "Check Partnership Status", "nav.contact": "Contact",

        "hero.title": 'Check <span>Partnership</span> Status',

        "hero.desc": "Enter the email or WhatsApp number you used when registering to view your partnership application status.",

        "form.heading": 'Check <span>Application</span>',
        "form.label": "Email / WhatsApp Number",
        "form.placeholder": "Enter your email or WhatsApp number",
        "form.btn": "Check Status",
        "form.checking": "Checking...",

        "result.company": "Company Name",
        "result.pic": "PIC Name",
        "result.submitted": "Registration Date",
        "result.status": "Status",
        "result.notFound": "Data not found. Please make sure the email or WhatsApp number you entered is correct.",

        "status.diproses": "In Review",
        "status.diterima": "Accepted",
        "status.ditolak": "Rejected",

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
        if (dict[key] !== undefined) el.innerHTML = dict[key];
      });
      document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
        const key = el.getAttribute('data-i18n-placeholder');
        if (dict[key] !== undefined) el.placeholder = dict[key];
      });
    }

    document.addEventListener('DOMContentLoaded', () => setLanguage(currentLang));

    // =============================================
    // CEK STATUS
    // =============================================
    async function cekStatus() {
      const input  = document.getElementById('cek-input');
      const btn    = document.getElementById('cek-btn');
      const dict   = translations[currentLang];
      const errEl  = document.getElementById('err-input');

      // Reset
      input.classList.remove('is-invalid');
      errEl.textContent = '';
      document.getElementById('result-box').classList.remove('show');
      document.getElementById('not-found-box').classList.remove('show');

      const query = input.value.trim();
      if (!query) {
        input.classList.add('is-invalid');
        errEl.textContent = currentLang === 'id'
          ? 'Masukkan email atau nomor WhatsApp terlebih dahulu.'
          : 'Please enter your email or WhatsApp number.';
        return;
      }

      btn.disabled    = true;
      btn.textContent = dict['form.checking'];

      try {
        const response = await fetch('/cek-kemitraan', {
          method : 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept'       : 'application/json',
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content,
          },
          body: JSON.stringify({ query }),
        });

        const data = await response.json();

        if (response.ok && data.found) {
          // Tampilkan hasil
          document.getElementById('res-nama').textContent = data.nama_mitra   || '-';
          document.getElementById('res-pic').textContent  = data.nama_pic     || '-';
          document.getElementById('res-date').textContent = data.created_at   || '-';

          // Badge status
          const statusEl  = document.getElementById('res-status');
          const rawStatus = (data.status || '').toLowerCase();
          const statusMap = {
            'diproses' : { cls: 'badge-diproses', label: dict['status.diproses'] },
            'diterima' : { cls: 'badge-diterima', label: dict['status.diterima'] },
            'ditolak'  : { cls: 'badge-ditolak',  label: dict['status.ditolak']  },
          };
          const s = statusMap[rawStatus] || { cls: 'badge-default', label: data.status };
          statusEl.className = 'badge-status ' + s.cls;
          statusEl.textContent = s.label;

          document.getElementById('result-box').classList.add('show');

        } else {
          document.getElementById('not-found-msg').textContent = dict['result.notFound'];
          document.getElementById('not-found-box').classList.add('show');
        }

      } catch (err) {
        console.error(err);
        alert(currentLang === 'id' ? 'Gagal terhubung ke server.' : 'Failed to connect to server.');
      } finally {
        btn.disabled    = false;
        btn.textContent = dict['form.btn'];
      }
    }

    // Enter key support
    document.addEventListener('DOMContentLoaded', () => {
      document.getElementById('cek-input').addEventListener('keydown', e => {
        if (e.key === 'Enter') cekStatus();
      });
    });
  </script>

</body>
</html>