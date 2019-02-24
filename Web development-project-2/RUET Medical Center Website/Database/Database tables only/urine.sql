-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 07:03 PM
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
-- Table structure for table `urine`
--

CREATE TABLE `urine` (
  `serial_no` int(11) NOT NULL,
  `patient_role` varchar(50) NOT NULL,
  `id` varchar(15) DEFAULT NULL,
  `lab_no` varchar(10) DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(7) DEFAULT NULL,
  `ref_doctor` varchar(50) DEFAULT NULL,
  `quan` varchar(50) DEFAULT NULL,
  `col` varchar(50) DEFAULT NULL,
  `app` varchar(50) DEFAULT NULL,
  `sed` varchar(50) DEFAULT NULL,
  `spe` varchar(50) DEFAULT NULL,
  `rea` varchar(50) DEFAULT NULL,
  `php` varchar(50) DEFAULT NULL,
  `al` varchar(50) DEFAULT NULL,
  `su` varchar(50) DEFAULT NULL,
  `bi` varchar(50) DEFAULT NULL,
  `cal` varchar(50) DEFAULT NULL,
  `ap` varchar(50) DEFAULT NULL,
  `tp` varchar(50) DEFAULT NULL,
  `ep` varchar(50) DEFAULT NULL,
  `pu` varchar(50) DEFAULT NULL,
  `rbc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urine`
--

INSERT INTO `urine` (`serial_no`, `patient_role`, `id`, `lab_no`, `dot`, `name`, `age`, `sex`, `ref_doctor`, `quan`, `col`, `app`, `sed`, `spe`, `rea`, `php`, `al`, `su`, `bi`, `cal`, `ap`, `tp`, `ep`, `pu`, `rbc`) VALUES
(1, '$patient_role', '$id', '$lab_no', '0000-00-00', '$name', 0, '$sex', '$ref_doctor', '$quan', '$col', '$app', '$sed', '$spe', '$rea', '$php', '$al', '$su', '$bi', '$cal', '$ap', '$tp', '$ep', '$pu', '$rbc'),
(2, 'student', '103915', '1', '2017-08-22', '21', 21, 'male', '123', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(3, 'student', '12', '1', '2017-08-16', '12', 12, 'male', '12', '1', '2', '3', '4', '5', '1', '2', '3', '4', '5', '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urine`
--
ALTER TABLE `urine`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urine`
--
ALTER TABLE `urine`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
