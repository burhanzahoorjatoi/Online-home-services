<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sofa Cleaning Services - OnlineUstaad</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css" />
  
</head>
<body class="sofa-page">
<?php include "navbar.php"; ?>



<!-- Hero Section -->
<section class="services-hero">
  <div class="container">
    <h1 class="fw-bold">Sofa Cleaning Services</h1>
    <p>Professional deep cleaning for sofa, cushions and upholstery</p>
  </div>
</section>

<!-- Introduction -->
<section class="container py-5 text-center fade-in">
  <h2 class="fw-bold mb-3">Why Choose Our Sofa Cleaning?</h2>
  <p class="mb-4">We use professional techniques to remove stains, dust, germs and odors, making your sofa look and feel brand new.</p>

  <div class="row g-4 justify-content-center">
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Deep Cleaning</h5>
        <p>Removes dirt, stains and hidden bacteria.</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Affordable Rates</h5>
        <p>Premium cleaning at pocket-friendly prices.</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>100% Safe</h5>
        <p>We use fabric-safe and eco-friendly products.</p>
      </div>
    </div>
  </div>
</section>

<!-- Flip Cards -->
<section class="container py-5 fade-in">
  <div class="row g-4">

    <!-- Single Sofa Cleaning -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/single  sofa.jpg" alt="">
            <h5 class="mt-4">Single Sofa Cleaning</h5>
          </div>
          <div class="flip-card-back">
            <h5>Single Sofa Cleaning</h5>
            <p>Deep cleaning, stain removal & refreshing. Starting at Rs. 600.</p>
            <a href="booking.php?service=Sofa Cleaning">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 3-Seater Sofa -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/3seater.jpg" alt="">
            <h5 class="mt-4">3-Seater Sofa Cleaning</h5>
          </div>
          <div class="flip-card-back">
            <h5>3-Seater Sofa Cleaning</h5>
            <p>Complete shampoo wash & steam cleaning. Starting at Rs. 1200.</p>
            <a href="booking.php?service=Sofa Cleaning">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Full Sofa Set -->
    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/full sofa.jpg" alt="">
            <h5 class="mt-4">Full Sofa Set Cleaning</h5>
          </div>
          <div class="flip-card-back">
            <h5>Full Sofa Set Cleaning</h5>
            <p>Perfect for 5 or 7 seater sets. Deep cleaning + odor removal. Starting at Rs. 2200.</p>
            <a href="booking.php?service=Sofa Cleaning">Book Now</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- FAQs -->
<section class="container py-5 bg-light rounded details-section fade-in">
  <h2 class="fw-bold text-center mb-4">Sofa Cleaning FAQs</h2>
  <div class="row g-4">
    <div class="col-md-6">
      <h5>How often should I clean my sofa?</h5>
      <p>For hygiene, deep cleaning is recommended every 6 to 12 months.</p>
    </div>
    <div class="col-md-6">
      <h5>Is the cleaning safe for fabric?</h5>
      <p>Yes, we use fabric-safe and chemical-free products.</p>
    </div>
    <div class="col-md-6">
      <h5>Do you remove stains?</h5>
      <p>We remove most stains like tea, coffee, dust, and sweat marks.</p>
    </div>
    <div class="col-md-6">
      <h5>How long does drying take?</h5>
      <p>Drying usually takes 2 to 4 hours depending on fabric.</p>
    </div>
  </div>
</section>

<!-- Contact Buttons -->
<div class="floating-buttons">
  <a href="https://wa.me/03001234567" target="_blank" class="whatsapp-btn">
    <img src="Assets/whatsapp.png" alt="">
  </a>
  <a href="tel:+923001234567" class="phone-btn">
    <img src="Assets/Phone.png" alt="">
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
  const faders = document.querySelectorAll('.fade-in');
  const appearOptions = { threshold: 0.2 };

  const appearOnScroll = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('show');
      observer.unobserve(entry.target);
    });
  }, appearOptions);

  faders.forEach(el => appearOnScroll.observe(el));


  

</script>

</body>
</html>
