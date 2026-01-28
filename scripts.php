<script>
document.addEventListener("DOMContentLoaded", function () {

  const loginBtn = document.querySelector(".nav-link-login");
  const loginOverlay = document.getElementById("loginOverlay");
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

  window.addEventListener("click", function (e) {
    if (e.target === loginOverlay) {
      loginOverlay.style.display = "none";
    }
  });

});
</script>
