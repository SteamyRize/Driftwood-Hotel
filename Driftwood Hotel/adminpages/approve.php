<?php
require "db_admin.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['approve'])) {
    // Use the booking_id passed through the POST request
    $booking_id = $_POST['booking_id'];

    try {
        // Establish a connection to the database
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Step 1: Move booking to approved_bookings table
        $moveBookingQuery = "
            INSERT INTO approved_bookings (user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, approved_at)
            SELECT user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, CURRENT_TIMESTAMP
            FROM bookings
            WHERE id = :booking_id
        ";
        $stmt = $pdo->prepare($moveBookingQuery);
        $stmt->execute(['booking_id' => $booking_id]);

        // Step 2: Delete booking from bookings table
        $deleteBookingQuery = "
            DELETE FROM bookings
            WHERE id = :booking_id
        ";
        $stmt = $pdo->prepare($deleteBookingQuery);
        $stmt->execute(['booking_id' => $booking_id]);

        echo "<script>alert('Booking Approved!'); window.location.href='roombooking.php';</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deny'])) {
    // Use the booking_id passed through the POST request
    $booking_id = $_POST['booking_id'];

    try {
        // Establish a connection to the database
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         // Step 1: Move booking to approved_bookings table
         $moveBookingQuery = "
         INSERT INTO denied_bookings (user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, denied_at)
         SELECT user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, CURRENT_TIMESTAMP
         FROM bookings
         WHERE id = :booking_id
     ";
     $stmt = $pdo->prepare($moveBookingQuery);
     $stmt->execute(['booking_id' => $booking_id]);

        // Step 3: Delete booking from bookings table
        $deleteBookingQuery = "
            DELETE FROM bookings
            WHERE id = :booking_id
        ";
        $stmt = $pdo->prepare($deleteBookingQuery);
        $stmt->execute(['booking_id' => $booking_id]);

        echo "<script>alert('Booking Denied!'); window.location.href='../adminpage.php';</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
