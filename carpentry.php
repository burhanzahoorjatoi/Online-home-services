<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carpentry Services - OnlineUstaad</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="style.css" />
</head>
<body class="carpentry-page">
<?php include "navbar.php"; ?>

<!-- Hero Section -->
<section class="services-hero">
  <div class="container">
    <h1 class="fw-bold">Carpentry Services</h1>
    <p>Professional carpenters for repair, fitting, furniture & more</p>
  </div>
</section>

<!-- Introduction / Benefits Section -->
<section class="container py-5 text-center fade-in">
  <h2 class="fw-bold mb-3">Why Choose Our Carpentry Services?</h2>
  <p class="mb-4">We provide professional, timely, and high-quality carpentry solutions for all your home and office needs. Our experts ensure your furniture and fittings look brand new!</p>
  <div class="row g-4 justify-content-center">
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Expert Craftsmen</h5>
        <p>Skilled carpenters with years of experience.</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Affordable Prices</h5>
        <p>High-quality services that don’t break the bank.</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Fast & Reliable</h5>
        <p>Quick response and on-time project completion.</p>
      </div>
    </div>
  </div>
</section>

<!-- Flip Cards Section -->
<section class="container py-5 fade-in">
  <div class="row g-4">
    <!-- Furniture Repair -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/furniture repair.jpg" alt="Furniture Repair">
            <h5 class="mt-4">Furniture Repair</h5>
          </div>
          <div class="flip-card-back">
            <h5>Furniture Repair</h5>
            <p>Repair, restore, or refinish your damaged furniture. Starting at Rs. 1200.</p>
            <a href="booking.php?service=Carpentry">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Furniture Polish -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/furniture polish.jpg" alt="Furniture Polish">
            <h5 class="mt-4">Furniture Polish</h5>
          </div>
          <div class="flip-card-back">
            <h5>Furniture Polish</h5>
            <p>Restore the shine and finish of your wooden furniture with our professional polish service. Starting at Rs. 500.</p>
            <a href="booking.php?service=Carpentry">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Wooden Fittings -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/wooden fiting.jpg" alt="Wooden Fittings">
            <h5 class="mt-4">Wooden Fittings</h5>
          </div>
          <div class="flip-card-back">
            <h5>Wooden Fittings</h5>
            <p>Install cabinets, shelves, doors & windows. Starting at Rs. 1500.</p>
            <a href="booking.php?service=Carpentry">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Extra Details / FAQs Section -->
<section class="container py-5 bg-light rounded details-section fade-in">
  <h2 class="fw-bold text-center mb-4">Carpentry Tips & FAQs</h2>
  <div class="row g-4">
    <div class="col-md-6">
      <h5>How to maintain wooden furniture?</h5>
      <p>Regular polishing and avoiding direct sunlight can extend the life of your furniture.</p>
    </div>
    <div class="col-md-6">
      <h5>What types of wood do you work with?</h5>
      <p>We work with teak, oak, sheesham, and other common furniture-grade woods.</p>
    </div>
    <div class="col-md-6">
      <h5>Do you offer custom furniture solutions?</h5>
      <p>Yes! We can design and create tailor-made furniture according to your style.</p>
    </div>
    <div class="col-md-6">
      <h5>How long does a typical repair take?</h5>
      <p>Small repairs are completed within a day, larger projects may take a few days depending on complexity.</p>
    </div>
  </div>
</section>


 <div class="floating-buttons">
    <a href="https://wa.me/03001234567" target="_blank" class="whatsapp-btn">
      <img src="Assets/whatsapp.png" alt="WhatsApp">
    </a>

    <a href="tel:+923001234567" class="phone-btn">
      <img src="Assets/Phone.png" alt="Phone">
    </a>
  </div>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <p class="mb-0">&copy; 2025 OnlineUstaad. All Rights Reserved.</p>
  </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Scroll animation for fade-in sections
  const faders = document.querySelectorAll('.fade-in');
  const appearOptions = { threshold: 0.2, rootMargin: "0px 0px -50px 0px" };

  const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('show');
      appearOnScroll.unobserve(entry.target);
    });
  }, appearOptions);

  faders.forEach(fader => {
    appearOnScroll.observe(fader);
  });


  
</script>
</body>
</html>
