<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Wanderlust Voyages</title>
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
    .contact-hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                  url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 50vh;
      min-height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    
    .contact-hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(transparent, var(--secondary-color));
      z-index: 1;
    }
    
    .contact-hero-content {
      z-index: 2;
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }
    
    .contact-hero h1 {
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
    
    /* Contact Section */
    .contact-section {
      padding: 100px 0;
    }
    
    .contact-card {
      background: var(--card-bg);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 40px;
      transition: all 0.5s ease;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      height: 100%;
    }
    
    .contact-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .contact-info {
      margin-bottom: 30px;
    }
    
    .contact-info-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 25px;
    }
    
    .contact-icon {
      width: 50px;
      height: 50px;
      background: rgba(255, 215, 0, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      color: var(--gold-color);
      margin-right: 15px;
      flex-shrink: 0;
    }
    
    .contact-details h4 {
      color: var(--gold-color);
      margin-bottom: 5px;
      font-size: 1.2rem;
    }
    
    .contact-details p {
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 0;
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
    
    textarea.form-control {
      min-height: 150px;
      resize: none;
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
    
    /* FAQ Section */
    .faq-section {
      padding: 100px 0;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                  url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      background-attachment: fixed;
    }
    
    .accordion-item {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 10px;
      margin-bottom: 15px;
      overflow: hidden;
    }
    
    .accordion-button {
      background: rgba(255, 255, 255, 0.1);
      color: var(--gold-color);
      font-weight: 600;
      padding: 20px;
      box-shadow: none;
    }
    
    .accordion-button:not(.collapsed) {
      background: rgba(255, 215, 0, 0.1);
      color: var(--gold-color);
    }
    
    .accordion-button::after {
      filter: invert(1);
    }
    
    .accordion-body {
      background: rgba(0, 0, 0, 0.3);
      color: rgba(255, 255, 255, 0.8);
    }
    
    /* Map Section */
    .map-section {
      padding: 100px 0;
    }
    
    .map-container {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 215, 0, 0.3);
    }
    
    .map-container iframe {
      width: 100%;
      height: 450px;
      border: none;
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
      .contact-hero h1 {
        font-size: 3.5rem;
      }
    }
    
    @media (max-width: 991px) {
      .contact-hero h1 {
        font-size: 3rem;
      }
      
      .contact-info-item {
        flex-direction: column;
        text-align: center;
      }
      
      .contact-icon {
        margin-right: 0;
        margin-bottom: 15px;
      }
    }
    
    @media (max-width: 767px) {
      .contact-hero {
        height: 40vh;
        min-height: 350px;
      }
      
      .contact-hero h1 {
        font-size: 2.5rem;
      }
      
      .contact-card {
        padding: 25px;
      }
    }
    
    @media (max-width: 575px) {
      .contact-hero h1 {
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
  <section class="contact-hero">
    <div class="container contact-hero-content">
      <h1 data-aos="fade-up">Get In Touch</h1>
      <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">We're here to help you plan your next adventure</p>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Contact Us</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Have questions? We'd love to hear from you</p>
      </div>
      
      <div class="row">
        <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
          <div class="contact-card">
            <h3 class="mb-4" style="color: var(--gold-color);">Contact Information</h3>
            <p class="mb-4">Reach out to us with any questions, comments, or concerns. Our team is ready to help you plan your next unforgettable journey.</p>
            
            <div class="contact-info">
              <div class="contact-info-item">
                <div class="contact-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                  <h4>Our Location</h4>
                  <p>123 Travel Street, Wanderlust City, WC 12345</p>
                </div>
              </div>
              
              <div class="contact-info-item">
                <div class="contact-icon">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-details">
                  <h4>Phone Number</h4>
                  <p>+1 (555) 123-4567</p>
                  <p>+1 (555) 987-6543</p>
                </div>
              </div>
              
              <div class="contact-info-item">
                <div class="contact-icon">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                  <h4>Email Address</h4>
                  <p>info@wanderlustvoyages.com</p>
                  <p>support@wanderlustvoyages.com</p>
                </div>
              </div>
              
              <div class="contact-info-item">
                <div class="contact-icon">
                  <i class="fas fa-clock"></i>
                </div>
                <div class="contact-details">
                  <h4>Business Hours</h4>
                  <p>Monday-Friday: 9am - 8pm</p>
                  <p>Saturday: 10am - 6pm</p>
                  <p>Sunday: 11am - 5pm</p>
                </div>
              </div>
            </div>
            
            <div class="social-links">
              <h4 class="mb-3" style="color: var(--gold-color);">Follow Us</h4>
              <div class="d-flex">
                <a href="#" class="btn btn-outline-gold me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-gold me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-outline-gold me-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-outline-gold"><i class="fab fa-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
          <div class="contact-card">
            <h3 class="mb-4" style="color: var(--gold-color);">Send Us a Message</h3>
          <form id="contactForm" action="../php/contact_mess.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Your first name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Your last name" required>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your email address" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your phone number">
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="What is this regarding?" required>
              </div>
              
              <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" placeholder="How can we help you?" required></textarea>
              </div>
              
              <div class="form-group form-check mb-4">
                <input type="checkbox" class="form-check-input" name="newsletter" id="newsletter">
                <label class="form-check-label" for="newsletter">Subscribe to our newsletter for travel inspiration and exclusive offers</label>
              </div>
              
              <button type="submit" class="btn btn-explore">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Find answers to common questions about our services</p>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How far in advance should I book my trip?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We recommend booking at least 3-6 months in advance for international trips, especially during peak seasons. For domestic travel, 1-2 months in advance is usually sufficient. Last-minute bookings are sometimes possible, but early planning ensures better availability and prices.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What is your cancellation policy?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our cancellation policy varies depending on the destination and type of trip. Generally, cancellations made more than 60 days before departure receive a full refund minus a processing fee. Between 30-60 days, we refund 50% of the trip cost. Cancellations within 30 days are non-refundable but may be credited toward future travel. We highly recommend purchasing travel insurance.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Do you offer customized itineraries?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Absolutely! We specialize in creating personalized travel experiences. Our experts will work with you to design an itinerary that matches your interests, budget, and travel style. Just let us know your preferences, and we'll handle all the details to create your dream vacation.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  What safety measures do you have in place?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Your safety is our top priority. We work only with vetted partners who meet our safety standards. We provide 24/7 emergency support during your travels, stay updated on travel advisories, and ensure all accommodations and activities comply with local health and safety regulations. We also recommend comprehensive travel insurance for all trips.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  How do I make payments for my trip?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We offer multiple payment options for your convenience. You can pay via credit card, bank transfer, or through our secure online payment portal. Most trips require a deposit to secure your booking, with the balance due 60 days before departure. Payment plans can be arranged for larger trips.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="map-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Visit Our Office</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Come see us in person to plan your next adventure</p>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="zoom-in">
          <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1840523769545!2d-73.987614424526!3d40.75831467138866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855b8fb3083%3A0xa0f9aef176042a5c!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1690833358994!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
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
            <h2 class="section-title mb-4">Ready to Start Your Journey?</h2>
            <p class="lead mb-5">Contact us today to begin planning your next unforgettable adventure</p>
            <div class="d-flex flex-column flex-sm-row justify-content-center">
              <a href="tel:+15551234567" class="btn btn-explore me-sm-3 mb-3 mb-sm-0"><i class="fas fa-phone-alt me-2"></i> Call Now</a>
              <a href="mailto:info@wanderlustvoyages.com" class="btn btn-outline-gold"><i class="fas fa-envelope me-2"></i> Send Email</a>
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
              <li class="mb-2"><a href="contactus.html" class="text-white">Contact</a></li>
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
  </script>
</body>
</html>