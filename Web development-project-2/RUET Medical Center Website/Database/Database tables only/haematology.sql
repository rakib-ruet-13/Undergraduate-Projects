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
-- Table structure for table `haematology`
--

CREATE TABLE `haematology` (
  `serial_no` int(11) NOT NULL,
  `patient_role` varchar(50) NOT NULL,
  `id` varchar(15) DEFAULT NULL,
  `lab_no` varchar(10) DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(7) DEFAULT NULL,
  `ref_doctor` varchar(50) DEFAULT NULL,
  `hemo` varchar(100) DEFAULT NULL,
  `esr` varchar(100) DEFAULT NULL,
  `tcnt` varchar(100) DEFAULT NULL,
  `wbc` varchar(50) DEFAULT NULL,
  `diffcnt` varchar(50) DEFAULT NULL,
  `neutro` varchar(100) DEFAULT NULL,
  `lympho` varchar(100) DEFAULT NULL,
  `mono` varchar(50) DEFAULT NULL,
  `eosin` varchar(100) DEFAULT NULL,
  `baso` varchar(50) DEFAULT NULL,
  `blast` varchar(50) DEFAULT NULL,
  `other` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haematology`
--

INSERT INTO `haematology` (`serial_no`, `patient_role`, `id`, `lab_no`, `dot`, `name`, `age`, `sex`, `ref_doctor`, `hemo`, `esr`, `tcnt`, `wbc`, `diffcnt`, `neutro`, `lympho`, `mono`, `eosin`, `baso`, `blast`, `other`) VALUES
(1, '$patient_role', 'id', '$lab_no', '0000-00-00', '2013/11/11', 20, '$sex', '$ref_doctor', '$hemo', '$esr', '$tcnt', '$wbc', '$diffcnt', '$neutro', '$lympho', '$mono', '$eosin', '$baso', '$blast', '$other'),
(2, '$patient_role', '$id', '$lab_no', '2013-11-11', '$name', 20, '$sex', '$ref_doctor', '$hemo', '$esr', '$tcnt', '$wbc', '$diffcnt', '$neutro', '$lympho', '$mono', '$eosin', '$baso', '$blast', '$other'),
(3, '$patient_role', '$id', '$lab_no', '0000-00-00', '$name', 0, '$sex', '$ref_doctor', '$hemo', '$esr', '$tcnt', '$wbc', '$diffcnt', '$neutro', '$lympho', '$mono', '$eosin', '$baso', '$blast', '$other'),
(4, 'student', '133023', '11', '2017-08-07', 'rakib', 23, 'male', 'fahgbre', '1', '2', '3', '4', '5', '2', '6', '7', '2', '8', '9', '10'),
(8, 'teacher', '122345', 'rtg', '1970-01-01', 'retgrae', 0, 'male', 'eratae', 're', 're', 'raet', 'rt', 'raet', 'rt', 'art', 'rt', 'taer', 'tae', 'tar', 'atr'),
(9, 'student', '1', '2', '2017-08-16', '1', 1, 'female', '1', '1', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(10, 'student', '1', '1', '1970-01-01', '1', 1, 'male', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(11, 'student', '1', '1', '1970-01-01', '1', 1, 'male', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `haematology`
--
ALTER TABLE `haematology`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `haematology`
--
ALTER TABLE `haematology`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
