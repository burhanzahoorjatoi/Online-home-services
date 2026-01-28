<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OnlineUstaad - Home Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php include "navbar.php"; ?>
<div class="main-content">
  
     
  <?php if (isset($_GET['booking']) && $_GET['booking'] == 'success') { ?>
  <div class="alert alert-success text-center mt-5">
    ✅ Booking placed successfully!
  </div>
<?php } ?>


<!-- Split Hero Section with Curved Image Side -->
<section class="split-hero d-flex align-items-center">
  <div class="container-fluid">
    <div class="row align-items-center">

      <!-- Left Side (Text) -->
      <div class="col-lg-6 col-md-12 text-center text-lg-start p-5 hero-text">
  <h1 class="fw-bold mb-3 text-primary animate-text">Reliable Home Services at Your Doorstep</h1>
  <p class="text-muted mb-4 animate-text">Carpenter, Electrician, Plumber & More — Fast, Trusted & Affordable!</p>
  <a href="#"
   class="btn btn-primary px-4 py-2 animate-text book-now-btn"
   data-service="General">
   Book Now
</a>
</div>


      <!-- Right Side (Carousel with Curve) -->
      <div class="col-lg-6 col-md-12 p-0 position-relative">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
          <div class="carousel-inner overflow-hidden">
            <div class="carousel-item active">
              <img src="Assets/bg2.png" class="d-block w-100 hero-slide-img" alt="Banner 1">
            </div>
            <div class="carousel-item">
              <img src="Assets/pic4.png" class="d-block w-100 hero-slide-img" alt="Banner 2">
            </div>
            <div class="carousel-item">
              <img src="Assets/pic 3.png" class="d-block w-100 hero-slide-img" alt="Banner 3">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- Popular Services (with slider) -->
<section class="container py-5 fade-section">
  <h2 class="text-center mb-5 fw-bold text-primary">Our Popular Services</h2>

  <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row g-4">

          <div class="col-lg-4 col-md-6">
            <div class="card service-card">
              <div class="img-container">
                <img src="Assets/carpentry.jpg" class="card-img-top" alt="Carpentry">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Carpentry</h5>
                <p class="card-text text-muted">Starting at Rs. 1200</p>
               <a href="#"
   class="btn btn-outline-primary book-now-btn"
   data-service="Carpentry">
   Book Now
</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card service-card">
              <div class="img-container">
                <img src="Assets/plumbing.jpg" class="card-img-top" alt="Plumbing">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Plumbing</h5>
                <p class="card-text text-muted">Starting at Rs. 800</p>
               <a href="#"
   class="btn btn-outline-primary book-now-btn"
   data-service="Plumbing">
   Book Now
</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card service-card">
              <div class="img-container">
                <img src="Assets/electrician.jpg" class="card-img-top" alt="Electrician">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Electrician</h5>
                <p class="card-text text-muted">Starting at Rs. 1000</p>
                <a href="#"
   class="btn btn-outline-primary book-now-btn"
   data-service="Electrician">
   Book Now
</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="card service-card">
              <div class="img-container">
                <img src="Assets/makeup.jpg" class="card-img-top" alt="Makeup Artist">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Makeup Artist</h5>
                <p class="card-text text-muted">Starting at Rs. 1000</p>
               <a href="#"
   class="btn btn-outline-primary book-now-btn"
   data-service="Makeup Artist">
   Book Now
</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card service-card">
              <div class="img-container">
                <img src="Assets/sofa cleaning.jpg" class="card-img-top" alt="Sofa Cleaning">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Sofa Cleaning & Dry</h5>
                <p class="card-text text-muted">Starting at Rs. 1000</p>
               <a href="#"
   class="btn btn-outline-primary book-now-btn"
   data-service="Sofa Cleaning">
   Book Now
</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card service-card">
              <div class="img-container">
                <img src="Assets/painting.jpg" class="card-img-top" alt="Painter">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Painter</h5>
                <p class="card-text text-muted">Starting at Rs. 1500</p>
           <a href="#"
   class="btn btn-outline-primary book-now-btn"
   data-service="Painter">
   Book Now
