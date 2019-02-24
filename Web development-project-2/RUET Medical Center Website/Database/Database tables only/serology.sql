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
-- Table structure for table `serology`
--

CREATE TABLE `serology` (
  `serial_no` int(11) NOT NULL,
  `patient_role` varchar(50) NOT NULL,
  `id` varchar(15) DEFAULT NULL,
  `lab_no` varchar(10) DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(7) DEFAULT NULL,
  `ref_doctor` varchar(50) DEFAULT NULL,
  `too` varchar(50) DEFAULT NULL,
  `th` varchar(50) DEFAULT NULL,
  `ao` varchar(50) DEFAULT NULL,
  `ah` varchar(50) DEFAULT NULL,
  `bo` varchar(50) DEFAULT NULL,
  `bh` varchar(50) DEFAULT NULL,
  `ox2` varchar(50) DEFAULT NULL,
  `ox19` varchar(50) DEFAULT NULL,
  `oxk` varchar(50) DEFAULT NULL,
  `abo` varchar(50) DEFAULT NULL,
  `rh` varchar(50) DEFAULT NULL,
  `hb` varchar(50) DEFAULT NULL,
  `kal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serology`
--

INSERT INTO `serology` (`serial_no`, `patient_role`, `id`, `lab_no`, `dot`, `name`, `age`, `sex`, `ref_doctor`, `too`, `th`, `ao`, `ah`, `bo`, `bh`, `ox2`, `ox19`, `oxk`, `abo`, `rh`, `hb`, `kal`) VALUES
(4, '$patient_role', '$id', '$lab_no', '0000-00-00', '$name', 0, '$sex', '$ref_doctor', '$to', '$th', '$ao', '$ah', '$bo', '$bh', '$ox2', '$ox19', '$oxk', '$abo', '$rh', '$hb', '$kal'),
(7, 'student', '133023', '2', '2017-08-09', 'dsf', 12, 'male', 'drgf', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(8, 'student', '12', '12', '2017-08-07', '12', 12, 'male', '1221', '12', '12', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serology`
--
ALTER TABLE `serology`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serology`
--
ALTER TABLE `serology`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
