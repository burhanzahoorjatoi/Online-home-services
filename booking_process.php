<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?login_error=Please login first");
    exit();
}

if (isset($_POST['book'])) {

    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];

    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $query = "INSERT INTO bookings (user_name, service, address, date)
              VALUES ('$user_name', '$service', '$address', '$date')";

    if (mysqli_query($conn, $query)) {

        // ✅ SUCCESS → HOME PAGE
        header("Location: index.php?booking=success");
        exit();

    } else {

        // ❌ ERROR
        header("Location: booking.php?service=$service&error=failed");
        exit();
    }
}
?>
