-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2021 at 04:18 PM
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
  `name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `unit_weight` bigint NOT NULL,
  `retail` bigint NOT NULL,
  `discount` bigint NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_type`, `brand`, `model`, `sku`, `unit_weight`, `retail`, `discount`, `description`, `created_at`, `updated_at`) VALUES
(1, 'name', 'product_type', 'brand', 'model', 'sku', 123, 12312, 123123, 'description', NULL, '2021-12-13 17:31:05'),
(2, 'unitWeight', 'unitWeight', 'unitWeight', 'unitWeight', 'unitWeight', 123123, 123123, 123131, 'unitWeight', NULL, '2021-12-14 23:14:45'),
(3, 'submit', 'submit', 'submit', 'submit', 'submit', 123, 123, 123, 'submit', NULL, '2021-12-14 21:46:39'),
(4, 'name', 'product_type', 'brand', 'model', 'sku', 234, 23, 23, 'description', NULL, '2021-12-14 23:13:27'),
(5, 'submit', 'submit', 'submit', 'submit', 'submit', 123, 123, 123, 'submit', NULL, '2021-12-14 21:47:50'),
(6, 'Test', 'Test', 'Test', 'Test', 'Test', 123, 123123, 123, 'Test', NULL, '2021-12-14 23:14:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
