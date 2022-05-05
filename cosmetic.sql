-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 01:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`) VALUES
(1, 'Huda', 2000),
(2, 'Lakme Matte', 1000),
(3, 'M.A.C', 1050),
(4, 'Loreal Paris', 850),
(5, 'Maybelline Newyork Fit Me (220)', 750),
(6, 'Becca (201)', 3300),
(7, 'L.A.Girl (1326)', 1250),
(8, 'Bodyshop (129)', 1300),
(9, 'M.A.C', 2900),
(10, 'Nykaa', 553),
(11, 'Colorbar', 621),
(12, 'Milani', 1420),
(13, 'PAC', 685),
(14, 'Vega', 155),
(15, 'Bronson', 760),
(16, 'Filone', 175),
(17, 'Lakme', 420),
(18, 'Nykaa', 549),
(19, 'Colorbar', 641),
(20, 'Swiss Beauty', 149);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `city`, `contact`, `email`, `password`) VALUES
(1, 'shreya', 'pune', 'pune', '9988675432', 'shreya@abc.com', '131f3c43b33e8ee2ea8dcf1eb5454aa9'),
(2, 'maya', 'pune', 'pune', '9881433276', 'maya@abc.com', 'b24331b1a138cde62aa1f679164fc62f'),
(3, 'akanksha', 'pune', 'pune', '7891236697', 'ak@abc.com', 'b24331b1a138cde62aa1f679164fc62f'),
(4, 'mrunal', 'pune', 'pune', '7891236697', 'mrunalabc@13.com', 'b24331b1a138cde62aa1f679164fc62f');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 1, 'Confirmed'),
(2, 1, 7, 'Confirmed'),
(4, 1, 1, 'Confirmed'),
(5, 1, 3, 'Confirmed'),
(6, 1, 7, 'Confirmed'),
(8, 1, 1, 'Confirmed'),
(9, 1, 2, 'Confirmed'),
(10, 2, 2, 'Confirmed'),
(11, 2, 7, 'Confirmed'),
(13, 3, 2, 'Confirmed'),
(14, 3, 4, 'Confirmed'),
(15, 4, 1, 'Confirmed'),
(16, 4, 3, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
