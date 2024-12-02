<?php
require 'adminpages/db_admin.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admindesign.css">
    <link rel="stylesheet" href="Room-desc.css">
    <link rel="icon" href="icon.png">
</head>

<body>
<header class="main-header">
        <div class="logo"><img src="Drifcombieng.png" id="logopic"></div>
        
    </header>

    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="admin-title">ADMIN</div>
            <nav class="menu">
                <hr>
                <a href="adminpage.php" class="menu-item active">Status</a>
                <hr>
                <a href="adminpages/roombooking.php" class="menu-item">Room Booking</a>
                <hr>
                <a href="adminpages/manageuser.php" class="menu-item">Manage user account</a>
                <hr>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="content">
            <div class="content-header">
                <h2>Status</h2><span class="inactive">Room Booking</span>
            </div>

            <!-- Room Booking Section -->
            <div class="room-booking-section">
                <button class="new-room-booking-btn">New Room Booking <span class="notification">6</span></button>
            </div>

            <!-- Table Container -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Room</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                            <th>Status</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php if (!empty($bookings)): ?>
                                <?php foreach ($bookings as $row): ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['full_name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['contact_number']; ?></td>
                                        <td><?php echo $row['check_in']; ?></td>
                                        <td><?php echo $row['check_out']; ?></td>
                                        <td><?php echo $row['payment_option']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['created_at']; ?></td>
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

</html>