-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 03:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigning`
--

CREATE TABLE `assigning` (
  `assignDate` date DEFAULT NULL,
  `assignDescription` varchar(100) NOT NULL,
  `trainerId` int(11) DEFAULT NULL,
  `planId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberId` int(11) NOT NULL,
  `memberName` varchar(60) DEFAULT NULL,
  `memberPhone` varchar(15) DEFAULT NULL,
  `memberEmail` varchar(60) DEFAULT NULL,
  `memberPassword` varchar(20) DEFAULT NULL,
  `memberDOB` date DEFAULT NULL,
  `memberStatus` text DEFAULT NULL,
  `ownerId` int(11) DEFAULT NULL,
  `planId` int(11) DEFAULT NULL,
  `memberIc` int(9) NOT NULL,
  `trainerId` int(11) DEFAULT NULL,
  `trainerName` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberId`, `memberName`, `memberPhone`, `memberEmail`, `memberPassword`, `memberDOB`, `memberStatus`, `ownerId`, `planId`, `memberIc`, `trainerId`, `trainerName`) VALUES
(18, 'Alhadi', '01137122623', 'alhadi1998@graduate.utm.my', NULL, '2022-12-16', 'Active', NULL, 1, 2147483647, 1, ''),
(19, 'Ahmed Ali', '01137122623', 'Ahmed@gmail.com', NULL, '2022-12-05', 'Active', NULL, 1, 2147483647, 1, ''),
(20, 'Khalled', '0129323353', 'khaled@gmail.com', NULL, '2022-08-03', 'Active', NULL, 2, 1291242142, 1, NULL),
(21, 'Salah', '0122343448', 'Salah@gmail.com', NULL, '2018-01-10', 'Not Active', NULL, 1, 2147483647, 1, NULL),
(22, 'khalid', '0122233454', 'alhadi1998@graduate.utm.my', NULL, '2022-11-29', 'Active', NULL, 3, 2147483647, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownerId` int(11) NOT NULL,
  `ownerName` varchar(60) DEFAULT NULL,
  `ownerDOB` date DEFAULT NULL,
  `ownerPassword` varchar(20) DEFAULT NULL,
  `ownerEmail` varchar(60) DEFAULT NULL,
  `ownerPhone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ownerId`, `ownerName`, `ownerDOB`, `ownerPassword`, `ownerEmail`, `ownerPhone`) VALUES
(1, 'Mohamed Alhadi', '1998-03-29', '123456', 'alhadi1998@graduate.utm.my', '01137122623');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `planId` int(11) NOT NULL,
  `planName` varchar(60) NOT NULL,
  `planDescription` varchar(500) NOT NULL,
  `planDuration` varchar(15) NOT NULL,
  `planMembers` int(11) NOT NULL,
  `planCost` varchar(10) NOT NULL,
  `planTrainers` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `trainerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`planId`, `planName`, `planDescription`, `planDuration`, `planMembers`, `planCost`, `planTrainers`, `ownerId`, `trainerId`) VALUES
(1, ' Gold ', ' 3 hours each day with medium-size meal after the train session ', ' Two Months ', 20, ' 500 RM ', 2, 1, 0),
(2, 'Platinum', '3 hours each day with Large-size meal after train session', 'Four Months', 0, '600 RM', 0, 1, 0),
(3, 'Pronze', 'Two hours per day including not meal', '3 months', 10, '400', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainerId` int(11) NOT NULL,
  `trainerName` varchar(60) DEFAULT NULL,
  `trainerPhone` varchar(15) DEFAULT NULL,
  `trainerEmail` varchar(60) DEFAULT NULL,
  `trainerPassword` varchar(20) DEFAULT NULL,
  `jopType` varchar(10) DEFAULT NULL,
  `trainerDOB` date DEFAULT NULL,
  `trainerSalary` varchar(5) DEFAULT NULL,
  `yearOfExperince` varchar(5) DEFAULT NULL,
  `ownerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainerId`, `trainerName`, `trainerPhone`, `trainerEmail`, `trainerPassword`, `jopType`, `trainerDOB`, `trainerSalary`, `yearOfExperince`, `ownerId`) VALUES
(1, 'Ahmed ali ', '012526768', 'aliahmed@gmail.com', 'aliahmed', 'Full time', '2022-12-06', '344', '3 Yea', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigning`
--
ALTER TABLE `assigning`
  ADD KEY `trainerId` (`trainerId`),
  ADD KEY `planId` (`planId`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberId`),
  ADD KEY `ownerId` (`ownerId`),
  ADD KEY `planId` (`planId`),
  ADD KEY `FK_trainerId` (`trainerId`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownerId`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`planId`),
  ADD KEY `plan` (`ownerId`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainerId`),
  ADD KEY `id` (`ownerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `planId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigning`
--
ALTER TABLE `assigning`
  ADD CONSTRAINT `assigning_ibfk_1` FOREIGN KEY (`trainerId`) REFERENCES `trainer` (`trainerId`),
  ADD CONSTRAINT `planId` FOREIGN KEY (`planId`) REFERENCES `plan` (`planId`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `FK_trainerId` FOREIGN KEY (`trainerId`) REFERENCES `trainer` (`trainerId`),
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`planId`) REFERENCES `plan` (`planId`),
  ADD CONSTRAINT `ownerId` FOREIGN KEY (`ownerId`) REFERENCES `owner` (`ownerId`);

--
-- Constraints for table `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan` FOREIGN KEY (`ownerId`) REFERENCES `owner` (`ownerId`);

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `id` FOREIGN KEY (`ownerId`) REFERENCES `owner` (`ownerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
