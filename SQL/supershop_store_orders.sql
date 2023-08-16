-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 06:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supershop_store_orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_orders`
--

CREATE TABLE `store_orders` (
  `SID` int(11) DEFAULT NULL,
  `ORDID` int(11) NOT NULL,
  `DID` int(11) DEFAULT NULL,
  `ORDDATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PMYSTAT` varchar(20) DEFAULT NULL,
  `SHPMODE` varchar(20) DEFAULT NULL,
  `SHPSTAT` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_orders`
--

INSERT INTO `store_orders` (`SID`, `ORDID`, `DID`, `ORDDATE`, `PMYSTAT`, `SHPMODE`, `SHPSTAT`) VALUES
(11, 1, 111, '2023-06-18 15:46:03', 'Paid', 'Premium', 'Shipped'),
(11, 2, 111, '2023-06-18 17:09:19', 'Paid', NULL, NULL),
(11, 3, 111, '2023-06-19 03:15:18', 'Unpaid', 'Premium', 'Shipped'),
(11, 4, 111, '2023-06-19 03:12:58', NULL, NULL, NULL),
(11, 5, 111, '2023-06-19 04:41:35', NULL, NULL, NULL),
(11, 6, 111, '2023-07-10 03:27:00', NULL, NULL, NULL),
(11, 8, 111, '2023-07-17 03:00:57', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t`
--

CREATE TABLE `t` (
  `temp` varchar(20) NOT NULL,
  `tee` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t`
--

INSERT INTO `t` (`temp`, `tee`) VALUES
('1', '2023-06-18 15:45:16'),
('1', '2023-06-18 15:45:41'),
('1', '2023-06-18 15:45:57'),
('1', '2023-06-18 15:46:08'),
('2', '2023-06-18 17:09:05'),
('2', '2023-06-18 17:09:22'),
('3', '2023-06-19 03:14:32'),
('3', '2023-06-19 03:14:56'),
('3', '2023-06-19 03:15:13'),
('7', '2023-06-19 04:42:20'),
('2', '2023-06-19 04:42:27'),
('8', '2023-07-10 03:27:48'),
('', '2023-07-10 03:28:05'),
('8', '2023-07-10 03:28:07'),
('8', '2023-07-10 03:28:18'),
('10', '2023-07-17 03:06:03'),
('1', '2023-07-17 03:06:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store_orders`
--
ALTER TABLE `store_orders`
  ADD PRIMARY KEY (`ORDID`),
  ADD KEY `DID` (`DID`),
  ADD KEY `SID` (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store_orders`
--
ALTER TABLE `store_orders`
  MODIFY `ORDID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `store_orders`
--
ALTER TABLE `store_orders`
  ADD CONSTRAINT `store_orders_ibfk_1` FOREIGN KEY (`DID`) REFERENCES `supershop_dstbr`.`dstbr` (`DID`),
  ADD CONSTRAINT `store_orders_ibfk_2` FOREIGN KEY (`SID`) REFERENCES `supershop_store`.`store` (`SID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
