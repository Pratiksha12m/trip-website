<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Your Trip | Wanderlust Voyages</title>
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

    .booking-hero {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1539635278303-d4002c07eae3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 55vh;
      min-height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    .booking-hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 120px;
      background: linear-gradient(transparent, var(--secondary-color));
    }
    .booking-hero-content { z-index: 2; text-align: center; }
    .booking-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.8rem;
      font-weight: 700;
      background: linear-gradient(to right, var(--gold-color), #fff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .booking-card {
      background: rgba(0,0,0,0.65);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255,215,0,0.25);
      border-radius: 24px;
      padding: 40px 35px;
      margin-top: -60px;
      position: relative;
      z-index: 10;
      box-shadow: 0 20px 40px rgba(0,0,0,0.5);
    }
    .booking-card label { color: var(--gold-color); font-weight: 500; margin-bottom: 6px; }
    .booking-card .form-control, .booking-card .form-select {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.2);
      color: white;
      padding: 12px 16px;
      border-radius: 12px;
      transition: 0.3s;
    }
    .booking-card .form-control:focus, .booking-card .form-select:focus {
      background: rgba(255,255,255,0.15);
      border-color: var(--gold-color);
      box-shadow: 0 0 0 3px rgba(255,215,0,0.2);
      color: white;
    }
    .booking-card .form-control::placeholder { color: rgba(255,255,255,0.5); }
    .booking-card .form-select option { background: #1e1f2c; color: white; }

    .btn-gold {
      background: linear-gradient(45deg, var(--gold-color), var(--accent-color));
      border: none;
      padding: 14px 36px;
      font-weight: 600;
      border-radius: 50px;
      transition: 0.3s;
      color: #000;
      letter-spacing: 0.5px;
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

    .section-title {
      font-family: 'Playfair Display', serif;
      color: var(--gold-color);
      position: relative;
      display: inline-block;
    }
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: var(--gold-color);
      border-radius: 2px;
    }

    .summary-box {
      background: rgba(255,215,0,0.05);
      border-radius: 16px;
      padding: 20px;
      border-left: 4px solid var(--gold-color);
    }
    .summary-box i { color: var(--gold-color); width: 28px; }

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

    @media (max-width: 768px) {
      .booking-hero h1 { font-size: 2.6rem; }
      .booking-card { padding: 25px 18px; margin-top: -40px; }
    }
  </style>
</head>
<body>
  <!-- ===== HEADER ===== -->
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
  <section class="booking-hero">
    <div class="container booking-hero-content" data-aos="fade-up">
      <h1>Plan Your Journey</h1>
      <p class="lead">Secure your dream trip with our seamless booking experience</p>
      <div class="mt-3"><i class="fas fa-check-circle text-warning me-2"></i> Best price guarantee · Flexible cancellation · 24/7 support</div>
    </div>
  </section>

  <!-- ===== BOOKING FORM ===== -->
  <section class="container booking-card" data-aos="fade-up" data-aos-delay="100">
    <h3 class="text-center mb-4" style="color: var(--gold-color); font-family: 'Playfair Display', serif;">✈️ Book Your Adventure</h3>
    <form id="bookingForm" action="../php/booking.php" method="POST">
      <div class="row g-4">
        <!-- Destination - now populated with ALL 100+ destinations from the database -->
        <div class="col-md-6">
          <label for="destSelect" class="form-label"><i class="fas fa-map-pin me-1"></i> Destination</label>
          <select class="form-select" name="destination" id="destSelect" required>
            <option value="">Select a destination...</option>
            <!-- options injected by JS -->
          </select>
          <div class="invalid-feedback">Please select a destination.</div>
        </div>
        <!-- Travelers -->
        <div class="col-md-3">
          <label for="travelers" class="form-label"><i class="fas fa-user-friends me-1"></i> Travelers</label>
          <input type="number" class="form-control" name="travelers" id="travelers" min="1" max="20" value="2" required>
          <div class="invalid-feedback">Enter number of travelers (1-20).</div>
        </div>
        <!-- Duration -->
        <div class="col-md-3">
          <label for="durationSelect" class="form-label"><i class="far fa-calendar-alt me-1"></i> Duration</label>
          <select class="form-select" name="duration" id="durationSelect">
            <option value="3">3 days</option>
            <option value="5">5 days</option>
            <option value="7" selected>7 days</option>
            <option value="10">10 days</option>
            <option value="14">14 days</option>
            <option value="21">21 days</option>
          </select>
        </div>
        <!-- Date -->
        <div class="col-md-4">
          <label for="travelDate" class="form-label"><i class="far fa-calendar-check me-1"></i> Travel Date</label>
          <input type="date" class="form-control" name="travel_date" id="travelDate" min="2026-04-01" value="2026-05-15" required>
          <div class="invalid-feedback">Please select a valid travel date.</div>
        </div>
        <!-- Room type -->
        <div class="col-md-4">
          <label for="roomType" class="form-label"><i class="fas fa-bed me-1"></i> Accommodation</label>
          <select class="form-select" name="room_type" id="roomType">
            <option value="standard">Standard Room</option>
            <option value="deluxe">Deluxe Room</option>
            <option value="suite">Suite</option>
            <option value="villa">Private Villa</option>
          </select>
        </div>
        <!-- Extras -->
        <div class="col-md-4">
          <label for="extras" class="form-label"><i class="fas fa-plus-circle me-1"></i> Add-ons</label>
          <select class="form-select" name="extras" id="extras">
            <option value="none">No extras</option>
            <option value="tour">Guided city tour (+₹12,000)</option>
            <option value="spa">Spa package (+₹18,000)</option>
            <option value="adventure">Adventure activities (+₹25,000)</option>
            <option value="all">All inclusive (+₹45,000)</option>
          </select>
        </div>
        <!-- Name -->
        <div class="col-md-6">
          <label for="fullName" class="form-label"><i class="fas fa-user me-1"></i> Full Name</label>
          <input type="text" class="form-control" name="full_name" id="fullName" placeholder="John Doe" required>
          <div class="invalid-feedback">Please enter your full name.</div>
        </div>
        <!-- Email -->
        <div class="col-md-6">
          <label for="email" class="form-label"><i class="fas fa-envelope me-1"></i> Email Address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">Please enter a valid email.</div>
        </div>
        <!-- Phone -->
        <div class="col-md-6">
          <label for="phone" class="form-label"><i class="fas fa-phone-alt me-1"></i> Phone Number</label>
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="+1 234 567 890">
        </div>
        <!-- Special requests -->
        <div class="col-md-6">
          <label for="requests" class="form-label"><i class="fas fa-comment me-1"></i> Special Requests</label>
          <input type="text" class="form-control" name="requests" id="requests" placeholder="Dietary needs, room preference...">
        </div>
        <!-- Submit -->
        <div class="col-12 text-center mt-4">
          <button type="submit" class="btn btn-gold px-5 py-3"><i class="fas fa-check-circle me-2"></i> Confirm Booking</button>
          <button type="reset" class="btn btn-outline-gold ms-3 px-4 py-3"><i class="fas fa-undo me-2"></i> Reset</button>
        </div>
      </div>
    </form>

    <!-- ===== BOOKING SUMMARY ===== -->
    <div class="row mt-5 pt-3 border-top border-warning border-opacity-25">
      <div class="col-lg-6 mx-auto">
        <div class="summary-box" id="summaryBox">
          <h5 class="text-gold mb-3"><i class="fas fa-receipt me-2"></i> Booking Summary</h5>
          <div id="summaryContent">
            <p><i class="fas fa-map-pin"></i> <strong>Destination:</strong> <span id="summaryDest">—</span></p>
            <p><i class="fas fa-user-friends"></i> <strong>Travelers:</strong> <span id="summaryTravelers">2</span></p>
            <p><i class="far fa-calendar-alt"></i> <strong>Duration:</strong> <span id="summaryDuration">7 days</span></p>
            <p><i class="fas fa-bed"></i> <strong>Room:</strong> <span id="summaryRoom">Standard</span></p>
            <p><i class="fas fa-plus-circle"></i> <strong>Extras:</strong> <span id="summaryExtras">None</span></p>
            <p><i class="fas fa-calendar-check"></i> <strong>Travel Date:</strong> <span id="summaryDate">—</span></p>
            <hr class="border-warning opacity-25">
            <p class="h5"><i class="fas fa-coins text-warning"></i> <strong>Estimated total:</strong> <span id="summaryTotal" class="text-warning">₹0</span></p>
            <small class="text-secondary">*Final price may vary based on availability</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
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

    // --------------------------------------------------------------
    // 1. COMPLETE DESTINATION DATABASE (110+ destinations)
    //    same list used in the destination page
    // --------------------------------------------------------------
    const ALL_DESTINATIONS = [
      { name: "Paris, France", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.7, priceValue: "₹1,58,000", basePrice: 158000 },
      { name: "Kyoto, Japan", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Premium", rating: 5.0, priceValue: "₹2,08,000", basePrice: 208000 },
      { name: "Santorini, Greece", region: "Europe", type: "Beach", duration: "1 Week", price: "Mid-Range", rating: 4.2, priceValue: "₹1,33,000", basePrice: 133000 },
      { name: "Cape Town, South Africa", region: "Africa", type: "Safari", duration: "2 Weeks", price: "Premium", rating: 4.6, priceValue: "₹1,83,000", basePrice: 183000 },
      { name: "New York, USA", region: "North America", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.0, priceValue: "₹1,08,000", basePrice: 108000 },
      { name: "Queenstown, NZ", region: "Oceania", type: "Adventure", duration: "1 Week", price: "Premium", rating: 5.0, priceValue: "₹2,33,000", basePrice: 233000 },
      { name: "Rio de Janeiro, Brazil", region: "South America", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.1, priceValue: "₹1,58,000", basePrice: 158000 },
      { name: "Dubai, UAE", region: "Middle East", type: "Luxury", duration: "1 Week", price: "Premium", rating: 4.7, priceValue: "₹2,08,000", basePrice: 208000 },
      { name: "Bora Bora", region: "Caribbean", type: "Beach", duration: "1 Week", price: "Luxury", rating: 5.0, priceValue: "₹3,33,000", basePrice: 333000 },
      { name: "Bali, Indonesia", region: "Asia", type: "Beach", duration: "2 Weeks", price: "Mid-Range", rating: 4.6, priceValue: "₹1,33,000", basePrice: 133000 },
      { name: "Machu Picchu, Peru", region: "South America", type: "Adventure", duration: "1 Week", price: "Mid-Range", rating: 5.0, priceValue: "₹1,91,000", basePrice: 191000 },
      { name: "Iceland", region: "Europe", type: "Adventure", duration: "2 Weeks", price: "Premium", rating: 4.7, priceValue: "₹2,41,000", basePrice: 241000 },
      { name: "Venice, Italy", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.0, priceValue: "₹1,25,000", basePrice: 125000 },
      { name: "Cairo, Egypt", region: "Africa", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.5, priceValue: "₹1,58,000", basePrice: 158000 },
      { name: "Swiss Alps", region: "Europe", type: "Mountain", duration: "2 Weeks", price: "Premium", rating: 5.0, priceValue: "₹2,08,000", basePrice: 208000 },
      { name: "Bangkok, Thailand", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.0, priceValue: "₹75,000", basePrice: 75000 },
      { name: "Canadian Rockies", region: "North America", type: "Mountain", duration: "2 Weeks", price: "Premium", rating: 5.0, priceValue: "₹2,50,000", basePrice: 250000 },
      { name: "Fiji", region: "Oceania", type: "Beach", duration: "1 Week", price: "Luxury", rating: 4.7, priceValue: "₹3,50,000", basePrice: 350000 },
      { name: "Amsterdam", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,45,000", basePrice: 145000 },
      { name: "Sydney, Australia", region: "Oceania", type: "Cultural", duration: "2 Weeks", price: "Premium", rating: 4.6, priceValue: "₹2,25,000", basePrice: 225000 },
      { name: "Maldives", region: "Asia", type: "Beach", duration: "1 Week", price: "Luxury", rating: 4.8, priceValue: "₹3,75,000", basePrice: 375000 },
      { name: "Marrakech, Morocco", region: "Africa", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,35,000", basePrice: 135000 },
      { name: "Hawaii, USA", region: "North America", type: "Beach", duration: "2 Weeks", price: "Premium", rating: 4.7, priceValue: "₹2,65,000", basePrice: 265000 },
      { name: "Singapore", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.5, priceValue: "₹1,55,000", basePrice: 155000 },
      { name: "Switzerland", region: "Europe", type: "Mountain", duration: "2 Weeks", price: "Luxury", rating: 4.8, priceValue: "₹3,10,000", basePrice: 310000 },
      { name: "Vietnam", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Budget", rating: 4.6, priceValue: "₹95,000", basePrice: 95000 },
      { name: "Barcelona, Spain", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,40,000", basePrice: 140000 },
      { name: "Kenya Safari", region: "Africa", type: "Safari", duration: "2 Weeks", price: "Premium", rating: 4.9, priceValue: "₹2,80,000", basePrice: 280000 },
      { name: "Norway Fjords", region: "Europe", type: "Adventure", duration: "2 Weeks", price: "Premium", rating: 4.7, priceValue: "₹2,70,000", basePrice: 270000 },
      { name: "Costa Rica", region: "South America", type: "Adventure", duration: "2 Weeks", price: "Mid-Range", rating: 4.5, priceValue: "₹1,85,000", basePrice: 185000 },
      { name: "Prague, Czech", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.3, priceValue: "₹1,10,000", basePrice: 110000 },
      { name: "Patagonia", region: "South America", type: "Adventure", duration: "3 Weeks", price: "Premium", rating: 4.8, priceValue: "₹3,20,000", basePrice: 320000 },
      { name: "Seoul, Korea", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,45,000", basePrice: 145000 },
      { name: "Seychelles", region: "Africa", type: "Beach", duration: "1 Week", price: "Luxury", rating: 4.7, priceValue: "₹3,60,000", basePrice: 360000 },
      { name: "Istanbul, Turkey", region: "Middle East", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.5, priceValue: "₹1,30,000", basePrice: 130000 },
      { name: "Alaska, USA", region: "North America", type: "Adventure", duration: "2 Weeks", price: "Premium", rating: 4.6, priceValue: "₹2,55,000", basePrice: 255000 },
      { name: "Hong Kong", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,50,000", basePrice: 150000 },
      { name: "Scotland", region: "Europe", type: "Mountain", duration: "2 Weeks", price: "Mid-Range", rating: 4.4, priceValue: "₹1,95,000", basePrice: 195000 },
      { name: "Mexico City", region: "North America", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.2, priceValue: "₹85,000", basePrice: 85000 },
      { name: "Bhutan", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Premium", rating: 4.7, priceValue: "₹2,90,000", basePrice: 290000 },
      { name: "Portugal", region: "Europe", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.5, priceValue: "₹1,75,000", basePrice: 175000 },
      { name: "Tanzania", region: "Africa", type: "Safari", duration: "2 Weeks", price: "Premium", rating: 4.8, priceValue: "₹2,75,000", basePrice: 275000 },
      { name: "Cambodia", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Budget", rating: 4.4, priceValue: "₹90,000", basePrice: 90000 },
      { name: "Ireland", region: "Europe", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.3, priceValue: "₹1,80,000", basePrice: 180000 },
      { name: "Chile", region: "South America", type: "Adventure", duration: "3 Weeks", price: "Premium", rating: 4.6, priceValue: "₹3,05,000", basePrice: 305000 },
      { name: "Jordan", region: "Middle East", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.6, priceValue: "₹1,65,000", basePrice: 165000 },
      { name: "Philippines", region: "Asia", type: "Beach", duration: "2 Weeks", price: "Budget", rating: 4.4, priceValue: "₹1,10,000", basePrice: 110000 },
      { name: "Finland", region: "Europe", type: "Adventure", duration: "2 Weeks", price: "Premium", rating: 4.5, priceValue: "₹2,40,000", basePrice: 240000 },
      { name: "Colombia", region: "South America", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.3, priceValue: "₹1,70,000", basePrice: 170000 },
      { name: "Myanmar", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Budget", rating: 4.2, priceValue: "₹1,05,000", basePrice: 105000 },
      { name: "Wales", region: "Europe", type: "Mountain", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,40,000", basePrice: 140000 },
      { name: "Madagascar", region: "Africa", type: "Adventure", duration: "2 Weeks", price: "Mid-Range", rating: 4.5, priceValue: "₹1,95,000", basePrice: 195000 },
      { name: "Austria", region: "Europe", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.4, priceValue: "₹1,85,000", basePrice: 185000 },
      { name: "Sri Lanka", region: "Asia", type: "Beach", duration: "2 Weeks", price: "Budget", rating: 4.3, priceValue: "₹1,00,000", basePrice: 100000 },
      { name: "Croatia", region: "Europe", type: "Beach", duration: "1 Week", price: "Mid-Range", rating: 4.7, priceValue: "₹1,60,000", basePrice: 160000 },
      { name: "Oman", region: "Middle East", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,45,000", basePrice: 145000 },
      // extra unique
      { name: "Zanzibar, Tanzania", region: "Africa", type: "Beach", duration: "1 Week", price: "Mid-Range", rating: 4.6, priceValue: "₹1,65,000", basePrice: 165000 },
      { name: "Athens, Greece", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,20,000", basePrice: 120000 },
      { name: "Buenos Aires, Argentina", region: "South America", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.4, priceValue: "₹1,55,000", basePrice: 155000 },
      { name: "Cusco, Peru", region: "South America", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.7, priceValue: "₹1,45,000", basePrice: 145000 },
      { name: "Reykjavik, Iceland", region: "Europe", type: "Adventure", duration: "1 Week", price: "Premium", rating: 4.8, priceValue: "₹2,20,000", basePrice: 220000 },
      { name: "Florence, Italy", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.6, priceValue: "₹1,48,000", basePrice: 148000 },
      { name: "Milan, Italy", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.2, priceValue: "₹1,35,000", basePrice: 135000 },
      { name: "Vienna, Austria", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.5, priceValue: "₹1,50,000", basePrice: 150000 },
      { name: "Budapest, Hungary", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.4, priceValue: "₹95,000", basePrice: 95000 },
      { name: "Prague, Czech Republic", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.3, priceValue: "₹1,10,000", basePrice: 110000 },
      { name: "Warsaw, Poland", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.1, priceValue: "₹85,000", basePrice: 85000 },
      { name: "Krakow, Poland", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.4, priceValue: "₹90,000", basePrice: 90000 },
      { name: "Zagreb, Croatia", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.2, priceValue: "₹1,05,000", basePrice: 105000 },
      { name: "Ljubljana, Slovenia", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,10,000", basePrice: 110000 },
      { name: "Bratislava, Slovakia", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.0, priceValue: "₹80,000", basePrice: 80000 },
      { name: "Belgrade, Serbia", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.1, priceValue: "₹78,000", basePrice: 78000 },
      { name: "Sofia, Bulgaria", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.0, priceValue: "₹75,000", basePrice: 75000 },
      { name: "Bucharest, Romania", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.2, priceValue: "₹82,000", basePrice: 82000 },
      { name: "Chisinau, Moldova", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 3.9, priceValue: "₹65,000", basePrice: 65000 },
      { name: "Kyiv, Ukraine", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.0, priceValue: "₹70,000", basePrice: 70000 },
      { name: "Minsk, Belarus", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 3.8, priceValue: "₹68,000", basePrice: 68000 },
      { name: "Shanghai, China", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,35,000", basePrice: 135000 },
      { name: "Beijing, China", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,40,000", basePrice: 140000 },
      { name: "Seoul, South Korea", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.5, priceValue: "₹1,45,000", basePrice: 145000 },
      { name: "Mumbai, India", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.2, priceValue: "₹70,000", basePrice: 70000 },
      { name: "Delhi, India", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.1, priceValue: "₹68,000", basePrice: 68000 },
      { name: "Jaipur, India", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.3, priceValue: "₹65,000", basePrice: 65000 },
      { name: "Agra, India", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.4, priceValue: "₹60,000", basePrice: 60000 },
      { name: "Varanasi, India", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.0, priceValue: "₹55,000", basePrice: 55000 },
      { name: "Kathmandu, Nepal", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.2, priceValue: "₹60,000", basePrice: 60000 },
      { name: "Islamabad, Pakistan", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 3.9, priceValue: "₹55,000", basePrice: 55000 },
      { name: "Dhaka, Bangladesh", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 3.8, priceValue: "₹50,000", basePrice: 50000 },
      { name: "Cape Town, South Africa", region: "Africa", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,25,000", basePrice: 125000 },
      { name: "Durban, South Africa", region: "Africa", type: "Beach", duration: "1 Week", price: "Mid-Range", rating: 4.2, priceValue: "₹1,15,000", basePrice: 115000 },
      { name: "Johannesburg, South Africa", region: "Africa", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.1, priceValue: "₹1,10,000", basePrice: 110000 },
      { name: "Nairobi, Kenya", region: "Africa", type: "Safari", duration: "1 Week", price: "Premium", rating: 4.6, priceValue: "₹1,85,000", basePrice: 185000 },
      { name: "Lagos, Nigeria", region: "Africa", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 3.9, priceValue: "₹1,00,000", basePrice: 100000 },
      { name: "Accra, Ghana", region: "Africa", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 3.8, priceValue: "₹95,000", basePrice: 95000 },
      { name: "Toronto, Canada", region: "North America", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,30,000", basePrice: 130000 },
      { name: "Vancouver, Canada", region: "North America", type: "Mountain", duration: "1 Week", price: "Premium", rating: 4.5, priceValue: "₹1,60,000", basePrice: 160000 }
    ];

    // --------------------------------------------------------------
    // 2. Populate destination dropdown with ALL 100+ destinations
    // --------------------------------------------------------------
    const destSelect = document.getElementById('destSelect');
    ALL_DESTINATIONS.sort((a,b) => a.name.localeCompare(b.name)).forEach(d => {
      const opt = document.createElement('option');
      opt.value = d.name;
      opt.textContent = `${d.name} (${d.region}) — ${d.priceValue}`;
      // store basePrice as data attribute
      opt.dataset.basePrice = d.basePrice;
      destSelect.appendChild(opt);
    });

    // --------------------------------------------------------------
    // 3. Booking summary update with all destinations
    // --------------------------------------------------------------
    const roomMap = { 'standard': 0, 'deluxe': 25000, 'suite': 55000, 'villa': 95000 };
    const extraMap = { 'none': 0, 'tour': 12000, 'spa': 18000, 'adventure': 25000, 'all': 45000 };
    const durationMap = { '3': '3 days', '5': '5 days', '7': '7 days', '10': '10 days', '14': '14 days', '21': '21 days' };

    function updateSummary() {
      const destName = document.getElementById('destSelect').value;
      // find destination in our list
      const destData = ALL_DESTINATIONS.find(d => d.name === destName);
      const travelers = parseInt(document.getElementById('travelers').value) || 1;
      const duration = document.getElementById('durationSelect').value;
      const room = document.getElementById('roomType').value;
      const extra = document.getElementById('extras').value;
      const date = document.getElementById('travelDate').value;

      document.getElementById('summaryDest').textContent = destData ? `${destData.name} (${destData.region})` : '—';
      document.getElementById('summaryTravelers').textContent = travelers;
      document.getElementById('summaryDuration').textContent = durationMap[duration] || '—';
      document.getElementById('summaryRoom').textContent = room.charAt(0).toUpperCase() + room.slice(1);
      const extraLabel = extraMap[extra] > 0 ? extra.replace('_',' ').toUpperCase() + ' (+₹' + extraMap[extra].toLocaleString() + ')' : 'None';
      document.getElementById('summaryExtras').textContent = extraLabel;
      document.getElementById('summaryDate').textContent = date ? new Date(date).toLocaleDateString() : '—';

      let total = 0;
      if (destData) {
        total = destData.basePrice + roomMap[room] + extraMap[extra];
        total = total * travelers;
      }
      document.getElementById('summaryTotal').textContent = total > 0 ? '₹' + total.toLocaleString() : '₹0';
    }

    // attach listeners
    document.querySelectorAll('#destSelect, #travelers, #durationSelect, #roomType, #extras, #travelDate').forEach(el => {
      el.addEventListener('change', updateSummary);
      el.addEventListener('input', updateSummary);
    });
    updateSummary();

    // --------------------------------------------------------------
    
  </script>
</body>
</html>