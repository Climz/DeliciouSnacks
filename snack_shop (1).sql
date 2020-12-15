-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 06:55 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snack_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `p_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `p_type`) VALUES
(1, 'Pringles со вкусом морской соли и зелени', 299, 'crisps'),
(2, 'Pringles со вкусом краба', 199, 'crisps'),
(3, 'Pringles со вкусом паприки', 199, 'crisps'),
(4, 'Pringles original', 159, 'crisps'),
(5, 'Pringles со вкусом сыра', 159, 'crisps'),
(6, 'Pringles со вкусом медовой горчицы', 259, 'crisps'),
(7, 'Pringles со вкусом жареной говядины и горчицы', 299, 'crisps'),
(8, 'Pringles со вкусом сметаны и лука', 159, 'crisps'),
(9, 'Lays белые грибы со сметаной', 69, 'crisps'),
(10, 'Lays strongs охотничьи колбаски', 89, 'crisps'),
(11, 'Lays рифленые паприка', 99, 'crisps'),
(12, 'Lays сметана и зелень', 59, 'crisps'),
(13, 'Lays паприка', 129, 'crisps'),
(14, 'Dr. pepper cherry vanilla', 149, 'soda'),
(15, 'Dr. pepper cherry', 129, 'soda'),
(16, 'Dr. pepper vanilla float', 129, 'soda'),
(17, 'Dr. pepper', 99, 'soda'),
(18, 'Heady Topper', 730, 'beer'),
(19, 'Dark Lord Russian Imperial Stout', 850, 'beer'),
(20, 'Zombie Dust', 299, 'beer'),
(21, 'Blanc', 89, 'beer'),
(22, 'Сухогруз кальмар сушеный', 120, 'beer\'s snacks'),
(23, 'Сухогруз кольца кальмара', 130, 'beer\'s snacks'),
(34, 'Dr. pepper zero', 129, 'soda'),
(36, 'Pringles со вкусом кетчука', 159, 'crisps');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `first_name`, `last_name`, `phone`, `registration_time`, `password`) VALUES
(68, '1@f.f', '1', '1', 0, '2020-12-13 10:49:09', '8fa14cdd754f91cc6554c9e71929cce7'),
(69, 'f@f.f', 'f', 'f', 0, '2020-12-13 19:40:57', '8fa14cdd754f91cc6554c9e71929cce7'),
(70, 'ha@f.f', 'Иван', 'Колобухов', 0, '2020-12-14 12:37:12', '8fa14cdd754f91cc6554c9e71929cce7');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Added To Cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `item_id`, `status`) VALUES
(27, 69, 18, 'Confirmed'),
(28, 69, 23, 'Confirmed'),
(29, 69, 19, 'Confirmed');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
