-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 08:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majengo_garbage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'nur', 'ptof', 'nur@majengo.com', 'nur2222');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `driver_id` int(50) DEFAULT NULL,
  `booking status` enum('pending','approved','rejected') NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `garbage_collector_id` int(50) DEFAULT NULL,
  `cleaner_id` int(50) DEFAULT NULL,
  `client_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

CREATE TABLE `cleaner` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL DEFAULT 'cleaner',
  `availability` enum('available','booked') NOT NULL DEFAULT 'available',
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `gender` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`id`, `firstname`, `lastname`, `profession`, `availability`, `email`, `password`, `account_status`, `gender`, `adress`) VALUES
(1, 'c', '', 'cleaner', 'available', '', '', 'pending', '', ''),
(2, 'd', '', 'cleaner', 'available', '', '', 'pending', '', ''),
(3, 'e', '', 'cleaner', 'available', '', '', 'pending', '', ''),
(4, 'f', '', 'cleaner', 'available', '', '', 'pending', '', ''),
(5, 'g', '', 'cleaner', 'available', '', '', 'pending', '', ''),
(6, 'h', '', 'cleaner', 'available', '', '', 'pending', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` enum('pending','approved','rejected','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `username`, `email`, `adress`, `gender`, `password`, `account_status`) VALUES
(7, 'nur', 'nur2', 'nur@majengo.com', 'nur@majengo.com', '1123 Meru', 'male', 'akdaW@#$@KWsssssaaa11', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `allocation` varchar(50) NOT NULL,
  `avaliability` enum('available','booked') NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `firstname`, `lastname`, `email`, `department`, `allocation`, `avaliability`, `password`, `account_status`) VALUES
(1, 'l', '', '', '', '', '', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `reply` varchar(50) DEFAULT NULL,
  `userid` int(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` enum('pending','read','archived') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `phonenumber`, `message`, `receiver`, `reply`, `userid`, `email`, `status`) VALUES
(3, '', '', '', '', '', 'hh', 0, 'eltonokoth59@gmail.com', 'pending'),
(8, NULL, NULL, NULL, 'hey', 'dante@hopecore.org', 'q', NULL, 'k2@hopecore.org', 'pending'),
(17, NULL, NULL, NULL, 'check drug quantity\r\n', 'ruthb@hopecore.org', 'dd', NULL, 'carson@hopecore.org', 'read'),
(22, NULL, NULL, NULL, 'hello', 'bruno@hopecore.org', NULL, NULL, 'dante@hopecore.org', 'pending'),
(23, NULL, NULL, NULL, 'jj', 'ruthb@hopecore.org', NULL, NULL, 'bruno@hopecore.org', 'pending'),
(24, NULL, NULL, NULL, 'hi\r\n', 'carson@hopecore.org', NULL, NULL, 'maryanne@hopecore.org', 'pending'),
(26, NULL, NULL, NULL, 'sssss', 'nur@majengo.com', NULL, NULL, 'nur@majengo.com', 'pending'),
(27, NULL, NULL, NULL, 'dd', 'liz@majengo.com', NULL, NULL, 'nur@majengo.com', 'pending'),
(28, NULL, NULL, NULL, 'dd', 'nur@majengo.com', NULL, NULL, 'nur@majengo.com', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `finance_manager`
--

CREATE TABLE `finance_manager` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_manager`
--

INSERT INTO `finance_manager` (`id`, `firstname`, `lastname`, `username`, `adress`, `gender`, `email`, `password`, `account_status`) VALUES
(2, 'John', 'Okoth', 'john1159', '406SIAYA', 'male', 'john@majengo.com', '#Karibu2030', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `garbage_collectors`
--

CREATE TABLE `garbage_collectors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `account_status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `profession` varchar(50) NOT NULL DEFAULT 'garbage_collector',
  `availability` enum('available','booked') NOT NULL DEFAULT 'available',
  `gender` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garbage_collectors`
--

INSERT INTO `garbage_collectors` (`id`, `firstname`, `lastname`, `email`, `password`, `account_status`, `profession`, `availability`, `gender`, `adress`) VALUES
(1, '8', '0', '0', '0', 'pending', 'garbage_collector', 'booked', '', ''),
(2, 'l', '', '', '', 'pending', 'garbage_collector', 'booked', '', ''),
(3, 'j', '', '', '', 'pending', 'garbage_collector', 'available', '', ''),
(4, 'k', '', '', '', 'pending', 'garbage_collector', 'booked', '', ''),
(5, 'l', '', '', '', 'pending', 'garbage_collector', 'available', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `userid` int(50) DEFAULT NULL,
  `amount` int(50) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_status` enum('pending','received','rejected','approved') NOT NULL DEFAULT 'pending',
  `finance_manager_id` int(50) NOT NULL,
  `request_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `transaction_id`, `userid`, `amount`, `payment_date`, `payment_status`, `finance_manager_id`, `request_id`) VALUES
(6, 'gjkfgjfklj', 7, 33737, '2022-10-25 06:12:09', 'approved', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `requested_services`
--

CREATE TABLE `requested_services` (
  `id` int(50) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `client_type` enum('members','non-members') NOT NULL DEFAULT 'members',
  `subscription_status` enum('pending','subscribed','not_subscribed','processing_request','closed') NOT NULL DEFAULT 'not_subscribed',
  `client_id` int(50) DEFAULT NULL,
  `assigned_employee_id` int(50) NOT NULL,
  `service_manager_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requested_services`
--

INSERT INTO `requested_services` (`id`, `service_name`, `client_type`, `subscription_status`, `client_id`, `assigned_employee_id`, `service_manager_id`) VALUES
(11, 'garbage_collection', 'members', 'subscribed', 7, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `expiry_date` varchar(50) NOT NULL,
  `service_status` enum('open','closed') NOT NULL DEFAULT 'open',
  `cost` varchar(50) NOT NULL,
  `service_manager_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `expiry_date`, `service_status`, `cost`, `service_manager_email`) VALUES
(1, 'garbage_collection', '2022-10-19', 'open', '33737', 'charles@majengo.com'),
(2, 'cleaning_service', '2022-10-19', 'open', '33737', 'charles@majengo.com'),
(3, 'promotional service', '2022-10-12', 'open', '0', 'mo@majengo.com');

-- --------------------------------------------------------

--
-- Table structure for table `service_manager`
--

CREATE TABLE `service_manager` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_manager`
--

INSERT INTO `service_manager` (`id`, `firstname`, `lastname`, `username`, `gender`, `adress`, `email`, `password`, `account_status`) VALUES
(2, 'charles', 'oduor', 'charles112', 'male', '1123 Nairobi', 'charles@majengo.com', 'fggjgjgj!@#AAWDK122334kaka', 'approved'),
(3, 'mohammed', 'ali', 'mo112', 'male', '1123 Nairobi', 'mo@majengo.com', 'Askjkdjfkjd112ADJDJ#@#12', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_id` (`client_id`),
  ADD UNIQUE KEY `driver_id` (`driver_id`),
  ADD KEY `cleaner_id` (`cleaner_id`) USING BTREE,
  ADD KEY `garbage_collector_id` (`garbage_collector_id`);

--
-- Indexes for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_manager`
--
ALTER TABLE `finance_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garbage_collectors`
--
ALTER TABLE `garbage_collectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `requested_services`
--
ALTER TABLE `requested_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_manager`
--
ALTER TABLE `service_manager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cleaner`
--
ALTER TABLE `cleaner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `finance_manager`
--
ALTER TABLE `finance_manager`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `garbage_collectors`
--
ALTER TABLE `garbage_collectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requested_services`
--
ALTER TABLE `requested_services`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_manager`
--
ALTER TABLE `service_manager`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`garbage_collector_id`) REFERENCES `garbage_collectors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `booking_ibfk_5` FOREIGN KEY (`cleaner_id`) REFERENCES `cleaner` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
