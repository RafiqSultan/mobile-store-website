-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 12:20 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_number` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_number`, `category_name`) VALUES
(4, 'mobiles'),
(6, 'chargers'),
(7, 'batteries'),
(9, 'headphones'),
(10, 'electrical storage');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_number` int(11) NOT NULL,
  `company_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_number`, `company_name`) VALUES
(2, 'SAMSUNG'),
(3, 'LG'),
(7, 'Iphone'),
(8, 'Motorola'),
(9, 'Nokia'),
(10, 'Shaomi'),
(11, 'Sony Ericsson'),
(12, 'DELL'),
(13, 'Lenvo');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `device_number` int(11) NOT NULL,
  `image` longblob,
  `company_number` int(11) DEFAULT NULL,
  `device_name` varchar(20) NOT NULL,
  `version` varchar(20) NOT NULL,
  `opration_number` int(11) NOT NULL,
  `category_number` int(11) NOT NULL,
  `device_price` int(6) NOT NULL,
  `number_of_copy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`device_number`, `image`, `company_number`, `device_name`, `version`, `opration_number`, `category_number`, `device_price`, `number_of_copy`) VALUES
(1, NULL, 7, 'iphone12', '15', 3, 4, 400, 20),
(2, NULL, 2, 'Note 11', '11', 3, 4, 500, 30),
(3, NULL, 10, 'Redmi Note 9', '10', 3, 4, 250, 18),
(4, NULL, 7, 'Apple headphone', '13', 2, 9, 70, 60),
(5, NULL, 7, 'Apple headphone', '13', 2, 9, 70, 60),
(6, NULL, 2, 'batre  sm-j3', '2.2', 10, 7, 120, 30),
(7, NULL, 10, 'charg 18wt', '1', 5, 6, 90, 30),
(8, NULL, 10, 'charg 11wt', '3', 5, 6, 80, 24),
(9, NULL, 10, 'Redmi Note 11', '11', 5, 6, 600, 16),
(10, NULL, 13, 'VEG', '2.2', 5, 10, 200, 30),
(14, NULL, 7, 'iphone 13 pro', '15', 2, 4, 5000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_number` int(11) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_number`, `employee_name`, `username`, `password`) VALUES
(1, 'MOHAMMED', 'admin', '123'),
(2, 'YOSEF', 'emp', '111'),
(3, 'aziz', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `opration`
--

CREATE TABLE `opration` (
  `opration_number` int(11) NOT NULL,
  `opration_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opration`
--

INSERT INTO `opration` (`opration_number`, `opration_name`) VALUES
(2, 'Raqy'),
(3, 'Smart'),
(4, 'Normal'),
(5, 'electric device'),
(10, 'Mobile Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `payment_move`
--

CREATE TABLE `payment_move` (
  `move_number` int(1) NOT NULL,
  `supplier_number` int(11) NOT NULL,
  `total_of_device` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_move`
--

INSERT INTO `payment_move` (`move_number`, `supplier_number`, `total_of_device`, `total_price`, `payment_date`) VALUES
(1, 2, 100, 50000, '2019-01-17'),
(1, 1, 20, 150000, '2019-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `products_move`
--

CREATE TABLE `products_move` (
  `move_number` int(1) NOT NULL,
  `move_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_move`
--

INSERT INTO `products_move` (`move_number`, `move_name`) VALUES
(1, 'PAYMENT MOVE'),
(2, 'SELLING MOVE');

-- --------------------------------------------------------

--
-- Table structure for table `sell_move`
--

CREATE TABLE `sell_move` (
  `move_number` int(1) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `device_number` int(11) NOT NULL,
  `number_of_device` int(11) NOT NULL,
  `sell_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_number` int(11) NOT NULL,
  `supplier_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_number`, `supplier_name`) VALUES
(1, 'AMAZON WEB SITE'),
(2, 'ALAFANDI COMPANY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_number`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_number`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`device_number`),
  ADD KEY `jjj` (`company_number`),
  ADD KEY `op` (`opration_number`),
  ADD KEY `cat` (`category_number`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_number`);

--
-- Indexes for table `opration`
--
ALTER TABLE `opration`
  ADD PRIMARY KEY (`opration_number`);

--
-- Indexes for table `payment_move`
--
ALTER TABLE `payment_move`
  ADD KEY `pay` (`move_number`),
  ADD KEY `sup` (`supplier_number`);

--
-- Indexes for table `products_move`
--
ALTER TABLE `products_move`
  ADD PRIMARY KEY (`move_number`);

--
-- Indexes for table `sell_move`
--
ALTER TABLE `sell_move`
  ADD KEY `sell` (`move_number`),
  ADD KEY `gam` (`device_number`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `device_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `opration`
--
ALTER TABLE `opration`
  MODIFY `opration_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products_move`
--
ALTER TABLE `products_move`
  MODIFY `move_number` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `device`
--
ALTER TABLE `device`
  ADD CONSTRAINT `cat` FOREIGN KEY (`category_number`) REFERENCES `category` (`category_number`),
  ADD CONSTRAINT `jjj` FOREIGN KEY (`company_number`) REFERENCES `company` (`company_number`),
  ADD CONSTRAINT `op` FOREIGN KEY (`opration_number`) REFERENCES `opration` (`opration_number`);

--
-- Constraints for table `payment_move`
--
ALTER TABLE `payment_move`
  ADD CONSTRAINT `pay` FOREIGN KEY (`move_number`) REFERENCES `products_move` (`move_number`),
  ADD CONSTRAINT `sup` FOREIGN KEY (`supplier_number`) REFERENCES `supplier` (`supplier_number`);

--
-- Constraints for table `sell_move`
--
ALTER TABLE `sell_move`
  ADD CONSTRAINT `gam` FOREIGN KEY (`device_number`) REFERENCES `device` (`device_number`),
  ADD CONSTRAINT `sell` FOREIGN KEY (`move_number`) REFERENCES `products_move` (`move_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
