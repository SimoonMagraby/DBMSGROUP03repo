-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 02:34 AM
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
-- Database: `dbmsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cropyield_t`
--

CREATE TABLE `cropyield_t` (
  `yearlyYield` int(50) DEFAULT NULL,
  `cropYieldID` int(50) NOT NULL,
  `farmID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crop_t`
--

CREATE TABLE `crop_t` (
  `cropName` varchar(50) NOT NULL,
  `cropType` varchar(50) NOT NULL,
  `yearlyFarmed` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `assignedFarmID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`assignedFarmID`, `userID`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `farm_t`
--

CREATE TABLE `farm_t` (
  `farmName` varchar(50) DEFAULT NULL,
  `farmID` int(11) NOT NULL,
  `farmCity` varchar(50) DEFAULT NULL,
  `farmState` varchar(50) NOT NULL,
  `farmCountry` varchar(50) DEFAULT NULL,
  `farmingPlotCount` int(11) DEFAULT NULL,
  `farmOwnerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farm_t`
--

INSERT INTO `farm_t` (`farmName`, `farmID`, `farmCity`, `farmState`, `farmCountry`, `farmingPlotCount`, `farmOwnerID`) VALUES
('mizanFarm', 1, 'dhaka', '', 'Bangladesh', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `tradeLC` varchar(50) DEFAULT NULL,
  `userID` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`tradeLC`, `userID`) VALUES
('5050abc', 2),
('5050abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE `researcher` (
  `researcherID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `institutionName` varchar(30) NOT NULL,
  `assignedFarmID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `researcher`
--

INSERT INTO `researcher` (`researcherID`, `userID`, `institutionName`, `assignedFarmID`) VALUES
(0, 2, 'NRI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `soildata`
--

CREATE TABLE `soildata` (
  `soilType` varchar(50) NOT NULL,
  `soilMoist` int(50) NOT NULL,
  `soilTemp` int(50) NOT NULL,
  `soilPH` int(50) NOT NULL,
  `farmID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soildata`
--

INSERT INTO `soildata` (`soilType`, `soilMoist`, `soilTemp`, `soilPH`, `farmID`) VALUES
('Hard', 30, 32, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userName` varchar(50) NOT NULL,
  `userPassword` varchar(11) NOT NULL,
  `userType` enum('Owner','Farmer','Researcher') NOT NULL,
  `userID` int(11) NOT NULL,
  `userEmail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `userPassword`, `userType`, `userID`, `userEmail`) VALUES
('Mr.Mizan Ahmed', '1234', 'Owner', 1, 'mizan@gmail.com'),
('Dr. Mushfiqur Alam', '6655', 'Researcher', 2, 'mushfiqDR@outlook.com'),
('Mr.Rafiq Bari', '3333', 'Farmer', 3, 'rafiq32@gmail.com'),
('simoon', '12321', 'Farmer', 7, 'simoonmagraby01@gmail.com'),
('Md. Raihan', '3333', 'Researcher', 9, 'raihan@gmail.com'),
('simoon magraby', '123444', 'Owner', 10, 'simoon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `weather_t`
--

CREATE TABLE `weather_t` (
  `weatherTemp` int(50) DEFAULT NULL,
  `weatherHumidity` int(50) DEFAULT NULL,
  `weatherWind` double DEFAULT NULL,
  `weatherTime` date NOT NULL,
  `wCity` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cropyield_t`
--
ALTER TABLE `cropyield_t`
  ADD PRIMARY KEY (`cropYieldID`),
  ADD KEY `fk_cropYield` (`farmID`);

--
-- Indexes for table `crop_t`
--
ALTER TABLE `crop_t`
  ADD PRIMARY KEY (`cropName`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD KEY `fk_farmer1` (`assignedFarmID`),
  ADD KEY `fk_farmer2` (`userID`);

--
-- Indexes for table `farm_t`
--
ALTER TABLE `farm_t`
  ADD PRIMARY KEY (`farmID`),
  ADD KEY `farm_owner` (`farmOwnerID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD KEY `fk_owner1` (`userID`);

--
-- Indexes for table `researcher`
--
ALTER TABLE `researcher`
  ADD KEY `fk_researcher1` (`assignedFarmID`),
  ADD KEY `fk_researcher2` (`userID`);

--
-- Indexes for table `soildata`
--
ALTER TABLE `soildata`
  ADD KEY `fk_weather` (`farmID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `weather_t`
--
ALTER TABLE `weather_t`
  ADD PRIMARY KEY (`weatherTime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farm_t`
--
ALTER TABLE `farm_t`
  MODIFY `farmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cropyield_t`
--
ALTER TABLE `cropyield_t`
  ADD CONSTRAINT `fk_cropYield` FOREIGN KEY (`farmID`) REFERENCES `farm_t` (`farmID`);

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `fk_farmer1` FOREIGN KEY (`assignedFarmID`) REFERENCES `farm_t` (`farmID`),
  ADD CONSTRAINT `fk_farmer2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `farm_t`
--
ALTER TABLE `farm_t`
  ADD CONSTRAINT `farm_owner` FOREIGN KEY (`farmOwnerID`) REFERENCES `owner` (`userID`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `fk_owner1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `researcher`
--
ALTER TABLE `researcher`
  ADD CONSTRAINT `fk_researcher1` FOREIGN KEY (`assignedFarmID`) REFERENCES `farm_t` (`farmID`),
  ADD CONSTRAINT `fk_researcher2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `soildata`
--
ALTER TABLE `soildata`
  ADD CONSTRAINT `fk_weather` FOREIGN KEY (`farmID`) REFERENCES `farm_t` (`farmID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
