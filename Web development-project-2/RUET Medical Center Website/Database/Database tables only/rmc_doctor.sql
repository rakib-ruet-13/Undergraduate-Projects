-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 07:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmcenter_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `rmc_doctor`
--

CREATE TABLE `rmc_doctor` (
  `serial` varchar(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `regular_start` varchar(30) DEFAULT NULL,
  `regular_end` varchar(50) DEFAULT NULL,
  `thursday_start` varchar(30) DEFAULT NULL,
  `thursday_end` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rmc_doctor`
--

INSERT INTO `rmc_doctor` (`serial`, `name`, `designation`, `phone`, `regular_start`, `regular_end`, `thursday_start`, `thursday_end`) VALUES
('1', 'Dr. Moksed Ali', 'Chief Medical Officer (In-charge)', '01915-997662   \r\n111(Office)\r\n', '07:30am', '1:30pm', '08:30am-', '12:30pm'),
('2', 'Dr. Farida Yasmin', 'Deputy Medical Officer', '01914-254004\r\n111(Office)\r\n', '01:00pm', '5:30pm', '12:30pm', '04:30pm'),
('3', 'Dr. Md. Azizul Islam', 'Senior Medical Officer\r\ndrazizul.ruet@gmail.com\r\n', '01712-637265\r\n01919-637265\r\n(Office)682\r\n', '05:30pm', '10:30pm', '04:30pm', '09:00pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rmc_doctor`
--
ALTER TABLE `rmc_doctor`
  ADD PRIMARY KEY (`serial`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
