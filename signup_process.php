<?php
include "db.php";
session_start();

if (isset($_POST['signup'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    // Server-side validation
    if (!preg_match("/^(\+92|92|0)3\d{9}$/", $phone)) {
        $_SESSION['error'] = "Enter a valid mobile number";
        header("Location: signup.php");
        exit();
    }

    if (strlen($password) < 6) {
        $_SESSION['error'] = "Password must be at least 6 characters long";
        header("Location: signup.php");
        exit();
    }

    if ($password !== $confirm) {
        $_SESSION['error'] = "Passwords do not match";
        header("Location: signup.php");
        exit();
    }

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $_SESSION['error'] = "Email already registered";
        header("Location: signup.php");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $query = "INSERT INTO users (name, email, phone, password) 
              VALUES ('$name', '$email', '$phone', '$hashedPassword')";

    if (mysqli_query($conn, $query)) {
        $_SESSION['success'] = "Account created successfully";
    } else {
        $_SESSION['error'] = "Something went wrong";
    }

    header("Location: signup.php");
    exit();
}
?>
