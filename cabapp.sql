-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 07:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `startLocation` varchar(255) NOT NULL,
  `endLocation` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `distance` int(10) NOT NULL,
  `pickupTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `assignedDriverId` int(10) NOT NULL,
  `driverFullName` varchar(255) NOT NULL,
  `driverPhone` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `callback`
--

CREATE TABLE `callback` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distance`
--

CREATE TABLE `distance` (
  `id` int(10) NOT NULL,
  `startLocation` varchar(255) NOT NULL,
  `endLocation` varchar(255) NOT NULL,
  `distance` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distance`
--

INSERT INTO `distance` (`id`, `startLocation`, `endLocation`, `distance`, `price`) VALUES
(1, 'barrackpore', 'agarpara', 13, 52),
(2, 'barrackpore', 'dunlop', 18, 72),
(3, 'dunlop', 'agarpara', 5, 20),
(4, 'agarpara', 'barrackpore', 13, 52),
(5, 'dunlop', 'barrackpore', 18, 72),
(6, 'agarpara', 'dunlop', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(8) NOT NULL,
  `fullName` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `address` varchar(225) NOT NULL,
  `license_no` bigint(30) NOT NULL,
  `car_type` varchar(30) NOT NULL,
  `car_no` varchar(25) NOT NULL,
  `preferedTime` varchar(255) NOT NULL,
  `isBooked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `fullName`, `username`, `password`, `phone`, `address`, `license_no`, `car_type`, `car_no`, `preferedTime`, `isBooked`) VALUES
(1, 'Monohar', 'Monohar', '', 898877373, 'lahore', 22455, 'SUV', '47852', 'Day', 0),
(4, 'Ratan', 'Ratan', '', 978765432, 'Banglore', 343217, 'Sedan', '9864', 'Night', 0),
(5, 'sanjay', 'sanjay', 'sanjayda', 909876854, 'Kolkata', 897442, 'MPV', '45678', 'day', 0),
(6, 'RamuChacha', 'ramuchacha', 'Ramprahad', 987656789, 'Nobody knows Lane', 7898765, 'Sedan', '7897', 'Day\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullName` varchar(225) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `walletBalance` int(10) NOT NULL DEFAULT '0',
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `isBan` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `username`, `email`, `phone`, `password`, `walletBalance`, `isAdmin`, `isBan`) VALUES
(1, 'test', 'test', 't@t.com', 12345484, 'test', 64, 0, 0),
(2, 'test2', 'test2', 'test2@t.com', 115665468, 'test2', 0, 0, 0),
(3, 'raja', 'raja', 'raja@raja.com', 0, 'raja', 0, 0, 0),
(4, 'ram', 'ram', 'ram@ram.com', 12312313, 'ram', 80, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distance`
--
ALTER TABLE `distance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `callback`
--
ALTER TABLE `callback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distance`
--
ALTER TABLE `distance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
