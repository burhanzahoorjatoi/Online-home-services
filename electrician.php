<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Electrician Services - OnlineUstaad</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="style.css" />
</head>
<body class="electrician-page">
<?php include "navbar.php"; ?>


<!-- Hero -->
<section class="services-hero">
  <div class="container">
    <h1 class="fw-bold">Electrician Services</h1>
    <p>Expert electricians for wiring, installation, repair & safety solutions</p>
  </div>
</section>

<!-- Intro -->
<section class="container py-5 text-center fade-in">
  <h2 class="fw-bold mb-3">Why Choose Our Electrician Services?</h2>
  <p class="mb-4">We provide safe, fast, and reliable electrical solutions for homes and businesses.</p>

  <div class="row g-4 justify-content-center">
    
    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Certified Electricians</h5>
        <p>Highly trained and experienced professionals.</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Affordable Rates</h5>
        <p>Top-quality electrical work at reasonable prices.</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="benefits-card">
        <h5>Quick Service</h5>
        <p>Fast troubleshooting and on-time completion.</p>
      </div>
    </div>
  </div>
</section>

<!-- Flip Cards -->
<section class="container py-5 fade-in">
  <div class="row g-4">

    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/wire repair.jpg " alt="Wiring Repair">
            <h5 class="mt-4">Wiring Repair</h5>
          </div>
          <div class="flip-card-back">
            <h5>Wiring Repair</h5>
            <p>Fix short circuits, damaged wiring & overload issues. Starting at Rs. 800.</p>
            <a href="booking.php?service=Electrician">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/switch.jpg" alt="Switch Installation">
            <h5 class="mt-4">Switch & Board Installation</h5>
          </div>
          <div class="flip-card-back">
            <h5>Switch Installation</h5>
            <p>Install or replace sockets, switches & breaker panels. Starting at Rs. 500.</p>
            <a href="booking.php?service=Electrician">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="Assets/Electrical Inspection.jpg" alt="Electrical Inspection">
            <h5 class="mt-4">Electrical Inspection</h5>
          </div>
          <div class="flip-card-back">
            <h5>Electrical Inspection</h5>
            <p>Full home inspection for safety, load, and wiring faults. Starting at Rs. 1000.</p>
            <a href="booking.php?service=Electrician">Book Now</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- FAQ -->
<section class="container py-5 bg-light rounded details-section fade-in">
  <h2 class="fw-bold text-center mb-4">Electrician Tips & FAQs</h2>

  <div class="row g-4">

    <div class="col-md-6">
      <h5>Why is my breaker tripping again and again?</h5>
      <p>This usually happens due to overload or faulty wiring.</p>
    </div>

    <div class="col-md-6">
      <h5>How often should I get wiring checked?</h5>
      <p>Every 1 to 2 years, especially in older homes.</p>
    </div>

    <div class="col-md-6">
      <h5>Do you provide emergency services?</h5>
      <p>Yes, emergency electrician support is available.</p>
    </div>

    <div class="col-md-6">
      <h5>Is rewiring expensive?</h5>
      <p>It depends on the size of the home and wiring condition.</p>
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

<footer class="footer">
  <div class="container">
    <p class="mb-0">&copy; 2025 OnlineUstaad. All Rights Reserved.</p>
  </div>
</footer>

 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const faders = document.querySelectorAll('.fade-in');
  const appearOptions = { threshold: 0.2, rootMargin: "0px 0px -50px 0px" };

  const appearOnScroll = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('show');
      observer.unobserve(entry.target);
    });
  }, appearOptions);

  faders.forEach(fader => {
    appearOnScroll.observe(fader);
  });


</script>

</body>
</html>
