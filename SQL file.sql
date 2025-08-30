-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 01:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `admin_name` varchar(15) NOT NULL,
  `admin_pass` varchar(15) NOT NULL,
  `email` varchar(15) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`, `email`, `phone`, `last_login`) VALUES
(12451, 'admin', '12345', 'admin@123', '1234567890', '2023-11-21 09:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) DEFAULT NULL,
  `rating` varchar(6) DEFAULT NULL,
  `email` varchar(15) NOT NULL,
  `comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `rating`, `email`, `comment`) VALUES
('i5', 'good', 'admi455@gmail.c', 'jdetj'),
('bbeg', 'good', 'egeb@gmail.com', 'wrg'),
('gweg', 'bad', 'gw@gmail.com', 'gwrg'),
('bbh', 'good', 'ram@123', 'wgw'),
('wge', 'good', 'ytteetjas9960@g', 'dfh'),
('qaefgq', 'bad', 'yttejas9960@gma', 'asgwe');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `card_number` int(6) NOT NULL,
  `fname` varchar(10) DEFAULT NULL,
  `mname` varchar(10) DEFAULT NULL,
  `lname` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_self` varchar(11) NOT NULL,
  `relatives_phone` varchar(11) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `aadharnumber` varchar(12) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `bloodgroup` varchar(5) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `last_hospital_visit` varchar(25) DEFAULT NULL,
  `o2_level` int(3) DEFAULT NULL,
  `sugar-level` int(3) DEFAULT NULL,
  `blood_pressure` varchar(10) DEFAULT NULL,
  `allergy` varchar(20) DEFAULT NULL,
  `operations` varchar(50) DEFAULT NULL,
  `doctor_name` varchar(25) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`card_number`, `fname`, `mname`, `lname`, `address`, `phone_self`, `relatives_phone`, `birthdate`, `aadharnumber`, `email`, `bloodgroup`, `weight`, `last_hospital_visit`, `o2_level`, `sugar-level`, `blood_pressure`, `allergy`, `operations`, `doctor_name`, `password`) VALUES
(4570, 'RAM', 'SHAM', 'GARJE', 'shirram colony alamgir road bhingar ahmednagar', '9960916335', '9421590998', '2023-10-31', '547845745854', 'ramfe@123', ' ', 70, '', 0, 0, '', '', '', '', 'tejasm'),
(6838, 'TEJAS', 'CHANDRESHE', 'BAKARE', 'shirram colony alamgir road bhingar ahmednagar', '1234567890', '9876543210', '2023-11-14', '272129451554', 'tejasbakare9421@gmai', ' ', 80, '', 0, 0, '125/10', ' there is no algerie', ' there is no operations', 'yash', 'tejas@123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `hospital_id` int(5) NOT NULL,
  `hospital_name` varchar(20) DEFAULT NULL,
  `hospital_phone` varchar(11) DEFAULT NULL,
  `hospital_address` varchar(50) DEFAULT NULL,
  `hospital_password` varchar(15) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`hospital_id`, `hospital_name`, `hospital_phone`, `hospital_address`, `hospital_password`, `update_date`) VALUES
(656, 'shivam', '2147483647', 'pune', '12345', '2023-11-21 09:18:48'),
(4584, 'anuuuu', '4512457458', 'mumbai', 'mumbai', '2023-11-25 15:17:21'),
(20001, 'Mhaske ', '2147483647', 'Bhingar, Ahmednagar, Maharashtra 414001', '12345', '2023-10-03 14:46:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`),
  ADD UNIQUE KEY `admin_pass` (`admin_pass`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`card_number`),
  ADD UNIQUE KEY `phone_self` (`phone_self`),
  ADD UNIQUE KEY `relatives_phone` (`relatives_phone`),
  ADD UNIQUE KEY `aadharnumber` (`aadharnumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`hospital_id`),
  ADD UNIQUE KEY `hospital_name` (`hospital_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12453;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `hospital_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
