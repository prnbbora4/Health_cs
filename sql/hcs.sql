-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 08:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualifi` varchar(60) NOT NULL,
  `speciali` varchar(60) NOT NULL,
  `experience` int(11) NOT NULL,
  `symptoms` varchar(60) NOT NULL,
  `keywords` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`id`, `name`, `email`, `contact`, `address`, `qualifi`, `speciali`, `experience`, `symptoms`, `keywords`, `image`, `image1`, `image2`, `image3`) VALUES
(5, 'payel ', 'payel@gmail.com ', 678, 'yuiook, ghy, 6778', 'BAMS', 'Skin', 3, 'rashes', 'Skin, rashes', '1625811348_2293.png', '1625811348_5158.png', '1625811348_9764.png', '1625811348_8679.png');

-- --------------------------------------------------------

--
-- Table structure for table `p_status`
--

CREATE TABLE `p_status` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualifi` varchar(60) NOT NULL,
  `speciali` varchar(60) NOT NULL,
  `experience` int(11) NOT NULL,
  `symptoms` varchar(60) NOT NULL,
  `keywords` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_status`
--

INSERT INTO `p_status` (`id`, `name`, `email`, `contact`, `address`, `qualifi`, `speciali`, `experience`, `symptoms`, `keywords`, `image`, `image1`, `image2`, `image3`) VALUES
(3, '', '', 0, '', 'BAMS', 'Skin', 3, 'rashes', 'Skin, rashes', '1625811149_7362.jpg', '1625811149_3042.png', '1625811149_7357.png', '1625811149_9605.png'),
(4, 'payel ', '', 0, '', 'BAMS', 'Skin', 3, 'rashes', 'Skin, rashes', '1625811266_8667.jpg', '1625811266_3155.png', '1625811266_6749.png', '1625811266_3826.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `regid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(10) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `photo` blob NOT NULL,
  `id` blob NOT NULL,
  `license` blob NOT NULL,
  `certificate` blob NOT NULL,
  `experience` int(11) NOT NULL,
  `experiencecertificate` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`regid`, `name`, `username`, `email`, `password`, `address`, `city`, `state`, `zip`, `contact`, `photo`, `id`, `license`, `certificate`, `experience`, `experiencecertificate`) VALUES
(2, 'payel', 'payel1', 'payel@gmail.com', '202cb962ac59075b964b07152d234b70', 'yuiook', 'ghy', 'Assam', 6778, 678, 0x53637265656e73686f74202836292e706e67, 0x53637265656e73686f7420283134292e706e67, 0x53637265656e73686f7420283330292e706e67, 0x4d6178486561702e706e67, 6, 0x53637265656e73686f7420283237292e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_status`
--
ALTER TABLE `p_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `p_status`
--
ALTER TABLE `p_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
