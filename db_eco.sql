-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 11:55 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eco`
--

-- --------------------------------------------------------

--
-- Table structure for table `eco`
--

CREATE TABLE `eco` (
  `ID` int(11) NOT NULL,
  `TYPE` varchar(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `IMAGE` varchar(100) NOT NULL,
  `Prince` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eco`
--

INSERT INTO `eco` (`ID`, `TYPE`, `NAME`, `DESCRIPTION`, `IMAGE`, `Prince`) VALUES
(2, 'Dell', 'Dell1', 'good', 'dell1.jpg', 100),
(4, 'dell', 'dell2', 'good 2', 'dell2.jpg', 300),
(5, 'dell', 'dell3', 'good 3', 'dell3.jpg', 100),
(6, 'dell', 'dell4', 'good 4', 'dell4.jpg', 400),
(7, 'dell', 'dell5', 'good 5', 'dell5.jpg', 350),
(8, 'dell', 'dell6', 'good6', 'dell6.jpg', 590),
(9, 'dell', 'dell7', 'good 7', 'dell7.jpg', 204),
(14, 'Asus', 'Asus4', 'good Asus4', 'Asus4.jpg', 893),
(11, 'Asus', 'Asus1 ', 'good Asus 1', 'Asus1.jpg', 300),
(12, 'Asus', 'Asus2', 'good Asus2', 'Asus2.jpg', 793),
(13, 'Asus', 'Asus3', 'good Asus3', 'Asus3.jpg', 493),
(15, 'Asus', 'Asus5', 'good Asus5', 'Asus5.jpg', 379),
(16, 'Asus', 'Asus6', 'good Asus6', 'Asus6.jpg', 400),
(17, 'MSI', 'MSI1', 'good MSI1', 'msi1.jpg', 200),
(18, 'MSI', 'MSI2', 'good MSI2', 'msi2.jpg', 896),
(19, 'msi', 'MSI3', 'good MSI3', 'msi3.jpg', 900),
(20, 'msi', 'MSI4', 'GOOD MSI4', 'msi4.png', 938),
(21, 'MSI', 'MSI5', 'GOOD MSI5', 'msi5.png', 803),
(22, 'MSI', 'MSI6', 'GOOD MSI6', 'msi6.jpg', 895);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eco`
--
ALTER TABLE `eco`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eco`
--
ALTER TABLE `eco`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
