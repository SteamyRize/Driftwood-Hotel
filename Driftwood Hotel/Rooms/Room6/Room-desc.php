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
    <title>The Shoreline Luxe Suite</title>
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
            <img src="room6.jpg" alt="Main Room Image" class="main-image">
            <div class="gallery-thumbnails">
                <img src="bathroom6.jpg" alt="Thumbnail 1" class="thumbnail">
                <img src="private pool.jpg" alt="Thumbnail 2" class="thumbnail">
            </div>
        </section>

        <!-- Unified Room Details, Description, and Amenities Section -->
        <section class="room-details-container">
            <div class="left">
                <!-- Room Name and Details Section -->
                <div class="room-header">
                    <div class="room-info">
                        <h1 class="room-name">The Shoreline Luxe Suite</h1>
                        <div class="info-boxes">
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-bed-alt" style="font-size: 36px;"></i></span><h3> 1 King Size Bedroom</h3>
                            </div>
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-bath" style="font-size: 36px;"></i></span><h3> 1 Bathrooms</h3>
                            </div>
                            <div class="info-box">
                                <span class="icon"><i class="fi fi-rr-paw" style="font-size: 36px;"></i></span><h3> 0 Pets Allowed</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apartment Description Section -->
                <div class="room-details">
                    <h2 class="section-title">Apartment Description</h2>
                    <p class="description">
                    Step into refined elegance with The Shoreline Luxe Suite, a spacious retreat where modern luxury meets the laid-back beauty of the beach. With panoramic views of the sparkling ocean and golden sands just outside your door, this suite offers a serene environment to unwind, reflect, and embrace the calming influence of the sea. Designed with sophisticated details, The Shoreline Luxe Suite provides an elevated coastal escape where every moment feels special.

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
                        <h2 class="price-range" style="font-size: 32px; margin-bottom: 10px;">$2500 - $5000</h2>
                        <hr style="color: #ddd;">
                        <p style="font-size: 20px;">
                            Short Period: $2500<br>
                            Medium Period: $4000<br>
                            Long Period: $5000
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
                            
                            <input type="hidden" name="room" value="The Shoreline Luxe Suite">
                            
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
                    <p class="review-author">Amelia R.</p>
                    <p class="review-date">August 12, 2024</p>
                    <p class="review-content">"The Shoreline Luxe Suite redefines relaxation. The king-size bed was incredibly comfortable, and waking up to the breathtaking ocean view was priceless. The suite’s stylish design and modern amenities, like the Netflix-ready TV and fast Wi-Fi, made the stay both luxurious and convenient. It’s the perfect spot for anyone looking to recharge in elegance!"</p>
                </div>
            </div>
            <div class="review">
                <div class="review-avatar"></div>
                <div class="review-text">
                    <p class="review-author">Daniel M.</p>
                    <p class="review-date">September 30, 2024</p>
                    <p class="review-content">"I was amazed by how The Shoreline Luxe Suite combined contemporary style with the natural beauty of the ocean. The balcony became my favorite spot to enjoy coffee each morning while soaking in the view. The space was immaculate, and the air conditioning was a blessing on hot afternoons. Highly recommend for anyone seeking a peaceful retreat!"</p>
                </div>
            </div>
            <div class="review">
                <div class="review-avatar"></div>
                <div class="review-text">
                    <p class="review-author">Olivia P.</p>
                    <p class="review-date">October 20, 2024</p>
                    <p class="review-content">"This suite is pure perfection. The king-size bedroom felt luxurious, and the décor was chic yet welcoming. I especially loved the spacious kitchen and the well-maintained patio where I could relax in the evenings. The proximity to the beach made every moment feel like a dream. I’ll definitely be booking again!"</p>
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



