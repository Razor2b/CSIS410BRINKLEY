-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 09:17 PM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`) VALUES
(1, '\"If you make a sale, moreover, to your friend or buy from your friend’s hand, you shall not wrong one another\" - Leviticus 25:14'),
(4, 'One of our newer services is to pay on layaway for your machines. There is a layaway plan for everyone. Feel free to look at our catalog or we can send one of our knowledgeable sales representatives to your office at your convenience. They can discuss every back of the process with you. One of the main questions every consumer makes is whether or not the larger machines can make it into the building. i.e. having to tear down a wall or a door to get it in the room.'),
(5, 'Razor\'s Medical Equipment is a new wave of orders, processing, and maintaining hospital equipment. We strive to make every step of owning medical equipment worry-free. With every order, we ensure that you get what you ordered and that nothing is broken. When new equipment is delivered, Razor\'s Medical Equipment will fully install and test every machine you ordered. Then, every six months, we send a small maintenance team to test every product to ensure everything is calibrated.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `items` text NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `postalcode` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `shipping_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `items`, `firstname`, `lastname`, `country`, `state`, `city`, `postalcode`, `phonenumber`, `shipping_address`) VALUES
(2, '3', 'a:1:{i:0;a:4:{s:10:\"product_id\";s:1:\"1\";s:16:\"product_quantity\";s:1:\"1\";s:12:\"product_name\";s:31:\"Vital Signs VS5 Patient Monitor\";s:13:\"product_price\";s:4:\"3100\";}}', 'first name ', 'last name', 'USA', 'State 1', 'City 1', '102088', '1234567', 'Shipping address 1');

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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Vital Signs VS5 Patient Monitor', '3100', 'Sound and light integrated alarm, Alarm parameters can be adjusted to upper or lower. Suitable for adults, pediatrics and neonates.\r\n                Applications in bedside and delivery monitoring. 12.1inches color TFT LCD screen, High brightness, Wide viewing, 8 waveforms can be\r\n                displayed on the same screen. Lightness and volume are adjustable independently. Printing of data, waveform, trend tables and trend\r\n                diagram. Multi-language interface selection: Chinese, English, Spanish, Portuguese, French, Arabic, Russian, Italian, Turkish, etc.\r\n                User-friendly and man-machine dialogue interface with pop-up menus, dialogue boxes, rotary mouse and etc. Low-power consumption design\r\n                with standby mode, rechargeable high-energy built-in battery.', 'VitalSignsMonitor.png'),
(2, 'Alaris PCU 8015LS unit with Alaris 8100 Infusion Pump Module', '1795', '8.9 inches high. 3.3 inches wide. 5.5 inches deep. 2.5 pounds weight. Rate accuracy is plus or minus 5% at rates between one and 999 mL/h,\r\n                and plus or minus 5.5% at rates less than 1 mL/H 95% of the time given that the conditions are appropriate as detailed below:The infusion\r\n                rate range is between 0.1 and 999 mL/h. The ambient temperature is 68 degrees Fahrenheit plus or minus four degrees. The source container\r\n                height is 20 inches above the top of the module. The test solution is distilled water. The distal back pressure is 0 mmHg. An 18 gauge\r\n                needle is used. The Administration Set Model is 2210. The Alaris 8100 IV Infusion Pump Module is equipped with Ultrasonic Air-in-Line\r\n                Detection: The Maximum single bolus size is equal to selectable 50, 75 or 250 nominal microliters. The KVO rate may be set from 0.1 to\r\n                20 mL/h in 0.1 mL/h increments in the System Configuration area. The factory default setting for the Keep Vein Open rate is one mL/h\r\n                if the set rate is one mL/h or greater.', 'IVinfusion.jpg'),
(3, 'All LifePak Encore Series Physio-Control LIFEPAK 15 defibrillator', '5995', 'ADAPTIV Biphasic Technology. Manual & AED External Defibrillation. 8.4\" Color LCD Screen. CPR Metronome. Noninvasive Pacing (Demand & Non-Demand).\r\n                3-Lead ECG Monitoring. 100mm Printer.', 'Defibrillator.jpg'),
(4, 'Samsung WS80A Ultrasound Machine', '33500', 'The monitor is a 23\" Wide LED touch screen. The WS80A is compatible with well over 20 ultrasound probes. Height: 1,430 ~ 1,710 mm. Width: 557 mm.\r\n                Depth: 791 ~ 860 mm. Weight with monitor: approx. 105.4 kg (232 lb.).', 'Ultrasound.jpg'),
(5, 'Lite Mobile Medication Cart', '1470', 'Made of ABS plastic and steel-plastic, easy to clean and corrosion-proof. (2) Key locks for safe storage, one lock for each side.\r\n                Steel guardrail stablilizes items during transport. (6) ABS drawers on each side (12 drawers total) slide smooth and silent with\r\n                centralized lock and plug-in labels to avoid dust (4) 5\" Heavy Duty Anti-Static castors, two locking, designed to eliminate debris\r\n                from wrapping the caster.Two keys included. 5 bins per drawer, 50 Bins total Bin dimensions: 8.5(L) x 4.25(W) x 3.5(D)(4 dividers\r\n                per bin) 200 bins total with dividers. (1)Chart Storage Bin. (2)Trash bins', 'MedicationCart.jpg'),
(6, 'Welch Allyn SureTemp Plus 692 Electronic Thermometer with Wall Mount', '316', 'Ergonomic design, comfortable to hold, easy to use, and very durable. Large back lit LCD display with location identification capability.\r\n                Includes a 60-second pulse timer for counting pulses and respirations. Mechanical or electronic security options to help prevent theft.\r\n                Interchangeable, removable probe wells reduce the risk of cross-contamination', 'WelchAllyn.jpg'),
(7, 'Hill-Rom Versacare P3200 Hospital Bed', '2490', 'Foam mattress. Low position from surface edge to floor 18\" (45.7 cm) With optional IntelliDrive power transport 22\" (55.9 cm).\r\n                High position from surface center to floor 37\" (94.0 cm). Bed must be turned on its side to pass through standard doors of 36 inches or less.', 'HospitalBed.jpg'),
(8, 'Drager Evita Infinity V500 ICU Ventilator', '9500', 'Designed for adult, pediatric, and infant use. Mobile trolley can adapt to carry oxygen cylinders. Non-invasive ventilation modes.\r\n                Full record of all patient data, alarms, and trends. RFID functionality. Flexible screen configuration. Omni-directional alarm bar.\r\n                Easy to download to a USB stock for follow-up research.', 'Ventilator.jpg'),
(9, 'PureWick Urine Collection System without Battery', '329', 'The PureWick Urine Collection System contains the suction pump, 2000cc collection canister with lid, pump tubing, collector tubing with\r\n                elbow connector, two privacy covers and a power cord. The system does not contain a rechargeable battery and needs to be plugged in at all\r\n                times when in use. The PureWick Female External Catheters are sold separately in boxes of 30. The PureWick Urine Collection System is\r\n                small at 9? x 6.5? x 11? and able to fit on most nightstands and small tables.', 'UrineCollection.jpg'),
(11, 'NxStage System One S Home Hemodialysis Dialysis Machine', '3995', 'At home or hospital use.', 'Dialysis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `access_level` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `login_timestamp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `access_level`, `firstname`, `lastname`, `username`, `email`, `password`, `login_timestamp`) VALUES
(1, 'admin', 'Rachel', 'Brinkley', 'admin', 'rbrinkley.admin@razorsmedical.com', 'admin', '2023-03-03 20:54:40'),
(2, 'publisher', 'Christopher', 'Kelly', 'publisher', 'ckelly.publisher@razorsmedical.com', 'publisher', '2023-03-03 12:24:39'),
(3, 'customer', 'Mary', 'Cecil', 'customer', 'marycecil@liberty.edu', 'customer', '2023-03-03 12:25:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
