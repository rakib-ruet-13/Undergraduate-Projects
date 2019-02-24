-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 06:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_tab`
--

CREATE TABLE `patient_tab` (
  `Name` varchar(25) NOT NULL,
  `Phn_no` varchar(25) NOT NULL,
  `code_no` varchar(25) NOT NULL,
  `Age` int(25) NOT NULL,
  `Test_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_tab`
--

INSERT INTO `patient_tab` (`Name`, `Phn_no`, `code_no`, `Age`, `Test_name`) VALUES
('Masum', '01718771003', '664890', 0, ''),
('Masum', '01718771003', '694873', 22, ''),
('Masum', '01718771003', '117725', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '488028', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '683997', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '873212', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '212116', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '744738', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '777335', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '858305', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '613031', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '391280', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '883257', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '821381', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '633592', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '651886', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '134098', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '223494', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '512132', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '848669', 25, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '951868', 25, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '894939', 25, 'ECG'),
('Masum', '01718771003', '053855', 25, 'ECG'),
('Masum', '01718771003', '167034', 25, 'ECG'),
('Masum', '01718771003', '332185', 25, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '731869', 25, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '728402', 25, 'ECG,BLOOD TEST'),
('Asik', '01718771003', '618593', 22, 'ECG'),
('Asik', '01718771003', '703595', 22, 'ECG'),
('Asik', '01718771003', '719029', 22, 'ECG'),
('Asik', '01718771003', '949671', 22, 'ECG'),
('Masum', '01718771003', '772246', 22, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '847204', 22, 'ECG,BLOOD TEST'),
('', '', '975839', 0, ''),
('Masum', '01718771003', '071813', 25, 'ECG,BLOOD TEST'),
('Masum', '', '606773', 25, 'ECG,BLOOD TEST'),
('Masum', '01718771003', '079524', 25, 'ECG,BLOOD TEST'),
('Asik', '01718771003', '553560', 25, 'ECG,BLOOD TEST'),
('Asik', '01718771003', '355112', 25, 'ECG,BLOOD TEST'),
('Asik', '01718771003', '347958', 25, 'ECG'),
('Asik', '01718771003', '150213', 22, 'ECG'),
('masum', 'yy78', '280978', 65, 'ecg'),
('masum', 'yy78', '173394', 65, 'ecg'),
('', '', '395668', 0, ''),
('', '', '313126', 0, ''),
('', '', '357419', 0, ''),
('', '', '391039', 0, ''),
('rakib', '01846207019', '693312', 20, 'urine');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
