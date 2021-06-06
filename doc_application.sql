-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 11:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_application`
--

CREATE TABLE `doc_application` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_application`
--

INSERT INTO `doc_application` (`id`, `name`, `mobile`, `email`, `address`, `image`, `password`) VALUES
(1, 'Partha Kandar', 9876543210, 'parthakandar98@gmail.com', 'Bulbulchati,Balarampur Road', 'upload/903_1622781345_death note.png', 'aA@123456'),
(2, 'Partha Kandar', 9876543210, 'parthakandar98@gmail.com', 'Bulbulchati,Balarampur Road', 'upload/888_1622781576_death note.png', 'aA@123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_application`
--
ALTER TABLE `doc_application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc_application`
--
ALTER TABLE `doc_application`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
