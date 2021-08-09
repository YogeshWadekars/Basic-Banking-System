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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `from_acc` bigint(20) DEFAULT NULL,
  `to_acc` bigint(20) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `tr_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`from_acc`, `to_acc`, `date`, `amount`, `tr_id`) VALUES
(1111000001, 1111000002, '05/04/2020 07:20:34 PM', 20000, 100000001),
(1111000002, 1111000003, '06/04/2020 07:20:34 PM', 5000, 100000002),
(1111000001, 1111000005, '05-03-2020 07:20:34 PM', 4500, 100000003),
(1111000001, 1111000004, '07-08-2021 07:20:19 AM', 4500, 100000004),
(1111000005, 1111000004, '07-08-2021 07:20:19 AM', 4500, 100000005),
(1111000008, 1111000005, '08-08-2021 08:10:44 AM', 5600, 100000006);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tr_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
