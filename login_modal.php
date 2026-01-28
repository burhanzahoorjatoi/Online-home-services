<?php
?>

<!-- LOGIN MODAL -->
<div id="loginOverlay" class="signup-overlay">
  <div class="signup-modal">
    <span class="close-btn" id="loginClose">&times;</span>

    <div class="form-box">
      <h2>Login</h2>

      <?php if (isset($_GET['login_error'])) { ?>
        <p style="color:red; text-align:center;">
          <?= htmlspecialchars($_GET['login_error']) ?>
        </p>
      <?php } ?>

      <form method="POST" action="login_process.php">
        <div class="input-group">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>

        <div class="input-group">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>

        <button type="submit" name="login" class="btn-submit">
          Login
        </button>
      </form>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const loginOverlay = document.getElementById("loginOverlay");
  const loginBtn = document.querySelector(".nav-link-login");
  const loginClose = document.getElementById("loginClose");

  if (loginBtn) {
    loginBtn.addEventListener("click", function (e) {
      e.preventDefault();
      loginOverlay.style.display = "flex";
    });
  }

  if (loginClose) {
    loginClose.addEventListener("click", function () {
      loginOverlay.style.display = "none";
    });
  }

  // 🔥 auto open modal on error
  const params = new URLSearchParams(window.location.search);
  if (params.has("login_error")) {
    loginOverlay.style.display = "flex";
  }
});
</script>
