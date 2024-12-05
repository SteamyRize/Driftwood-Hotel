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
                <a href="adminpage.php" class="menu-item active">Pending Books</a>
                <hr>
                <a href="adminpages/roombooking.php" class="menu-item">Booked Rooms</a>
                <hr>
                <a href="adminpages/pass_books.php" class="menu-item">Passed Books</a>
                <hr>
                <a href="adminpages/manageuser.php" class="menu-item">Manage user account</a>
                <hr>
                
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="content">
            <div class="content-header">
                <h2>Status</h2>
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
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($bookings)): ?>
                            <?php foreach ($bookings as $row): ?>
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
                                    <td>
                                        <!-- Form to submit the booking id for approval or denial -->
                                        <form action="adminpages/approve.php" method="POST">
                                            <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>"> <!-- Changed user_id to booking_id -->
                                            <button type="submit" name="approve" class="neat-button">Approve</button> 
                                            <button type="submit" name="deny" class="neat-button">Deny</button> 
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


body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #e6f3e6;
    overflow-x: hidden; /* Prevent horizontal scrolling */
}



.admin-title {
    text-align: center;
    font-family: 'Montserrat';
}

.sidebar {
    width: 200px;
    background-color: #333;
    color: white;
    height: 100vh;
    padding: 20px;
    box-sizing: border-box;
}

.sidebar .admin-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.sidebar .menu .menu-item {
    display: block;
    color: white;
    text-decoration: none;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    font-family: 'Montserrat';
}

.sidebar .menu .menu-item:hover,
.sidebar .menu .menu-item.active {
    background-color: #555;
}

/* Content */
.content {
    flex: 1;
    padding: 20px;
    box-sizing: border-box;
    background-color: #C9E6CF;
    overflow-x: auto; /* Allow scrolling within the content area */
}

.content-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #66b266;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.content-header h2 {
    color: #333;
    margin: 0;
}

.content-header .inactive {
    color: gray;
    font-size: 16px;
}

/* Room Booking Section */
.new-room-booking-btn {
    background-color: #66b266;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

.new-room-booking-btn:hover {
    background-color: #559455;
}

.new-room-booking-btn .notification {
    background-color: red;
    color: white;
    border-radius: 50%;
    padding: 2px 6px;
    font-size: 12px;
    margin-left: 10px;
}

/* Table Styles */
.table-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    overflow-x: auto; /* Allow horizontal scrolling for the table */
}

table {
    width: 100%;
    border-collapse: collapse;
    table-layout: auto; /* Dynamically adjust column widths */
}

thead th {
    background-color: #66b266;
    color: white;
    padding: 10px;
    text-align: left;
}

tbody td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    word-wrap: break-word; /* Break long text into multiple lines */
}

tbody tr:last-child td {
    border-bottom: none;
}

.action-btn {
    background-color: #555;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
}

.action-btn:hover {
    background-color: #333;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .sidebar {
        width: 150px; /* Adjust sidebar width */
    }

    .content {
        margin-left: 150px; /* Adjust content margin */
    }

    table th,
    table td {
        font-size: 12px; /* Smaller font size for mobile screens */
        padding: 8px;
    }

    .new-room-booking-btn {
        font-size: 12px; /* Adjust button size for mobile */
        padding: 8px 16px;
    }
}


</style>

</html>