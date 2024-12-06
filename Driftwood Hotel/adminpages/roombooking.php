<?php
require 'db_admin_booked.php';

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Enable the event scheduler (ensure user has the privilege to do this)
    $pdo->exec("SET GLOBAL event_scheduler = ON");

    // SQL query to create the event
    $event_sql = "
       CREATE EVENT IF NOT EXISTS move_to_pass_books
        ON SCHEDULE EVERY 1 MINUTE
        DO
        BEGIN
            -- Move approved bookings that have passed their check_out date to pass_books
            INSERT INTO pass_books (user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, approved_at, checked_out_at, cancelled_at)
            SELECT user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, approved_at, NOW(), NULL
            FROM approved_bookings
            WHERE check_out <= CURDATE();

            -- Delete the records from approved_bookings that were moved
            DELETE FROM approved_bookings WHERE check_out <= CURDATE();
        END;
    ";

    // Execute the SQL query to create the event
    $pdo->exec($event_sql);
    
 

    // Fetch approved bookings from the database
    $stmt = $pdo->query("SELECT * FROM approved_bookings");
    $approved_bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error creating event or fetching bookings: " . $e->getMessage();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $booking_id = $_POST['booking_id'] ?? null;

    if ($booking_id) {
        try {
            // Move booking to pass_books and set cancelled_at
            $moveBookingQuery = "
                INSERT INTO pass_books (user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, approved_at, checked_out_at, cancelled_at)
                SELECT user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, approved_at, NULL, NOW()
                FROM approved_bookings
                WHERE id = :booking_id
            ";
            $stmt = $pdo->prepare($moveBookingQuery);
            $stmt->execute(['booking_id' => $booking_id]);

            // Delete the booking from approved_bookings
            $deleteBookingQuery = "DELETE FROM approved_bookings WHERE id = :booking_id";
            $stmt = $pdo->prepare($deleteBookingQuery);
            $stmt->execute(['booking_id' => $booking_id]);

            echo "<script>alert('Booking Cancelled!'); window.location.href='../adminpage.php';</script>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Invalid Booking ID.";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admindesign.css">
    <link rel="stylesheet" href="../Room-desc.css">
    <link rel="icon" href="../icon.png">
</head>
<body>
<header class="main-header">
    <div class="logo"><img src="../Drifcombieng.png" id="logopic"></div>
</header>

<div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="admin-title">ADMIN</div>
        <nav class="menu">
            <hr>
            <a href="../adminpage.php" class="menu-item">Pending Books</a>
            <hr>
            <a href="roombooking.php" class="menu-item active">Booked Rooms</a>
            <hr>
            <a href="pass_books.php" class="menu-item">Passed Books</a>
            <hr>
            <a href="roombooking_denied.php" class="menu-item">Denied Books</a>
            <hr>
            <a href="manageuser.php" class="menu-item">Manage user account</a>
            <hr>
            <a href="messages.php" class="menu-item">Messages</a>
            <hr>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="content">
        <div class="content-header">
            <h2>Booked Rooms</h2><span class="inactive"></span>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Room</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Payment Option</th>
                        <th>Amount</th>
                        <th>Booking Date</th>
                        <th>Approved Date</th>
                        <th>Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($approved_bookings)): ?>
                        <?php foreach ($approved_bookings as $row): ?>
                            <tr>
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['full_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['contact_number']; ?></td>
                                <td><?php echo $row['room']; ?></td>
                                <td><?php echo $row['check_in']; ?></td>
                                <td><?php echo $row['check_out']; ?></td>
                                <td><?php echo $row['payment_option']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td><?php echo $row['approved_at']; ?></td>
                                <td>
                                       
                                        <form action="" method="POST">
                                            <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>"> 
                                            <button type="submit" name="cancel" class="neat-button">Cancel</button> 
                                        </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11">No bookings available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

<style>
 
.neat-button {
  background-color: #3498db; 
  color: white; 
  border: none;
  padding: 12px 24px;
  font-size: 16px;
  font-weight: 600;
  border-radius: 8px; 
  cursor: pointer;
  transition: all 0.3s ease; 
  margin: 5px;
}


.neat-button:hover {
  background-color: #2980b9; 
  transform: translateY(-4px); 
}


.neat-button:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.6); 
}


.neat-button:active {
  background-color: #1d6fa5; 
  transform: translateY(0); 
}
</style>

</html>
