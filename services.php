<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="text-center mb-4">Choose a Service</h2>

  <div class="row">

    <!-- Carpentry -->
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <h5>Carpentry</h5>
        <a href="booking.php?service=Carpentry" class="btn btn-primary">
          Book Now
        </a>
      </div>
    </div>

    <!-- Plumbing -->
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <h5>Plumbing</h5>
        <a href="booking.php?service=Plumbing" class="btn btn-primary">
          Book Now
        </a>
      </div>
    </div>

    <!-- Electrician -->
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <h5>Electrician</h5>
        <a href="booking.php?service=Electrician" class="btn btn-primary">
          Book Now
        </a>
      </div>
    </div>

  </div>
</div>

</body>
</html>
