-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 09:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `job_title` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `education` varchar(250) NOT NULL,
  `hobbies` varchar(250) NOT NULL,
  `project` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `job_title`, `department`, `education`, `hobbies`, `project`, `image`) VALUES
(1, 'Rachel Brinkley', 'CEO', 'Management', 'MBA', 'Baking', 'Currently working on expanding our inventory!', 'SelfPhoto.jpg'),
(2, 'Charles Brinkley', 'CFO', 'Finance', 'BA in Accounting', 'Wood Craftsman', 'Working on expanding our company budget.', 'Chuck.jpg'),
(3, 'Christopher Kelly', 'IT Manager', 'Information Technology Department', 'BA in Information Technology and Minor in Computer Engineering', '3D printing', 'Currently working on inproving our sales website and the internet speed.', 'Kelly.jpg'),
(4, 'Sharon Brinkley', 'Head Sales Rep', 'Sales Departmnet', 'BA in Marketing', 'Going to the beach and laying in the sun.', 'I am inviting everyone to come by our sales booth at the National Medical Equipment Convention.', 'Sharon.png'),
(5, 'Collin Miller', 'Sales Rep', 'Sales Departmnet', 'BA in Mechanical Engineering', 'Hiking', 'I will joining Sharon at the National Medical Equipment Convention. While also closing out a major sale to VCU Hospital.', 'Collin.jpg'),
(6, 'Carol Martin', 'Machine Mechanic Manager', 'Machine Shop', 'BA in Mechanical Engineering', 'Spending time with her daughters and husband.', 'All IV infusions are getting a thorough check before going out to its new buyers.', 'Carol.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
