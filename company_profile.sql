-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2021 at 03:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin01');

-- --------------------------------------------------------

--
-- Table structure for table `info_panel`
--

CREATE TABLE `info_panel` (
  `id` int(11) NOT NULL,
  `whoAreWe` text NOT NULL,
  `ourMission` text NOT NULL,
  `whatWeDo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_panel`
--

INSERT INTO `info_panel` (`id`, `whoAreWe`, `ourMission`, `whatWeDo`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `discover` text NOT NULL,
  `define` text NOT NULL,
  `design` text NOT NULL,
  `develop` text NOT NULL,
  `deploy` text NOT NULL,
  `deliver` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `discover`, `define`, `design`, `develop`, `deploy`, `deliver`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel lacus a turpis vulputate faucibus ac id nisi. Aliquam condimentum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `workingspace`
--

CREATE TABLE `workingspace` (
  `id` int(11) NOT NULL,
  `workingspace` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workingspace`
--

INSERT INTO `workingspace` (`id`, `workingspace`) VALUES
(1, 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_panel`
--
ALTER TABLE `info_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workingspace`
--
ALTER TABLE `workingspace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info_panel`
--
ALTER TABLE `info_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workingspace`
--
ALTER TABLE `workingspace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
