-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 07:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot`
--

-- --------------------------------------------------------

--
-- Table structure for table `robot_arm`
--

CREATE TABLE `robot_arm` (
  `id` int(255) NOT NULL,
  `motor1` int(255) NOT NULL,
  `motor2` int(255) NOT NULL,
  `motor3` int(255) NOT NULL,
  `motor4` int(255) NOT NULL,
  `motor5` int(255) NOT NULL,
  `motor6` int(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `robot_arm`
--

INSERT INTO `robot_arm` (`id`, `motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`, `status`) VALUES
(45, 107, 62, 165, 67, 130, 43, 0),
(46, 148, 29, 148, 88, 38, 125, 0),
(48, 62, 123, 56, 150, 52, 127, 1),
(49, 50, 50, 122, 33, 132, 52, 1),
(51, 117, 20, 91, 42, 150, 147, 1),
(52, 118, 48, 130, 62, 99, 50, 1),
(53, 0, 0, 0, 0, 0, 0, 0),
(54, 142, 57, 44, 131, 64, 88, 0),
(55, 117, 43, 95, 25, 75, 180, 1),
(56, 110, 27, 154, 53, 137, 25, 0),
(57, 118, 45, 137, 35, 131, 53, 0),
(58, 136, 39, 148, 39, 143, 46, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robot_arm`
--
ALTER TABLE `robot_arm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robot_arm`
--
ALTER TABLE `robot_arm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
