-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 06:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `phoneNo` int(12) NOT NULL,
  `lane` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `email`, `password`, `fullName`, `phoneNo`, `lane`, `street`, `city`, `zipCode`) VALUES
(16, 'kt@gmail.com', '$2y$10$F0/j/CYqRq1dhmyma04bd.u6RaFY26Tjw1rVktaBKgKuIsaskW5S.', 'walter ', 702789670, '312 lane', '123 lane', '123 city', ''),
(21, 'osanda@gmai.com', '$2y$10$XVGIMFLgspNZ8LGJslcZpewwxuntWR8569QmWKhtEU8XH/XCa3Vxe', '', 0, '', '', '', ''),
(24, '', '$2y$10$Sq6cVsvTHfkKZVCKynik3umBSMLcAIYwcgeL5zr4LbLJDmPovulAa', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `agentreply`
--

CREATE TABLE `agentreply` (
  `reply` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agentreply`
--

INSERT INTO `agentreply` (`reply`) VALUES
('Could you please investigate this matter and provide an update on why the payment is not reflected in my account? Additionally, I would appreciate any steps I need to take to resolve this issue promptly.'),
('Could you please investigate this matter and provide an update on why the payment is not reflected in my account? Additionally, I would appreciate any steps I need to take to resolve this issue promptly.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pay` text NOT NULL,
  `age` int(4) NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `lane` text NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal code` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `firstName`, `lastName`, `email`, `phone`, `DOB`, `username`, `pay`, `age`, `gender`, `password`, `lane`, `street`, `city`, `postal code`) VALUES
(3456606, 'repi', 'repi', 'repi@gmail.com', '1111111', '1111-11-11', '', '', 0, '', '$2y$10$ejRbWbiarmBmWeYnTc8eCOasV.awyyfulMch03sljyxv1E3zav.4G', '', '', '', 0),
(3456609, 'jason', 'repi', 'dananjayanirmal2620@gmail.com', '', '', '', '', 0, '', '', '', '', '', 0),
(3456610, 'repi', 'dana', 'dananjayanirmal2620@gmail.com', '100011111111111', '', '', '', 0, '', '', '', '', '', 0),
(3456611, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0),
(3456612, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0),
(3456613, 'papa', 'papa', 'dananjayanirmal1abv@gmail.com', '', '', '', '', 0, '', '$2y$10$DKK0rDDkAVGOUBNTwGh0XecwMFxQiRLfHc6prBxMpjVvfbhUS18Cm', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `CID` int(10) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service details`
--

CREATE TABLE `service details` (
  `itemNumber` varchar(50) NOT NULL,
  `customerID` int(10) NOT NULL,
  `customerAddress` varchar(50) NOT NULL,
  `serviceDate` date NOT NULL,
  `totalAmount` mediumtext NOT NULL,
  `discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `CID` int(10) NOT NULL,
  `ticketType` text NOT NULL,
  `issue` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `file` blob NOT NULL,
  `ticketNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`CID`, `ticketType`, `issue`, `date`, `file`, `ticketNo`) VALUES
(100000001, 'payment issue', 'I recently completed a payment transaction, but the payment is not being reflected in my account. Despite receiving a confirmation from my bank that the payment was successful, the transaction is not showing up in the application, and my account balance remains unchanged.', '2024-06-11', '', 1000321);

-- --------------------------------------------------------

--
-- Table structure for table `userreply`
--

CREATE TABLE `userreply` (
  `reply` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userreply`
--

INSERT INTO `userreply` (`reply`) VALUES
(' Additionally, I would appreciate any steps I need to take to resolve this issue promptly.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `service details`
--
ALTER TABLE `service details`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3456614;

--
-- AUTO_INCREMENT for table `service details`
--
ALTER TABLE `service details`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticketNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456713;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
