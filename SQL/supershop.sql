-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 06:50 PM
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
-- Database: `supershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dstbr`
--

CREATE TABLE `dstbr` (
  `DID` int(11) NOT NULL,
  `DNAME` varchar(20) NOT NULL,
  `DPASS` varchar(20) NOT NULL,
  `DTYPE` varchar(20) NOT NULL,
  `DLOC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dstbr`
--

INSERT INTO `dstbr` (`DID`, `DNAME`, `DPASS`, `DTYPE`, `DLOC`) VALUES
(111, 'ABC', '111', 'XYZ', 'B'),
(113, 'd', 'admin', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SALESID` int(11) NOT NULL,
  `SDATE` varchar(20) DEFAULT NULL,
  `SCOST` int(11) DEFAULT NULL,
  `SID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SALESID`, `SDATE`, `SCOST`, `SID`) VALUES
(1, '01-01-2023', 25000, 11),
(2, '12-01-2023', 23000, 11);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `CRY` varchar(20) DEFAULT NULL,
  `SCRY` varchar(20) DEFAULT NULL,
  `QUANT` int(11) DEFAULT NULL,
  `SID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `SID` int(11) NOT NULL,
  `SPASS` varchar(20) NOT NULL,
  `SBRANCHNAME` varchar(20) NOT NULL,
  `SCITY` varchar(20) NOT NULL,
  `SREGION` varchar(20) NOT NULL,
  `SSTATE` varchar(20) NOT NULL,
  `SPCODE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`SID`, `SPASS`, `SBRANCHNAME`, `SCITY`, `SREGION`, `SSTATE`, `SPCODE`) VALUES
(11, '11', 'Kabbo', 'Kabbo', 'Z', 'Z', 1216),
(12, '', 'a', 'b', 'c', 'd', 3),
(13, '', 'Imran', 'Mirpur', 'x', 'x', 1212),
(14, 'admin', 'a', 'b', 'c', 'd', 12);

-- --------------------------------------------------------

--
-- Table structure for table `store_orders`
--

CREATE TABLE `store_orders` (
  `SID` int(11) DEFAULT NULL,
  `ORDID` int(11) NOT NULL,
  `DID` int(11) DEFAULT NULL,
  `ORDDATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `PMYSTAT` varchar(20) DEFAULT NULL,
  `SHPMODE` varchar(20) DEFAULT NULL,
  `SHPSTAT` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_orders`
--

INSERT INTO `store_orders` (`SID`, `ORDID`, `DID`, `ORDDATE`, `PMYSTAT`, `SHPMODE`, `SHPSTAT`) VALUES
(11, 1, 111, '2023-06-18 15:43:23', 'Paid', 'Premium', 'Shipped'),
(11, 2, 111, '2023-06-18 17:08:17', 'Paid', NULL, NULL),
(11, 3, 111, '2023-06-19 03:12:37', 'Unpaid', 'Premium', 'Shipped'),
(11, 5, 111, '2023-06-19 03:12:58', NULL, NULL, NULL),
(11, 7, 111, '2023-06-19 04:41:35', NULL, NULL, NULL),
(11, 8, 111, '2023-07-10 03:27:00', 'Paid', '', NULL),
(11, 9, 113, '2023-07-17 03:00:28', NULL, NULL, NULL),
(11, 10, 111, '2023-07-17 03:00:57', NULL, NULL, NULL);

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
('SCITY', '2023-07-16 15:36:29'),
('SBRANCHNAME', '2023-07-16 15:36:38'),
('SBRANCHNAME', '2023-07-16 15:46:30'),
('SBRANCHNAME', '2023-07-16 15:50:43'),
('SBRANCHNAME', '2023-07-16 15:50:55'),
('SCITY', '2023-07-16 15:53:08'),
('SCITY', '2023-07-16 15:54:00'),
('SCITY', '2023-07-16 15:54:06'),
('SREGION', '2023-07-16 15:54:08'),
('SREGION', '2023-07-16 15:56:48'),
('SCITY', '2023-07-16 15:56:50'),
('SBRANCHNAME', '2023-07-16 15:56:54'),
('SBRANCHNAME', '2023-07-16 16:01:21'),
('SBRANCHNAME', '2023-07-16 16:01:23'),
('SREGION', '2023-07-16 16:01:49'),
('SCITY', '2023-07-16 16:03:57'),
('SCITY', '2023-07-16 16:04:45'),
('SCITY', '2023-07-16 16:05:31'),
('SCITY', '2023-07-16 16:05:35'),
('SCITY', '2023-07-16 16:05:47'),
('SCITY', '2023-07-16 16:06:13'),
('SCITY', '2023-07-16 16:06:16'),
('SCITY', '2023-07-16 16:06:24'),
('SCITY', '2023-07-16 16:08:55'),
('None', '2023-07-16 16:08:55'),
('SCITY', '2023-07-16 16:08:58'),
('SCITY', '2023-07-16 16:09:22'),
('SCITY', '2023-07-16 16:09:57'),
('SBRANCHNAME', '2023-07-16 16:09:58'),
('SBRANCHNAME', '2023-07-16 16:10:31'),
('SCITY', '2023-07-16 16:10:35'),
('None', '2023-07-16 16:10:35'),
('SBRANCHNAME', '2023-07-16 16:10:37'),
('SCITY', '2023-07-16 16:13:29'),
('SCITY', '2023-07-16 16:36:32'),
('SREGION', '2023-07-16 16:36:38'),
('None', '2023-07-16 17:32:45'),
('SCITY', '2023-07-16 17:32:48'),
('SCITY', '2023-07-16 17:33:41'),
('SCITY', '2023-07-16 17:35:58'),
('SCITY', '2023-07-16 17:36:34'),
('SCITY', '2023-07-16 17:36:57'),
('SCITY', '2023-07-16 17:37:18'),
('SBRANCHNAME', '2023-07-16 17:37:22'),
('SBRANCHNAME', '2023-07-16 19:06:37'),
('SBRANCHNAME', '2023-07-16 19:06:47'),
('SCITY', '2023-07-16 19:08:08'),
('SBRANCHNAME', '2023-07-16 19:08:34'),
('SCITY', '2023-07-16 19:14:49'),
('SBRANCHNAME', '2023-07-16 19:15:08'),
('SBRANCHNAME', '2023-07-16 19:16:08'),
('SBRANCHNAME', '2023-07-16 19:16:18'),
('SCITY', '2023-07-16 19:16:59'),
('SCITY', '2023-07-16 19:34:28'),
('SCITY', '2023-07-16 19:37:33'),
('SCITY', '2023-07-16 19:37:46'),
('SCITY', '2023-07-16 19:50:08'),
('SCITY', '2023-07-16 19:51:37'),
('SREGION', '2023-07-16 19:51:41'),
('SREGION', '2023-07-16 19:51:56'),
('SBRANCHNAME', '2023-07-16 19:53:54'),
('SSTATE', '2023-07-16 19:54:02'),
('SREGION', '2023-07-16 19:54:46'),
('SCITY', '2023-07-16 19:55:58'),
('SBRANCHNAME', '2023-07-16 19:57:19'),
('SREGION', '2023-07-16 19:58:46'),
('SCITY', '2023-07-16 20:01:31'),
('SCITY', '2023-07-16 20:01:35'),
('SBRANCHNAME', '2023-07-16 20:01:40'),
('SBRANCHNAME', '2023-07-16 20:01:44'),
('SCITY', '2023-07-16 20:12:46'),
('SCITY', '2023-07-16 20:12:52'),
('SBRANCHNAME', '2023-07-17 02:44:52'),
('SCITY', '2023-07-17 02:45:04'),
('SSTATE', '2023-07-17 02:45:14'),
('SBRANCHNAME', '2023-07-17 02:48:32'),
('SREGION', '2023-07-17 02:49:11'),
('SSTATE', '2023-07-17 02:50:31'),
('SBRANCHNAME', '2023-07-17 03:03:12'),
('SCITY', '2023-07-17 03:03:40'),
('10', '2023-07-17 03:06:03'),
('1', '2023-07-17 03:06:19'),
('SBRANCHNAME', '2023-07-22 18:01:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dstbr`
--
ALTER TABLE `dstbr`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SALESID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`SID`);

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
-- AUTO_INCREMENT for table `dstbr`
--
ALTER TABLE `dstbr`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SALESID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `store_orders`
--
ALTER TABLE `store_orders`
  MODIFY `ORDID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `store` (`SID`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `store` (`SID`);

--
-- Constraints for table `store_orders`
--
ALTER TABLE `store_orders`
  ADD CONSTRAINT `store_orders_ibfk_1` FOREIGN KEY (`DID`) REFERENCES `dstbr` (`DID`),
  ADD CONSTRAINT `store_orders_ibfk_2` FOREIGN KEY (`SID`) REFERENCES `store` (`SID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
