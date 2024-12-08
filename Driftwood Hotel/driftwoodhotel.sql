-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 01:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driftwoodhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_bookings`
--

CREATE TABLE `approved_bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `payment_option` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approved_bookings`
--

INSERT INTO `approved_bookings` (`id`, `user_id`, `full_name`, `email`, `contact_number`, `room_id`, `room`, `check_in`, `check_out`, `payment_option`, `amount`, `created_at`, `approved_at`) VALUES
(2, 4, 'Portia Mae', 'portiamae@gmail.com', '0987654321', 3, 'The Driftwood Villa', '2024-12-08', '2024-12-09', 'Gcash', '6000.00', '2024-12-08 12:55:41', '2024-12-08 12:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `payment_option` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `denied_bookings`
--

CREATE TABLE `denied_bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `room` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `payment_option` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `denied_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `first_name`, `surname`, `email`, `message`, `created_at`) VALUES
(1, 1, 'Jared Akio', 'Dominguez', 'Jared@gmail.com', '', '2024-12-06 07:59:59'),
(2, 1, 'Jared Akio', 'Dominguez', 'Jared@gmail.com', '', '2024-12-06 08:01:11'),
(3, 1, 'Jared Akio', 'Dominguez', 'Jared@gmail.com', 'adffgg', '2024-12-06 08:02:25'),
(4, 1, 'Jared Akio', 'Dominguez', 'Jared@gmail.com', 'pogi ko sobra', '2024-12-06 08:04:34'),
(5, 1, 'Jared Akio', 'Dominguez', 'Jared@gmail.com', 'HOTDOG AHHAHAHA', '2024-12-06 08:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `pass_books`
--

CREATE TABLE `pass_books` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `room` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `payment_option` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `checked_out_at` timestamp NULL DEFAULT NULL,
  `cancelled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pass_books`
--

INSERT INTO `pass_books` (`id`, `user_id`, `full_name`, `email`, `contact_number`, `room_id`, `room`, `check_in`, `check_out`, `payment_option`, `amount`, `created_at`, `approved_at`, `checked_out_at`, `cancelled_at`) VALUES
(1, 4, 'Jared Akio', 'Jared@gmail.com', '0987654321', 1, 'The Oceanfront Haven', '2024-12-10', '2024-12-11', 'Paypal', '123123.00', '2024-12-08 12:23:58', '2024-12-08 12:24:05', NULL, '2024-12-08 12:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `room_name` varchar(100) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('Available','Occupied') NOT NULL DEFAULT 'Available',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `room_name`, `room_type`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Oceanfront Haven', 'Suite', '2000.00', 'Available', '2024-12-08 12:23:14', '2024-12-08 12:52:05'),
(2, 2, 'The Tidescape Suite', 'Suite', '2000.00', 'Available', '2024-12-08 12:23:14', '2024-12-08 12:23:14'),
(3, 3, 'The Driftwood Villa', 'Villa', '2500.00', 'Occupied', '2024-12-08 12:23:14', '2024-12-08 12:55:49'),
(4, 4, 'The Oceanview Retreat', 'Suite', '2000.00', 'Available', '2024-12-08 12:23:14', '2024-12-08 12:23:14'),
(5, 5, 'The Coastal Breeze Suite', 'Suite', '2000.00', 'Available', '2024-12-08 12:23:14', '2024-12-08 12:23:14'),
(6, 6, 'The Shoreline Luxe Suite', 'Suite', '2500.00', 'Available', '2024-12-08 12:23:14', '2024-12-08 12:23:14'),
(7, 7, 'The Pearl Suite', 'Suite', '3000.00', 'Available', '2024-12-08 12:23:14', '2024-12-08 12:23:14'),
(8, 8, 'The Driftwood Loft', 'Loft', '3000.00', 'Available', '2024-12-08 12:23:14', '2024-12-08 12:23:14'),
(9, 9, 'The Oceanic Sanctuary', 'Loft', '3500.00', 'Available', '2024-12-08 12:23:14', '2024-12-08 12:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Mary Jane', 'maryjane@gmail.com', '$2y$10$EqH2vHInhZ4BUTIqz83UsO4ujvkdgXOGtRoX9Rz146F6lu2y.V8/u', '2024-11-28 14:05:56'),
(4, 'Jared', 'Jared@gmail.com', '$2y$10$QpGMt7tGMSr.LpwYCBZoqOCLgCk7uDyLLnI90GU0qVia/y1sxM.Cu', '2024-11-28 16:36:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved_bookings`
--
ALTER TABLE `approved_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `denied_bookings`
--
ALTER TABLE `denied_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pass_books`
--
ALTER TABLE `pass_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved_bookings`
--
ALTER TABLE `approved_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `denied_bookings`
--
ALTER TABLE `denied_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pass_books`
--
ALTER TABLE `pass_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approved_bookings`
--
ALTER TABLE `approved_bookings`
  ADD CONSTRAINT `approved_bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `denied_bookings`
--
ALTER TABLE `denied_bookings`
  ADD CONSTRAINT `denied_bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pass_books`
--
ALTER TABLE `pass_books`
  ADD CONSTRAINT `pass_books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `move_to_pass_books` ON SCHEDULE EVERY 1 DAY STARTS '2024-12-05 20:15:30' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
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
    END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
