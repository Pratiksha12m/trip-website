<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Features | Wanderlust Voyages</title>
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
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
      color: var(--text-light);
      overflow-x: hidden;
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
    .feature-hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                  url('https://images.unsplash.com/photo-1508672019048-805c876b67e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 60vh;
      min-height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    
    .feature-hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(transparent, var(--secondary-color));
      z-index: 1;
    }
    
    .feature-hero-content {
      z-index: 2;
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }
    
    .feature-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 4rem;
      font-weight: 700;
      margin-bottom: 25px;
      background: linear-gradient(to right, var(--gold-color), #fff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      letter-spacing: 1px;
    }
    
    /* Features Section */
    .features-main {
      padding: 100px 0;
    }
    
    .section-title {
      position: relative;
      display: inline-block;
      margin-bottom: 60px;
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
    
    .feature-card {
      background: var(--card-bg);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.5s ease;
      height: 100%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      margin-bottom: 30px;
    }
    
    .feature-card:hover {
      transform: translateY(-15px) scale(1.02);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .feature-card .card-img-top {
      height: 200px;
      object-fit: cover;
      transition: transform 0.8s ease;
    }
    
    .feature-card:hover .card-img-top {
      transform: scale(1.1);
    }
    
    .feature-card .card-body {
      padding: 30px;
    }
    
    .feature-card .card-title {
      font-weight: 600;
      margin-bottom: 20px;
      color: var(--gold-color);
      font-size: 1.4rem;
    }
    
    .feature-card .card-text {
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 25px;
      font-size: 1rem;
    }
    
    .card-icon {
      font-size: 3rem;
      margin-bottom: 20px;
      color: var(--gold-color);
      transition: all 0.5s ease;
    }
    
    .feature-card:hover .card-icon {
      transform: rotateY(360deg);
    }
    
    .feature-list {
      list-style-type: none;
      padding: 0;
    }
    
    .feature-list li {
      padding: 10px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      display: flex;
      align-items: center;
    }
    
    .feature-list li:last-child {
      border-bottom: none;
    }
    
    .feature-list i {
      color: var(--gold-color);
      margin-right: 15px;
      font-size: 1.2rem;
    }
    
    /* Comparison Table */
    .comparison-table {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      overflow: hidden;
      margin: 50px 0;
    }
    
    .comparison-table table {
      width: 100%;
      color: white;
    }
    
    .comparison-table th {
      background: rgba(255, 215, 0, 0.2);
      padding: 20px;
      text-align: left;
      font-weight: 600;
    }
    
    .comparison-table td {
      padding: 15px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .comparison-table tr:last-child td {
      border-bottom: none;
    }
    
    .comparison-table .check {
      color: var(--gold-color);
      font-size: 1.2rem;
    }
    
    .comparison-table .xmark {
      color: var(--accent-color);
      font-size: 1.2rem;
    }
    
    /* How It Works Section */
    .how-it-works {
      padding: 100px 0;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                  url('https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      background-attachment: fixed;
    }
    
    .step-card {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      transition: all 0.5s ease;
      border: 1px solid rgba(255, 215, 0, 0.1);
      backdrop-filter: blur(5px);
    }
    
    .step-card:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.15);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .step-number {
      width: 50px;
      height: 50px;
      background: var(--gold-color);
      color: var(--text-dark);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    
    /* Testimonials Section */
    .testimonials-section {
      padding: 100px 0;
      background: linear-gradient(135deg, #2a2e38, #1a1d24);
    }
    
    .testimonial-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      padding: 30px;
      margin: 15px;
      transition: all 0.5s ease;
      border: 1px solid rgba(255, 215, 0, 0.1);
    }
    
    .testimonial-card:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .testimonial-text {
      font-style: italic;
      margin-bottom: 20px;
      position: relative;
    }
    
    .testimonial-text::before,
    .testimonial-text::after {
      content: '"';
      font-size: 3rem;
      color: var(--gold-color);
      opacity: 0.3;
      position: absolute;
    }
    
    .testimonial-text::before {
      top: -20px;
      left: -15px;
    }
    
    .testimonial-text::after {
      bottom: -40px;
      right: -15px;
    }
    
    .testimonial-author {
      display: flex;
      align-items: center;
    }
    
    .testimonial-author img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--gold-color);
      margin-right: 15px;
    }
    
    .author-info h5 {
      margin-bottom: 5px;
      color: var(--gold-color);
    }
    
    .author-info p {
      color: rgba(255, 255, 255, 0.6);
      font-size: 0.9rem;
    }
    
    /* CTA Section */
    .cta-section {
      padding: 100px 0;
      background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                  url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      background-attachment: fixed;
    }
    
    .cta-box {
      background: rgba(0, 0, 0, 0.7);
      border-radius: 15px;
      padding: 50px;
      text-align: center;
      border: 1px solid rgba(255, 215, 0, 0.3);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
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
    }
    
    .btn-outline-gold:hover {
      background: var(--gold-color);
      color: var(--text-dark);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
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
      .feature-hero h1 {
        font-size: 3.5rem;
      }
    }
    
    @media (max-width: 991px) {
      .feature-hero h1 {
        font-size: 3rem;
      }
      
      .step-card {
        margin-bottom: 20px;
      }
    }
    
    @media (max-width: 767px) {
      .feature-hero {
        height: 50vh;
        min-height: 400px;
      }
      
      .feature-hero h1 {
        font-size: 2.5rem;
      }
      
      .cta-box {
        padding: 30px;
      }
    }
    
    @media (max-width: 575px) {
      .feature-hero h1 {
        font-size: 2.2rem;
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
  <section class="feature-hero">
    <div class="container feature-hero-content">
      <h1 data-aos="fade-up">Our Premium Features</h1>
      <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Discover what makes Wanderlust Voyages the ultimate travel experience</p>
      <div data-aos="fade-up" data-aos-delay="200">
        <a href="#features" class="btn btn-explore pulse">Explore Features <i class="fas fa-arrow-down ms-2"></i></a>
      </div>
    </div>
  </section>

  <!-- Main Features Section -->
  <section id="features" class="features-main">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Why Choose Wanderlust Voyages?</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">We go beyond ordinary travel to deliver extraordinary experiences</p>
      </div>
      
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Personalized Planning">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-user-cog"></i>
              </div>
              <h5 class="card-title">Personalized Travel Planning</h5>
              <p class="card-text">Our expert travel designers create custom itineraries tailored to your unique preferences, interests, and travel style.</p>
              <ul class="feature-list text-start mt-4">
                <li><i class="fas fa-check"></i> One-on-one consultation with travel experts</li>
                <li><i class="fas fa-check"></i> Tailored recommendations based on your profile</li>
                <li><i class="fas fa-check"></i> Flexible itinerary adjustments</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Local Experts">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-map-marked-alt"></i>
              </div>
              <h5 class="card-title">Local Expert Guides</h5>
              <p class="card-text">Gain insider access with our network of local experts who know their destinations better than anyone else.</p>
              <ul class="feature-list text-start mt-4">
                <li><i class="fas fa-check"></i> Private tours with passionate locals</li>
                <li><i class="fas fa-check"></i> Access to hidden gems and secret spots</li>
                <li><i class="fas fa-check"></i> Cultural immersion experiences</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1538970272646-f61fabb3a8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="VIP Access">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-star"></i>
              </div>
              <h5 class="card-title">VIP Access & Privileges</h5>
              <p class="card-text">Enjoy exclusive benefits and upgrades that turn your trip from ordinary to extraordinary.</p>
              <ul class="feature-list text-start mt-4">
                <li><i class="fas fa-check"></i> Room upgrades when available</li>
                <li><i class="fas fa-check"></i> Priority reservations at top restaurants</li>
                <li><i class="fas fa-check"></i> Special amenities and welcome gifts</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="24/7 Support">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-headset"></i>
              </div>
              <h5 class="card-title">24/7 Global Support</h5>
              <p class="card-text">Our dedicated team is available around the clock to assist you, no matter where your travels take you.</p>
              <ul class="feature-list text-start mt-4">
                <li><i class="fas fa-check"></i> Multilingual support team</li>
                <li><i class="fas fa-check"></i> Emergency assistance worldwide</li>
                <li><i class="fas fa-check"></i> Real-time itinerary updates</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Sustainable Travel">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-leaf"></i>
              </div>
              <h5 class="card-title">Sustainable Travel</h5>
              <p class="card-text">Travel responsibly with our eco-conscious partners and carbon offset programs.</p>
              <ul class="feature-list text-start mt-4">
                <li><i class="fas fa-check"></i> Eco-friendly accommodations</li>
                <li><i class="fas fa-check"></i> Support for local communities</li>
                <li><i class="fas fa-check"></i> Carbon footprint reduction options</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Tech Features">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <h5 class="card-title">Digital Travel Companion</h5>
              <p class="card-text">Our mobile app keeps all your travel details organized and accessible in one place.</p>
              <ul class="feature-list text-start mt-4">
                <li><i class="fas fa-check"></i> Real-time flight alerts</li>
                <li><i class="fas fa-check"></i> Digital itinerary with maps</li>
                <li><i class="fas fa-check"></i> Instant messaging with your travel designer</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comparison Section -->
  <section class="py-5" style="background: rgba(0, 0, 0, 0.3);">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">How We Compare</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">See how Wanderlust Voyages stands above the rest</p>
      </div>
      
      <div class="comparison-table" data-aos="fade-up">
        <table>
          <thead>
            <tr>
              <th>Feature</th>
              <th>Wanderlust Voyages</th>
              <th>Standard Travel Agencies</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Personalized Itineraries</td>
              <td><i class="fas fa-check check"></i></td>
              <td><i class="fas fa-times xmark"></i></td>
            </tr>
            <tr>
              <td>Local Expert Guides</td>
              <td><i class="fas fa-check check"></i></td>
              <td><i class="fas fa-times xmark"></i></td>
            </tr>
            <tr>
              <td>24/7 Support</td>
              <td><i class="fas fa-check check"></i></td>
              <td>Limited Hours</td>
            </tr>
            <tr>
              <td>VIP Privileges</td>
              <td><i class="fas fa-check check"></i></td>
              <td><i class="fas fa-times xmark"></i></td>
            </tr>
            <tr>
              <td>Sustainable Options</td>
              <td>Comprehensive Program</td>
              <td>Limited Options</td>
            </tr>
            <tr>
              <td>Digital Travel Companion</td>
              <td><i class="fas fa-check check"></i></td>
              <td><i class="fas fa-times xmark"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="how-it-works">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">How It Works</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Your journey to extraordinary travel starts here</p>
      </div>
      
      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="step-card">
            <div class="step-number">1</div>
            <h4>Tell Us About Your Dream Trip</h4>
            <p>Complete our travel questionnaire or schedule a consultation call with one of our travel designers.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="step-card">
            <div class="step-number">2</div>
            <h4>Receive Your Custom Proposal</h4>
            <p>We'll create a detailed itinerary tailored to your preferences, complete with recommendations.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="step-card">
            <div class="step-number">3</div>
            <h4>Refine & Book Your Adventure</h4>
            <p>We'll fine-tune the details together and handle all bookings for a seamless experience.</p>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
        <a href="../pages/contactus.html" class="btn btn-explore me-3">Start Planning</a>
        <a href="../pages/destination.html" class="btn btn-outline-gold">Browse Destinations</a>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Traveler Stories</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">What our customers say about our features</p>
      </div>
      <div class="row">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial-card">
            <div class="testimonial-text">
              The personalized itinerary feature was incredible! They planned activities perfectly matched to our interests we wouldn't have found on our own.
            </div>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah J.">
              <div class="author-info">
                <h5>Sarah Johnson</h5>
                <p>Italy Tour</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="testimonial-card">
            <div class="testimonial-text">
              The 24/7 support saved our vacation when our flight was canceled. They had us rebooked and on our way before most people even got through to airline customer service.
            </div>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael T.">
              <div class="author-info">
                <h5>Michael Thompson</h5>
                <p>Family Trip to Greece</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="testimonial-card">
            <div class="testimonial-text">
              The local guides made all the difference. We got to experience Japan like true insiders, with access to places we'd never find in guidebooks.
            </div>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Emily R.">
              <div class="author-info">
                <h5>Emily Rodriguez</h5>
                <p>Cultural Tour of Japan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="zoom-in">
          <div class="cta-box">
            <h2 class="section-title mb-4">Ready to Experience Premium Travel?</h2>
            <p class="lead mb-5">Let us craft your perfect getaway with all the benefits of Wanderlust Voyages' exclusive features.</p>
            <div class="d-flex flex-column flex-sm-row justify-content-center">
              <a href="../pages/contactus.html" class="btn btn-explore me-sm-3 mb-3 mb-sm-0">Contact Our Experts</a>
              <a href="tel:+15551234567" class="btn btn-outline-gold"><i class="fas fa-phone-alt me-2"></i> Call Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="footer-about">
            <div class="footer-logo">Wanderlust Voyages</div>
            <p>Creating unforgettable travel experiences since 2010. We specialize in curated journeys that connect you with the world's most amazing destinations.</p>
            <div class="footer-social mt-4">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <div class="footer-links">
            <h5>Quick Links</h5>
            <ul>
              <li><a href="../index.html">Home</a></li>
              <li><a href="features.html">Features</a></li>
              <li><a href="../pages/destination.html">Destinations</a></li>
              <li><a href="../pages/about.html">About Us</a></li>
              <li><a href="../pages/contactus.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <div class="footer-links">
            <h5>Services</h5>
            <ul>
              <li><a href="#">Custom Tours</a></li>
              <li><a href="#">Group Travel</a></li>
              <li><a href="#">Honeymoons</a></li>
              <li><a href="#">Adventure Trips</a></li>
              <li><a href="#">Luxury Getaways</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-links">
            <h5>Contact Us</h5>
            <p><i class="fas fa-map-marker-alt me-2"></i> 123 Travel Street, Wanderlust City, WC 12345</p>
            <p><i class="fas fa-phone-alt me-2"></i> +1 (555) 123-4567</p>
            <p><i class="fas fa-envelope me-2"></i> info@wanderlustvoyages.com</p>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start">
            <p class="copyright">© 2025 Wanderlust Voyages. All rights reserved.</p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <div class="footer-links">
              <a href="#">Privacy Policy</a>
              <a href="#">Terms & Conditions</a>
              <a href="#">FAQ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

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
        backToTopButton.classList.add('active');
      } else {
        backToTopButton.classList.remove('active');
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
    
    // Add animation to elements when they come into view
    const animateOnScroll = function() {
      const elements = document.querySelectorAll('.feature-card, .step-card, .testimonial-card');
      
      elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;
        
        if (elementPosition < screenPosition) {
          element.style.opacity = '1';
          element.style.transform = 'translateY(0)';
        }
      });
    };
    
    // Set initial styles for animated elements
    document.querySelectorAll('.feature-card, .step-card, .testimonial-card').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(50px)';
      el.style.transition = 'all 0.8s ease';
    });
    
    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', animateOnScroll);
  </script>
</body>
</html>