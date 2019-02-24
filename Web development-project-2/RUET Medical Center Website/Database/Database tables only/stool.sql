-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 07:01 PM
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
-- Table structure for table `stool`
--

CREATE TABLE `stool` (
  `serial_no` int(11) NOT NULL,
  `patient_role` varchar(50) NOT NULL,
  `id` varchar(15) DEFAULT NULL,
  `lab_no` varchar(10) DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(7) DEFAULT NULL,
  `ref_doctor` varchar(50) DEFAULT NULL,
  `am` varchar(50) DEFAULT NULL,
  `con` varchar(50) DEFAULT NULL,
  `col` varchar(50) DEFAULT NULL,
  `mu` varchar(50) DEFAULT NULL,
  `bl` varchar(50) DEFAULT NULL,
  `hel` varchar(50) DEFAULT NULL,
  `re` varchar(50) DEFAULT NULL,
  `oc` varchar(50) DEFAULT NULL,
  `red` varchar(50) DEFAULT NULL,
  `rbc` varchar(50) DEFAULT NULL,
  `pu` varchar(50) DEFAULT NULL,
  `mac` varchar(50) DEFAULT NULL,
  `veg` varchar(50) DEFAULT NULL,
  `mus` varchar(50) DEFAULT NULL,
  `sta` varchar(50) DEFAULT NULL,
  `cha` varchar(50) DEFAULT NULL,
  `flo` varchar(50) DEFAULT NULL,
  `pro` varchar(50) DEFAULT NULL,
  `his` varchar(50) DEFAULT NULL,
  `coli` varchar(50) DEFAULT NULL,
  `gia` varchar(50) DEFAULT NULL,
  `al` varchar(50) DEFAULT NULL,
  `ad` varchar(50) DEFAULT NULL,
  `tt` varchar(50) DEFAULT NULL,
  `lar` varchar(50) DEFAULT NULL,
  `other` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stool`
--

INSERT INTO `stool` (`serial_no`, `patient_role`, `id`, `lab_no`, `dot`, `name`, `age`, `sex`, `ref_doctor`, `am`, `con`, `col`, `mu`, `bl`, `hel`, `re`, `oc`, `red`, `rbc`, `pu`, `mac`, `veg`, `mus`, `sta`, `cha`, `flo`, `pro`, `his`, `coli`, `gia`, `al`, `ad`, `tt`, `lar`, `other`) VALUES
(1, '$patient_role', '$id', '$lab_no', '0000-00-00', '$name', 0, '$sex', '$ref_doctor', '$am', '$con', '$col', '$mu', '$bl', '$hel', '$re', '$oc', '$red', '$rbc', '$pu', '$mac', '$veg', '$mus', '$sta', '$cha', '$flo', '$pro', '$his', '$coli', '$gia', '$al', '$ad', '$tt', '$lar', '$other'),
(4, '12', '12', '1', '2017-08-15', '12', 12, '12', '12', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stool`
--
ALTER TABLE `stool`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stool`
--
ALTER TABLE `stool`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
