<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "driftwoodhotel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve bookings
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
$bookings = $result->fetch_all(MYSQLI_ASSOC);



$conn->close();
?>