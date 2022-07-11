-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2021 at 01:03 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alpaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bookings`
--

CREATE TABLE `Bookings` (
  `BookingId` int(10) NOT NULL,
  `ClientName` varchar(100) NOT NULL,
  `EventName` char(35) NOT NULL,
  `TicketNumber` int(4) NOT NULL,
  `Status` varchar(255) NOT NULL COMMENT 'Complete/Incomplete',
  `ClientEmail` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bookings`
--

INSERT INTO `Bookings` (`BookingId`, `ClientName`, `EventName`, `TicketNumber`, `Status`, `ClientEmail`) VALUES
(1, 'Joe', 'Cheese Derby', 1, 'Complete', 'Joe@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `Cheese`
--

CREATE TABLE `Cheese` (
  `id` int(4) NOT NULL,
  `cheeseName` varchar(20) NOT NULL,
  `texture` varchar(4) NOT NULL,
  `country` varchar(3) NOT NULL,
  `strength` int(1) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Cheese`
--

INSERT INTO `Cheese` (`id`, `cheeseName`, `texture`, `country`, `strength`, `price`) VALUES
(1, 'Brie Larson', 'Hard', 'AUS', 5, 100),
(2, 'Camem Burt', 'Soft', 'GBR', 3, 30),
(3, 'Cheddah', 'Hard', 'TUR', 2, 70),
(4, 'Is That Mozzarella', 'Soft', 'ESP', 1, 15),
(5, 'It\'s All Gouda', 'Soft', 'SRB', 4, 28),
(6, 'Parmis Sean', 'Hard', 'NOR', 3, 29),
(7, 'Get Feta', 'Soft', 'GRC', 3, 11),
(8, 'Emm-Menthol', 'Hard', 'FRA', 1, 50),
(9, 'Masked Capone', 'Soft', 'FRA', 1, 20),
(10, 'Who\'s There Gruyere', 'Soft', 'AUS', 2, 11),
(11, 'Goat Bleat Cheese', 'Soft', 'BMU', 4, 15),
(12, 'Rocker Ford', 'Soft', 'FRA', 4, 33),
(23, 'Alpaca\'s Home Tested', 'Soft', 'SPN', 1, 10),
(24, 'final cheeses', 'soft', 'GBR', 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `EventId` int(10) NOT NULL,
  `eventName` char(35) NOT NULL,
  `date` date NOT NULL,
  `time` time(4) NOT NULL,
  `duration` int(10) NOT NULL,
  `location` char(35) NOT NULL,
  `AvailableTickets` int(11) DEFAULT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`EventId`, `eventName`, `date`, `time`, `duration`, `location`, `AvailableTickets`, `Price`) VALUES
(1, 'Cherry\'s Cheese Blowout', '2021-03-26', '10:30:30.0000', 5, 'Kingston University', 30, 50),
(2, 'Jerry\'s Cheese Rollout', '2021-04-25', '19:30:30.0000', 2, 'Taco Bell', 8, 100),
(4, 'Cheese Derby', '2022-11-30', '11:50:00.0000', 4, 'Under the Thames', 3, 75);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `FullName` varchar(100) DEFAULT NULL,
  `Email` varchar(70) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PostCode` varchar(6) NOT NULL,
  `City` varchar(40) DEFAULT NULL,
  `County` varchar(40) NOT NULL,
  `EventBooking` int(4) NOT NULL COMMENT 'get ticket number from booking and available ticket from event '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bookings`
--
ALTER TABLE `Bookings`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `Cheese`
--
ALTER TABLE `Cheese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`EventId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bookings`
--
ALTER TABLE `Bookings`
  MODIFY `BookingId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Cheese`
--
ALTER TABLE `Cheese`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `EventId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
