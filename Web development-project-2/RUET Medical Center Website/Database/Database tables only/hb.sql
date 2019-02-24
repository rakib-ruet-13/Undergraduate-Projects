-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 06:59 PM
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
-- Table structure for table `hb`
--

CREATE TABLE `hb` (
  `serial_no` int(11) NOT NULL,
  `patient_role` varchar(50) NOT NULL,
  `id` varchar(15) DEFAULT NULL,
  `lab_no` varchar(10) DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(7) DEFAULT NULL,
  `ref_doctor` varchar(50) DEFAULT NULL,
  `rpg` varchar(50) DEFAULT NULL,
  `fbs` varchar(50) DEFAULT NULL,
  `ppbs` varchar(50) DEFAULT NULL,
  `ab` varchar(50) DEFAULT NULL,
  `glu` varchar(50) DEFAULT NULL,
  `cre` varchar(50) DEFAULT NULL,
  `hbai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hb`
--

INSERT INTO `hb` (`serial_no`, `patient_role`, `id`, `lab_no`, `dot`, `name`, `age`, `sex`, `ref_doctor`, `rpg`, `fbs`, `ppbs`, `ab`, `glu`, `cre`, `hbai`) VALUES
(1, '$patient_role', '$id', '$lab_no', '0000-00-00', '$name', 0, '$sex', '$ref_doctor', '$rpg', '$fbs', '$ppbs', '$ab', '$glu', '$cre', '$hbai'),
(2, 'student', '133023', '123', '2012-12-12', 'rakib', 23, 'male', 'asdfg', '1', '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hb`
--
ALTER TABLE `hb`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hb`
--
ALTER TABLE `hb`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
