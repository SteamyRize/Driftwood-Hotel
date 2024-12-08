<?php
require '../../logged_in.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>The Oceanview Retreat</title>
    <link rel="stylesheet" href="../../Room-desc.css">
    <link rel="icon" href="../../icon.png">
</head>

<body>
    <!-- Header Section -->
    <header class="main-header">
        <div class="logo"><img src="../../Drifcombieng.png" id="logopic"></div>
        <nav class="header-nav">
            <a href="../../index.php">Home</a>
            <a href="../../rooms.php">Rooms</a>
            <a href="../../index.php#Gallery">Gallery</a>
            <a href="../../index.php#Experience">Experiences / Reviews</a>
            <a href="../../index.php#About">About Us</a>
            <a href="../../index.php#Contact">Contact Us</a>

        </nav>
        <?php SignUserRooms($is_logged_in, $username); ?>

    </header>

    <!-- Main Content -->
    <main class="container">
        <!-- Image Gallery Section -->
        <section class="gallery">
            <img src="room4.jpg" alt="Main Room Image" class="main-image">
            <div class="gallery-thumbnails">
                <img src="balcony4.jpg" alt="Thumbnail 1" class="thumbnail">
                <img src="bathroom4.jpg" alt="Thumbnail 2" class="thumbnail">
            </div>
        </section>

        <!-- Unified Room Details, Description, and Amenities Section -->
        <section class="room-details-container">
            <div class="left">
                <!-- Room Name and Details Section -->
                <div class="room-header">
                    <div class="room-info">
                        <h1 class="room-name">The Oceanview Retreat</h1>
                        <div class="info-boxes">
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-bed-alt" style="font-size: 36px;"></i></span><h3> 2 Bedrooms</h3>
                            </div>
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-bath" style="font-size: 36px;"></i></span><h3> 2 Bathrooms</h3>
                            </div>
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-paw" style="font-size: 36px;"></i></span><h3> 1 Pets Allowed</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apartment Description Section -->
                <div class="room-details">
                    <h2 class="section-title">Apartment Description</h2>
                    <p class="description">
                    Escape to pure relaxation in our Oceanview Retreat, a spacious and sophisticated suite designed to capture the essence of coastal luxury. With panoramic views of the sparkling turquoise sea and golden sands, this room creates an atmosphere of calm and tranquility from the moment you enter. Every detail is thoughtfully designed to offer guests a sense of peace and connection with the natural beauty of the ocean.

                    </p>
                </div>

                <!-- Offered Amenities Section -->
                <div class="amenities">
                    <h2 class="section-title">Offered Amenities</h2>
                    <div class="amenities-list">
                        <div class="left">
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-knife-kitchen" style="font-size: 28px;"></i></span> <h3>Kitchen</h3>
                            </div>
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-screen" style="font-size: 32px;"></i></span> <h3>Television with Netflix</h3>
                            </div>
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-washer" style="font-size: 32px;"></i></span> <h3>Washer</h3>
                            </div>
                        </div>
                        
                        <div class="light">
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-snowflakes" style="font-size: 32px;"></i></span> <h3>Air Conditioner</h3>
                            </div>

                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-wifi" style="font-size: 32px;"></i></span> <h3>Wireless Internet</h3>
                            </div>
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-balcony" style="font-size: 32px;"></i></span> <h3>Balcony or Patio</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>


            <div class="right">
                <!-- Price and Booking Section in the Same Border -->
                <div class="price-and-booking">
                    <!-- Price Section -->
                    <div class="price-section">
                        <br>
                        <h2 class="price-range" style="font-size: 32px; margin-bottom: 10px;">$2000 - $4000</h2>
                        <hr style="color: #ddd;">
                        <p style="font-size: 20px;">
                            Short Period: $2000<br>
                            Medium Period: $3500<br>
                            Long Period: $4000
                        </p>
                    </div>

                    <!-- Divider Line -->
                    <div class="divider">
                        <hr>
                            <h3 style="font-size: 32px;">Book now</h3>
                        <hr>
                    </div>

                    <!-- Book Now Section -->
                    <div class="booking-section">
                        <!-- Form Section -->
                        <form class="booking-form" action="../../submit_booking.php" method="POST">
                            
                            <input type="hidden" name="room" value="The Oceanview Retreat">
                            <input type="hidden" name="room_id" value="4">
                            
                            <div class="input-group">
                                    <label><h3>Full name</h3></label>
                                    <input type="text" name="full_name" placeholder="Enter Your Full name" required>
                                </div>
                                <div class="input-group">
                                    <label><h3>Email</h3></label>
                                    <input type="email" name="email" placeholder="Enter your Email" required>
                                </div>
                                <div class="input-group">
                                    <label><h3>Contact Number</h3></label>
                                    <input type="tel" name="contact_number" placeholder="Enter your Contact Number" required>
                                </div>
                                <div class="date-group">
                                    <div class="input-group">
                                        <label><h3>Check-In Time</h3></label>
                                        <input type="date" name="check_in"placeholder="DD/MM/YYYY" required>
                                    </div>
                                    <div class="input-group">
                                        <label><h3>Check-Out Time</h3></label>
                                        <input type="date" name="check_out" placeholder="DD/MM/YYYY" required>
                                    </div>
                                </div>
                                <hr>
                            <div class="payment-group">
                                <div class="input-group1">
                                    <label>
                                        <h3>Payment Option</h3>
                                    </label>
                                    <select name="payment_option" required>
                                        <option value="" disabled selected>Select Payment Option</option>
                                        <option value="Credit Card">Credit Card</option>
                                        <option value="Paypal">PayPal</option>
                                        <option value="Gcash">Gcash</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                                <div class="input-group">
                                    <label><h3>Amount</h3></label>
                                    <input type="number" name="amount" placeholder="Enter Amount" required>
                                </div>
                                <button type="submit" class="confirm-btn">Confirm</button>
                            </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
    <section class="room-details-containers">
        <h3 class="reviews-title">Reviews <span class="review-score">★ 5.0</span></h3>
        
        <!-- Review Ratings -->
        <div class="review-ratings">
            <div class="rating-item">
                <span>Amenities</span>
                <div class="rating-bar"></div>
                <span class="rating-score">5.0</span>
            </div>
            <div class="rating-item">
                <span>Communication</span>
                <div class="rating-bar"></div>
                <span class="rating-score">5.0</span>
            </div>
            <div class="rating-item">
                <span>Hygiene</span>
                <div class="rating-bar"></div>
                <span class="rating-score">5.0</span>
            </div>
        </div>
        
        <!-- Individual Reviews -->
        <div class="review-list">
            <div class="review">
                <div class="review-avatar"></div>
                <div class="review-text">
                    <p class="review-author">Emily H.</p>
                    <p class="review-date">November 12, 2024</p>
                    <p class="review-content">"The Oceanview Retreat was everything we hoped for and more. The breathtaking views from the balcony instantly took my stress away, and the serene décor perfectly complemented the natural beauty outside. The two bathrooms were a huge plus for our group, and the pet-friendly policy meant our Labrador could join the fun! From the fully-equipped kitchen to the cozy Netflix evenings, every detail was perfection. Truly an unforgettable stay!"</p>
                </div>
            </div>
            <div class="review">
                <div class="review-avatar"></div>
                <div class="review-text">
                    <p class="review-author">Daniel K.</p>
                    <p class="review-date">November 18, 2024</p>
                    <p class="review-content">"I couldn’t get enough of the Oceanview Retreat. The panoramic sea view was mesmerizing and made every moment magical, especially during sunrise. The space was spotless and well-designed, and the modern amenities like air conditioning and wireless internet worked flawlessly. The pet-friendly atmosphere was wonderful; our cat loved lounging on the balcony! This suite felt like a dream come true—can’t recommend it enough."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-avatar"></div>
                <div class="review-text">
                    <p class="review-author">Laura P.</p>
                    <p class="review-date">November 22, 2024</p>
                    <p class="review-content">"Our stay at the Oceanview Retreat was beyond perfect. From the moment we walked in, we felt the calming energy of the ocean with its soothing views. The two-bedroom, two-bathroom setup was ideal for our family, and having Netflix and reliable Wi-Fi made downtime fun and relaxing. The balcony quickly became our favorite spot to unwind with a cup of coffee. It was a treat to bring our dog along and feel so welcomed. This place truly blends luxury with nature!"</p>
                </div>
            </div>
        </div>
    </section>

    </main>

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
   

    .input-group1 select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 50px; /* Rounded edges */
        outline: none;
        background-color: white;
        appearance: none; /* Removes default dropdown arrow styling */
        box-sizing: border-box;
    }

    .input-group1 select:focus {
        border-color: #777; /* Border color on focus */
    }

    .input-group1 {
        position: relative;
    }

    .input-group1::after {
        content: '▼'; /* Custom dropdown arrow */
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        color: #777;
    }

   
</style>
</html>



