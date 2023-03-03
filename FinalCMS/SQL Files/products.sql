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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
