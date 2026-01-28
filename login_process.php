<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($query) == 1) {
        $user = mysqli_fetch_assoc($query);

        if (password_verify($password, $user['password'])) {

            // ✅ SESSION DATA
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['role']      = $user['role']; 

            header("Location: index.php");
            exit();

        } else {
            header("Location: index.php?login_error=Invalid password");
            exit();
        }

    } else {
        header("Location: index.php?login_error=User not found");
        exit();
    }
}
?>
