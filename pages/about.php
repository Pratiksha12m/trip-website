<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | Wanderlust Voyages</title>
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
    .about-hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                  url('https://images.unsplash.com/photo-1523531294919-4bcd7c65e216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 60vh;
      min-height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    
    .about-hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(transparent, var(--secondary-color));
      z-index: 1;
    }
    
    .about-hero-content {
      z-index: 2;
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }
    
    .about-hero h1 {
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
    
    /* Section Titles */
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
    
    /* About Content */
    .about-content {
      padding: 100px 0;
    }
    
    .about-text {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 30px;
    }
    
    /* Mission Section */
    .mission-section {
      padding: 100px 0;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                  url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      background-attachment: fixed;
    }
    
    .mission-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      transition: all 0.5s ease;
      border: 1px solid rgba(255, 215, 0, 0.1);
      backdrop-filter: blur(5px);
      height: 100%;
    }
    
    .mission-card:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .mission-icon {
      width: 70px;
      height: 70px;
      background: rgba(255, 215, 0, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      color: var(--gold-color);
      margin-bottom: 20px;
    }
    
    /* Team Section */
    .team-section {
      padding: 100px 0;
    }
    
    .team-card {
      background: var(--card-bg);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.5s ease;
      margin-bottom: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    .team-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .team-img {
      height: 300px;
      object-fit: cover;
      width: 100%;
    }
    
    .team-card .card-body {
      padding: 25px;
    }
    
    .team-card .card-title {
      font-weight: 600;
      margin-bottom: 5px;
      color: var(--gold-color);
      font-size: 1.5rem;
      font-family: 'Playfair Display', serif;
    }
    
    .team-card .card-text {
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 15px;
    }
    
    .team-social {
      display: flex;
      justify-content: center;
      margin-top: 15px;
    }
    
    .team-social a {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold-color);
      margin: 0 5px;
      transition: all 0.3s ease;
    }
    
    .team-social a:hover {
      background: var(--gold-color);
      color: var(--text-dark);
      transform: translateY(-3px);
    }
    
    /* Stats Section */
    .stats-section {
      padding: 100px 0;
      background: linear-gradient(135deg, #2a2e38, #1a1d24);
    }
    
    .stat-item {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .stat-number {
      font-size: 3.5rem;
      font-weight: 700;
      color: var(--gold-color);
      margin-bottom: 10px;
      font-family: 'Playfair Display', serif;
    }
    
    .stat-text {
      font-size: 1.2rem;
      color: rgba(255, 255, 255, 0.8);
    }
    
    /* Values Section */
    .values-section {
      padding: 100px 0;
    }
    
    .values-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      transition: all 0.5s ease;
      border: 1px solid rgba(255, 215, 0, 0.1);
      backdrop-filter: blur(5px);
      height: 100%;
    }
    
    .values-card:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .values-icon {
      width: 70px;
      height: 70px;
      background: rgba(255, 215, 0, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      color: var(--gold-color);
      margin-bottom: 20px;
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
      .about-hero h1 {
        font-size: 3.5rem;
      }
    }
    
    @media (max-width: 991px) {
      .about-hero h1 {
        font-size: 3rem;
      }
    }
    
    @media (max-width: 767px) {
      .about-hero {
        height: 50vh;
        min-height: 400px;
      }
      
      .about-hero h1 {
        font-size: 2.5rem;
      }
    }
    
    @media (max-width: 575px) {
      .about-hero h1 {
        font-size: 2.2rem;
      }
      
      .navbar-brand {
        font-size: 1.5rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
      
      .stat-number {
        font-size: 2.5rem;
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
  <section class="about-hero">
    <div class="container about-hero-content">
      <h1 data-aos="fade-up">Our Story</h1>
      <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Discover the passion behind Wanderlust Voyages</p>
    </div>
  </section>

  <!-- About Content -->
  <section class="about-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title">Who We Are</h2>
          <p class="about-text">Founded in 2010, Wanderlust Voyages began as a small team of travel enthusiasts with a big dream: to transform how people experience the world. What started as a passion project has grown into a premier travel company with clients across the globe.</p>
          <p class="about-text">Our team comprises seasoned travelers, destination experts, and hospitality professionals who share a common belief: that travel has the power to change lives, broaden perspectives, and create lasting memories.</p>
          <p class="about-text">We don't just plan trips; we craft personalized experiences that connect you with the heart and soul of each destination, ensuring every journey is as unique as the traveler embarking on it.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <img src="https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Our Team" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section class="mission-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Our Mission & Approach</h2>
      </div>
      
      <div class="row">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="mission-card">
            <div class="mission-icon">
              <i class="fas fa-bullseye"></i>
            </div>
            <h3>Our Mission</h3>
            <p>To inspire and enable extraordinary travel experiences that create lifelong memories while promoting sustainable and responsible tourism practices that benefit local communities and preserve natural wonders.</p>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="mission-card">
            <div class="mission-icon">
              <i class="fas fa-eye"></i>
            </div>
            <h3>Our Vision</h3>
            <p>To become the world's most trusted travel company, known for creating transformative journeys that expand horizons, foster cultural understanding, and leave positive impacts on both travelers and destinations.</p>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="mission-card">
            <div class="mission-icon">
              <i class="fas fa-handshake"></i>
            </div>
            <h3>Our Approach</h3>
            <p>We believe in personalized service, attention to detail, and building genuine relationships with our clients. Every itinerary is carefully crafted to match your interests, preferences, and travel style.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">By The Numbers</h2>
      </div>
      
      <div class="row">
        <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-item">
            <div class="stat-number" data-count="15">0</div>
            <div class="stat-text">Years of Experience</div>
          </div>
        </div>
        
        <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-item">
            <div class="stat-number" data-count="50">0</div>
            <div class="stat-text">Destinations</div>
          </div>
        </div>
        
        <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
          <div class="stat-item">
            <div class="stat-number" data-count="10000">0</div>
            <div class="stat-text">Happy Travelers</div>
          </div>
        </div>
        
        <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="500">
          <div class="stat-item">
            <div class="stat-number" data-count="150">0</div>
            <div class="stat-text">Travel Experts</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Meet Our Team</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">The passionate people behind your perfect journey</p>
      </div>
      
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="team-card">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Sarah Johnson">
            <div class="card-body text-center">
              <h5 class="card-title">Sarah Johnson</h5>
              <p class="card-text">Founder & CEO</p>
              <p class="card-text">With over 20 years in the travel industry, Sarah's vision continues to guide our company toward new horizons.</p>
              <div class="team-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="team-card">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Michael Chen">
            <div class="card-body text-center">
              <h5 class="card-title">Michael Chen</h5>
              <p class="card-text">Director of Operations</p>
              <p class="card-text">Michael ensures that every aspect of your journey runs smoothly, from transportation to accommodations.</p>
              <div class="team-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="team-card">
            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Elena Rodriguez">
            <div class="card-body text-center">
              <h5 class="card-title">Elena Rodriguez</h5>
              <p class="card-text">Head of Destination Experiences</p>
              <p class="card-text">Elena's expertise in cultural immersion ensures authentic experiences that go beyond typical tourist activities.</p>
              <div class="team-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Values Section -->
  <section class="values-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Our Values</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">The principles that guide everything we do</p>
      </div>
      
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="values-card">
            <div class="values-icon">
              <i class="fas fa-globe-americas"></i>
            </div>
            <h4>Sustainable Travel</h4>
            <p>We're committed to responsible tourism that minimizes environmental impact and supports local communities.</p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="values-card">
            <div class="values-icon">
              <i class="fas fa-heart"></i>
            </div>
            <h4>Passionate Service</h4>
            <p>Our team genuinely loves travel and is dedicated to creating unforgettable experiences for our clients.</p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="values-card">
            <div class="values-icon">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h4>Innovation</h4>
            <p>We continuously seek new destinations, experiences, and ways to enhance our travelers' journeys.</p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="values-card">
            <div class="values-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h4>Trust & Integrity</h4>
            <p>We build relationships based on honesty, transparency, and delivering on our promises.</p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="values-card">
            <div class="values-icon">
              <i class="fas fa-users"></i>
            </div>
            <h4>Community Focus</h4>
            <p>We believe in giving back to the communities we visit through various initiatives and partnerships.</p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="values-card">
            <div class="values-icon">
              <i class="fas fa-star"></i>
            </div>
            <h4>Excellence</h4>
            <p>We strive for perfection in every detail, ensuring exceptional quality in all our services.</p>
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
            <h2 class="section-title mb-4">Ready to Explore With Us?</h2>
            <p class="lead mb-5">Let our team of experts craft your perfect journey based on your dreams and preferences.</p>
            <div class="d-flex flex-column flex-sm-row justify-content-center">
              <a href="../pages/contact.php" class="btn btn-explore me-sm-3 mb-3 mb-sm-0">Contact Our Team</a>
              <a href="../pages/destination.php" class="btn btn-outline-gold">Explore Destinations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
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
              <li class="mb-2"><a href="about.html" class="text-white">About Us</a></li>
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
    
    // Counter animation for stats
    function animateCounter() {
      const counters = document.querySelectorAll('.stat-number');
      const speed = 200;
      
      counters.forEach(counter => {
        const target = +counter.getAttribute('data-count');
        const count = +counter.innerText;
        const increment = Math.ceil(target / speed);
        
        if (count < target) {
          counter.innerText = Math.min(count + increment, target);
          setTimeout(animateCounter, 1);
        }
      });
    }
    
    // Start counter when stats section is in view
    const statsSection = document.querySelector('.stats-section');
    let counted = false;
    
    function checkIfInView() {
      const sectionPosition = statsSection.getBoundingClientRect();
      if (sectionPosition.top < window.innerHeight && sectionPosition.bottom >= 0 && !counted) {
        animateCounter();
        counted = true;
      }
    }
    
    window.addEventListener('scroll', checkIfInView);
    window.addEventListener('load', checkIfInView);
  </script>
</body>
</html>