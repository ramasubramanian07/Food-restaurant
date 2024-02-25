-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 03:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(12, 'salad', 40, 0x73616c61642e6a7067, 1),
(13, 'bread', 50, 0x62726561642e6a7067, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `myquery` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `myquery`, `name`, `email`, `phoneno`, `msg`) VALUES
(1, 'order', 'surya', 'surya@gmail.com', 125467889, 'food not deleivered'),
(2, 'Site', 'ram', 'ram@gmail.com', 2147483647, 'Not properly working'),
(3, 'food', 'jk', 'jk@gmail.com', 2147483647, 'food is poor'),
(4, 'food', 'jk', 'jk@gmail.com', 2147483647, 'food is poor'),
(5, 'order', 'venkat', 'venki@gmail.com', 2147483647, 'wait for food'),
(6, 'Site', 'sri', 'sri@gmail.com', 2147483647, 'dfgf'),
(7, 'Site', 'sri', 'sri@gmail.com', 2147483647, 'dfgf'),
(8, 'order', 'ram', 'ram@gmail.com', 2147483647, 'order very delay'),
(9, 'order', 'ram', 'ram@gmail.com', 2147483647, 'order very delay');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `password`) VALUES
(1, 'suresh', 'suresh@gmail.com', 'suresh'),
(2, 'ram', 'ram@gmail.com', 'ram123'),
(3, 'ram', 'ram@gmail.com', 'ram123'),
(4, 'sailu', 'sailu@gmail.com', 'sailu123'),
(5, 'ananth', 'karan@gmail.com', 'aaaa'),
(6, 'ananth', 'karan@gmail.com', 'aaaa'),
(7, 'surya', 'surya@gmail.com', 'ps143'),
(8, 'surya', 'surya@gmail.com', 'ps143'),
(9, 'vel', 'vel@gmail.com', 'surya'),
(10, 'ram', 'ram@gmail.com', 'ram123');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `des` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `img` longblob NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `fname`, `des`, `price`, `img`, `category`) VALUES
(1, 'salad', '', 40, 0x73616c61642e6a7067, ''),
(3, 'bread', '', 50, 0x62726561642e6a7067, ''),
(9, 'rose milk', '', 20, 0x62657272792e6a7067, ''),
(10, 'blue berry', '', 40, 0x626c756562657272792e6a7067, ''),
(11, 'chips', '', 30, 0x63686970732e6a7067, ''),
(12, 'Lime', '', 50, 0x6c696d652e6a7067, ''),
(14, 'Bits', '', 20, 0x656e6572677962697465732e6a7067, ''),
(18, 'Granola', '', 10, 0x6772616e6f6c612e6a7067, ''),
(19, 'Green juice', '', 30, 0x677265656e2e6a7067, ''),
(20, 'Lime', '', 67, 0x6b6977692e6a7067, '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pin_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`) VALUES
(1, 'ram', 54556767, 'ram@gmail.com', 'cash on delivery', '1', 'asdr', 'were', 'err', 'er', 123456),
(2, 'ram', 54556767, 'ram@gmail.com', 'cash on delivery', '1', 'asdr', 'were', 'err', 'er', 123456),
(3, 'ram', 23434466, 'ram@gmail.com', 'cash on delivery', '1', 'asdr', 'were', 'err', 'Eritrea', 123456),
(4, 'ram', 23434466, 'ram@gmail.com', 'cash on delivery', '1', 'asdr', 'were', 'err', 'Eritrea', 123456),
(5, 'surya', 2147483647, 'surya@gmail.com', 'cash on delivery', '7/27 madathu stree,sivanthipuram', 'asdr', 'chennai', 'tamilnadu', 'india', 123456),
(6, 'surya', 2147483647, 'surya@gmail.com', 'cash on delivery', '7/27 madathu stree,sivanthipuram', 'asdr', 'chennai', 'tamilnadu', 'india', 123456),
(7, 'maharaja', 2147483647, 'maha@gmail.com', 'cash on delivery', '5', 'ambur road', 'tirunelveli', 'tamilnadu', 'india', 627418),
(8, 'sri', 877809452, 'ram@gmail.com', 'cash on delivery', '1', 'asdr', 'were', 'err', 'Eritrea', 123456),
(9, 'sri', 877809452, 'ram@gmail.com', 'cash on delivery', '1', 'asdr', 'were', 'err', 'Eritrea', 123456),
(10, 'a.prema', 346576879, 'ram@gmail.com', 'cash on delivery', '1', 'asdr', 'were', 'err', 'Eritrea', 123456),
(11, 'a.prema', 346576879, 'ram@gmail.com', 'cash on delivery', '1', 'asdr', 'were', 'err', 'Eritrea', 123456),
(12, 'ram', 2147483647, 'ram@gmail.com', 'credit cart', '1', 'asdr', 'were', 'err', 'Eritrea', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`) VALUES
(1, 'surya', 'ram@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
