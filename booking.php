<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: index.php");
  exit();
}

$service = $_GET['service'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Service</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f5f7fa;
    }
    .booking-card {
      max-width: 600px;
      margin: auto;
      margin-top: 120px;
      border-radius: 15px;
    }
    .booking-card h3 {
      font-weight: 700;
    }
  </style>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
  <div class="card booking-card shadow-lg">
    <div class="card-body p-4">

      <h3 class="text-center text-primary mb-4">
        Book Service
      </h3>

      <p class="text-center mb-4">
        <strong>Service:</strong>
        <span class="badge bg-primary"><?= htmlspecialchars($service) ?></span>
      </p>

      <form method="POST" action="booking_process.php">

        <input type="hidden" name="service" value="<?= htmlspecialchars($service) ?>">

        <!-- CATEGORY -->
        <div class="mb-3">
          <label class="form-label">Category</label>
          <select name="category" class="form-select" required>
            <option value="">Select Category</option>
            <option value="Repair">Repair</option>
            <option value="Installation">Installation</option>
            <option value="Maintenance">Maintenance</option>
          </select>
        </div>

        <!-- ADDRESS -->
        <div class="mb-3">
          <label class="form-label">Service Address</label>
          <textarea name="address" class="form-control" rows="3" required></textarea>
        </div>

        <!-- DATE -->
        <div class="mb-3">
          <label class="form-label">Preferred Date</label>
          <input type="date" name="date" class="form-control" required>
        </div>

        <!-- TIME SLOT -->
        <div class="mb-4">
          <label class="form-label">Preferred Time</label>
          <select name="time_slot" class="form-select" required>
            <option value="">Select Time Slot</option>
            <option value="Morning">Morning (9am – 12pm)</option>
            <option value="Afternoon">Afternoon (12pm – 5pm)</option>
            <option value="Evening">Evening (5pm – 9pm)</option>
          </select>
        </div>

        <!-- SUBMIT -->
        <div class="d-grid">
          <button type="submit" name="book" class="btn btn-success btn-lg">
            Confirm Booking
          </button>
        </div>

      </form>

    </div>
  </div>
</div>

</body>
</html>
