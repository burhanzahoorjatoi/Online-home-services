<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Plumbing Services - OnlineUstaad</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />

</head>
<body class="plumbing-page">
<?php include "navbar.php"; ?>

<!-- Hero Section -->
<section class="services-hero">
  <div class="container">
    <h1 class="fw-bold">Plumbing Services</h1>
    <p>Expert plumbing solutions for leaks, installations, and maintenance</p>
  </div>
</section>

<!-- Introduction / Benefits Section -->
<section class="container py-5 text-center fade-in">
  <h2 class="fw-bold mb-3">Why Choose Our Plumbing Services?</h2>
  <p class="mb-4">We offer quick, reliable, and professional plumbing services for homes and offices. Our certified plumbers ensure your water systems work flawlessly!</p>
  <div class="row g-4 justify-content-center">
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Certified Plumbers</h5>
        <p>Highly skilled professionals with years of experience.</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Affordable Services</h5>
        <p>Reliable plumbing at pocket-friendly rates.</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Quick Response</h5>
        <p>We respond fast to emergencies and regular service requests.</p>
      </div>
    </div>
  </div>
</section>

<!-- Flip Cards Section -->
<section class="container py-5 fade-in">
  <div class="row g-4">
    <!-- Leak Repair -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/lockrepair.jpg" alt="Leak Repair">
            <h5 class="mt-4">Leak Repair</h5>
          </div>
          <div class="flip-card-back">
            <h5>Leak Repair</h5>
            <p>Fix pipe leaks and dripping faucets efficiently. Starting at Rs. 800.</p>
            <a href="booking.php?service=Plumbing">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bathroom Fittings -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/bathroom repair.jpg" alt="Bathroom Fittings">
            <h5 class="mt-4">Bathroom Fittings</h5>
          </div>
          <div class="flip-card-back">
            <h5>Bathroom Fittings</h5>
            <p>Install faucets, showers, and sanitary ware with precision. Starting at Rs. 1000.</p>
            <a href="booking.php?service=Plumbing">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Pipe Installation -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/pipe installation.jpg" alt="Pipe Installation">
            <h5 class="mt-4">Pipe Installation</h5>
          </div>
          <div class="flip-card-back">
            <h5>Pipe Installation</h5>
            <p>Professional installation of water and drainage pipes. Starting at Rs. 1500.</p>
            <a href="booking.php?service=Plumbing">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Extra Details / FAQs Section -->
<section class="container py-5 bg-light rounded details-section fade-in">
  <h2 class="fw-bold text-center mb-4">Plumbing Tips & FAQs</h2>
  <div class="row g-4">
    <div class="col-md-6">
      <h5>How to prevent pipe leaks?</h5>
      <p>Regularly check joints and replace old pipes to prevent leaks.</p>
    </div>
    <div class="col-md-6">
      <h5>Do you provide emergency plumbing?</h5>
      <p>Yes! Our team is available for urgent repairs and emergencies.</p>
    </div>
    <div class="col-md-6">
      <h5>Can you install new bathroom fixtures?</h5>
      <p>Absolutely. We install faucets, showers, and complete sanitary setups.</p>
    </div>
    <div class="col-md-6">
      <h5>How much does plumbing service cost?</h5>
      <p>Costs vary depending on the service. We provide transparent pricing and estimates.</p>
    </div>
  </div>
</section>

<!-- Floating Buttons -->
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
