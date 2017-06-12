-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2017 at 09:50 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `persons` int(2) NOT NULL,
  `loc_name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `email`, `time`, `persons`, `loc_name`, `date`) VALUES
(1, 'Srimathi', 'sri@gmail.com', '11-12AM', 2, 'Aeroslim Fitness Centre', '13/06/2017'),
(2, 'Syam Sundar K', 'k.syamsundar21@gmail.com', '4-5PM', 3, 'Aeroslim Fitness Centre', '13/06/2017'),
(3, 'Ranuga', 'ranu@gmail.com', '9-10AM', 1, 'Aeroslim Fitness Centre', '13/06/2017'),
(5, '', '', '', 0, 'Aeroslim Fitness Centre', '');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `twitter` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `email`, `pass`, `fname`, `lname`, `user_name`, `phone`, `age`, `gender`, `address`, `locality`, `twitter`) VALUES
(1, 'k.syamsundar21@gmail.com', 'password', 'Syam Sundar K', 'Kirubakaran', ' @Syam', 9790374010, 20, 'M', '19L,Sornam Colony,\r\nThirunagar', 'Madurai', '@bugscripter'),
(8, 'babyshree@gmail.com', 'passwordsd', 'Baby', 'Shree', '@baby', 9843185009, 88, 'F', '19L,Sornam Colony,\r\nThirunagar,\r\nMadurai', 'Madurai', '@kals'),
(22, 'sadasc@asd', 'ascasca', 'scdadc', 'asasdas', 'acsac', 31341, 12, '1', '123123', '123123', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;