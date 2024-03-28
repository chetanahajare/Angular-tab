-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 10:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediafind`
--

-- --------------------------------------------------------

--
-- Table structure for table `allsession`
--

CREATE TABLE `allsession` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `device_info` varchar(255) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `session_date` date DEFAULT NULL,
  `session_records` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allsession`
--

INSERT INTO `allsession` (`id`, `userID`, `email`, `name`, `device_info`, `version`, `session_date`, `session_records`) VALUES
(1, 1, 'john@example.com', 'John Doe', 'iPhone XR', 'iOS 14.5', '2024-03-23', 150),
(2, 2, 'jane@example.com', 'Jane Smith', 'Samsung Galaxy S20', 'Android 12', '2024-03-23', 200),
(3, 3, 'michael@example.com', 'Michael Johnson', 'iPad Air', 'iOS 15', '2024-03-22', 180),
(4, 4, 'emily@example.com', 'Emily Brown', 'Google Pixel 6', 'Android 12', '2024-03-22', 220),
(5, 5, 'david@example.com', 'David Clark', 'MacBook Pro', 'macOS Monterey', '2024-03-21', 190),
(6, 6, 'amanda@example.com', 'Amanda White', 'Surface Laptop 4', 'Windows 11', '2024-03-21', 210),
(7, 7, 'robert@example.com', 'Robert Lee', 'OnePlus 9', 'Android 12', '2024-03-20', 230),
(8, 8, 'sarah@example.com', 'Sarah Taylor', 'iPhone 13', 'iOS 15', '2024-03-20', 250),
(9, 9, 'chris@example.com', 'Chris Wilson', 'Samsung Galaxy Tab S7', 'Android 12', '2024-03-19', 170),
(10, 10, 'jennifer@example.com', 'Jennifer Nguyen', 'Dell XPS 13', 'Windows 11', '2024-03-19', 280);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `state_name`, `image_url`) VALUES
(7, 'asdfgh', 'sadfgh', 'asdfgh'),
(9, 'asdfghj effksdfsdjf', 'lsdfkdfklsdfjlsjflsfjlsdfj', 'sdlkflfk.jse'),
(10, 'omkaeasfas', 'sdfgh', 'asdfgh'),
(11, 'chensadfgh', 'sdfgh', 'sdfgh'),
(12, 'ommkar', 'asdfghj', 'asdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `companyName`) VALUES
(2, 'omkars'),
(3, 'omkar'),
(4, 'dhapte'),
(5, 'mains'),
(6, 'chetana'),
(7, 'fsafasdadas');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` int(11) NOT NULL,
  `distributorsName` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no_1` varchar(20) NOT NULL,
  `phone_no_2` varchar(20) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `distributorsAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `distributorsName`, `company`, `email`, `phone_no_1`, `phone_no_2`, `city`, `province`, `distributorsAddress`) VALUES
(3, 'omkar', 'ASDFGHJ', 'ASDFGH@GMAIL.COM', 'ASDFGHJ', 'Asdfghj', 'asdfghj', 'asdfghjk', 'asdfghj'),
(4, 'sdfgh', 'aSDFGH', 'ERTGH@gmai.com', 'QWERFG', 'QWAESRDFGH', 'ASDFG', 'asdfg', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `userName`, `feedback`) VALUES
(2, 'JaneSmith', 'Could use some improvements'),
(3, 'MikeJohnson', 'Excellent experience overall'),
(4, 'EmilyBrown', 'Needs better customer support'),
(5, 'ChrisWilson', 'Fast and efficient, thank you!'),
(6, 'SarahTaylor', 'Average service, could be better'),
(7, 'DavidClark', 'Highly recommend, very helpful'),
(8, 'AmandaWhite', 'Could be more user-friendly'),
(9, 'RobertLee', 'Issues with billing, need fixing'),
(10, 'JenniferNguyen', 'Overall, satisfied with the product');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `cityName` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `cityName`, `messages`) VALUES
(2, 'JaneSmith', 'Could use some improvements'),
(3, 'MikeJohnson', 'Excellent experience overall'),
(4, 'EmilyBrown', 'Needs better customer support'),
(5, 'ChrisWilson', 'Fast and efficient, thank you!'),
(6, 'SarahTaylor', 'Average service, could be better'),
(7, 'DavidClark', 'Highly recommend, very helpful'),
(8, 'AmandaWhite', 'Could be more user-friendly'),
(9, 'RobertLee', 'Issues with billing, need fixing'),
(10, 'JenniferNguyen', 'Overall, satisfied with the product'),
(11, 'cityName', 'asdfghjkasd'),
(12, 'wert', 'asdrtyresd');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `Company` varchar(255) DEFAULT NULL,
  `SideEffects` text DEFAULT NULL,
  `MRP` decimal(10,2) DEFAULT NULL,
  `Composition` varchar(255) DEFAULT NULL,
  `Package` varchar(255) DEFAULT NULL,
  `Substitute` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ProductName`, `Company`, `SideEffects`, `MRP`, `Composition`, `Package`, `Substitute`) VALUES
