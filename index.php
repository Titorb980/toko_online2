<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>ElectroShop | Toko Elektronik Terpercaya</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
:root {
  --primary: #6C3EF4;
  --secondary: #F0A500;
  --accent: #FF5E84;
  --dark: #1A1A2E;
}

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
  font-family: 'Plus Jakarta Sans', sans-serif;
  background: #fff;
  overflow-x: hidden;
}

/* ===== NAVBAR ===== */
.navbar {
  background: rgba(255,255,255,0.95);
  backdrop-filter: blur(20px);
  box-shadow: 0 2px 20px rgba(0,0,0,.08);
  padding: 16px 0;
  position: sticky;
  top: 0;
  z-index: 1000;
}

.navbar-brand {
  font-weight: 800;
  font-size: 1.5rem;
  color: var(--primary) !important;
  letter-spacing: -0.5px;
}

.navbar-brand span { color: var(--secondary); }

.nav-link {
  color: #444 !important;
  font-weight: 600;
  transition: color .2s;
}
.nav-link:hover { color: var(--primary) !important; }

.btn-nav-login {
  border: 2px solid var(--primary);
  color: var(--primary) !important;
  border-radius: 30px;
  padding: 8px 22px;
  font-weight: 700;
  transition: all .3s;
}
.btn-nav-login:hover {
  background: var(--primary);
  color: #fff !important;
}

.btn-nav-register {
  background: linear-gradient(135deg, var(--primary), #9D50FF);
  color: #fff !important;
  border-radius: 30px;
  padding: 8px 22px;
  font-weight: 700;
  transition: transform .3s;
  border: none;
}
.btn-nav-register:hover { transform: translateY(-2px); }

/* ===== HERO ===== */
.hero {
  background: linear-gradient(135deg, #1A1A2E 0%, #16213E 40%, #0F3460 100%);
  min-height: 90vh;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: '';
  position: absolute;
  width: 700px; height: 700px;
  background: radial-gradient(circle, rgba(108,62,244,.35) 0%, transparent 70%);
  top: -200px; right: -200px;
  border-radius: 50%;
}
.hero::after {
  content: '';
  position: absolute;
  width: 500px; height: 500px;
  background: radial-gradient(circle, rgba(240,165,0,.2) 0%, transparent 70%);
  bottom: -150px; left: -100px;
  border-radius: 50%;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(108,62,244,.2);
  border: 1px solid rgba(108,62,244,.4);
  color: #C5AFFF;
  border-radius: 50px;
  padding: 8px 18px;
  font-size: .85rem;
  font-weight: 600;
  margin-bottom: 24px;
}

.hero h1 {
  font-size: 3.5rem;
  font-weight: 800;
  color: #fff;
  line-height: 1.15;
  letter-spacing: -1px;
}

.hero h1 .highlight {
  background: linear-gradient(90deg, #F0A500, #FF5E84);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.hero p.lead {
  color: rgba(255,255,255,.75);
  font-size: 1.1rem;
  max-width: 520px;
}

.btn-hero-primary {
  background: linear-gradient(135deg, var(--primary), #9D50FF);
  color: #fff;
  border-radius: 50px;
  padding: 14px 34px;
  font-weight: 700;
  font-size: 1rem;
  border: none;
  transition: transform .3s, box-shadow .3s;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
}
.btn-hero-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 30px rgba(108,62,244,.5);
  color: #fff;
}

.btn-hero-outline {
  background: transparent;
  color: #fff;
  border: 2px solid rgba(255,255,255,.3);
  border-radius: 50px;
  padding: 14px 34px;
  font-weight: 700;
  font-size: 1rem;
  transition: all .3s;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
}
.btn-hero-outline:hover {
  background: rgba(255,255,255,.1);
  border-color: rgba(255,255,255,.6);
  color: #fff;
}

/* FLOATING CARDS */
.hero-img-wrap {
  position: relative;
  z-index: 2;
}

.float-card {
  position: absolute;
  background: rgba(255,255,255,.1);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255,255,255,.15);
  border-radius: 18px;
  padding: 14px 20px;
  color: #fff;
  font-size: .9rem;
  font-weight: 600;
  animation: float 4s ease-in-out infinite;
}
.float-card i { font-size: 1.5rem; margin-bottom: 4px; }

.float-card.card1 {
  top: 20px; right: -20px;
  animation-delay: 0s;
}
.float-card.card2 {
  bottom: 60px; left: -30px;
  animation-delay: 2s;
}
.float-card.card3 {
  top: 50%; right: -40px;
  animation-delay: 1s;
}

@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-12px); }
}

