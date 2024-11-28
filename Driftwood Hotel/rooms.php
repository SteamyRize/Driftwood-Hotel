<?php
require 'logged_in.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="css/roompage2.css">
    <link rel="stylesheet" href="Room-desc.css">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <!-- Main Header -->
    <header class="main-header">
        <div class="logo"><img src="Drifcombieng.png" id="logopic"></div>
        <nav class="header-nav">
            <a href="index.php">Home</a>
            <a href="rooms.php">Rooms</a>
            <a href="index.php#Gallery">Gallery</a>
            <a href="index.php#Experience">Experiences / Reviews</a>
            <a href="index.php#About">About Us</a>
            <a href="index.php#Contact">Contact Us</a>

        </nav>
        
            <?php SignUser($is_logged_in, $username); ?>
        

    </header>


    <!-- Body Section -->
    <section class="room-section">
        <center>
            <h1 class="room-heading">Rooms</h1>
        </center>
        <div class="rooms-container">
            <div class="room-card">
                <div class="room-image"><a href="Rooms/Room1/Room-desc.php"><img src="Rooms/Room1/bed1.jpg" alt="Sample Room 1"></div>
                <h2 class="room-name">The Oceanfront Haven</h2>
                <p class="room-description">Indulge in the ultimate beach escape with our luxurious Oceanview Suite, where modern elegance meets the serene beauty of the coastline.</p>

                    <a href="Rooms/Room1/Room-desc.php">
                        <button class="book-btn">Book Now!</button>
                        </a>
            </div>
            <div class="room-card">
                <div class="room-image"> <img src="Rooms/Room2/room2.jpg" alt="Sample Room 2"></div>
                <h2 class="room-name">The Tidescape Suite</h2>
                <p class="room-description">Experience the perfect blend of coastal elegance and contemporary comfort in our Tidescape Suite.</p>

                    <a href="Rooms/Room2/Room-desc.php">
                        <button class="book-btn">Book Now!</button>
                        </a>
            </div>
            <div class="room-card">
                <div class="room-image"><img src="Rooms/Room3/room3.jpg" alt="Sample Room 3"></div>
                <h2 class="room-name">The Driftwood Villa</h2>
                <p class="room-description">Step into a world of coastal tranquility and refined elegance with our Driftwood Villa.</p>
                <a href="Rooms/Room3/Room-desc.php">
                <button class="book-btn">Book Now!</button>
                </a>

            </div>
            <div class="room-card">
                <div class="room-image"><img src="Rooms/Room4/room4.jpg" alt="Sample Room 4"></div>
                <h2 class="room-name">The Oceanview Retreat</h2>
                <p class="room-description">Escape to pure relaxation in our Oceanview Retreat, a spacious and sophisticated suite designed to capture the essence of coastal luxury.</p>
                <a href="Rooms/Room4/Room-desc.php">
                <button class="book-btn">Book Now!</button>
                </a>
            </div>
            <div class="room-card">
                <div class="room-image"> <img src="Rooms/Room5/room5.jpg" alt="Sample Room 5"></div>
                <h2 class="room-name">The Coastal Breeze Suite</h2>
                <p class="room-description">Unwind and embrace the beauty of the ocean in The Coastal Breeze Suite, where contemporary design meets the serene atmosphere of the beach.</p>
                <a href="Rooms/Room5/Room-desc.php">
                <button class="book-btn">Book Now!</button>
                </a>
            </div>
            <div class="room-card">
                <div class="room-image"><img src="Rooms/Room6/room6.jpg" alt="Sample Room 6"></div>
                <h2 class="room-name">The Shoreline Luxe Suite</h2>
                <p class="room-description">Step into refined elegance with The Shoreline Luxe Suite, a spacious retreat where modern luxury meets the laid-back beauty of the beach.</p>
                <a href="Rooms/Room6/Room-desc.php">
                <button class="book-btn">Book Now!</button>
                </a>
            </div>
            <div class="room-card">
                <div class="room-image"><img src="Rooms/Room7/room7.jpg" alt="Sample Room 7"></div>
                <h2 class="room-name">The Pearl Suite</h2>
                <p class="room-description">Luxurious and spacious, the Pearl Suite is a refined sanctuary where sophistication meets the tranquility of the sea. </p>
                <a href="Rooms/Room7/Room-desc.php">
                <button class="book-btn">Book Now!</button>
                </a>
            </div>
            <div class="room-card">
                <div class="room-image"><img src="Rooms/Room8/room8.jpg" alt="Sample Room 8"></div>
                <h2 class="room-name">The Driftwood Loft</h2>
                <p class="room-description">The Driftwood Loft is a spacious, open-concept suite perfect for those seeking both comfort and style. </p>
                <a href="Rooms/Room8/Room-desc.php">
                <button class="book-btn">Book Now!</button>
                </a>
            </div>
            <div class="room-card">
                <div class="room-image"><img src="Rooms/Room9/room9.jpg" alt="Sample Room 9"></div>
                <h2 class="room-name">The Oceanic Sanctuary</h2>
                <p class="room-description">Escape to The Oceanic Sanctuary, an exclusive and immersive beachfront suite that combines the best of luxury living with the natural beauty of the sea.</p>
                <a href="Rooms/Room9/Room-desc.php">
                <button class="book-btn">Book Now!</button>
                </a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="social-icons">
            <!-- Twitter X Logo -->
            <a href="https://x.com/DriftwoodHotel_" class="social-icon" target="_blank" aria-label="Twitter">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <!-- Instagram Icon -->
            <a href="https://instagram.com" class="social-icon" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <!-- YouTube Icon -->
            <a href="https://www.youtube.com/channel/UCvgEu53gkqXZ369T61gtMEg" class="social-icon" target="_blank" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
            <!-- LinkedIn Icon -->
            <a href="https://www.linkedin.com/in/driftwoodhotel-ph-8a8008338/" class="social-icon" target="_blank" aria-label="LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </footer>


</body>

<style>
    footer{
        
        bottom: 0;
    }
</style>

</html>