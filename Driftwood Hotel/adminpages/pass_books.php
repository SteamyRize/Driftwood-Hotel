<?php
require 'db_admin_passed.php';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $booking_id = $_POST['booking_id'] ?? null;

    if ($booking_id) {
        try {

            // Delete the booking from approved_bookings
            $deleteBookingQuery = "DELETE FROM pass_books WHERE id = :booking_id";
            $stmt = $pdo->prepare($deleteBookingQuery);
            $stmt->execute(['booking_id' => $booking_id]);

            echo "<script>alert('Record Deleted!'); window.location.href='pass_books.php';</script>";
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
                <a href="roombooking.php" class="menu-item">Booked Rooms</a>
                <hr>
                <a href="pass_books.php" class="menu-item active">Passed Books</a>
                <hr>
                <a href="roombooking_denied.php" class="menu-item">Denied Books</a>
                <hr>
                <a href="room_availability.php" class="menu-item">Available Rooms</a>
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
            <h2>Passed Books</h2><span class="inactive"></span>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <table border="1">
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
                            <th>Checked Out</th>
                            <th>Cancelled</th>
                            <th>Delete Record</th>
                    </tr>
                </thead>
                <tbody>
                        <?php if (!empty($pass_books)): ?>
                            <?php foreach ($pass_books as $row): ?>
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
                                    <td><?php echo $row['checked_out_at']; ?></td>
                                    <td><?php echo $row['cancelled_at']; ?></td>
                                    <td>
                                    <form action="" method="POST">
                                            <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>"> 
                                            <button type="submit" name="delete" class="neat-button">Delete</button> 
                                    </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9">No bookings available.</td>
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
