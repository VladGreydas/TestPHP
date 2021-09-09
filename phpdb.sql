-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2021 at 03:04 PM
-- Server version: 8.0.25
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `WorkerID` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Age` int NOT NULL,
  `Salary` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`WorkerID`, `Name`, `Surname`, `Age`, `Salary`) VALUES
(1, 'Daniel', '', 23, 1400),
(2, 'Petro', '', 25, 700),
(3, 'Zhenya', '', 23, 900),
(4, 'Mykola', '', 23, 1000),
(5, 'Ivan', '', 23, 700),
(6, 'Kirill', '', 28, 1000),
(7, 'Mykyta', '', 26, 1500),
(8, 'Svitlana', '', 25, 1200),
(9, 'Yaroslav', '', 30, 1200),
(15, 'Van', 'Darkholme', 35, 3000),
(17, 'Vlad', 'Hoida', 21, 1500),
(18, 'Roman', '', 25, 850);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`WorkerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `WorkerID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
