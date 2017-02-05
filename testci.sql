-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 09:44 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testci`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `grp` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `grp`) VALUES
(1, 'Cosmetics', 'cos1'),
(2, 'Cloths', 'clo1'),
(3, 'Toys', 't1'),
(4, 'Perfumes', 'p1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `cid`, `sid`, `price`) VALUES
(1, 'abcedfds', 1, 2, '234'),
(2, 'abcedfds', 1, 2, '232'),
(3, 'Pioneer', 2, 1, '9000'),
(4, 'CI', 2, 1, '9000'),
(5, 'fsdf', 1, 2, '222'),
(6, 'internkatta', 1, 2, '234'),
(7, 'abcd', 2, 3, '90002'),
(8, 'adf', 3, 5, '232'),
(9, 'lips', 1, 2, '232'),
(10, 'lips', 1, 2, '232'),
(11, 'lips', 1, 2, '232'),
(12, 'Dev', 2, 3, '423');

-- --------------------------------------------------------

--
-- Table structure for table `productsfeature`
--

CREATE TABLE `productsfeature` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `cid` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `feature` text NOT NULL,
  `image` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsfeature`
--

INSERT INTO `productsfeature` (`id`, `pname`, `cid`, `sid`, `price`, `feature`, `image`, `email`, `contact`) VALUES
(1, 'Dresm', 1, 1, '232', 'feature1,feature2', '', 'jitendrapatwa135@gmail.com', '9999999999'),
(2, 'babypro', 3, 5, '234', 'feature1,feature2', '', 'jitendrapatwa135@gmail.com', '9999999999'),
(3, 'babypro', 3, 5, '234', '', '', '', ''),
(4, 'babypro', 1, 1, '234', 'feature1,feature2', '', 'jitendrapatwa135@gmail.com', '9999999999'),
(5, 'babypro', 1, 1, '234', '', '', '', ''),
(6, 'abcd', 2, 3, '90002', 'feature1,feature2', '', 'jitendrapatwa135@gmail.com', '9999999999'),
(7, 'abcd', 2, 3, '90002', '', '', '', ''),
(8, 'abcd', 2, 3, '90002', 'feature1,feature2', '', 'jitendrapatwa135@gmail.com', '9999999999'),
(9, 'adf', 3, 5, '232', 'feature1,feature2', '', 'jitendrapatwa135@gmail.com', '9999999999'),
(10, 'lips', 1, 2, '232', 'feature1,feature2', '', 'abc@gmail.com', '9999999999'),
(11, 'lips', 1, 2, '232', 'feature1,feature2', '', 'abc@gmail.com', '9999999999'),
(12, 'lips', 1, 2, '232', 'feature1,feature2', '', 'abc@gmail.com', '9999999999'),
(13, 'Dev', 2, 3, '423', 'feature1,feature2', '', 'dreamwood.devendra@gmail.com', '9999999999');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `grp` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `sname`, `cid`, `grp`) VALUES
(1, 'NellPolish', 1, 'cos1'),
(2, 'Lipstics', 1, 'cos1'),
(3, 'Raymond', 2, 'clo1'),
(4, 'Pantallons', 2, 'clo1'),
(5, 'Trains', 3, 't1'),
(6, 'Royal', 4, 'p1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsfeature`
--
ALTER TABLE `productsfeature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `productsfeature`
--
ALTER TABLE `productsfeature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
