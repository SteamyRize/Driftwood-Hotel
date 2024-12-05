-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 01:47 PM
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

INSERT INTO `approved_bookings` (`id`, `user_id`, `full_name`, `email`, `contact_number`, `room`, `check_in`, `check_out`, `payment_option`, `amount`, `created_at`, `approved_at`) VALUES
(5, 4, 'Mary Jane', 'zoikaderaj@yahoo.com', '0987654321', 'The Tidescape Suite', '2024-12-26', '2024-12-27', 'Paypal', '123123.00', '2024-12-05 07:48:01', '2024-12-05 08:02:43'),
(6, 4, 'tae', 'Jared@gmail.com', '0987654321', 'The Driftwood Villa', '2024-12-28', '2024-12-29', 'Paypal', '99999999.99', '2024-12-05 08:03:21', '2024-12-05 08:03:45'),
(7, 4, 'Portia Mae', 'portiamae@gmail.com', '0987654321', 'The Oceanfront Haven', '2024-12-03', '2024-12-04', 'Paypal', '123123.00', '2024-12-05 12:24:23', '2024-12-05 12:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `room` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `payment_option` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `full_name`, `email`, `contact_number`, `room`, `check_in`, `check_out`, `payment_option`, `amount`, `created_at`) VALUES
(9, 4, 'Jared Akio', 'Jared@gmail.com', '0987654321', 'The Shoreline Luxe Suite', '2024-12-19', '2024-12-21', 'Gcash', '123123.00', '2024-12-05 11:41:51'),
(10, 1, 'Portia Mae', 'portiamae@gmail.com', '0987654321', 'The Tidescape Suite', '2024-12-26', '2024-12-27', 'Cash', '123123.00', '2024-12-05 11:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `pass_books`
--

CREATE TABLE `pass_books` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `room` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `payment_option` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `checked_out_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `pass_books`
--
ALTER TABLE `pass_books`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pass_books`
--
ALTER TABLE `pass_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
