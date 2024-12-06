<?php
require 'db_admin_passed.php';

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
                <a href="manageuser.php" class="menu-item">Manage user account</a>
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
                            <th>Checked Out</th>
                            <th>Cancelled</th>
                            
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

</html>