.hero-main-img {
  width: 100%;
  max-width: 480px;
  filter: drop-shadow(0 30px 60px rgba(0,0,0,.5));
  animation: float 5s ease-in-out infinite;
}

/* STATS */
.stat-item { color: rgba(255,255,255,.85); }
.stat-item h3 {
  font-size: 2rem;
  font-weight: 800;
  color: #fff;
  margin: 0;
}
.stat-divider {
  width: 1px;
  height: 40px;
  background: rgba(255,255,255,.2);
}

/* ===== FEATURES ===== */
.features-section {
  padding: 100px 0;
  background: #fff;
}

.section-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #F3ECFF;
  color: var(--primary);
  border-radius: 50px;
  padding: 8px 18px;
  font-size: .85rem;
  font-weight: 700;
  margin-bottom: 16px;
}

.section-title {
  font-size: 2.2rem;
  font-weight: 800;
  color: var(--dark);
  letter-spacing: -0.5px;
}

.feature-card {
  border: none;
  border-radius: 24px;
  padding: 36px 28px;
  background: #fff;
  transition: transform .35s, box-shadow .35s;
  border: 2px solid #F0F0F8;
  height: 100%;
}
.feature-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 50px rgba(108,62,244,.15);
  border-color: rgba(108,62,244,.2);
}

.feature-icon {
  width: 70px; height: 70px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.8rem;
  margin-bottom: 20px;
}

/* ===== PROMO SECTION ===== */
.promo-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #F8F5FF, #FFF0F5);
}

.promo-card {
  border-radius: 28px;
  overflow: hidden;
  background: linear-gradient(135deg, var(--primary), #9D50FF);
  color: #fff;
  padding: 50px 40px;
  position: relative;
}

.promo-card::before {
  content: '';
  position: absolute;
  width: 300px; height: 300px;
  background: rgba(255,255,255,.08);
  border-radius: 50%;
  top: -100px; right: -80px;
}

/* ===== BRANDS ===== */
.brands-section {
  padding: 60px 0;
  background: #fff;
}

.brand-item {
  filter: grayscale(100%);
  opacity: .5;
  transition: all .3s;
  font-size: 1.4rem;
  font-weight: 800;
  color: #333;
}
.brand-item:hover {
  filter: grayscale(0%);
  opacity: 1;
  color: var(--primary);
}

/* ===== TESTIMONIALS ===== */
.testi-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #F8F5FF, #fff);
}

.testi-card {
  border: 2px solid #F0F0F8;
  border-radius: 24px;
  padding: 32px;
  transition: box-shadow .3s;
  background: #fff;
}
.testi-card:hover {
  box-shadow: 0 15px 40px rgba(108,62,244,.12);
}

.star-icon { color: var(--secondary); }

/* ===== CTA SECTION ===== */
.cta-section {
  padding: 80px 0;
  background: linear-gradient(135deg, var(--dark) 0%, #0F3460 100%);
  position: relative;
  overflow: hidden;
}

.cta-section::before {
  content: '';
  position: absolute;
  width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(108,62,244,.3), transparent 70%);
  top: -200px; left: -100px;
  border-radius: 50%;
}

