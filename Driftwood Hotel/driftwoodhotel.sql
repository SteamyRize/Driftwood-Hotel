-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 09:07 AM
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
(10, 1, 'Portia Mae', 'portiamae@gmail.com', '0987654321', 'The Tidescape Suite', '2024-12-26', '2024-12-27', 'Cash', '123123.00', '2024-12-05 11:45:03');

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
  `room` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `payment_option` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `denied_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `denied_bookings`
--

INSERT INTO `denied_bookings` (`id`, `user_id`, `full_name`, `email`, `contact_number`, `room`, `check_in`, `check_out`, `payment_option`, `amount`, `created_at`, `denied_at`) VALUES
(1, 4, 'Mary Jane', 'zoikaderaj@yahoo.com', '0987654321', 'The Tidescape Suite', '2024-12-07', '2024-12-08', 'Paypal', '123123.00', '2024-12-06 05:12:09', '2024-12-06 05:12:16');

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

INSERT INTO `pass_books` (`id`, `user_id`, `full_name`, `email`, `contact_number`, `room`, `check_in`, `check_out`, `payment_option`, `amount`, `created_at`, `approved_at`, `checked_out_at`, `cancelled_at`) VALUES
(1, NULL, 'tae', 'Jared@gmail.com', '0987654321', 'The Oceanfront Haven', '2024-12-12', '2024-12-13', 'Credit Card', '123123.00', '2024-12-06 06:03:40', '2024-12-06 06:03:46', NULL, '2024-12-06 06:03:52'),
(2, 4, 'Mary Jane', 'maryjane@gmail.com', '0987654321', 'The Driftwood Villa', '2024-12-12', '2024-12-13', 'Paypal', '123123.00', '2024-12-06 06:08:15', '2024-12-06 06:08:25', NULL, '2024-12-06 06:08:31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `denied_bookings`
--
ALTER TABLE `denied_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pass_books`
--
ALTER TABLE `pass_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
