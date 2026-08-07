<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Wanderlust Voyages</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary-color: #4286f4;
      --secondary-color: #373b44;
      --accent-color: #ff6b6b;
      --gold-color: #FFD700;
      --text-light: #f8f9fa;
      --text-dark: #212529;
      --card-bg: rgba(255, 255, 255, 0.08);
      --nav-bg: rgba(0, 0, 0, 0.8);
    }
    * { box-sizing: border-box; }
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
      color: var(--text-light);
      min-height: 100vh;
      overflow-x: hidden;
    }
    .navbar {
      background-color: var(--nav-bg) !important;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
      padding: 15px 0;
    }
    .navbar.scrolled {
      background-color: rgba(0, 0, 0, 0.95) !important;
      padding: 10px 0;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }
    .navbar-brand {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.8rem;
      background: linear-gradient(to right, var(--gold-color), var(--accent-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .nav-link { position: relative; margin: 0 10px; font-weight: 500; transition: 0.3s; }
    .nav-link::after { content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: var(--gold-color); transition: 0.3s; }
    .nav-link:hover::after { width: 100%; }
    .nav-link:hover { color: var(--gold-color) !important; }
    .nav-link.active { color: var(--gold-color) !important; }

    .login-hero {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1539635278303-d4002c07eae3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 55vh;
      min-height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    .login-hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 120px;
      background: linear-gradient(transparent, var(--secondary-color));
    }
    .login-hero-content { z-index: 2; text-align: center; }
    .login-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.8rem;
      font-weight: 700;
      background: linear-gradient(to right, var(--gold-color), #fff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .login-card {
      background: rgba(0,0,0,0.65);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255,215,0,0.25);
      border-radius: 24px;
      padding: 45px 40px;
      margin-top: -60px;
      position: relative;
      z-index: 10;
      box-shadow: 0 20px 40px rgba(0,0,0,0.5);
      max-width: 520px;
      margin-left: auto;
      margin-right: auto;
    }
    .login-card label { color: var(--gold-color); font-weight: 500; margin-bottom: 6px; }
    .login-card .form-control {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.2);
      color: white;
      padding: 14px 18px;
      border-radius: 12px;
      transition: 0.3s;
    }
    .login-card .form-control:focus {
      background: rgba(255,255,255,0.15);
      border-color: var(--gold-color);
      box-shadow: 0 0 0 3px rgba(255,215,0,0.2);
      color: white;
    }
    .login-card .form-control::placeholder { color: rgba(255,255,255,0.5); }
    .login-card .input-group-text {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.2);
      color: var(--gold-color);
      border-right: none;
    }
    .login-card .input-group .form-control { border-left: none; }

    .btn-gold {
      background: linear-gradient(45deg, var(--gold-color), var(--accent-color));
      border: none;
      padding: 14px 36px;
      font-weight: 600;
      border-radius: 50px;
      transition: 0.3s;
      color: #000;
      letter-spacing: 0.5px;
      width: 100%;
    }
    .btn-gold:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(255,215,0,0.5); color: #000; }
    .btn-outline-gold {
      border: 2px solid var(--gold-color);
      color: var(--gold-color);
      background: transparent;
      padding: 10px 28px;
      border-radius: 50px;
      font-weight: 500;
      transition: 0.3s;
    }
    .btn-outline-gold:hover { background: var(--gold-color); color: #000; }

    .footer {
      background: #0f1015;
      padding: 40px 0 20px;
      margin-top: 60px;
      border-top: 1px solid rgba(255,215,0,0.1);
    }
    .footer a { color: rgba(255,255,255,0.7); text-decoration: none; transition: 0.3s; }
    .footer a:hover { color: var(--gold-color); }
    .footer .social a { margin-right: 16px; font-size: 1.3rem; }

    .back-to-top {
      background: var(--gold-color);
      color: #000;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: 0.3s;
      bottom: 20px;
      right: 20px;
      position: fixed;
      z-index: 999;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }
    .back-to-top:hover { background: var(--accent-color); color: white; transform: translateY(-4px); }

    .social-login-btn {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 50px;
      padding: 10px 20px;
      color: white;
      transition: 0.3s;
      font-weight: 500;
      font-size: 0.95rem;
    }
    .social-login-btn:hover { background: rgba(255,215,0,0.1); border-color: var(--gold-color); color: var(--gold-color); }
    .social-login-btn i { font-size: 1.2rem; margin-right: 10px; }

    @media (max-width: 768px) {
      .login-hero h1 { font-size: 2.6rem; }
      .login-card { padding: 30px 20px; margin-top: -40px; }
    }
  </style>
</head>
<body>
  <!-- ===== HEADER (same as destination page) ===== -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Wanderlust Voyages</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
         <li class="nav-item"><a class="nav-link" href="../index/index.php">Home</a></li>
             <li class="nav-item"><a class="nav-link" href="../pages/feature.php">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/destination.php">Destinations</a></li>
           <li class="nav-item"><a class="nav-link" href="../pages/gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/booking.php">Book Now</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/signup.php">Sign Up</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ===== HERO ===== -->
  <section class="login-hero">
    <div class="container login-hero-content" data-aos="fade-up">
      <h1>Welcome Back</h1>
      <p class="lead">Sign in to your account and continue your journey</p>
      <div class="mt-3"><i class="fas fa-shield-alt text-warning me-2"></i> Secure login · 24/7 support · Manage bookings</div>
    </div>
  </section>

  <!-- ===== LOGIN FORM ===== -->
  <section class="container login-card" data-aos="fade-up" data-aos-delay="100">
    <h3 class="text-center mb-4" style="color: var(--gold-color); font-family: 'Playfair Display', serif;">
      <i class="fas fa-lock me-2"></i> Sign In
    </h3>
    
   <form action="../php/login.php" method="POST">

  <!-- Email -->
  <div class="mb-4">
    <label for="loginEmail" class="form-label">
      <i class="fas fa-envelope me-1"></i> Email
    </label>

    <div class="input-group">
      <span class="input-group-text">
        <i class="fas fa-envelope"></i>
      </span>

      <input
        type="email"
        class="form-control"
        id="loginEmail"
        name="email"
        placeholder="Enter your email"
        required
      >

      <div class="invalid-feedback">
        Please enter a valid email address.
      </div>
    </div>
  </div>

  <!-- Password -->
  <div class="mb-4">
    <label for="loginPassword" class="form-label">
      <i class="fas fa-key me-1"></i> Password
    </label>

    <div class="input-group">
      <span class="input-group-text">
        <i class="fas fa-lock"></i>
      </span>

      <input
        type="password"
        class="form-control"
        id="loginPassword"
        name="password"
        placeholder="Enter your password"
        required
        minlength="6"
      >

      <div class="invalid-feedback">
        Password must be at least 6 characters.
      </div>
    </div>

    <div class="text-end mt-2">
      <a href="forgot_password.php"
         class="text-warning text-decoration-none small">
        Forgot password?
      </a>
    </div>
  </div>

  <!-- Remember me -->
  <div class="mb-4 d-flex align-items-center">
    <input
      class="form-check-input me-2"
      type="checkbox"
      id="rememberMe"
      name="remember"
      value="1"
      style="width:18px;height:18px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,215,0,0.3);"
    >

    <label
      class="form-check-label"
      for="rememberMe"
      style="color:rgba(255,255,255,0.7);">
      Remember me
    </label>
  </div>

  <!-- Submit -->
  <button type="submit" class="btn btn-gold">
    <i class="fas fa-sign-in-alt me-2"></i> Sign In
  </button>

  <!-- Divider -->
  <div class="d-flex align-items-center my-4">
    <hr class="flex-grow-1"
        style="border-color:rgba(255,215,0,0.15);">

    <span class="mx-3 text-muted small">
      or continue with
    </span>

    <hr class="flex-grow-1"
        style="border-color:rgba(255,215,0,0.15);">
  </div>

  <!-- Social login -->
  <div class="row g-2">

    <div class="col-6">
      <button type="button" class="social-login-btn w-100">
        <i class="fab fa-google text-danger"></i> Google
      </button>
    </div>

    <div class="col-6">
      <button type="button" class="social-login-btn w-100">
        <i class="fab fa-facebook text-primary"></i> Facebook
      </button>
    </div>

  </div>

  <!-- Sign up -->
  <p class="text-center mt-4 mb-0"
     style="color:rgba(255,255,255,0.6);">

    Don't have an account?

    <a href="signup.php"
       class="text-warning text-decoration-none fw-bold">
      Sign up now
    </a>

  </p>

</form>
    
    <!-- Demo credentials hint -->
    <div class="mt-4 pt-3 border-top border-warning border-opacity-25 text-center">
      <small class="text-secondary">
        <i class="fas fa-info-circle text-warning me-1"></i> Demo: <span class="text-light">user@example.com</span> / <span class="text-light">password123</span>
      </small>
    </div>
  </section>

  <!-- ===== FOOTER (exactly same as destination page) ===== -->
  <footer class="footer text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="footer-logo h3" style="font-family: 'Playfair Display', serif; color: var(--gold-color);">Wanderlust Voyages</div>
          <p>Creating unforgettable travel experiences since 2010. Curated journeys that connect you with the world.</p>
          <div class="social mt-3">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h5 class="text-gold mb-3">Quick Links</h5>
          <ul class="list-unstyled"><li><a href="#">Home</a></li><li><a href="#">Destinations</a></li><li><a href="#">About</a></li><li><a href="#">Contact</a></li></ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h5 class="text-gold mb-3">Destinations</h5>
          <ul class="list-unstyled"><li><a href="#">Europe</a></li><li><a href="#">Asia</a></li><li><a href="#">Africa</a></li><li><a href="#">Americas</a></li></ul>
        </div>
        <div class="col-lg-4">
          <h5 class="text-gold mb-3">Contact</h5>
          <p><i class="fas fa-map-marker-alt me-2 text-gold"></i> 123 Travel Street, Wanderlust City</p>
          <p><i class="fas fa-phone-alt me-2 text-gold"></i> +1 (555) 123-4567</p>
          <p><i class="fas fa-envelope me-2 text-gold"></i> info@wanderlustvoyages.com</p>
          <div class="mt-3"><h6 class="text-gold">Newsletter</h6><div class="input-group"><input type="email" class="form-control bg-dark text-white" placeholder="Your Email"><button class="btn btn-outline-gold" type="button">Subscribe</button></div></div>
        </div>
      </div>
      <div class="border-top border-secondary pt-3 mt-3 text-center text-md-start">
        <div class="row"><div class="col-md-6"><p class="mb-0">© 2025 Wanderlust Voyages. All rights reserved.</p></div><div class="col-md-6 text-md-end"><a href="#" class="me-3 text-white">Privacy</a><a href="#" class="me-3 text-white">Terms</a><a href="#" class="text-white">FAQ</a></div></div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, easing: 'ease-in-out' });

    // navbar scroll
    window.addEventListener('scroll', () => {
      document.querySelector('.navbar').classList.toggle('scrolled', window.scrollY > 50);
      const btn = document.getElementById('backToTop');
      if (btn) btn.style.display = window.scrollY > 300 ? 'flex' : 'none';
    });
    document.getElementById('backToTop')?.addEventListener('click', e => { e.preventDefault(); window.scrollTo({top:0, behavior:'smooth'}); });

    
  </script>
</body>
</html>