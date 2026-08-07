<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wanderlust Voyages | Explore the World</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #4286f4;
      --secondary-color: #373b44;
      --accent-color: #ff6b6b;
      --text-light: #f8f9fa;
      --text-dark: #212529;
      --card-bg: rgba(255, 255, 255, 0.1);
      --nav-bg: rgba(0, 0, 0, 0.8);
      --gold-color: #FFD700;
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
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                  url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 100vh;
      min-height: 700px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
      animation: backgroundPan 20s linear infinite;
    }
    
    @keyframes backgroundPan {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    
    .hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(transparent, var(--secondary-color));
      z-index: 1;
    }
    
    .hero-content {
      z-index: 2;
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }
    
    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 5rem;
      font-weight: 700;
      margin-bottom: 25px;
      background: linear-gradient(to right, var(--gold-color), #fff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      letter-spacing: 1px;
    }
    
    .hero p {
      font-size: 1.5rem;
      max-width: 700px;
      margin: 0 auto 40px;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }
    
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
    }
    
    .btn-explore:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(255, 215, 0, 0.7);
    }
    
    .btn-explore::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: 0.5s;
    }
    
    .btn-explore:hover::before {
      left: 100%;
    }
    
    /* Features Section */
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
    }
    
    .feature-card:hover {
      transform: translateY(-15px) scale(1.02);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .feature-card .card-img-top {
      height: 250px;
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
    
    /* About Section */
    .about-section {
      position: relative;
      overflow: hidden;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                  url('https://images.unsplash.com/photo-1503220317375-aaad61436b1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      padding: 120px 0;
    }
    
    .about-content {
      position: relative;
      z-index: 2;
    }
    
    .about-img {
      border-radius: 15px;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
      transition: all 0.5s ease;
      border: 5px solid rgba(255, 215, 0, 0.3);
    }
    
    .about-img:hover {
      transform: scale(1.05) rotate(-2deg);
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6);
      border-color: rgba(255, 215, 0, 0.6);
    }
    
    .highlight-text {
      color: var(--gold-color);
      font-weight: 600;
      font-style: italic;
    }
    
    /* Stats Section */
    .stats-section {
      background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                  url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      padding: 100px 0;
      background-attachment: fixed;
    }
    
    .stat-item {
      padding: 30px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(5px);
      transition: all 0.5s ease;
    }
    
    .stat-item:hover {
      transform: translateY(-10px);
      background: rgba(255, 215, 0, 0.1);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }
    
    .stat-item h2 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      color: var(--gold-color);
      margin-bottom: 10px;
    }
    
    .stat-item p {
      font-size: 1.2rem;
      color: rgba(255, 255, 255, 0.9);
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
    
    /* Gallery Section */
    .gallery-section {
      padding: 100px 0;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                  url('https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      background-attachment: fixed;
    }
    
    .gallery-item {
      margin-bottom: 30px;
      overflow: hidden;
      border-radius: 10px;
      position: relative;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
      transition: all 0.5s ease;
      height: 250px;
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
    
    /* Contact Section */
    .contact-section {
      background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                  url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      position: relative;
      padding: 120px 0;
    }
    
    .contact-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://images.unsplash.com/photo-1467269204594-9661b134dd2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      opacity: 0.2;
      z-index: 1;
    }
    
    .contact-content {
      position: relative;
      z-index: 2;
    }
    
    .contact-form {
      background: rgba(0, 0, 0, 0.7);
      padding: 40px;
      border-radius: 15px;
      border: 1px solid rgba(255, 215, 0, 0.2);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    }
    
    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
      padding: 12px 15px;
      margin-bottom: 20px;
    }
    
    .form-control:focus {
      background: rgba(255, 255, 255, 0.2);
      border-color: var(--gold-color);
      color: white;
      box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.25);
    }
    
    .form-label {
      color: rgba(255, 255, 255, 0.8);
    }
    
    .social-icons {
      margin-top: 40px;
    }
    
    .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 60px;
      height: 60px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      margin: 0 15px;
      color: var(--text-light);
      font-size: 1.5rem;
      transition: all 0.5s ease;
      border: 1px solid rgba(255, 215, 0, 0.3);
    }
    
    .social-icons a:hover {
      background: var(--gold-color);
      transform: translateY(-10px) scale(1.1);
      box-shadow: 0 10px 20px rgba(255, 215, 0, 0.4);
      color: var(--text-dark);
    }
    
    /* Newsletter Section */
    .newsletter-section {
      padding: 80px 0;
      background: linear-gradient(135deg, #373b44, #2a2e38);
    }
    
    .newsletter-box {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      padding: 40px;
      border: 1px solid rgba(255, 215, 0, 0.2);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .newsletter-input {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
      padding: 15px 20px;
      border-radius: 50px;
      width: 100%;
      margin-right: 15px;
    }
    
    .newsletter-input:focus {
      outline: none;
      border-color: var(--gold-color);
      box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.25);
    }
    
    .btn-newsletter {
      background: linear-gradient(45deg, var(--gold-color), var(--accent-color));
      border: none;
      padding: 15px 30px;
      font-weight: 600;
      border-radius: 50px;
      box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
      transition: all 0.3s ease;
      white-space: nowrap;
    }
    
    .btn-newsletter:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(255, 215, 0, 0.6);
    }
    
    /* Footer */
    footer {
      background: linear-gradient(to right, #1a1a1a, #2a2a2a);
      padding: 60px 0 30px;
      position: relative;
    }
    
    .footer-logo {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 2rem;
      background: linear-gradient(to right, var(--gold-color), var(--accent-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 20px;
      display: inline-block;
    }
    
    .footer-about p {
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 20px;
    }
    
    .footer-links h5 {
      color: var(--gold-color);
      margin-bottom: 25px;
      font-family: 'Playfair Display', serif;
      font-weight: 600;
    }
    
    .footer-links ul {
      list-style: none;
      padding: 0;
    }
    
    .footer-links li {
      margin-bottom: 12px;
    }
    
    .footer-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: all 0.3s ease;
      position: relative;
      padding-left: 15px;
    }
    
    .footer-links a::before {
      content: '→';
      position: absolute;
      left: 0;
      color: var(--gold-color);
      opacity: 0;
      transition: all 0.3s ease;
    }
    
    .footer-links a:hover {
      color: var(--gold-color);
      padding-left: 20px;
    }
    
    .footer-links a:hover::before {
      opacity: 1;
      left: -5px;
    }
    
    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 30px;
      margin-top: 50px;
    }
    
    .copyright {
      color: rgba(255, 255, 255, 0.5);
      margin-top: 20px;
    }
    
    .footer-social a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      margin: 0 10px;
      color: var(--text-light);
      font-size: 1rem;
      transition: all 0.3s ease;
    }
    
    .footer-social a:hover {
      background: var(--gold-color);
      transform: translateY(-5px);
      color: var(--text-dark);
    }
    
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 60px;
      height: 60px;
      background: var(--gold-color);
      color: var(--text-dark);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      box-shadow: 0 5px 25px rgba(255, 215, 0, 0.5);
      opacity: 0;
      visibility: hidden;
      transition: all 0.5s ease;
      z-index: 999;
      border: none;
    }
    
    .back-to-top:hover {
      transform: translateY(-5px) scale(1.1);
      box-shadow: 0 8px 30px rgba(255, 215, 0, 0.7);
    }
    
    .back-to-top.active {
      opacity: 1;
      visibility: visible;
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
      .hero h1 {
        font-size: 4.5rem;
      }
    }
    
    @media (max-width: 991px) {
      .hero h1 {
        font-size: 3.8rem;
      }
      
      .footer-links {
        margin-bottom: 30px;
      }
    }
    
    @media (max-width: 767px) {
      .hero h1 {
        font-size: 3rem;
      }
      
      .hero p {
        font-size: 1.2rem;
      }
      
      .about-img {
        margin-bottom: 40px;
      }
      
      .newsletter-input {
        margin-bottom: 15px;
        margin-right: 0;
      }
    }
    
    @media (max-width: 575px) {
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .navbar-brand {
        font-size: 1.5rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
      
      .stat-item h2 {
        font-size: 2.5rem;
      }
      
      .stat-item p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Wanderlust Voyages</a>
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
  <section class="hero" id="home">
    <div class="container hero-content">
      <h1 data-aos="fade-up" data-aos-delay="100">Discover Your Next Adventure</h1>
      <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">Explore the world's most breathtaking destinations with our expertly crafted travel experiences</p>
      <div data-aos="fade-up" data-aos-delay="300">
        <a href="#features" class="btn btn-explore pulse">Explore Journeys <i class="fas fa-arrow-right ms-2"></i></a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-5" style="padding-top: 120px; padding-bottom: 120px;">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Our Travel Services</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Everything you need for the perfect journey</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1433838552652-f9a46b332c40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Booking">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-calendar-check"></i>
              </div>
              <h5 class="card-title">Search & Booking System</h5>
              <p class="card-text">Filter by destination, price, rating, activity type. Calendar & availability checker. Instant booking or inquiry form.</p>
              <div class="mt-3">
                <a href="../pages/booking.html" class="btn btn-outline-light">Learn More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Destination">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-map-marked-alt"></i>
              </div>
              <h5 class="card-title">Destination Guides</h5>
              <p class="card-text">Description, highlights, map. Things to do, best time to visit. Photo/video gallery.</p>
              <div class="mt-3">
                <a href="../pages/destination.html" class="btn btn-outline-light">Explore Destinations</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Tours">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-route"></i>
              </div>
              <h5 class="card-title">Tours & Packages</h5>
              <p class="card-text">Group tours, solo trips, weekend getaways. Inclusions (meals, transport, guide). Pricing table with comparison.</p>
              <div class="mt-3">
                <a href="../pages/tour.html" class="btn btn-outline-light">View Packages</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Destinations Section -->
  <section id="destinations" class="py-5" style="padding-top: 120px; padding-bottom: 120px; background-color: #1a1d24;">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Popular Destinations</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Explore our most sought-after travel spots</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1518391846015-55a9cc003b25?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Paris">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-eiffel-tower"></i>
              </div>
              <h5 class="card-title">Paris, France</h5>
              <p class="card-text">The city of love and lights. Explore the Eiffel Tower, Louvre, and charming cafes along the Seine.</p>
              <div class="mt-3">
                <a href="#" class="btn btn-outline-light">Explore Paris</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1538970272646-f61fabb3a8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Kyoto">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-torii-gate"></i>
              </div>
              <h5 class="card-title">Kyoto, Japan</h5>
              <p class="card-text">Ancient temples, cherry blossoms, and traditional tea houses in Japan's cultural heart.</p>
              <div class="mt-3">
                <a href="#" class="btn btn-outline-light">Explore Kyoto</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-card">
            <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="Santorini">
            <div class="card-body text-center">
              <div class="card-icon">
                <i class="fas fa-umbrella-beach"></i>
              </div>
              <h5 class="card-title">Santorini, Greece</h5>
              <p class="card-text">White-washed buildings, blue domes, and stunning sunsets over the Aegean Sea.</p>
              <div class="mt-3">
                <a href="#" class="btn btn-outline-light">Explore Santorini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
        <a href="#" class="btn btn-explore">View All Destinations</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 about-content" data-aos="fade-right">
          <h2 class="section-title mb-4">Our Story</h2>
          <p class="mb-4"><span class="highlight-text">Wanderlust Voyages</span> was born from a simple idea: travel should be transformative, not transactional. What began as a passion project among friends has grown into a global community of explorers.</p>
          <p class="mb-4">We've personally visited every destination we offer, ensuring authentic experiences that go beyond tourist traps. Our team of travel experts combines local knowledge with global perspectives to craft journeys that inspire.</p>
          <p>From the snow-capped peaks of the Himalayas to the serene beaches of Bali, we curate journeys that create lifelong memories. Whether you're a solo explorer, a couple, or a family, we ensure every detail is crafted with care.</p>
          <div class="mt-4">
            <a href="#" class="btn btn-explore pulse">Meet Our Team</a>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" class="img-fluid about-img floating" alt="About Us">
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
          <div class="stat-item">
            <h2 class="display-4">50+</h2>
            <p class="lead">Destinations</p>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-item">
            <h2 class="display-4">10K+</h2>
            <p class="lead">Happy Travelers</p>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-item">
            <h2 class="display-4">15+</h2>
            <p class="lead">Years Experience</p>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
          <div class="stat-item">
            <h2 class="display-4">100%</h2>
            <p class="lead">Satisfaction</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Traveler Stories</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">What our customers say about their experiences</p>
      </div>
      <div class="row">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial-card">
            <div class="testimonial-text">
              Wanderlust Voyages made our honeymoon unforgettable. Every detail was perfect, from the romantic dinners to the private tours. We'll cherish these memories forever.
            </div>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah J.">
              <div class="author-info">
                <h5>Sarah Johnson</h5>
                <p>Honeymoon in Bali</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="testimonial-card">
            <div class="testimonial-text">
              As a solo female traveler, I felt completely safe and supported throughout my Japan trip. The local guides were knowledgeable and the itinerary was perfectly balanced.
            </div>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Emily R.">
              <div class="author-info">
                <h5>Emily Rodriguez</h5>
                <p>Solo Trip to Japan</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="testimonial-card">
            <div class="testimonial-text">
              Our family vacation to Italy was seamless thanks to Wanderlust Voyages. They handled all the logistics so we could focus on making memories with our kids.
            </div>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Michael T.">
              <div class="author-info">
                <h5>Michael Thompson</h5>
                <p>Family Trip to Italy</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="gallery-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Travel Gallery</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Moments from our travelers around the world</p>
      </div>
      <div class="row">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Mountain Adventure">
            <div class="gallery-overlay">
              <div>
                <h5>Mountain Adventure</h5>
                <p>Swiss Alps, Switzerland</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Beach Paradise">
            <div class="gallery-overlay">
              <div>
                <h5>Beach Paradise</h5>
                <p>Maldives</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Cultural Experience">
            <div class="gallery-overlay">
              <div>
                <h5>Cultural Experience</h5>
                <p>Marrakech, Morocco</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="City Exploration">
            <div class="gallery-overlay">
              <div>
                <h5>City Exploration</h5>
                <p>New York, USA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Wildlife Safari">
            <div class="gallery-overlay">
              <div>
                <h5>Wildlife Safari</h5>
                <p>Serengeti, Tanzania</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Northern Lights">
            <div class="gallery-overlay">
              <div>
                <h5>Northern Lights</h5>
                <p>Reykjavik, Iceland</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
        <a href="#" class="btn btn-explore">View More Photos</a>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="newsletter-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="newsletter-box" data-aos="zoom-in">
            <div class="text-center mb-4">
              <h2 class="section-title">Stay Updated</h2>
              <p class="text-muted">Subscribe to our newsletter for exclusive travel deals and inspiration</p>
            </div>
            <form class="d-flex flex-column flex-md-row align-items-center">
              <input type="email" class="newsletter-input" placeholder="Your email address" required>
              <button type="submit" class="btn btn-newsletter">Subscribe Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <div class="container contact-content">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
          <h2 class="section-title mb-4">Get In Touch</h2>
          <p class="mb-4">Have questions about your next adventure? Our travel experts are here to help you plan the perfect getaway.</p>
          <div class="mb-4">
            <h5><i class="fas fa-map-marker-alt me-2" style="color: var(--gold-color);"></i> Our Office</h5>
            <p>123 Travel Street, Wanderlust City, WC 12345</p>
          </div>
          <div class="mb-4">
            <h5><i class="fas fa-phone-alt me-2" style="color: var(--gold-color);"></i> Call Us</h5>
            <p>+1 (555) 123-4567</p>
          </div>
          <div class="mb-4">
            <h5><i class="fas fa-envelope me-2" style="color: var(--gold-color);"></i> Email Us</h5>
            <p>info@wanderlustvoyages.com</p>
          </div>
          <div class="social-icons">
            <a href="#" data-aos="fade-up" data-aos-delay="100"><i class="fab fa-facebook-f"></i></a>
            <a href="#" data-aos="fade-up" data-aos-delay="200"><i class="fab fa-twitter"></i></a>
            <a href="#" data-aos="fade-up" data-aos-delay="300"><i class="fab fa-instagram"></i></a>
            <a href="#" data-aos="fade-up" data-aos-delay="400"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <div class="contact-form">
            <h3 class="mb-4">Send Us a Message</h3>
            <form action="../php/message.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name"  name="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject"  name="subject" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-explore w-100">Send Message</button>
            </form>
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
              <li><a href="./index.html">Home</a></li>
              <li><a href="#features">Services</a></li>
              <li><a href="#destinations">Destinations</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#contact">Contact</a></li>
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
              <li><a href="#">Family Vacations</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-links">
            <h5>Newsletter</h5>
            <p>Subscribe to our newsletter for the latest travel deals and inspiration.</p>
            <form class="mt-4">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Your Email" required>
                <button class="btn btn-outline-light" type="submit">Subscribe</button>
              </div>
            </form>
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
      const elements = document.querySelectorAll('.feature-card, .about-img, .stat-item, .testimonial-card, .gallery-item');
      
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
    document.querySelectorAll('.feature-card, .about-img, .stat-item, .testimonial-card, .gallery-item').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(50px)';
      el.style.transition = 'all 0.8s ease';
    });
    
    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', animateOnScroll);
  </script>
</body>
</html>