</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="how-it-works">
  <h2>How It Works</h2>
  <div class="steps">

    <div class="step">
      <span>1</span>
      <h3>Discover</h3>
      <p>Explore innovative ideas and creative designs tailored to your needs.</p>
    </div>

    <div class="step">
      <span>2</span>
      <h3>Design</h3>
      <p>Craft visually stunning and user-friendly interfaces that captivate users.</p>
    </div>

    <div class="step">
      <span>3</span>
      <h3>Develop</h3>
      <p>Turn those ideas into fully functional and responsive applications.</p>
    </div>

    <div class="step">
      <span>4</span>
      <h3>Deliver</h3>
      <p>Launch projects that are impactful, fast, and built with precision.</p>
    </div>
  </div>
</section>

  <!-- Why Choose Us -->
  <section class="why-choose-us py-5 text-center fade-section">
    <div class="container">
      <h2 class="fw-bold mb-5 text-primary">Why Choose OnlineUstaad?</h2>
      <div class="row g-4">
        
        <div class="col-md-3 col-6">
          <div class="feature-box p-4 rounded shadow-lg">
            <img src="Assets/authorized-dealer.png" alt="Verified" width="60" class="mb-3 animated-icon">
            <h5>Verified Experts</h5>
            <p class="text-muted small">All our technicians are skilled and background-checked.</p>
          </div>
        </div>

         <div class="col-md-3 col-6">
          <div class="feature-box p-4 rounded shadow-lg">
            <img src="Assets/courier.png" alt="Fast Service" width="60" class="mb-3 animated-icon">
            <h5>Fast Service</h5>
            <p class="text-muted small">Get help quickly with our on-time guarantee.</p>
          </div>
        </div>

        <div class="col-md-3 col-6">
          <div class="feature-box p-4 rounded shadow-lg">
            <img src="Assets/affordable.png" alt="Affordable" width="60" class="mb-3 animated-icon">
            <h5>Affordable Prices</h5>
            <p class="text-muted small">Quality work that doesn’t break your budget.</p>
          </div>
        </div>
       
        <div class="col-md-3 col-6">
          <div class="feature-box p-4 rounded shadow-lg">
            <img src="Assets/24-hours-support.png" alt="Support" width="60" class="mb-3 animated-icon">
            <h5>24/7 Support</h5>
            <p class="text-muted small">Our customer care is available round the clock.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feedback -->
  <section class="testimonials py-5 bg-light text-center fade-section">
    <div class="container">
      <h2 class="fw-bold mb-5 text-primary">What Our Users Say</h2>
      <div id="feedbackCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="feedback-box mx-auto p-4 shadow-sm rounded">
              <p class="fst-italic">“OnlineUstaad sent a plumber within 30 minutes! Amazing service and very affordable.”</p>
              <h6 class="mt-3">– Ayesha Khan</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="feedback-box mx-auto p-4 shadow-sm rounded">
              <p class="fst-italic">“The electrician was professional and fixed everything perfectly. Highly recommend!”</p>
              <h6 class="mt-3">– Ahmed Raza</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="feedback-box mx-auto p-4 shadow-sm rounded">
              <p class="fst-italic">“Loved how easy booking was! The carpenter did a great job with my furniture.”</p>
              <h6 class="mt-3">– Sana Malik</h6>
            </div>
          </div>
        </div>
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
  <footer class="footer text-white text-center py-4">
    <div class="container">
      <p class="mb-1">&copy; 2025 OnlineUstaad. All Rights Reserved.</p>
      <small>Crafted with ❤️ for your home comfort</small>
    </div>
  </footer>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const fadeSections = document.querySelectorAll(".fade-section");

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    },
    { threshold: 0.2 }
  );

  fadeSections.forEach(section => observer.observe(section));
});
</script>

<?php include "login_modal.php"; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const isLoggedIn = <?= isset($_SESSION['user_id']) ? 'true' : 'false' ?>;
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  // Book Now buttons
  document.querySelectorAll(".book-now-btn").forEach(btn => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      const service = this.dataset.service;

      if (!isLoggedIn) {
        document.getElementById("loginOverlay").style.display = "flex";
      } else {
        window.location.href = "booking.php?service=" + encodeURIComponent(service);
      }
    });
  });

});
</script>


</body>
</html>