/* ===== FOOTER ===== */
footer {
  background: var(--dark);
  color: rgba(255,255,255,.7);
  padding: 60px 0 30px;
}
footer .brand { font-weight: 800; font-size: 1.4rem; color: #fff; }
footer a { color: rgba(255,255,255,.6); text-decoration: none; transition: color .2s; }
footer a:hover { color: #fff; }
footer .footer-border { border-top: 1px solid rgba(255,255,255,.1); margin-top: 40px; padding-top: 24px; }

/* ===== SCROLL INDICATOR ===== */
.scroll-indicator {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4px;
  color: rgba(255,255,255,.5);
  font-size: .75rem;
  font-weight: 600;
  animation: bounce 2s infinite;
}
.scroll-indicator i { font-size: 1.2rem; }

@keyframes bounce {
  0%, 100% { transform: translateX(-50%) translateY(0); }
  50% { transform: translateX(-50%) translateY(-6px); }
}

@media (max-width: 768px) {
  .hero h1 { font-size: 2.2rem; }
  .hero { min-height: 80vh; padding: 60px 0; }
  .float-card { display: none; }
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <i class="bi bi-lightning-charge-fill"></i> Electro<span>Shop</span>
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav mx-auto gap-1">
        <li class="nav-item"><a class="nav-link" href="#features">Keunggulan</a></li>
        <li class="nav-item"><a class="nav-link" href="#promo">Promo</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimoni">Ulasan</a></li>
      </ul>
      <div class="d-flex gap-2 mt-3 mt-lg-0">
        <a href="user/login.php" class="btn btn-nav-login">Login</a>
        <a href="user/register.php" class="btn btn-nav-register">Daftar Gratis</a>
      </div>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center">

      <div class="col-lg-6">
        <div class="hero-badge">
          <i class="bi bi-stars"></i> #1 Toko Elektronik Online Indonesia
        </div>
        <h1 class="mb-4">
          Teknologi Terbaik<br>Harga <span class="highlight">Terjangkau</span>
        </h1>
        <p class="lead mb-5">
          Temukan ribuan produk elektronik berkualitas tinggi dengan garansi resmi.
          Belanja mudah, aman, dan cepat sampai ke rumahmu.
        </p>
        <div class="d-flex flex-wrap gap-3 mb-5">
          <a href="user/register.php" class="btn-hero-primary">
            <i class="bi bi-bag-heart-fill"></i> Mulai Belanja
          </a>
          <a href="user/login.php" class="btn-hero-outline">
            <i class="bi bi-person-circle"></i> Sudah Punya Akun?
          </a>
        </div>

        <div class="d-flex gap-4 align-items-center">
          <div class="stat-item text-center">
            <h3>500+</h3>
            <small>Produk</small>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-item text-center">
            <h3>10K+</h3>
            <small>Pelanggan</small>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-item text-center">
            <h3>4.9★</h3>
            <small>Rating</small>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-none d-lg-block">
        <div class="hero-img-wrap text-center">
          <img src="https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?auto=format&fit=crop&w=600&q=80"
               alt="Electronics" class="hero-main-img rounded-4"
               style="border: 3px solid rgba(255,255,255,.15);">

          <div class="float-card card1 text-center">
            <i class="bi bi-shield-check-fill d-block text-success"></i>
            <small>100% Original</small>
          </div>
          <div class="float-card card2 text-center">
            <i class="bi bi-truck d-block text-warning"></i>
            <small>Gratis Ongkir</small>
          </div>
          <div class="float-card card3 text-center">
            <i class="bi bi-award-fill d-block" style="color:#FF5E84;"></i>
            <small>Garansi Resmi</small>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="scroll-indicator">
    <span>Scroll</span>
    <i class="bi bi-chevron-down"></i>
  </div>
</section>

<!-- FEATURES -->
<section class="features-section" id="features">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge">
        <i class="bi bi-star-fill"></i> Mengapa Pilih Kami
      </div>
      <h2 class="section-title">Pengalaman Belanja<br>Yang Berbeda</h2>
    </div>

    <div class="row g-4">
      <div class="col-md-3 col-sm-6">
        <div class="feature-card text-center">
          <div class="feature-icon mx-auto" style="background:#F3ECFF; color:#6C3EF4;">
            <i class="bi bi-cpu-fill"></i>
          </div>
          <h5 class="fw-800 mb-2">Produk Original</h5>
          <p class="text-muted small">Semua produk bersertifikat resmi dengan garansi pabrik langsung.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="feature-card text-center">
          <div class="feature-icon mx-auto" style="background:#FFF3E0; color:#F0A500;">
            <i class="bi bi-tags-fill"></i>
          </div>
          <h5 class="fw-800 mb-2">Harga Terbaik</h5>
          <p class="text-muted small">Harga kompetitif & promo eksklusif setiap minggu khusus member.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="feature-card text-center">
          <div class="feature-icon mx-auto" style="background:#FFF0F5; color:#FF5E84;">
            <i class="bi bi-truck-front-fill"></i>
          </div>
          <h5 class="fw-800 mb-2">Pengiriman Cepat</h5>
          <p class="text-muted small">Pengiriman same-day ke seluruh Indonesia dengan armada terpercaya.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="feature-card text-center">
          <div class="feature-icon mx-auto" style="background:#E8F5E9; color:#2E7D32;">
            <i class="bi bi-headset"></i>
          </div>
          <h5 class="fw-800 mb-2">Support 24/7</h5>
          <p class="text-muted small">Tim customer service kami siap membantu kapanpun Anda butuhkan.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROMO BANNER -->
<section class="promo-section" id="promo">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-7">
        <div class="promo-card">
          <div class="position-relative" style="z-index:1;">
            <span class="badge mb-3 px-3 py-2" style="background:rgba(255,255,255,.2); font-size:.8rem; font-weight:700; border-radius:20px;">
              🔥 PROMO TERBATAS
            </span>
            <h2 class="fw-800 mb-3" style="font-size:2rem;">Diskon s/d <span style="color:#FFD700;">50%</span><br>untuk Member Baru!</h2>
            <p class="mb-4" style="opacity:.85;">Daftar sekarang dan dapatkan voucher diskon eksklusif langsung di pembelian pertama Anda.</p>
            <a href="user/register.php" class="btn btn-light fw-700 rounded-pill px-4 py-2" style="color:var(--primary);">
              <i class="bi bi-gift-fill me-2"></i>Klaim Sekarang
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="row g-3">
          <div class="col-6">
            <div class="card border-0 rounded-4 p-3 text-center h-100" style="background:linear-gradient(135deg,#FFF0F5,#FFEEF8);">
              <i class="bi bi-phone-fill fs-2 mb-2" style="color:#FF5E84;"></i>
              <small class="fw-700 text-dark">Gadget</small>
              <div class="badge mt-1" style="background:#FF5E84;">Terlaris</div>
            </div>
          </div>
          <div class="col-6">
            <div class="card border-0 rounded-4 p-3 text-center h-100" style="background:linear-gradient(135deg,#F3ECFF,#EDE7FF);">
              <i class="bi bi-laptop-fill fs-2 mb-2" style="color:#6C3EF4;"></i>
              <small class="fw-700 text-dark">Laptop</small>
              <div class="badge mt-1" style="background:#6C3EF4;">Hot Deal</div>
            </div>
          </div>
          <div class="col-6">
            <div class="card border-0 rounded-4 p-3 text-center h-100" style="background:linear-gradient(135deg,#FFF8E1,#FFF3C4);">
              <i class="bi bi-headphones fs-2 mb-2" style="color:#F0A500;"></i>
              <small class="fw-700 text-dark">Audio</small>
              <div class="badge mt-1" style="background:#F0A500;">Baru</div>
            </div>
          </div>
          <div class="col-6">
            <div class="card border-0 rounded-4 p-3 text-center h-100" style="background:linear-gradient(135deg,#E8F5E9,#DCEDC8);">
              <i class="bi bi-controller fs-2 mb-2" style="color:#2E7D32;"></i>
              <small class="fw-700 text-dark">Gaming</small>
              <div class="badge mt-1" style="background:#2E7D32;">Promo</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BRANDS -->
<section class="brands-section">
  <div class="container">
    <p class="text-center text-muted fw-600 mb-4">Brand Ternama yang Kami Jual</p>
    <div class="d-flex justify-content-center flex-wrap gap-5 align-items-center">
      <span class="brand-item">ASUS</span>
      <span class="brand-item">Logitech</span>
      <span class="brand-item">Samsung</span>
      <span class="brand-item">Sony</span>
      <span class="brand-item">Apple</span>
      <span class="brand-item">Xiaomi</span>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testi-section" id="testimoni">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge"><i class="bi bi-chat-heart-fill"></i> Testimoni</div>
      <h2 class="section-title">Apa Kata Pelanggan Kami?</h2>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="testi-card">
          <div class="d-flex gap-1 mb-3">
            <i class="bi bi-star-fill star-icon"></i><i class="bi bi-star-fill star-icon"></i>
            <i class="bi bi-star-fill star-icon"></i><i class="bi bi-star-fill star-icon"></i>
            <i class="bi bi-star-fill star-icon"></i>
          </div>
          <p class="text-muted mb-4">"Laptopnya original, pengiriman super cepat! Sudah 3x pesan dan selalu puas. Highly recommended!"</p>
          <div class="d-flex align-items-center gap-3">
            <div class="rounded-circle d-flex align-items-center justify-content-center fw-800 text-white"
                 style="width:45px;height:45px;background:linear-gradient(135deg,#6C3EF4,#9D50FF);font-size:1.1rem;">A</div>
            <div>
              <div class="fw-700 text-dark">Ahmad S.</div>
              <small class="text-muted">Jakarta</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testi-card">
          <div class="d-flex gap-1 mb-3">
            <i class="bi bi-star-fill star-icon"></i><i class="bi bi-star-fill star-icon"></i>
            <i class="bi bi-star-fill star-icon"></i><i class="bi bi-star-fill star-icon"></i>
            <i class="bi bi-star-fill star-icon"></i>
          </div>
          <p class="text-muted mb-4">"Harganya paling murah dibanding toko lain, tapi kualitas tetap terjaga. Keyboard mechanical-nya bagus banget!"</p>
          <div class="d-flex align-items-center gap-3">
            <div class="rounded-circle d-flex align-items-center justify-content-center fw-800 text-white"
                 style="width:45px;height:45px;background:linear-gradient(135deg,#FF5E84,#FF8FAB);font-size:1.1rem;">M</div>
            <div>
              <div class="fw-700 text-dark">Maya P.</div>
              <small class="text-muted">Bandung</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testi-card">
          <div class="d-flex gap-1 mb-3">
            <i class="bi bi-star-fill star-icon"></i><i class="bi bi-star-fill star-icon"></i>
            <i class="bi bi-star-fill star-icon"></i><i class="bi bi-star-fill star-icon"></i>
            <i class="bi bi-star-half star-icon"></i>
          </div>
          <p class="text-muted mb-4">"CS-nya responsif banget! Ada masalah langsung dibantu. Paketnya juga dikemas rapi dan aman."</p>
          <div class="d-flex align-items-center gap-3">
            <div class="rounded-circle d-flex align-items-center justify-content-center fw-800 text-white"
                 style="width:45px;height:45px;background:linear-gradient(135deg,#F0A500,#FFD45E);font-size:1.1rem;">B</div>
            <div>
              <div class="fw-700 text-dark">Budi W.</div>
              <small class="text-muted">Surabaya</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container text-center position-relative" style="z-index:1;">
    <span class="badge mb-4 px-3 py-2 rounded-pill" style="background:rgba(108,62,244,.3); color:#C5AFFF; font-size:.85rem;">
      <i class="bi bi-rocket-takeoff me-1"></i> Bergabung Sekarang
    </span>
    <h2 class="fw-800 text-white mb-3" style="font-size:2.5rem; letter-spacing:-0.5px;">
      Siap Mulai Belanja?
    </h2>
    <p class="mb-5" style="color:rgba(255,255,255,.7); max-width:500px; margin:0 auto 2rem;">
      Daftarkan dirimu sekarang dan nikmati pengalaman belanja elektronik yang menyenangkan!
    </p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <a href="user/register.php" class="btn-hero-primary">
        <i class="bi bi-person-plus-fill"></i> Daftar Gratis
      </a>
      <a href="user/login.php" class="btn-hero-outline">
        <i class="bi bi-box-arrow-in-right"></i> Login
      </a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row g-4 mb-4">
      <div class="col-lg-4">
        <div class="brand mb-3">
          <i class="bi bi-lightning-charge-fill" style="color:#6C3EF4;"></i> ElectroShop
        </div>
        <p style="max-width:280px;">Toko elektronik online terpercaya dengan produk berkualitas dan harga terbaik sejak 2020.</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="social-icon"><i class="bi bi-instagram fs-5"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-twitter-x fs-5"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-facebook fs-5"></i></a>
        </div>
      </div>

      <div class="col-6 col-lg-2">
        <h6 class="text-white fw-700 mb-3">Produk</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Laptop</a></li>
          <li class="mb-2"><a href="#">Smartphone</a></li>
          <li class="mb-2"><a href="#">Aksesoris</a></li>
          <li class="mb-2"><a href="#">Gaming</a></li>
        </ul>
      </div>

      <div class="col-6 col-lg-2">
        <h6 class="text-white fw-700 mb-3">Layanan</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Pengiriman</a></li>
          <li class="mb-2"><a href="#">Garansi</a></li>
          <li class="mb-2"><a href="#">Retur</a></li>
          <li class="mb-2"><a href="#">Kontak CS</a></li>
        </ul>
      </div>

      <div class="col-lg-4">
        <h6 class="text-white fw-700 mb-3">Newsletter</h6>
        <p class="mb-3" style="font-size:.9rem;">Dapatkan promo & info produk terbaru langsung di inbox Anda.</p>
        <div class="d-flex gap-2">
          <input type="email" class="form-control rounded-pill border-0" style="background:rgba(255,255,255,.1); color:#fff;" placeholder="Email kamu...">
          <button class="btn btn-sm rounded-pill px-3" style="background:var(--primary); color:#fff; white-space:nowrap;">
            <i class="bi bi-send-fill"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="footer-border d-flex justify-content-between flex-wrap gap-2">
      <small>© <?= date('Y'); ?> ElectroShop. All rights reserved.</small>
      <div class="d-flex gap-3">
        <a href="#" class="small">Privasi</a>
        <a href="#" class="small">Syarat</a>
        <a href="admin/login.php" class="small"><i class="bi bi-shield-lock me-1"></i>Admin</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
