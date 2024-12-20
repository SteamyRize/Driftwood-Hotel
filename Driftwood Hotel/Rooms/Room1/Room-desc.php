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
    <title>The Oceanfront Haven</title>
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
            <img src="bed1.jpg" alt="Main Room Image" class="main-image">
            <div class="gallery-thumbnails">
                <img src="bathroom1.jpg" alt="Thumbnail 1" class="thumbnail">
                <img src="kitchen1.jpg" alt="Thumbnail 2" class="thumbnail">
            </div>
        </section>

        <!-- Unified Room Details, Description, and Amenities Section -->
        <section class="room-details-container">
            <div class="left">
                <!-- Room Name and Details Section -->
                <div class="room-header">
                    <div class="room-info">
                        <h1 class="room-name">The Oceanfront Haven</h1>
                        <div class="info-boxes">
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-bed-alt" style="font-size: 36px;"></i></span><h3> 1 Bedrooms</h3>
                            </div>
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-bath" style="font-size: 36px;"></i></span><h3> 1 Bathrooms</h3>
                            </div>
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-paw" style="font-size: 36px;"></i></span><h3> 2 Pets Allowed</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apartment Description Section -->
                <div class="room-details">
                    <h2 class="section-title">Apartment Description</h2>
                    <p class="description">

                    Indulge in the ultimate beach escape with our luxurious Oceanview Suite, where modern elegance meets the serene beauty of the coastline. This spacious room features floor-to-ceiling windows that open up to breathtaking views of the turquoise waters and soft sandy beaches, ensuring every moment spent here is a feast for the senses.

                    
                    </p>
                </div>

                <!-- Offered Amenities Section -->
                <div class="amenities">
                    <h2 class="section-title">Offered Amenities</h2>
                    <div class="amenities-list">
                        <div class="left">
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-knife-kitchen" style="font-size: 28px;"></i></span> <h3>Air Conditon</h3>
                            </div>
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-screen" style="font-size: 32px;"></i></span> <h3>Free wireless internet</h3>
                            </div>
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-washer" style="font-size: 32px;"></i></span> <h3>Washer</h3>
                            </div>
                        </div>
                        
                        <div class="light">
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-snowflakes" style="font-size: 32px;"></i></span> <h3>Balcony</h3>
                            </div>

                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-wifi" style="font-size: 32px;"></i></span> <h3>Bathroom</h3>
                            </div>
                            <div class="amenities-box">
                                <span class="icon"><i class="fi fi-rr-balcony" style="font-size: 32px;"></i></span> <h3>Kitchen</h3>
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
                            
                        <input type="hidden" name="room" value="The Oceanfront Haven">
                        <input type="hidden" name="room_id" value="1">
                        
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
                    <p class="review-author">Sophia M.</p>
                    <p class="review-date">April 21, 2023</p>
                    <p class="review-content">"The Oceanview Suite was absolutely stunning. The moment we walked in, we were greeted by panoramic views of the turquoise waters – it was like stepping into paradise! The room itself was spacious, modern, and tastefully decorated with a calming coastal theme. The floor-to-ceiling windows made us feel like we were right on the beach, and we spent hours just soaking in the beauty. Every morning, I woke up to the sound of waves crashing and had coffee on the balcony, watching the sun rise over the ocean. The attention to detail in this suite really made it a luxurious retreat. Highly recommend for anyone looking for a peaceful and unforgettable beach escape!"</p>
                </div>
            </div>
            <div class="review">
                <div class="review-avatar"></div>
                <div class="review-text">
                    <p class="review-author">David R.</p>
                    <p class="review-date">July 12, 2023</p>
                    <p class="review-content">"I can't say enough good things about the Oceanview Suite. From the moment we arrived, it felt like a true retreat. The design of the room is impeccable – sleek, modern, and perfectly suited to the beachside location. The highlight, of course, was the view. The ocean stretched out before us, and we felt completely immersed in nature. We enjoyed spending time on the balcony, sipping drinks and watching the waves roll in. The room had every amenity you could think of, making our stay extra comfortable. Whether you're coming for a romantic getaway or a relaxing solo trip, this suite has everything you need to unwind in luxury."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-avatar"></div>
                <div class="review-text">
                    <p class="review-author">Emma K.</p>
                    <p class="review-date">May 2, 2023</p>
                    <p class="review-content">"If you're looking for a truly magical escape, the Oceanview Suite is the place to be. The combination of modern elegance and the soothing coastal atmosphere is perfection. The views were just breathtaking – every time I looked out the window, I felt like I was in a postcard. The space was incredibly spacious, and the decor was chic and sophisticated, yet cozy. I especially loved the large windows, which made the room feel so open and airy. The whole experience was like living in a dream, with the beach at our doorstep and every detail thoughtfully curated for relaxation. I can't wait to return!"</p>
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



