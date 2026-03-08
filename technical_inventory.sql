-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 04:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technical_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_archived`
--

CREATE TABLE `admin_archived` (
  `id` int(11) NOT NULL,
  `tech_number` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_archived`
--

INSERT INTO `admin_archived` (`id`, `tech_number`, `username`, `password`, `mail`, `usertype`) VALUES
(3, '202010345', 'mike reyes', '78561234', 'mike@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `disposal`
--

CREATE TABLE `disposal` (
  `id` int(11) NOT NULL,
  `item_id` varchar(6) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `item_type` varchar(30) NOT NULL,
  `itemdescription` varchar(300) NOT NULL,
  `item_color` varchar(25) NOT NULL,
  `itemprice` decimal(6,2) NOT NULL,
  `currentdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disposal`
--

INSERT INTO `disposal` (`id`, `item_id`, `itemname`, `item_type`, `itemdescription`, `item_color`, `itemprice`, `currentdate`) VALUES
(1, '#00008', 'lenovo', 'Monitor', '1920 - 1080', 'black', 2000.00, '2023-12-10 14:35:21'),
(2, '#00003', 'Ryzen 5', 'Keyboard', '* Processor: Ryzen 5 5600G* Motherboard:  Gigabyte A520M K* Videocard: On-Board Radeon Graphics* SSD: 2.5\" 256GB SSD SATA* RAM: DDR4 3200Mhz 8GB*CASE: OVATION STARGATE MATX CASE W/ LED STRIP *PSU: OVATION HP450PRO LITE 80 EFFICIENCY', 'white', 5000.00, '2023-12-10 15:32:51'),
(3, '#00011', 'CPSTECH Ct68', 'Keyboard', 'features: Wired with separate Type-C cable, 18 kinds of RGB backlight modes and 8 single color modes, Replaceable full keycaps.', 'white and black', 1200.00, '2023-12-17 03:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `item_id` varchar(6) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `item_type` varchar(30) NOT NULL,
  `itemdescription` varchar(300) NOT NULL,
  `item_color` varchar(25) NOT NULL,
  `itemprice` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `item_id`, `itemname`, `item_type`, `itemdescription`, `item_color`, `itemprice`) VALUES
(1, '#00001', 'Asus Gaming monitor', 'Cisco Router', '-ASUS Eye Care Gaming Monitor-27 inch FHD (1920 x 1080)-SmoothMotion, 1ms (MPRT)', 'black', 2000.23),
(8, '#00004', 'xenon', 'Monitor', 'mini projector', 'black', 2103.50),
(11, '#00005', 'c2900', 'Keyboard', 'f0/1 - f0/24', 'blue', 2000.00),
(15, '#00002', 'CPSTECH Ct68', 'Keyboard', '-Wired with separate Type-C cable\r\n-18 Kinds of RGB backlight modes and 9 single color modes.\r\n-Replaceable full keycaps\r\n- Real mechanical keyboard, we provide 3 kinds of switches to choose\r\n', 'white and black', 999.00),
(21, '#00006', 'hailan', 'Keyboard', 'all in one pc', 'black', 4000.00);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `tech_number` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `tech_number`, `username`, `password`, `mail`, `usertype`) VALUES
(1, '2019101234', 'hyperlurk', 'khdudcm6671', 'jasondalayan@gmail.com', 'admin'),
(7, '2019101223', 'kuyangrider', '12312312345', 'casakit@gmail.com', 'admin'),
(8, '201010324', 'Kyrie Irving', 'crossover', 'irving@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `notworking`
--

CREATE TABLE `notworking` (
  `id` int(11) NOT NULL,
  `item_id` varchar(6) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `item_type` varchar(30) NOT NULL,
  `itemdescription` varchar(300) NOT NULL,
  `item_color` varchar(25) NOT NULL,
  `itemprice` decimal(6,2) NOT NULL,
  `reportdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notworking`
--

INSERT INTO `notworking` (`id`, `item_id`, `itemname`, `item_type`, `itemdescription`, `item_color`, `itemprice`, `reportdate`) VALUES
(13, '#00007', 'c2800', 'Keyboard', 'g0/0/0 - g0/1/1', 'white', 100.00, '2023-12-10 15:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `reusable`
--

CREATE TABLE `reusable` (
  `id` int(11) NOT NULL,
  `item_id` varchar(6) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `item_type` varchar(30) NOT NULL,
  `itemdescription` varchar(300) NOT NULL,
  `item_color` varchar(25) NOT NULL,
  `itemprice` decimal(6,2) NOT NULL,
  `currentdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reusable`
--

INSERT INTO `reusable` (`id`, `item_id`, `itemname`, `item_type`, `itemdescription`, `item_color`, `itemprice`, `currentdate`) VALUES
(1, '#00004', 'xenon', 'Monitor', 'mini projector', 'black', 2103.50, '2023-12-10 05:36:10'),
(2, '#00002', 'Logitech', 'Mouse', 'office mouse ', 'black', 100.00, '2023-12-10 05:36:39'),
(3, '#00002', 'Logitech', 'Mouse', 'office mouse ', 'black', 100.00, '2023-12-10 05:37:01'),
(4, '#00005', 'c2900', 'Keyboard', 'f0/1 - f0/24', 'blue', 2000.00, '2023-12-10 07:44:21'),
(5, '#00007', 'c2800', 'Keyboard', 'g0/0/0 - g0/1/1', 'white', 100.00, '2023-12-10 07:44:23'),
(6, '#00006', 'hailan', 'Keyboard', 'all in one pc', 'black', 4000.00, '2023-12-10 07:44:24'),
(8, '#00007', 'c2800', 'Keyboard', 'g0/0/0 - g0/1/1', 'white', 100.00, '2023-12-10 08:21:49'),
(9, '#00008', 'lenovo', 'Monitor', '1920 - 1080', 'black', 2000.00, '2023-12-10 11:30:05'),
(10, '#00003', 'Ryzen 5', 'Keyboard', '* Processor: Ryzen 5 5600G* Motherboard:  Gigabyte A520M K* Videocard: On-Board Radeon Graphics* SSD: 2.5\" 256GB SSD SATA* RAM: DDR4 3200Mhz 8GB*CASE: OVATION STARGATE MATX CASE W/ LED STRIP *PSU: OVATION HP450PRO LITE 80 EFFICIENCY', 'white', 5000.00, '2023-12-10 14:51:16'),
(11, '#00006', 'hailan', 'Keyboard', 'all in one pc', 'black', 4000.00, '2023-12-17 05:45:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_archived`
--
ALTER TABLE `admin_archived`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposal`
--
ALTER TABLE `disposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notworking`
--
ALTER TABLE `notworking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reusable`
--
ALTER TABLE `reusable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_archived`
--
ALTER TABLE `admin_archived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `disposal`
--
ALTER TABLE `disposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notworking`
--
ALTER TABLE `notworking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reusable`
--
ALTER TABLE `reusable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
