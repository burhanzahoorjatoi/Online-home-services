<?php
// Start session if needed for messages
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="signup.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="signup-page">
  <div class="signup-wrapper">

    <div class="signup-left">
      <div class="overlay">
        <h1 class="typing-title">Join Our Family</h1>
        <p>Get access to trusted home services.</p>
      </div>
    </div>

    <div class="signup-right">
      <div class="form-box">
        <h2>Create Account</h2>

        <!-- PHP Error / Success Messages -->
        <?php 
        if(isset($_SESSION['error'])) {
            echo "<p style='color:red;'>".$_SESSION['error']."</p>";
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])) {
            echo "<p style='color:green;'>".$_SESSION['success']."</p>";
            unset($_SESSION['success']);
        }
        ?>

        <form method="POST" action="signup_process.php" onsubmit="return validateForm()">

          <div class="input-group">
            <input type="text" name="name" id="name" required>
            <label>Full Name</label>
          </div>

          <div class="input-group">
            <input type="email" name="email" id="email" required>
            <label>Email</label>
          </div>

          <div class="input-group">
            <input type="text" name="phone" id="number" required>
            <label>Phone</label>
            <p id="numberError" style="color:red;"></p>
          </div>

          <div class="input-group">
            <input type="password" name="password" id="password" required>
            <label>Password</label>
            <p id="passwordError" style="color:red;"></p>
          </div>

          <div class="input-group">
            <input type="password" name="confirm_password" id="confirmPassword" required>
            <label>Confirm Password</label>
            <p id="confirmPasswordError" style="color:red;"></p>
          </div>

          <p id="success" style="color:green;"></p>

          <button type="submit" name="signup" class="btn-submit">Sign Up</button>
        </form>

      </div>
    </div>

  </div>
</section>

<script src="signup.js"></script>
</body>
</html>
