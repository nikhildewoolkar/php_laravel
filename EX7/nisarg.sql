-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2019 at 06:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nisarg`
--

-- --------------------------------------------------------

--
-- Table structure for table `Shopping`
--

CREATE TABLE `Shopping` (
  `id` int(10) NOT NULL,
  `product` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Shopping`
--

INSERT INTO `Shopping` (`id`, `product`, `description`, `category`) VALUES
(1, 'Camera 1', 'This Is Camera 1', 'camera'),
(2, 'Camera 2', 'This Is Camera 1', 'camera'),
(3, 'Camera 3', 'This is Camera 3', 'camera'),
(4, 'Mobile 1', 'This Is Mobile 1', 'mobile'),
(5, 'Mobile 2', 'This Is Mobile 2', 'mobile'),
(6, 'Mobile 3', 'This Is Mobile 3', 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nisarg', 'patilnisargjayant@gmail.com', '12345678'),
(2, 'a', 'a', 'a'),
(3, 'b', 'b', 'b'),
(4, 'c', 'c', 'c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Shopping`
--
ALTER TABLE `Shopping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Shopping`
--
ALTER TABLE `Shopping`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
