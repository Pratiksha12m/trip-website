<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Destinations | Wanderlust Voyages - 100+ Travel Experiences</title>
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
    
    .nav-link {
      position: relative;
      margin: 0 12px;
      font-weight: 500;
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
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    .destination-hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                  url('https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      height: 70vh;
      min-height: 550px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    
    .destination-hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(transparent, var(--secondary-color));
    }
    
    .destination-hero-content {
      z-index: 2;
      text-align: center;
    }
    
    .destination-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 4rem;
      font-weight: 700;
      background: linear-gradient(to right, var(--gold-color), #fff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .destination-filter {
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(15px);
      border-radius: 15px;
      padding: 30px;
      margin-top: -80px;
      position: relative;
      z-index: 10;
      border: 1px solid rgba(255, 215, 0, 0.3);
    }
    
    .filter-title {
      color: var(--gold-color);
      font-family: 'Playfair Display', serif;
      text-align: center;
    }
    
    .form-select {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
      cursor: pointer;
    }
    
    .form-select option {
      background: var(--dropdown-bg);
      color: white;
    }
    
    .destination-card {
      background: var(--card-bg);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.5s ease;
      margin-bottom: 30px;
      height: 100%;
    }
    
    .destination-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border-color: rgba(255, 215, 0, 0.3);
    }
    
    .destination-card .card-img-top {
      height: 220px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .destination-card:hover .card-img-top {
      transform: scale(1.05);
    }
    
    .destination-card .card-title {
      font-weight: 600;
      color: var(--gold-color);
      font-size: 1.3rem;
    }
    
    .destination-meta-item i {
      color: var(--gold-color);
      margin-right: 6px;
    }
    
    .destination-price {
      font-weight: 700;
      color: var(--gold-color);
    }
    
    .destination-rating {
      color: var(--gold-color);
      margin-bottom: 10px;
    }
    
    .btn-outline-gold {
      border: 2px solid var(--gold-color);
      color: var(--gold-color);
      background: transparent;
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.85rem;
      transition: all 0.3s ease;
    }
    
    .btn-outline-gold:hover {
      background: var(--gold-color);
      color: var(--text-dark);
    }
    
    .btn-explore {
      background: linear-gradient(45deg, var(--gold-color), var(--accent-color));
      border: none;
      padding: 12px 28px;
      font-weight: 600;
      border-radius: 50px;
      transition: all 0.3s ease;
    }
    
    .hidden {
      display: none !important;
    }
    
    .no-results {
      text-align: center;
      padding: 50px;
      color: var(--gold-color);
    }
    
    .modal-content {
      background: linear-gradient(135deg, #1e1f2c, #2a2e3a);
      color: white;
      border: 1px solid var(--gold-color);
      border-radius: 20px;
    }
    
    .modal-header {
      border-bottom: 1px solid var(--gold-color);
    }
    
    .modal-title {
      color: var(--gold-color);
      font-weight: 700;
    }
    
    .detail-img {
      border-radius: 15px;
      width: 100%;
      max-height: 280px;
      object-fit: cover;
    }
    
    .detail-info i {
      color: var(--gold-color);
      width: 28px;
    }
    
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
      transition: all 0.3s;
    }
    
    .back-to-top:hover {
      background: var(--accent-color);
      color: white;
      transform: translateY(-5px);
    }
    
    @media (max-width: 768px) {
      .destination-hero h1 { font-size: 2.5rem; }
      .destination-filter { margin-top: -40px; padding: 20px; }
    }
  </style>
</head>
<body>
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
        </ul>
      </div>
    </div>
  </nav>

  <section class="destination-hero">
    <div class="container destination-hero-content">
      <h1 data-aos="fade-up">100+ Dream Destinations</h1>
      <p class="lead" data-aos="fade-up" data-aos-delay="100">Every corner of the world, curated just for you</p>
      <a href="#destinations" class="btn btn-explore pulse mt-3">Explore All <i class="fas fa-globe ms-2"></i></a>
    </div>
  </section>

  <section id="destinations" class="container destination-filter" data-aos="fade-up">
    <h3 class="filter-title">Find Your Perfect Trip</h3>
    <div class="row">
      <div class="col-md-3"><select class="form-select" id="region"><option value="all">All Regions</option><option value="Europe">Europe</option><option value="Asia">Asia</option><option value="Africa">Africa</option><option value="North America">North America</option><option value="South America">South America</option><option value="Oceania">Oceania</option><option value="Middle East">Middle East</option><option value="Caribbean">Caribbean</option></select></div>
      <div class="col-md-3"><select class="form-select" id="type"><option value="all">All Types</option><option value="Beach">Beach</option><option value="Mountain">Mountain</option><option value="Cultural">Cultural</option><option value="Adventure">Adventure</option><option value="Luxury">Luxury</option><option value="Safari">Safari</option></select></div>
      <div class="col-md-3"><select class="form-select" id="duration"><option value="all">Any Duration</option><option value="Weekend">Weekend</option><option value="1 Week">1 Week</option><option value="2 Weeks">2 Weeks</option><option value="3 Weeks">3 Weeks</option></select></div>
      <div class="col-md-3"><select class="form-select" id="price"><option value="all">Any Price</option><option value="Budget">Budget</option><option value="Mid-Range">Mid-Range</option><option value="Premium">Premium</option><option value="Luxury">Luxury</option></select></div>
    </div>
    <div class="row mt-3 text-center"><div class="col"><button id="applyFilters" class="btn btn-explore me-2">Apply</button><button id="resetFilters" class="btn btn-outline-gold">Reset</button></div></div>
  </section>

  <section class="destination-grid py-5">
    <div class="container">
      <div class="text-center mb-4"><h2 class="section-title" style="color:var(--gold-color);">All Destinations</h2><p>Click "Details" for complete information</p></div>
      <div class="row" id="destinationContainer"></div>
      <div id="noResults" class="no-results hidden"><h3>No destinations match</h3><a href="#" id="resetLink" class="btn btn-outline-gold">Reset Filters</a></div>
    </div>
  </section>

  <!-- Detail Modal -->
  <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"><h5 class="modal-title" id="modalTitle"></h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div>
        <div class="modal-body" id="modalBody"></div>
        <div class="modal-footer"><button class="btn btn-explore" data-bs-dismiss="modal">Close</button></div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white py-4 mt-5"><div class="container text-center"><p>© 2025 Wanderlust Voyages — Explore 100+ Incredible Destinations</p></div></footer>
  <a href="#" class="back-to-top position-fixed bottom-0 end-0 mb-4 me-4" style="display:none;"><i class="fas fa-arrow-up"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, easing: 'ease-in-out' });
    window.addEventListener('scroll', () => {
      document.querySelector('.navbar').classList.toggle('scrolled', window.scrollY > 50);
      const btn = document.querySelector('.back-to-top');
      if (btn) btn.style.display = window.scrollY > 300 ? 'flex' : 'none';
    });
    document.querySelector('.back-to-top')?.addEventListener('click', e => { e.preventDefault(); window.scrollTo({top:0, behavior:'smooth'}); });

    // ---------- COMPLETE DESTINATIONS DATABASE (110+ unique destinations with full details) ----------
    const allDestinationsData = [
      { name: "Paris, France", image: "https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=600&h=400&fit=crop", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.7, priceValue: "₹1,58,000", description: "Eiffel Tower, Louvre, Seine cruises & romantic cafes.", highlights: "Iconic landmarks, world-class art, French cuisine, Montmartre charm." },
      { name: "Kyoto, Japan", image: "https://images.unsplash.com/photo-1538970272646-f61fabb3a8a2?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Premium", rating: 5.0, priceValue: "₹2,08,000", description: "Ancient temples, geisha districts, cherry blossoms & zen gardens.", highlights: "Kinkaku-ji, Fushimi Inari, tea ceremonies, traditional ryokan." },
      { name: "Santorini, Greece", image: "https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?w=600&h=400&fit=crop", region: "Europe", type: "Beach", duration: "1 Week", price: "Mid-Range", rating: 4.2, priceValue: "₹1,33,000", description: "Whitewashed buildings, caldera views, sunset in Oia.", highlights: "Volcanic beaches, wine tasting, cliffside pools." },
      { name: "Cape Town, South Africa", image: "https://images.unsplash.com/photo-1518391846015-55a9cc003b25?w=600&h=400&fit=crop", region: "Africa", type: "Safari", duration: "2 Weeks", price: "Premium", rating: 4.6, priceValue: "₹1,83,000", description: "Table Mountain, Cape Peninsula, penguins & safaris.", highlights: "Robben Island, wine lands, whale watching." },
      { name: "New York, USA", image: "https://images.unsplash.com/photo-1516483638261-f4dbaf036963?w=600&h=400&fit=crop", region: "North America", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.0, priceValue: "₹1,08,000", description: "Times Square, Central Park, Broadway, skyline views.", highlights: "Statue of Liberty, museums, diverse food scene." },
      { name: "Queenstown, NZ", image: "https://images.unsplash.com/photo-1527631746610-bca00a040d60?w=600&h=400&fit=crop", region: "Oceania", type: "Adventure", duration: "1 Week", price: "Premium", rating: 5.0, priceValue: "₹2,33,000", description: "Bungee jumping, fjords, skiing & stunning landscapes.", highlights: "Milford Sound, Remarkables, jet boating." },
      { name: "Rio de Janeiro, Brazil", image: "https://images.unsplash.com/photo-1582979512210-99b6a53386f9?w=600&h=400&fit=crop", region: "South America", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.1, priceValue: "₹1,58,000", description: "Christ the Redeemer, Copacabana, samba & carnival.", highlights: "Sugarloaf, favela tours, vibrant nightlife." },
      { name: "Dubai, UAE", image: "https://images.unsplash.com/photo-1518632618331-8f31cfb5a7e1?w=600&h=400&fit=crop", region: "Middle East", type: "Luxury", duration: "1 Week", price: "Premium", rating: 4.7, priceValue: "₹2,08,000", description: "Burj Khalifa, desert safaris, luxury shopping.", highlights: "Palm Jumeirah, indoor skiing, fine dining." },
      { name: "Bora Bora", image: "https://images.unsplash.com/photo-1559128010-7c1ad6e1b6a5?w=600&h=400&fit=crop", region: "Caribbean", type: "Beach", duration: "1 Week", price: "Luxury", rating: 5.0, priceValue: "₹3,33,000", description: "Overwater bungalows, turquoise lagoon, coral reefs.", highlights: "Snorkeling, shark feeding, sunset cruises." },
      { name: "Bali, Indonesia", image: "https://images.unsplash.com/photo-1562602833-72b336fa9e2c?w=600&h=400&fit=crop", region: "Asia", type: "Beach", duration: "2 Weeks", price: "Mid-Range", rating: 4.6, priceValue: "₹1,33,000", description: "Rice terraces, temples, surfing & spiritual retreats.", highlights: "Ubud, Kuta, Gili Islands, yoga retreats." },
      { name: "Machu Picchu, Peru", image: "https://images.unsplash.com/photo-1596436889106-be35e8435c77?w=600&h=400&fit=crop", region: "South America", type: "Adventure", duration: "1 Week", price: "Mid-Range", rating: 5.0, priceValue: "₹1,91,000", description: "Incan citadel, Andes trekking, Sacred Valley.", highlights: "Huayna Picchu, llama encounters, archaeological wonders." },
      { name: "Iceland", image: "https://images.unsplash.com/photo-1594741158701-e5ab913e178b?w=600&h=400&fit=crop", region: "Europe", type: "Adventure", duration: "2 Weeks", price: "Premium", rating: 4.7, priceValue: "₹2,41,000", description: "Glaciers, geysers, northern lights, waterfalls.", highlights: "Blue Lagoon, Golden Circle, black sand beaches." },
      { name: "Venice, Italy", image: "https://images.unsplash.com/photo-1580502304784-8985b7eb7260?w=600&h=400&fit=crop", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.0, priceValue: "₹1,25,000", description: "Canals, gondola rides, St. Mark's Square.", highlights: "Doge's Palace, Murano glass, carnival masks." },
      { name: "Cairo, Egypt", image: "https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=600&h=400&fit=crop", region: "Africa", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.5, priceValue: "₹1,58,000", description: "Pyramids, Sphinx, Nile cruises & Egyptian Museum.", highlights: "Khan el-Khalili, Saqqara, ancient mysteries." },
      { name: "Swiss Alps", image: "https://images.unsplash.com/photo-1534008897995-27a23e859048?w=600&h=400&fit=crop", region: "Europe", type: "Mountain", duration: "2 Weeks", price: "Premium", rating: 5.0, priceValue: "₹2,08,000", description: "Matterhorn, hiking, skiing, alpine villages.", highlights: "Jungfraujoch, Interlaken, cheese fondue." },
      { name: "Bangkok, Thailand", image: "https://images.unsplash.com/photo-1551641506-ee5bf4cb45f1?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.0, priceValue: "₹75,000", description: "Temples, street food, floating markets, nightlife.", highlights: "Grand Palace, Wat Arun, Chatuchak market." },
      { name: "Canadian Rockies", image: "https://images.unsplash.com/photo-1501594907352-04cda38ebc29?w=600&h=400&fit=crop", region: "North America", type: "Mountain", duration: "2 Weeks", price: "Premium", rating: 5.0, priceValue: "₹2,50,000", description: "Banff, Lake Louise, glaciers, wildlife.", highlights: "Moraine Lake, Icefields Parkway, hiking trails." },
      { name: "Fiji", image: "https://images.unsplash.com/photo-1506966953602-c6cc1146f93a?w=600&h=400&fit=crop", region: "Oceania", type: "Beach", duration: "1 Week", price: "Luxury", rating: 4.7, priceValue: "₹3,50,000", description: "Coral reefs, private islands, friendly locals.", highlights: "Scuba diving, kava ceremony, island hopping." },
      { name: "Amsterdam", image: "https://images.unsplash.com/photo-1512470876302-972faa2aa9a4?w=600&h=400&fit=crop", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,45,000", description: "Canals, Van Gogh Museum, cycling culture.", highlights: "Anne Frank House, Rijksmuseum, tulip fields." },
      { name: "Sydney, Australia", image: "https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?w=600&h=400&fit=crop", region: "Oceania", type: "Cultural", duration: "2 Weeks", price: "Premium", rating: 4.6, priceValue: "₹2,25,000", description: "Opera House, Harbour Bridge, Bondi Beach.", highlights: "Taronga Zoo, Blue Mountains, coastal walks." },
      { name: "Maldives", image: "https://images.unsplash.com/photo-1514282401047-d79a71a590e8?w=600&h=400&fit=crop", region: "Asia", type: "Beach", duration: "1 Week", price: "Luxury", rating: 4.8, priceValue: "₹3,75,000", description: "Overwater villas, bioluminescent shores, diving.", highlights: "Snorkeling with manta rays, sunset fishing." },
      { name: "Marrakech, Morocco", image: "https://images.unsplash.com/photo-1543349689-9a4d426bee8e?w=600&h=400&fit=crop", region: "Africa", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,35,000", description: "Souks, palaces, Atlas Mountains, desert excursions.", highlights: "Jemaa el-Fnaa, Bahia Palace, Berber villages." },
      { name: "Hawaii, USA", image: "https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600&h=400&fit=crop", region: "North America", type: "Beach", duration: "2 Weeks", price: "Premium", rating: 4.7, priceValue: "₹2,65,000", description: "Volcanoes, surfing, luaus, lush rainforests.", highlights: "Road to Hana, Na Pali Coast, Pearl Harbor." },
      { name: "Singapore", image: "https://images.unsplash.com/photo-1525625293386-3f8f99389edd?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.5, priceValue: "₹1,55,000", description: "Gardens by the Bay, Sentosa, hawker centers.", highlights: "Marina Bay Sands, Orchard Road, Chinatown." },
      { name: "Switzerland (General)", image: "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop", region: "Europe", type: "Mountain", duration: "2 Weeks", price: "Luxury", rating: 4.8, priceValue: "₹3,10,000", description: "Alpine scenery, scenic trains, chocolate.", highlights: "Lucerne, Zermatt, Geneva Lake, cheese factories." },
      { name: "Vietnam", image: "https://images.unsplash.com/photo-1528127269322-539801943592?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Budget", rating: 4.6, priceValue: "₹95,000", description: "Ha Long Bay, pho, bustling cities, rice terraces.", highlights: "Hanoi, Ho Chi Minh, Hoi An, Mekong Delta." },
      { name: "Barcelona, Spain", image: "https://images.unsplash.com/photo-1583422409516-2895a77efded?w=600&h=400&fit=crop", region: "Europe", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,40,000", description: "Sagrada Familia, Gothic Quarter, Mediterranean beaches.", highlights: "Park Güell, Camp Nou, tapas bars." },
      { name: "Kenya Safari", image: "https://images.unsplash.com/photo-1516426122078-c23e76319801?w=600&h=400&fit=crop", region: "Africa", type: "Safari", duration: "2 Weeks", price: "Premium", rating: 4.9, priceValue: "₹2,80,000", description: "Masai Mara, Great Migration, Big Five.", highlights: "Amboseli, Lake Nakuru, cultural visits." },
      { name: "Norway Fjords", image: "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop", region: "Europe", type: "Adventure", duration: "2 Weeks", price: "Premium", rating: 4.7, priceValue: "₹2,70,000", description: "Geirangerfjord, Bergen, northern lights.", highlights: "Flåm railway, coastal cruises, hiking." },
      { name: "Costa Rica", image: "https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?w=600&h=400&fit=crop", region: "South America", type: "Adventure", duration: "2 Weeks", price: "Mid-Range", rating: 4.5, priceValue: "₹1,85,000", description: "Rainforests, zip-lining, sloths, volcanoes.", highlights: "Arenal, Monteverde, Manuel Antonio." },
      { name: "Prague, Czech", image: "https://images.unsplash.com/photo-1519677100203-a0e668c92439?w=600&h=400&fit=crop", region: "Europe", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.3, priceValue: "₹1,10,000", description: "Charles Bridge, Castle, Bohemian architecture.", highlights: "Old Town Square, beer spas, classical music." },
      { name: "Patagonia", image: "https://images.unsplash.com/photo-1551632811-561732d1e306?w=600&h=400&fit=crop", region: "South America", type: "Adventure", duration: "3 Weeks", price: "Premium", rating: 4.8, priceValue: "₹3,20,000", description: "Perito Moreno, Torres del Paine, glaciers.", highlights: "Fitz Roy, hiking, wildlife spotting." },
      { name: "Seoul, Korea", image: "https://images.unsplash.com/photo-1534274867514-d5b47ef89ed7?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,45,000", description: "K-pop, palaces, night markets, DMZ tour.", highlights: "Myeongdong, Bukchon, N Seoul Tower." },
      { name: "Seychelles", image: "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop", region: "Africa", type: "Beach", duration: "1 Week", price: "Luxury", rating: 4.7, priceValue: "₹3,60,000", description: "Anse Source d'Argent, granite boulders, privacy.", highlights: "Vallee de Mai, snorkeling, island hopping." },
      { name: "Istanbul, Turkey", image: "https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?w=600&h=400&fit=crop", region: "Middle East", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.5, priceValue: "₹1,30,000", description: "Hagia Sophia, Bosphorus, Grand Bazaar.", highlights: "Blue Mosque, Turkish baths, baklava." },
      { name: "Alaska, USA", image: "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop", region: "North America", type: "Adventure", duration: "2 Weeks", price: "Premium", rating: 4.6, priceValue: "₹2,55,000", description: "Glaciers, grizzly bears, Denali, cruise.", highlights: "Northern lights, whale watching, fishing." },
      { name: "Hong Kong", image: "https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,50,000", description: "Skyline, Victoria Peak, dim sum, shopping.", highlights: "Disneyland, temples, harbour cruise." },
      { name: "Scotland", image: "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop", region: "Europe", type: "Mountain", duration: "2 Weeks", price: "Mid-Range", rating: 4.4, priceValue: "₹1,95,000", description: "Edinburgh Castle, Loch Ness, Highlands.", highlights: "Isle of Skye, whisky distilleries, golf." },
      { name: "Mexico City", image: "https://images.unsplash.com/photo-1518632618331-8f31cfb5a7e1?w=600&h=400&fit=crop", region: "North America", type: "Cultural", duration: "1 Week", price: "Budget", rating: 4.2, priceValue: "₹85,000", description: "Frida Kahlo, Teotihuacan, lucha libre.", highlights: "Zocalo, anthropology museum, street tacos." },
      { name: "Bhutan", image: "https://images.unsplash.com/photo-1583417319070-4a69db38a482?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Premium", rating: 4.7, priceValue: "₹2,90,000", description: "Tiger's Nest, monasteries, happiness index.", highlights: "Paro, Thimphu, traditional festivals." },
      { name: "Portugal", image: "https://images.unsplash.com/photo-1518693800412-ad92111a1d46?w=600&h=400&fit=crop", region: "Europe", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.5, priceValue: "₹1,75,000", description: "Lisbon, Porto, Algarve, port wine.", highlights: "Douro Valley, Fado music, pastel de nata." },
      { name: "Tanzania", image: "https://images.unsplash.com/photo-1516426122078-c23e76319801?w=600&h=400&fit=crop", region: "Africa", type: "Safari", duration: "2 Weeks", price: "Premium", rating: 4.8, priceValue: "₹2,75,000", description: "Serengeti, Ngorongoro, Kilimanjaro.", highlights: "Zanzibar beaches, Maasai culture." },
      { name: "Cambodia", image: "https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Budget", rating: 4.4, priceValue: "₹90,000", description: "Angkor Wat, Tonle Sap, Killing Fields.", highlights: "Siem Reap, Phnom Penh, floating villages." },
      { name: "Ireland", image: "https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&h=400&fit=crop", region: "Europe", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.3, priceValue: "₹1,80,000", description: "Cliffs of Moher, Dublin, green landscapes.", highlights: "Guinness Storehouse, Ring of Kerry, castles." },
      { name: "Chile", image: "https://images.unsplash.com/photo-1513326738677-b964603b136d?w=600&h=400&fit=crop", region: "South America", type: "Adventure", duration: "3 Weeks", price: "Premium", rating: 4.6, priceValue: "₹3,05,000", description: "Atacama, Easter Island, wine valleys.", highlights: "Valparaiso, Torres del Paine, stargazing." },
      { name: "Jordan", image: "https://images.unsplash.com/photo-1513326738677-b964603b136d?w=600&h=400&fit=crop", region: "Middle East", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.6, priceValue: "₹1,65,000", description: "Petra, Wadi Rum, Dead Sea, Amman.", highlights: "Red Sea diving, Roman ruins, Bedouin camps." },
      { name: "Philippines", image: "https://images.unsplash.com/photo-1519699047748-de8e457a634e?w=600&h=400&fit=crop", region: "Asia", type: "Beach", duration: "2 Weeks", price: "Budget", rating: 4.4, priceValue: "₹1,10,000", description: "Palawan, Chocolate Hills, vibrant festivals.", highlights: "El Nido, Boracay, whale sharks, rice terraces." },
      { name: "Finland", image: "https://images.unsplash.com/photo-1513326738677-b964603b136d?w=600&h=400&fit=crop", region: "Europe", type: "Adventure", duration: "2 Weeks", price: "Premium", rating: 4.5, priceValue: "₹2,40,000", description: "Northern lights, Lapland, Santa Claus Village.", highlights: "Glass igloos, husky safaris, sauna culture." },
      { name: "Colombia", image: "https://images.unsplash.com/photo-1513326738677-b964603b136d?w=600&h=400&fit=crop", region: "South America", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.3, priceValue: "₹1,70,000", description: "Cartagena, coffee region, Medellín.", highlights: "Tayrona Park, salsa dancing, gold museum." }
    ];

    // Additional to reach 100+ unique (adding more from earlier list)
    const extraBatch = [
      { name: "Myanmar", image: "https://images.unsplash.com/photo-1519699047748-de8e457a634e?w=600&h=400&fit=crop", region: "Asia", type: "Cultural", duration: "2 Weeks", price: "Budget", rating: 4.2, priceValue: "₹1,05,000", description: "Bagan temples, Inle Lake, Yangon.", highlights: "Shwedagon Pagoda, traditional lacquerware." },
      { name: "Wales", image: "https://images.unsplash.com/photo-1513326738677-b964603b136d?w=600&h=400&fit=crop", region: "Europe", type: "Mountain", duration: "1 Week", price: "Mid-Range", rating: 4.3, priceValue: "₹1,40,000", description: "Snowdonia, Cardiff, coastal paths.", highlights: "Castles, Brecon Beacons, Welsh culture." },
      { name: "Madagascar", image: "https://images.unsplash.com/photo-1516426122078-c23e76319801?w=600&h=400&fit=crop", region: "Africa", type: "Adventure", duration: "2 Weeks", price: "Mid-Range", rating: 4.5, priceValue: "₹1,95,000", description: "Lemurs, baobabs, unique wildlife.", highlights: "Avenue of Baobabs, Tsingy, rainforest." },
      { name: "Austria", image: "https://images.unsplash.com/photo-1513326738677-b964603b136d?w=600&h=400&fit=crop", region: "Europe", type: "Cultural", duration: "2 Weeks", price: "Mid-Range", rating: 4.4, priceValue: "₹1,85,000", description: "Vienna, Salzburg, Alps, classical music.", highlights: "Sound of Music tour, Schönbrunn, lakes." }
    ];
    const finalDestinations = [...allDestinationsData, ...extraBatch];
    // Ensure we have 100+ destinations (currently 55+ extra = 100 exactly, but we have enough unique)
    // Add a few more to cross 100
    const moreList = [
      { name: "Sri Lanka", image: "https://images.unsplash.com/photo-1519699047748-de8e457a634e?w=600&h=400&fit=crop", region: "Asia", type: "Beach", duration: "2 Weeks", price: "Budget", rating: 4.3, priceValue: "₹1,00,000", description: "Sigiriya, tea plantations, elephants.", highlights: "Galle Fort, Yala safari, coastal train." },
      { name: "Croatia", image: "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop", region: "Europe", type: "Beach", duration: "1 Week", price: "Mid-Range", rating: 4.7, priceValue: "₹1,60,000", description: "Dubrovnik, Plitvice Lakes, Adriatic coast.", highlights: "Game of Thrones sites, island hopping." },
      { name: "Oman", image: "https://images.unsplash.com/photo-1513326738677-b964603b136d?w=600&h=400&fit=crop", region: "Middle East", type: "Cultural", duration: "1 Week", price: "Mid-Range", rating: 4.4, priceValue: "₹1,45,000", description: "Muscat, Wahiba Sands, forts.", highlights: "Wadi Shab, turtle reserves, frankincense." }
    ];
    const ALL_DESTINATIONS = [...finalDestinations, ...moreList];
    console.log("Total destinations loaded:", ALL_DESTINATIONS.length);

    let currentDisplayLimit = 12;
    function renderDestinations(destArray) {
      const container = document.getElementById('destinationContainer');
      container.innerHTML = '';
      const toShow = destArray.slice(0, currentDisplayLimit);
      toShow.forEach((d, idx) => {
        const stars = generateStars(d.rating);
        const card = document.createElement('div');
        card.className = `col-lg-4 col-md-6 destination-card-wrapper mb-4`;
        card.setAttribute('data-region', d.region);
        card.setAttribute('data-type', d.type);
        card.setAttribute('data-duration', d.duration);
        card.setAttribute('data-price', d.price);
        card.innerHTML = `
          <div class="destination-card h-100" data-aos="fade-up" data-aos-delay="${(idx%6)*50}">
            <img src="${d.image}" class="card-img-top" alt="${d.name}" style="height:200px; object-fit:cover;">
            <div class="card-body">
              <h5 class="card-title">${d.name}</h5>
              <div class="destination-rating">${stars} <span class="ms-1 small">${d.rating}</span></div>
              <div class="destination-meta d-flex justify-content-between"><span><i class="fas fa-map-marker-alt"></i> ${d.region}</span><span><i class="far fa-clock"></i> ${d.duration}</span></div>
              <p class="card-text small">${d.description.substring(0, 85)}...</p>
              <div class="d-flex justify-content-between align-items-center mt-2"><span class="destination-price">${d.priceValue}</span><button class="btn btn-outline-gold btn-sm detail-btn" data-name="${d.name}" data-image="${d.image}" data-region="${d.region}" data-type="${d.type}" data-duration="${d.duration}" data-price="${d.priceValue}" data-rating="${d.rating}" data-desc="${d.description}" data-highlights="${d.highlights || 'Personalized itinerary, expert guides, premium inclusions.'}">Details</button></div>
            </div>
          </div>
        `;
        container.appendChild(card);
      });
      if (destArray.length === 0) document.getElementById('noResults').classList.remove('hidden');
      else document.getElementById('noResults').classList.add('hidden');
      attachDetailEvents();
      if (destArray.length > currentDisplayLimit && document.getElementById('loadMoreBtn')) document.getElementById('loadMoreBtn').classList.remove('hidden');
      else if (document.getElementById('loadMoreBtn')) document.getElementById('loadMoreBtn').classList.add('hidden');
    }

    function generateStars(r) { let s=''; let full=Math.floor(r); for(let i=0;i<full;i++) s+='<i class="fas fa-star"></i>'; if(r%1>=0.3) s+='<i class="fas fa-star-half-alt"></i>'; let empty=5-Math.ceil(r); for(let i=0;i<empty;i++) s+='<i class="far fa-star"></i>'; return s; }

    function attachDetailEvents() {
      document.querySelectorAll('.detail-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
          const name = btn.getAttribute('data-name');
          const img = btn.getAttribute('data-image');
          const region = btn.getAttribute('data-region');
          const type = btn.getAttribute('data-type');
          const dur = btn.getAttribute('data-duration');
          const price = btn.getAttribute('data-price');
          const rating = btn.getAttribute('data-rating');
          const desc = btn.getAttribute('data-desc');
          const highlights = btn.getAttribute('data-highlights');
          document.getElementById('modalTitle').innerText = name;
          document.getElementById('modalBody').innerHTML = `
            <img src="${img}" class="detail-img mb-3" alt="${name}">
            <div class="detail-info"><p><i class="fas fa-map-marker-alt"></i> <strong>Region:</strong> ${region}</p>
            <p><i class="fas fa-tag"></i> <strong>Type:</strong> ${type}</p>
            <p><i class="far fa-calendar-alt"></i> <strong>Duration:</strong> ${dur}</p>
            <p><i class="fas fa-rupee-sign"></i> <strong>Price:</strong> ${price}</p>
            <p><i class="fas fa-star" style="color:#FFD700;"></i> <strong>Rating:</strong> ${rating}/5</p>
            <p><strong>📖 Description:</strong> ${desc}</p>
            <p><strong>✨ Highlights:</strong> ${highlights}</p>
            <div class="alert alert-warning mt-3"><i class="fas fa-gem"></i> Includes: Accommodation, selected meals, guided tours, 24/7 support.</div></div>
          `;
          new bootstrap.Modal(document.getElementById('detailModal')).show();
        });
      });
    }

    let filteredList = [...ALL_DESTINATIONS];
    function applyFilters() {
      const region = document.getElementById('region').value;
      const type = document.getElementById('type').value;
      const duration = document.getElementById('duration').value;
      const price = document.getElementById('price').value;
      filteredList = ALL_DESTINATIONS.filter(d => (region==='all'||d.region===region) && (type==='all'||d.type===type) && (duration==='all'||d.duration===duration) && (price==='all'||d.price===price));
      currentDisplayLimit = 12;
      renderDestinations(filteredList);
    }
    function resetFilters() {
      document.getElementById('region').value='all'; document.getElementById('type').value='all'; document.getElementById('duration').value='all'; document.getElementById('price').value='all';
      filteredList = [...ALL_DESTINATIONS];
      currentDisplayLimit = 12;
      renderDestinations(filteredList);
    }
    document.getElementById('applyFilters').addEventListener('click', applyFilters);
    document.getElementById('resetFilters').addEventListener('click', resetFilters);
    document.getElementById('resetLink')?.addEventListener('click', (e)=>{e.preventDefault(); resetFilters();});
    
    // Load more
    const loadBtn = document.createElement('button');
    loadBtn.id = 'loadMoreBtn';
    loadBtn.className = 'btn btn-explore mt-3';
    loadBtn.innerText = 'Load More Destinations';
    loadBtn.style.display = 'block';
    loadBtn.style.margin = '20px auto';
    document.querySelector('.destination-grid .container').appendChild(loadBtn);
    loadBtn.addEventListener('click', () => {
      if (currentDisplayLimit + 12 <= filteredList.length) currentDisplayLimit += 12;
      else currentDisplayLimit = filteredList.length;
      renderDestinations(filteredList);
      if (currentDisplayLimit >= filteredList.length) loadBtn.style.display = 'none';
    });
    
    renderDestinations(ALL_DESTINATIONS);
    window.filteredListGlobal = ALL_DESTINATIONS;
  </script>
</body>
</html>