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
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `serial_no` int(11) NOT NULL,
  `patient_role` varchar(50) NOT NULL,
  `id` varchar(15) DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `ref_doctor` varchar(50) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT NULL,
  `md1` varchar(50) DEFAULT NULL,
  `md2` varchar(50) DEFAULT NULL,
  `md3` varchar(50) DEFAULT NULL,
  `md4` varchar(50) DEFAULT NULL,
  `md5` varchar(50) DEFAULT NULL,
  `md6` varchar(50) DEFAULT NULL,
  `md7` varchar(50) DEFAULT NULL,
  `md8` varchar(50) DEFAULT NULL,
  `md9` varchar(50) DEFAULT NULL,
  `md10` varchar(50) DEFAULT NULL,
  `qty1` varchar(50) DEFAULT NULL,
  `qty2` varchar(50) DEFAULT NULL,
  `qty3` varchar(50) DEFAULT NULL,
  `qty4` varchar(50) DEFAULT NULL,
  `qty5` varchar(50) DEFAULT NULL,
  `qty6` varchar(50) DEFAULT NULL,
  `qty7` varchar(50) DEFAULT NULL,
  `qty8` varchar(50) DEFAULT NULL,
  `qty9` varchar(50) DEFAULT NULL,
  `qty10` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`serial_no`, `patient_role`, `id`, `dot`, `name`, `ref_doctor`, `dis`, `md1`, `md2`, `md3`, `md4`, `md5`, `md6`, `md7`, `md8`, `md9`, `md10`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`, `qty10`) VALUES
(1, '$patient_role', '$id', '0000-00-00', '$name', '$ref_doctor', '$dis', '$md1', '$md2', '$md3', '$md4', '$md5', '$md6', '$md7', '$md8', '$md9', '$md10', '$qty1', '$qty2', '$qty3', '$qty4', '$qty5', '$qty6', '$qty7', '$qty8', '$qty9', '$qty10'),
(2, 'student', '12', '2017-08-07', '12', 'asdf', 'cabc', 'napa', 'extra', 'a', 'a', 's', 'd', 'f', 'g', 'h', 'j', '2', '2', '1', '1', '1', '1', '', '1', '1', '1'),
(4, 'student', '1502046', '2017-08-31', 'RAHAT', 'Abdul Kalam', 'Cold fever. Rest for  3 Days. Routine temperature check. No need to panic.', 'Napa Extra', 'Antibiotic', '', '', '', '', '', '', '', '', '1 slip', '4 tablets', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
