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
        INSERT INTO pass_books (full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, approved_at)
        SELECT full_name, email, contact_number, room, check_in, check_out, payment_option, amount, created_at, approved_at
        FROM approved_bookings
        WHERE check_out <= CURDATE();

        -- Update checked_out_at timestamp in approved_bookings
        UPDATE approved_bookings
        SET checked_out_at = CURRENT_TIMESTAMP
        WHERE check_out <= CURDATE();

        -- Delete the records from approved_bookings that were moved
        DELETE FROM approved_bookings
        WHERE check_out <= CURDATE();
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
            <a href="manageuser.php" class="menu-item">Manage user account</a>
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
</html>
