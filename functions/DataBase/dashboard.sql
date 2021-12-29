-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2021 at 06:31 PM
-- Server version: 8.0.26
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `product_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `upc` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `manufactor` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `vendors` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `cost` double NOT NULL,
  `retail` double NOT NULL,
  `discount` double DEFAULT NULL,
  `unit_weight` double DEFAULT NULL,
  `dimension` double DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `conditions` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_type`, `brand`, `model`, `sku`, `upc`, `manufactor`, `vendors`, `cost`, `retail`, `discount`, `unit_weight`, `dimension`, `quantity`, `conditions`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, '$name', '$product_type', '$brand', '$model', '$sku', '$upc', '$manufactor', '', 213, 123, NULL, 123, 123, 213, 'new', 'assets/uploads/images/$name_Update_89.jpg', '      $description', '2021-12-23 15:34:45', '2021-12-25 06:14:05'),
(3, 'TEst', 'TEst', 'TEst2', 'TEst2', 'fake', 'asd', 'asda', NULL, 23, 13, NULL, 23, 23, 23, 'used', 'assets/uploads/images/TEst__89.jpg', '        213', '2021-12-24 16:12:54', '2021-12-24 22:09:32'),
(4, 'TEst', 'TEst2', 'TEst2', 'TEst2', 'fake', 'TEst2', 'TEst2', NULL, 213, 123, NULL, 213, 123, 123, 'refurbished', 'assets/uploads/images/TEst__89.jpg', '        123', '2021-12-24 18:02:05', '2021-12-24 22:24:42'),
(5, 'name', 'TEst2', 'TEst', 'TEst2', 'fake', 'TEst2', 'TEst2', '', 213, 123, NULL, 123, 123, 123, 'new', 'assets/uploads/images/name__89.jpg', '               asd', '2021-12-24 18:02:44', '2021-12-25 06:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Basic',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `status`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '0b4449abb7c8850fa5e5b560aadb00d0827261dc', 'Basic', 1, 0, '2021-12-24 19:08:24', '2021-12-24 19:08:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