(1, 'Product', 'Company ', 'No side effects reported', 25.50, 'Composition A', '10 tablets per pack', 'Substitute X'),
(2, 'Product B', 'Company Y', 'May cause drowsiness', 30.00, 'Composition B', '20 capsules per pack', 'Substitute Y'),
(3, 'Product C', 'Company Z', NULL, 15.75, 'Composition C', '30 tablets per pack', 'Substitute Z'),
(4, 'Product D', 'Company X', 'No known side effects', 12.99, 'Composition D', '50 tablets per pack', 'Substitute X'),
(5, 'Product E', 'Company Y', 'May cause headache', 18.25, 'Composition E', '100 ml bottle', 'Substitute Y'),
(6, 'Product F', 'Company Z', 'May cause nausea', 8.50, 'Composition F', '50 tablets per pack', 'Substitute Z'),
(7, 'Product G', 'Company X', 'May cause dizziness', 40.75, 'Composition G', '10 capsules per pack', 'Substitute X'),
(8, 'Product H', 'Company Y', NULL, 22.00, 'Composition H', '20 tablets per pack', 'Substitute Y'),
(9, 'Product I', 'Company Z', 'May cause stomach upset', 35.50, 'Composition I', '5 vials per pack', 'Substitute Z'),
(10, 'Product J', 'Company X', 'No side effects reported', 50.00, 'Composition J', '100 tablets per pack', 'Substitute X'),
(11, 'asdfgh', 'asdfgh', 'asdfgh', 0.00, 'asdfgh', 'aSDFGH', 'ASDFG');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `stateName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `stateName`) VALUES
(4, 'EmilyBrown'),
(5, 'ChrisWilson'),
(6, 'SarahTaylor'),
(7, 'DavidClark'),
(8, 'AmandaWhite'),
(9, 'RobertLee'),
(10, 'JenniferNguyen'),
(11, 'omkar'),
(12, 'chetana'),
(13, 'sadfghgsdg');

-- --------------------------------------------------------

--
-- Table structure for table `usertimeranalysis`
--

CREATE TABLE `usertimeranalysis` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `all_device` varchar(255) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `total_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertimeranalysis`
--

INSERT INTO `usertimeranalysis` (`id`, `userID`, `email`, `name`, `all_device`, `code`, `total_time`) VALUES
(1, 1, 'john@example.com', 'John Doe', 'iPhone XR, MacBook Pro', 'ABC123', '10:30:45'),
(2, 2, 'jane@example.com', 'Jane Smith', 'Samsung Galaxy S20, iPad Air', 'DEF456', '08:15:20'),
(3, 3, 'michael@example.com', 'Michael Johnson', 'Google Pixel 6, Surface Laptop 4', 'GHI789', '12:45:10'),
(4, 4, 'emily@example.com', 'Emily Brown', 'MacBook Pro, iPhone 13', 'JKL012', '06:55:30'),
(5, 5, 'david@example.com', 'David Clark', 'Samsung Galaxy Tab S7, Dell XPS 13', 'MNO345', '09:20:15'),
(6, 6, 'amanda@example.com', 'Amanda White', 'OnePlus 9, iPhone XR', 'PQR678', '07:40:55'),
(7, 7, 'robert@example.com', 'Robert Lee', 'Surface Laptop 4, Samsung Galaxy S20', 'STU901', '11:10:25'),
(8, 8, 'sarah@example.com', 'Sarah Taylor', 'iPad Air, OnePlus 9', 'VWX234', '05:25:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allsession`
--
ALTER TABLE `allsession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertimeranalysis`
--
ALTER TABLE `usertimeranalysis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allsession`
--
ALTER TABLE `allsession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usertimeranalysis`
--
ALTER TABLE `usertimeranalysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
