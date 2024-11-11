<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <header class="main-header">
        <div class="logo">LOGO</div>
        <div class="user-profile">
            <div class="profile-icon"></div>
        </div>
    </header>

    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="admin-title">ADMIN</div>
            <nav class="menu">
                <a href="#" class="menu-item active">Status</a>
                <a href="#" class="menu-item">Room Booking</a>
                <a href="#" class="menu-item">Manage user account</a>
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
                        <tr>
                            <td>2</td>
                            <td>First Name Last Name</td>
                            <td>randomemail@gmail.com</td>
                            <td>Quezon City</td>
                            <td>Good Room</td>
                            <td>20XX-Mn-Dy</td>
                            <td>20XX-Mn-Dy</td>
                            <td>Not Confirm</td>
                            <td><button class="action-btn">Action</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>