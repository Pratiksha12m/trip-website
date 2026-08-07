<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gallery | Wanderlust Voyages</title>
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
    .gallery-hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                  url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 60vh;
      min-height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    
    .gallery-hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(transparent, var(--secondary-color));
      z-index: 1;
    }
    
    .gallery-hero-content {
      z-index: 2;
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }
    
    .gallery-hero h1 {
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
    
    /* Gallery Filter */
    .gallery-filter {
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(15px);
      border-radius: 15px;
      padding: 30px;
      margin-top: -50px;
      position: relative;
      z-index: 10;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border: 1px solid rgba(255, 215, 0, 0.3);
    }
    
    .filter-title {
      color: var(--gold-color);
      margin-bottom: 20px;
      font-family: 'Playfair Display', serif;
      text-align: center;
      font-size: 1.8rem;
    }
    
    .filter-buttons {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
    }
    
    .filter-btn {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
      padding: 10px 20px;
      border-radius: 50px;
      transition: all 0.3s ease;
      cursor: pointer;
    }
    
    .filter-btn:hover, .filter-btn.active {
      background: var(--gold-color);
      color: var(--text-dark);
      border-color: var(--gold-color);
    }
    
    /* Gallery Grid */
    .gallery-section {
      padding: 100px 0;
    }
    
    .gallery-item {
      margin-bottom: 30px;
      overflow: hidden;
      border-radius: 10px;
      position: relative;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
      transition: all 0.5s ease;
      height: 300px;
      cursor: pointer;
    }
    
    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.8s ease;
    }
    
    .gallery-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
    }
    
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    
    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
      display: flex;
      align-items: flex-end;
      padding: 20px;
      opacity: 0;
      transition: opacity 0.5s ease;
    }
    
    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }
    
    .gallery-overlay h5 {
      color: white;
      font-weight: 600;
      margin-bottom: 5px;
    }
    
    .gallery-overlay p {
      color: rgba(255, 255, 255, 0.8);
      font-size: 0.9rem;
    }
    
    /* Video Section */
    .video-section {
      padding: 100px 0;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                  url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      background-attachment: fixed;
    }
    
    .video-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      transition: all 0.5s ease;
      border: 1px solid rgba(255, 215, 0, 0.1);
      backdrop-filter: blur(5px);
      height: 100%;
    }
    
    .video-card:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .video-container {
      position: relative;
      width: 100%;
      height: 0;
      padding-bottom: 56.25%;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 20px;
    }
    
    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
    
    /* Traveler Stories */
    .stories-section {
      padding: 100px 0;
    }
    
    .story-card {
      background: var(--card-bg);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.5s ease;
      margin-bottom: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      height: 100%;
    }
    
    .story-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .story-img {
      height: 250px;
      object-fit: cover;
      width: 100%;
    }
    
    .story-card .card-body {
      padding: 25px;
    }
    
    .story-card .card-title {
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--gold-color);
      font-size: 1.5rem;
      font-family: 'Playfair Display', serif;
    }
    
    .story-card .card-text {
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 20px;
    }
    
    .story-meta {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
      align-items: center;
    }
    
    .traveler-info {
      display: flex;
      align-items: center;
    }
    
    .traveler-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 10px;
      border: 2px solid var(--gold-color);
    }
    
    /* Modal */
    .modal-content {
      background: var(--dropdown-bg);
      color: white;
      border: 1px solid rgba(255, 215, 0, 0.3);
      border-radius: 15px;
      overflow: hidden;
    }
    
    .modal-header {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      background: rgba(0, 0, 0, 0.5);
    }
    
    .modal-title {
      color: var(--gold-color);
      font-family: 'Playfair Display', serif;
    }
    
    .btn-close {
      filter: invert(1);
    }
    
    .modal-body {
      padding: 0;
    }
    
    .modal-image {
      width: 100%;
      border-radius: 0;
    }
    
    .modal-caption {
      padding: 20px;
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
      .gallery-hero h1 {
        font-size: 3.5rem;
      }
    }
    
    @media (max-width: 991px) {
      .gallery-hero h1 {
        font-size: 3rem;
      }
      
      .gallery-filter {
        margin-top: -30px;
        padding: 20px;
      }
      
      .filter-title {
        font-size: 1.5rem;
      }
    }
    
    @media (max-width: 767px) {
      .gallery-hero {
        height: 50vh;
        min-height: 400px;
      }
      
      .gallery-hero h1 {
        font-size: 2.5rem;
      }
      
      .filter-buttons {
        flex-direction: column;
        align-items: center;
      }
      
      .filter-btn {
        width: 100%;
        margin-bottom: 10px;
        text-align: center;
      }
    }
    
    @media (max-width: 575px) {
      .gallery-hero h1 {
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
  <section class="gallery-hero">
    <div class="container gallery-hero-content">
      <h1 data-aos="fade-up">Travel Gallery</h1>
      <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Explore stunning visuals from around the world</p>
    </div>
  </section>

  <!-- Gallery Filter -->
  <section class="container gallery-filter" data-aos="fade-up">
    <h3 class="filter-title">Filter by Category</h3>
    <div class="filter-buttons">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="nature">Nature</button>
      <button class="filter-btn" data-filter="cities">Cities</button>
      <button class="filter-btn" data-filter="beaches">Beaches</button>
      <button class="filter-btn" data-filter="cultural">Cultural</button>
      <button class="filter-btn" data-filter="adventure">Adventure</button>
    </div>
  </section>

  <!-- Gallery Grid -->
  <section class="gallery-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Photo Gallery</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Capturing moments from around the world</p>
      </div>
      
      <div class="row gallery-container">
        <!-- Nature -->
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="200" data-category="nature">
          <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Mountain Landscape">
          <div class="gallery-overlay">
            <div>
              <h5>Swiss Alps</h5>
              <p>Breathtaking mountain views in the Swiss Alps</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="300" data-category="nature">
          <img src="https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Forest">
          <div class="gallery-overlay">
            <div>
              <h5>Enchanted Forest</h5>
              <p>Mystical forest in Germany</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="400" data-category="nature">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Mountain Reflection">
          <div class="gallery-overlay">
            <div>
              <h5>Mountain Reflection</h5>
              <p>Perfect mirror effect in Banff National Park</p>
            </div>
          </div>
        </div>
        
        <!-- Cities -->
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="200" data-category="cities">
          <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="New York City">
          <div class="gallery-overlay">
            <div>
              <h5>New York City</h5>
              <p>Skyline view from Brooklyn Bridge</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="300" data-category="cities">
          <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Paris">
          <div class="gallery-overlay">
            <div>
              <h5>Paris, France</h5>
              <p>Eiffel Tower at sunset</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="400" data-category="cities">
          <img src="https://images.unsplash.com/photo-1538970272646-f61fabb3a8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Kyoto">
          <div class="gallery-overlay">
            <div>
              <h5>Kyoto, Japan</h5>
              <p>Traditional streets in historic district</p>
            </div>
          </div>
        </div>
        
        <!-- Beaches -->
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="200" data-category="beaches">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Tropical Beach">
          <div class="gallery-overlay">
            <div>
              <h5>Maldives</h5>
              <p>Crystal clear waters and white sand beaches</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="300" data-category="beaches">
          <img src="https://images.unsplash.com/photo-1506953823976-52e1fdc0149a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Beach Sunset">
          <div class="gallery-overlay">
            <div>
              <h5>Bali, Indonesia</h5>
              <p>Stunning sunset at Jimbaran Beach</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="400" data-category="beaches">
          <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Beach Cliff">
          <div class="gallery-overlay">
            <div>
              <h5>Algarve, Portugal</h5>
              <p>Dramatic cliffs and hidden beaches</p>
            </div>
          </div>
        </div>
        
        <!-- Cultural -->
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="200" data-category="cultural">
          <img src="https://images.unsplash.com/photo-1580502304784-8985b7eb7260?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Venice">
          <div class="gallery-overlay">
            <div>
              <h5>Venice, Italy</h5>
              <p>Gondolas in the canals</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="300" data-category="cultural">
          <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Marrakech">
          <div class="gallery-overlay">
            <div>
              <h5>Marrakech, Morocco</h5>
              <p>Vibrant markets and architecture</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="400" data-category="cultural">
          <img src="https://images.unsplash.com/photo-1539650116574-75c0c6d73f6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Taj Mahal">
          <div class="gallery-overlay">
            <div>
              <h5>Agra, India</h5>
              <p>The majestic Taj Mahal at sunrise</p>
            </div>
          </div>
        </div>
        
        <!-- Adventure -->
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="200" data-category="adventure">
          <img src="https://images.unsplash.com/photo-1596436889106-be35e8435c77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Machu Picchu">
          <div class="gallery-overlay">
            <div>
              <h5>Machu Picchu, Peru</h5>
              <p>Ancient ruins in the Andes mountains</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="300" data-category="adventure">
          <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Safari">
          <div class="gallery-overlay">
            <div>
              <h5>Serengeti, Tanzania</h5>
              <p>Wildlife safari adventure</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 gallery-item" data-aos="fade-up" data-aos-delay="400" data-category="adventure">
          <img src="https://images.unsplash.com/photo-1594741158701-e5ab913e178b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Northern Lights">
          <div class="gallery-overlay">
            <div>
              <h5>Iceland</h5>
              <p>Aurora borealis dancing in the sky</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
        <a href="#" class="btn btn-explore">Load More</a>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Travel Videos</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Experience destinations through motion</p>
      </div>
      
      <div class="row">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="video-card">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/BkL9l7qYSMc" title="European Travel Experience" allowfullscreen></iframe>
            </div>
            <h4>European Adventure</h4>
            <p>Join us on a journey through the most beautiful cities and landscapes across Europe.</p>
          </div>
        </div>
        
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="video-card">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/1PCo2khdHRs" title="Asian Cultural Journey" allowfullscreen></iframe>
            </div>
            <h4>Asian Cultural Journey</h4>
            <p>Explore the rich traditions and modern wonders of Asia in this immersive video experience.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Traveler Stories -->
  <section class="stories-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Traveler Stories</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">See the world through our travelers' lenses</p>
      </div>
      
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="story-card">
            <img src="https://images.unsplash.com/photo-1523531294919-4bcd7c65e216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="story-img" alt="Traveler in Iceland">
            <div class="card-body">
              <h5 class="card-title">Northern Lights Expedition</h5>
              <p class="card-text">Our journey to witness the aurora borealis in Iceland was nothing short of magical. The dancing lights against the starry sky was a once-in-a-lifetime experience.</p>
              <div class="story-meta">
                <div class="traveler-info">
                  <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson" class="traveler-img">
                  <span>Sarah Johnson</span>
                </div>
                <small>2 weeks ago</small>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="story-card">
            <img src="https://images.unsplash.com/photo-1518391846015-55a9cc003b25?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="story-img" alt="Safari in Africa">
            <div class="card-body">
              <h5 class="card-title">African Safari Adventure</h5>
              <p class="card-text">Witnessing the Great Migration in Serengeti was awe-inspiring. We saw the Big Five and experienced authentic Maasai culture on this incredible journey.</p>
              <div class="story-meta">
                <div class="traveler-info">
                  <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Thompson" class="traveler-img">
                  <span>Michael Thompson</span>
                </div>
                <small>3 weeks ago</small>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="story-card">
            <img src="https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="story-img" alt="New Zealand Adventure">
            <div class="card-body">
              <h5 class="card-title">New Zealand Extreme</h5>
              <p class="card-text">From bungee jumping in Queenstown to hiking the Milford Track, New Zealand delivered the ultimate adventure experience we were looking for.</p>
              <div class="story-meta">
                <div class="traveler-info">
                  <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Emily Rodriguez" class="traveler-img">
                  <span>Emily Rodriguez</span>
                </div>
                <small>1 month ago</small>
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
            <h2 class="section-title mb-4">Share Your Journey</h2>
            <p class="lead mb-5">Have amazing travel photos? Share them with our community for a chance to be featured!</p>
            <div class="d-flex flex-column flex-sm-row justify-content-center">
              <a href="../pages/contactus.html" class="btn btn-explore me-sm-3 mb-3 mb-sm-0">Submit Photos</a>
              <a href="../pages/destination.html" class="btn btn-outline-gold">Explore Trips</a>
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

  <!-- Image Modal -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalImageTitle">Image Title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="" alt="" class="modal-image" id="modalImage">
          <div class="modal-caption">
            <p id="modalCaption"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

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
    
    // Gallery filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked button
        this.classList.add('active');
        
        const filterValue = this.getAttribute('data-filter');
        
        galleryItems.forEach(item => {
          if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
    
    // Modal functionality for gallery images
    const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
    const modalImage = document.getElementById('modalImage');
    const modalImageTitle = document.getElementById('modalImageTitle');
    const modalCaption = document.getElementById('modalCaption');
    
    galleryItems.forEach(item => {
      item.addEventListener('click', function() {
        const imgSrc = this.querySelector('img').src;
        const title = this.querySelector('h5').textContent;
        const caption = this.querySelector('p').textContent;
        
        modalImage.src = imgSrc;
        modalImageTitle.textContent = title;
        modalCaption.textContent = caption;
        
        imageModal.show();
      });
    });
  </script>
</body>
</html>