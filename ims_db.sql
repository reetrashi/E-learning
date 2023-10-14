-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 10:05 PM
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
-- Database: `ims_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course2`
--

CREATE TABLE `course2` (
  `course_id` int(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_desc` varchar(100) NOT NULL,
  `course_author` text NOT NULL,
  `course_duration` varchar(20) NOT NULL,
  `course_price` int(30) NOT NULL,
  `course_original_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course2`
--

INSERT INTO `course2` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_duration`, `course_price`, `course_original_price`) VALUES
(1, 'C programming', 'L;DFJ;LKASD;FLSJAD;LFKJA;LFK', 'Tuhin', '3 month', 123, 5000),
(2, 'Python', 'Learn Python', 'Mihir', '2months', 123, 1234),
(9, 'Guitar', 'Learn playing guitar', 'Rashi', '4months', 123, 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course2`
--
ALTER TABLE `course2`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course2`
--
ALTER TABLE `course2`
  MODIFY `course_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
