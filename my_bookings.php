<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_name'])) {
  header("Location: index.php");
  exit();
}

$user_name = $_SESSION['user_name'];

$query = mysqli_query($conn, "
  SELECT * FROM bookings 
  WHERE user_name = '$user_name'
  ORDER BY created_at DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Bookings</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Optional custom css -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR (SAME AS HOME PAGE) -->
<?php include "navbar.php"; ?>

<div class="container" style="margin-top:120px;">

  <h2 class="mb-4 text-center fw-bold text-primary">My Bookings</h2>

  <?php if (mysqli_num_rows($query) > 0) { ?>

    <div class="card shadow-lg border-0">
      <div class="card-body p-0">

        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-primary text-center">
              <tr>
                <th>#</th>
                <th>Service</th>
                <th>Booking Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody class="text-center">
              <?php
              $count = 1;
              while ($row = mysqli_fetch_assoc($query)) {
              ?>
                <tr>
                  <td><?= $count++ ?></td>

                  <td class="fw-semibold">
                    <?= htmlspecialchars($row['service']) ?>
                  </td>

                  <td>
                    <?= date("d M Y", strtotime($row['date'])) ?>
                  </td>

                  <td>
                    <?php
                    if ($row['status'] == 'Pending') {
                      echo '<span class="badge bg-warning text-dark px-3 py-2">Pending</span>';
                    } elseif ($row['status'] == 'Confirmed') {
                      echo '<span class="badge bg-primary px-3 py-2">Confirmed</span>';
                    } else {
                      echo '<span class="badge bg-success px-3 py-2">Completed</span>';
                    }
                    ?>
                  </td>

                  <td>
                    <button class="btn btn-sm btn-outline-danger" disabled>
                      Cancel
                    </button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>

          </table>
        </div>

      </div>
    </div>

  <?php } else { ?>

    <div class="alert alert-info text-center shadow-sm">
      <h5 class="mb-2">No Bookings Found</h5>
      <p class="mb-0">You haven’t booked any service yet.</p>
      <a href="index.php" class="btn btn-primary mt-3">Book a Service</a>
    </div>

  <?php } ?>

</div>

<!-- Bootstrap JS (dropdown & navbar ke liye) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
