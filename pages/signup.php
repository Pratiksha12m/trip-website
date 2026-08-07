<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up | Wanderlust Voyages</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #4286f4;
      --secondary-color: #373b44;
      --accent-color: #ff6b6b;
      --gold-color: #FFD700;
      --text-light: #f8f9fa;
      --text-dark: #212529;
      --card-bg: rgba(255, 255, 255, 0.1);
      --nav-bg: rgba(0, 0, 0, 0.8);
      --dropdown-bg: rgba(30, 33, 44, 0.95);
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
      color: var(--text-light);
      overflow-x: hidden;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    
    /* Navbar */
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
      letter-spacing: 1px;
    }
    
    .nav-link {
      position: relative;
      margin: 0 12px;
      font-weight: 500;
      font-size: 1.05rem;
      transition: all 0.3s ease;
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--gold-color);
      transition: width 0.3s ease;
    }
    
    .nav-link:hover {
      color: var(--gold-color) !important;
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    /* Hero Section */
    .signup-hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                  url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 40vh;
      min-height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    
    .signup-hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(transparent, var(--secondary-color));
      z-index: 1;
    }
    
    .signup-hero-content {
      z-index: 2;
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }
    
    .signup-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 25px;
      background: linear-gradient(to right, var(--gold-color), #fff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      letter-spacing: 1px;
    }
    
    /* Section Titles */
    .section-title {
      position: relative;
      display: inline-block;
      margin-bottom: 40px;
      font-family: 'Playfair Display', serif;
      font-weight: 600;
      color: var(--gold-color);
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: var(--gold-color);
      border-radius: 2px;
    }
    
    /* Signup Section */
    .signup-section {
      padding: 80px 0;
      flex: 1;
    }
    
    .signup-card {
      background: var(--card-bg);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 40px;
      transition: all 0.5s ease;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    .signup-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    /* Form Styling */
    .form-group {
      margin-bottom: 25px;
      position: relative;
    }
    
    .form-label {
      color: var(--gold-color);
      font-weight: 500;
      margin-bottom: 8px;
    }
    
    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
      padding: 12px 15px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }
    
    .form-control:focus {
      background: rgba(255, 255, 255, 0.2);
      border-color: var(--gold-color);
      color: white;
      box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.25);
    }
    
    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }
    
    .input-icon {
      position: relative;
    }
    
    .input-icon i {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gold-color);
    }
    
    .input-icon .form-control {
      padding-left: 45px;
    }
    
    .password-toggle {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gold-color);
      cursor: pointer;
      z-index: 5;
    }
    
    /* Checkbox Styling */
    .form-check-input {
      background-color: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .form-check-input:checked {
      background-color: var(--gold-color);
      border-color: var(--gold-color);
    }
    
    .form-check-input:focus {
      box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.25);
    }
    
    .form-check-label {
      color: rgba(255, 255, 255, 0.8);
    }
    
    .form-text {
      color: rgba(255, 255, 255, 0.6);
      font-size: 0.85rem;
    }
    
    /* Divider */
    .divider {
      display: flex;
      align-items: center;
      margin: 30px 0;
      color: rgba(255, 255, 255, 0.5);
    }
    
    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .divider span {
      padding: 0 15px;
    }
    
    /* Social Login Buttons */
    .social-login {
      display: flex;
      gap: 15px;
      margin-bottom: 25px;
    }
    
    .social-btn {
      flex: 1;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      background: rgba(255, 255, 255, 0.1);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      transition: all 0.3s ease;
    }
    
    .social-btn:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }
    
    .social-btn.google i {
      color: #DB4437;
    }
    
    .social-btn.facebook i {
      color: #4267B2;
    }
    
    /* Buttons */
    .btn-explore {
      background: linear-gradient(45deg, var(--gold-color), var(--accent-color));
      border: none;
      padding: 15px 35px;
      font-weight: 600;
      border-radius: 50px;
      box-shadow: 0 4px 20px rgba(255, 215, 0, 0.5);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      font-size: 1.1rem;
      letter-spacing: 0.5px;
      color: var(--text-dark);
      width: 100%;
    }
    
    .btn-explore:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(255, 215, 0, 0.7);
      color: var(--text-dark);
    }
    
    .btn-outline-gold {
      border: 2px solid var(--gold-color);
      color: var(--gold-color);
      background: transparent;
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 50px;
      transition: all 0.3s ease;
      width: 100%;
    }
    
    .btn-outline-gold:hover {
      background: var(--gold-color);
      color: var(--text-dark);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
    }
    
    /* Benefits Section */
    .benefits-section {
      padding: 80px 0;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                  url('https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      background-attachment: fixed;
    }
    
    .benefit-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      transition: all 0.5s ease;
      border: 1px solid rgba(255, 215, 0, 0.1);
      backdrop-filter: blur(5px);
      height: 100%;
      text-align: center;
    }
    
    .benefit-card:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .benefit-icon {
      width: 70px;
      height: 70px;
      background: rgba(255, 215, 0, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      color: var(--gold-color);
      margin: 0 auto 20px;
    }
    
    /* Animations */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(50px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }
    
    .floating {
      animation: float 6s ease-in-out infinite;
    }
    
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }
    
    .pulse {
      animation: pulse 3s ease-in-out infinite;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 1199px) {
      .signup-hero h1 {
        font-size: 3rem;
      }
    }
    
    @media (max-width: 991px) {
      .signup-hero h1 {
        font-size: 2.5rem;
      }
      
      .social-login {
        flex-direction: column;
      }
    }
    
    @media (max-width: 767px) {
      .signup-hero {
        height: 30vh;
        min-height: 250px;
      }
      
      .signup-hero h1 {
        font-size: 2.2rem;
      }
      
      .signup-card {
        padding: 25px;
      }
    }
    
    @media (max-width: 575px) {
      .signup-hero h1 {
        font-size: 2rem;
      }
      
      .navbar-brand {
        font-size: 1.5rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../index.html">Wanderlust Voyages</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav"
              aria-expanded="false" aria-label="Toggle navigation">
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

  <!-- Hero Section -->
  <section class="signup-hero">
    <div class="container signup-hero-content">
      <h1 data-aos="fade-up">Join Our Community</h1>
      <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Create an account to start your journey</p>
    </div>
  </section>

  <!-- Signup Section -->
  <section class="signup-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="signup-card">
            <h2 class="section-title text-center">Create Account</h2>
            
            <div class="social-login">
              <button class="social-btn google">
                <i class="fab fa-google"></i>
                <span>Google</span>
              </button>
              <button class="social-btn facebook">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
              </button>
            </div>
            
            <div class="divider">
              <span>Or sign up with email</span>
            </div>
            
          
<form action="../php/signup.php" method="POST">

    <!-- Email -->
    <div class="input-icon">
        <i class="fas fa-envelope"></i>

        <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Your email address"
            required
        >
    </div>


    <!-- Password -->
    <div class="input-icon">
        <i class="fas fa-lock"></i>

        <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="Create a password"
            required
            minlength="8"
        >

        <span class="password-toggle" id="passwordToggle">
            <i class="fas fa-eye"></i>
        </span>
    </div>

    <div class="form-text">
        Must be at least 8 characters with one uppercase letter
        and one number.
    </div>


    <!-- Confirm Password -->
    <div class="input-icon">
        <i class="fas fa-lock"></i>

        <input
            type="password"
            class="form-control"
            id="confirmPassword"
            name="confirmPassword"
            placeholder="Confirm your password"
            required
        >

        <span class="password-toggle" id="confirmPasswordToggle">
            <i class="fas fa-eye"></i>
        </span>
    </div>


    <!-- Terms -->
    <div class="form-check">

        <input
            class="form-check-input"
            type="checkbox"
            id="terms"
            name="terms"
            value="1"
            required
        >

        <label class="form-check-label" for="terms">
            I agree to the
            <a href="#" class="text-gold">Terms of Service</a>
            and
            <a href="#" class="text-gold">Privacy Policy</a>
        </label>

    </div>


    <!-- Newsletter -->
    <div class="form-check">

        <input
            class="form-check-input"
            type="checkbox"
            id="newsletter"
            name="newsletter"
            value="1"
        >

        <label class="form-check-label" for="newsletter">
            Subscribe to our newsletter for travel inspiration
            and exclusive offers
        </label>

    </div>


    <!-- Submit -->
    <button type="submit" class="btn btn-explore">
        Create Account
    </button>


    <!-- Login -->
    <p>
        Already have an account?

        <a href="login.php" class="text-gold">
            Log In
        </a>
    </p>

</form>


          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Membership Benefits</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Why join our travel community?</p>
      </div>
      
      <div class="row">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-percent"></i>
            </div>
            <h4>Exclusive Deals</h4>
            <p>Get access to member-only discounts and early bird specials on all our travel packages.</p>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-heart"></i>
            </div>
            <h4>Personalized Experiences</h4>
            <p>Receive tailored recommendations based on your travel preferences and interests.</p>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h4>Fast Booking</h4>
            <p>Save your details for quicker bookings and manage all your trips in one place.</p>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-star"></i>
            </div>
            <h4>Rewards Program</h4>
            <p>Earn points on every booking that you can redeem for discounts and free upgrades.</p>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-users"></i>
            </div>
            <h4>Community Access</h4>
            <p>Connect with fellow travelers, share experiences, and get inspired for your next adventure.</p>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h4>Priority Support</h4>
            <p>Get dedicated customer service and travel assistance whenever you need it.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-5 mt-auto">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="footer-about">
            <div class="footer-logo h3 mb-3" style="font-family: 'Playfair Display', serif; color: var(--gold-color);">Wanderlust Voyages</div>
            <p>Creating unforgettable travel experiences since 2010. We specialize in curated journeys that connect you with the world's most amazing destinations.</p>
            <div class="footer-social mt-4">
              <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-white"><i class="fab fa-pinterest"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <div class="footer-links">
            <h5 class="text-gold mb-4">Quick Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="../index.html" class="text-white">Home</a></li>
              <li class="mb-2"><a href="../pages/features.html" class="text-white">Features</a></li>
              <li class="mb-2"><a href="../pages/destination.html" class="text-white">Destinations</a></li>
              <li class="mb-2"><a href="../pages/about.html" class="text-white">About Us</a></li>
              <li class="mb-2"><a href="../pages/contactus.html" class="text-white">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <div class="footer-links">
            <h5 class="text-gold mb-4">Destinations</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="text-white">Europe</a></li>
              <li class="mb-2"><a href="#" class="text-white">Asia</a></li>
              <li class="mb-2"><a href="#" class="text-white">Africa</a></li>
              <li class="mb-2"><a href="#" class="text-white">Americas</a></li>
              <li class="mb-2"><a href="#" class="text-white">Oceania</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-links">
            <h5 class="text-gold mb-4">Contact Us</h5>
            <p><i class="fas fa-map-marker-alt me-2 text-gold"></i> 123 Travel Street, Wanderlust City, WC 12345</p>
            <p><i class="fas fa-phone-alt me-2 text-gold"></i> +1 (555) 123-4567</p>
            <p><i class="fas fa-envelope me-2 text-gold"></i> info@wanderlustvoyages.com</p>
            <div class="mt-4">
              <h6 class="text-gold mb-3">Newsletter</h6>
              <div class="input-group">
                <input type="email" class="form-control bg-dark text-white" placeholder="Your Email">
                <button class="btn btn-outline-gold" type="button">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom pt-4 mt-4 border-top border-secondary">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start">
            <p class="mb-0">© 2025 Wanderlust Voyages. All rights reserved.</p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <div class="footer-links">
              <a href="#" class="text-white me-3">Privacy Policy</a>
              <a href="#" class="text-white me-3">Terms & Conditions</a>
              <a href="#" class="text-white">FAQ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top position-fixed bottom-0 end-0 mb-4 me-4 d-flex align-items-center justify-content-center bg-gold text-dark rounded-circle" style="width: 50px; height: 50px; display: none;">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    // Initialize AOS
    AOS.init({
      once: false,
      duration: 1000,
      easing: 'ease-in-out-quad'
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
    
    // Back to top button
    const backToTopButton = document.querySelector('.back-to-top');
    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        backToTopButton.style.display = 'flex';
      } else {
        backToTopButton.style.display = 'none';
      }
    });
    
    backToTopButton.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 70,
            behavior: 'smooth'
          });
          
          // Update URL without page reload
          if (history.pushState) {
            history.pushState(null, null, targetId);
          } else {
            location.hash = targetId;
          }
        }
      });
    });
    
    // Password toggle functionality
    const passwordToggle = document.getElementById('passwordToggle');
    const passwordField = document.getElementById('password');
    
    const confirmPasswordToggle = document.getElementById('confirmPasswordToggle');
    const confirmPasswordField = document.getElementById('confirmPassword');
    
    passwordToggle.addEventListener('click', function() {
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
      } else {
        passwordField.type = 'password';
        passwordToggle.innerHTML = '<i class="fas fa-eye"></i>';
      }
    });
    
    confirmPasswordToggle.addEventListener('click', function() {
      if (confirmPasswordField.type === 'password') {
        confirmPasswordField.type = 'text';
        confirmPasswordToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
      } else {
        confirmPasswordField.type = 'password';
        confirmPasswordToggle.innerHTML = '<i class="fas fa-eye"></i>';
      }
    });
    
  

  </script>
</body>
</html>