function validateForm() {
  let password = document.getElementById("password").value.trim();
  let number = document.getElementById("number").value.trim();
  let confirmPassword = document.getElementById("confirmPassword").value.trim();

  let passwordError = document.getElementById("passwordError");
  let successMessage = document.getElementById("success");
  let confirmPasswordError = document.getElementById("confirmPasswordError");
  let numberError = document.getElementById("numberError");

  // Clear previous messages
  passwordError.textContent = "";
  successMessage.textContent = "";
  confirmPasswordError.textContent = "";
  numberError.textContent = "";

  let valid = true;

  // Phone validation (Pakistan)
  if (!/^(\+92|92|0)3\d{9}$/.test(number)) {
    numberError.textContent = "Enter a valid mobile number (e.g., 03001234567 or +923001234567).";
    valid = false;
  }

  // Password length validation
  if (password.length < 6) {
    passwordError.textContent = "Password must be at least 6 characters long.";
    valid = false;
  }

  // Password match validation
  if (password !== confirmPassword) {
    confirmPasswordError.textContent = "Passwords do not match.";
    valid = false;
  }

  if (valid) {
    successMessage.textContent = "Form looks good!";
    return true;
  }

  return false; // Prevent form submission
}
