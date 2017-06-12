-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2017 at 09:52 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `pen_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`id`, `first_name`, `last_name`, `pen_name`) VALUES
(1, 'Aeroslim Fitness Centre', 'Rs.300', NULL),
(4, 'Fit fizik Zone', 'Rs.300', NULL),
(6, 'SDAT Dolphin Swimming Acadamy', 'Rs.400', NULL),
(7, 'Body Language', 'Rs.300', NULL),
(8, '99 Degree Fitness Studio', 'Rs.300', NULL),
(9, 'Slim and Shape', 'Rs.300', NULL),
(11, 'Golden Globe Gym & Fitness Studio', 'Rs.300', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Author`
--
ALTER TABLE `Author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;