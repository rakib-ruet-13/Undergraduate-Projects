-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 07:02 PM
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
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `serial_no` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `roll` varchar(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `image` blob,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`serial_no`, `name`, `roll`, `dob`, `blood`, `contact`, `image`, `status`) VALUES
(2, 'MD Masum Billah', '133000', '1994-12-12', 'B+', '01511111111', NULL, NULL),
(1, 'Rakibul Hassan', '133023', '1995-11-27', 'B+', '01846207019', NULL, NULL),
(4, 'Tabeen', '133028', '1994-08-06', 'O-', '01XXXXXXXXX', NULL, NULL),
(3, 'Golam Raisul Alam', '133093', '1994-11-11', 'B+', '01911111111', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`roll`),
  ADD UNIQUE KEY `serial_no` (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
