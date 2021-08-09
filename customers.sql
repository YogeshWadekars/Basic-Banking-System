-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Aug 08, 2021 at 11:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `mob_no` bigint(10) DEFAULT NULL,
  `acc_no` bigint(20) NOT NULL,
  `acc_bal` float DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`first_name`, `last_name`, `age`, `mob_no`, `acc_no`, `acc_bal`, `gender`, `email`, `address`) VALUES
('Ram', 'Jadhav', 25, 7052486310, 1111000001, 146001, 'Male', 'ramjadhav@gmail.com', 'Pune'),
('Sham', 'Jadhav', 30, 9850631478, 1111000002, 146001, 'Male', 'shamjadhav@gmail.com', 'Pune'),
('Ramesh', 'Yadav', 27, 7040954532, 1111000003, 14680.6, 'Male', 'rameshyadav@gmail.com', 'Bihar'),
('Reshma', 'Pawar', 23, 9940986532, 1111000004, 246000, 'Female', 'reshmapawar@gmail.com', 'Nashik'),
('Swati', 'Shembde', 43, 7040748532, 1111000005, 521001, 'Female', 'swatishembde@gmail.com', 'Nagpur'),
('Mehul', 'Sanap', 33, 7040956232, 1111000006, 178601, 'Male', 'mehulsanap@gmail.com', 'Dhule'),
('Mehul', 'Mane', 38, 7245893232, 1111000007, 17861.6, 'Male', 'mehulmane@gmail.com', 'Amravati'),
('Sita', 'Tiwari', 36, 9840956278, 1111000008, 83000, 'Female', 'sitatiwari@gmail.com', 'Gujrat'),
('Saniya', 'Shaikh', 19, 7040471420, 1111000009, 54610.6, 'Female', 'Saniyashaikh@gmail.com', 'UP'),
('Mohit', 'Sanap', 33, 7040945632, 1111000010, 11200.6, 'Male', 'mohitsanap@gmail.com', 'Dhule'),
('Sakshi', 'Patil', 41, 9840953232, 1111000011, 78600, 'Female', 'sakshipatil@gmail.com', 'Pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`acc_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `acc_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111000012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
