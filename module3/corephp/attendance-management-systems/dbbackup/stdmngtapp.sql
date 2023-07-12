-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 02:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stdmngtapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_addcity`
--

CREATE TABLE `student_addcity` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `cityname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_addcity`
--

INSERT INTO `student_addcity` (`city_id`, `state_id`, `cityname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'ahemdabad'),
(3, 1, 'Porbandar'),
(4, 1, 'Bhavnagar'),
(5, 3, 'Bhopal'),
(6, 3, 'Indore'),
(7, 4, 'Jaipur'),
(8, 4, 'Udaipur'),
(9, 4, 'Kota'),
(10, 2, 'Varansi'),
(11, 2, 'Lucknow'),
(12, 2, 'Mirzapur'),
(13, 2, 'Mathura'),
(14, 2, 'Agra'),
(15, 2, 'Noida'),
(16, 2, 'Gaziabad'),
(17, 5, 'Mumbai'),
(18, 5, 'pune'),
(19, 7, 'San fansisco'),
(20, 7, 'Los angelis');

-- --------------------------------------------------------

--
-- Table structure for table `student_addcountry`
--

CREATE TABLE `student_addcountry` (
  `countryid` int(11) NOT NULL,
  `countryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_addcountry`
--

INSERT INTO `student_addcountry` (`countryid`, `countryname`) VALUES
(1, 'india'),
(2, 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `student_addstate`
--

CREATE TABLE `student_addstate` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `statename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_addstate`
--

INSERT INTO `student_addstate` (`state_id`, `country_id`, `statename`) VALUES
(1, 1, 'Gujrat'),
(2, 1, 'Uttar pradesh'),
(3, 1, 'Madhya pradesh '),
(4, 1, 'Rajsthan'),
(5, 1, 'Mahrastra'),
(7, 2, 'California'),
(8, 2, 'Navada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_addcity`
--
ALTER TABLE `student_addcity`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `student_addcountry`
--
ALTER TABLE `student_addcountry`
  ADD PRIMARY KEY (`countryid`);

--
-- Indexes for table `student_addstate`
--
ALTER TABLE `student_addstate`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_addcity`
--
ALTER TABLE `student_addcity`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student_addcountry`
--
ALTER TABLE `student_addcountry`
  MODIFY `countryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_addstate`
--
ALTER TABLE `student_addstate`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
