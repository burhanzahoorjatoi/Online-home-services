<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm">
  <div class="container">

    <!-- LOGO + BRAND -->
    <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
      <img src="Assets/logo.png" alt="Logo" width="40" class="me-2">
      OnlineUstaad
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- NAV LINKS -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">

        <!-- HOME -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <!-- SERVICES -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Services
          </a>

          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item service-link" href="carpentry.php">
                Carpentry
              </a>
            </li>
            <li>
              <a class="dropdown-item service-link" href="plumbing.php">
                Plumbing
              </a>
            </li>
            <li>
              <a class="dropdown-item service-link" href="electrician.php">
                Electrician
              </a>
            </li>
            <li>
              <a class="dropdown-item service-link" href="sofacleaning.php">
                Sofa Cleaning
              </a>
            </li>
          </ul>
        </li>

        <?php if (isset($_SESSION['user_id'])) { ?>

          <!-- 🔐 ADMIN PANEL -->
          <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
            <li class="nav-item">
              <a class="nav-link fw-bold text-primary" href="admin/dashboard.php">
                Admin Panel
              </a>
            </li>
          <?php } ?>

          <!-- AFTER LOGIN -->
          <li class="nav-item">
            <a class="nav-link" href="my_bookings.php">My Bookings</a>
          </li>

          <li class="nav-item">
            <span class="nav-link fw-semibold text-success">
              Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?>
            </span>
          </li>

          <li class="nav-item">
            <a class="nav-link text-danger" href="logout.php">Logout</a>
          </li>

        <?php } else { ?>

          <!-- BEFORE LOGIN -->
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link-login" href="#">Login</a>
          </li>

        <?php } ?>

      </ul>
    </div>
  </div>
</nav>

<!-- LOGIN CHECK FOR SERVICES -->
<script>
const isLoggedIn = <?= isset($_SESSION['user_id']) ? 'true' : 'false' ?>;

document.addEventListener("DOMContentLoaded", function () {

  document.querySelectorAll(".service-link").forEach(link => {
    link.addEventListener("click", function (e) {

      if (!isLoggedIn) {
        e.preventDefault();
        document.getElementById("loginOverlay").style.display = "flex";
      }

    });
  });

});
</script>
