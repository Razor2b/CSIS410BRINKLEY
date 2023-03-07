-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 09:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_survey`
--

CREATE TABLE `product_survey` (
  `id` int(11) NOT NULL,
  `VitalSignsMonitorBrand` varchar(250) NOT NULL,
  `VitalSignsMonitorTouch` varchar(255) NOT NULL,
  `VitalSignsMonitorMobile` varchar(250) NOT NULL,
  `VitalSignsMonitorPrinter` varchar(250) NOT NULL,
  `VitalSignsMonitorQuantity` varchar(250) NOT NULL,
  `IVinfusionBrand` varchar(250) NOT NULL,
  `IVinfusionTouch` varchar(250) NOT NULL,
  `IVinfusionMobile` varchar(250) NOT NULL,
  `IVinfusionPrinter` varchar(250) NOT NULL,
  `IVinfusionQuantity` varchar(250) NOT NULL,
  `DefibrillatorBrand` varchar(250) NOT NULL,
  `DefibrillatorTouch` varchar(250) NOT NULL,
  `DefibrillatorMobile` varchar(250) NOT NULL,
  `DefibrillatorPrinter` varchar(250) NOT NULL,
  `DefibrillatorQuantity` varchar(250) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_survey`
--

INSERT INTO `product_survey` (`id`, `VitalSignsMonitorBrand`, `VitalSignsMonitorTouch`, `VitalSignsMonitorMobile`, `VitalSignsMonitorPrinter`, `VitalSignsMonitorQuantity`, `IVinfusionBrand`, `IVinfusionTouch`, `IVinfusionMobile`, `IVinfusionPrinter`, `IVinfusionQuantity`, `DefibrillatorBrand`, `DefibrillatorTouch`, `DefibrillatorMobile`, `DefibrillatorPrinter`, `DefibrillatorQuantity`, `comments`) VALUES
(2, 'Dislike', 'Yes', 'No', 'No', '101-500', 'Like', 'Yes', 'No', 'No', '500+', 'Dislike', 'Yes', 'Yes', 'No', '0-100', 'The site is working perfectly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_survey`
--
ALTER TABLE `product_survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_survey`
--
ALTER TABLE `product_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
