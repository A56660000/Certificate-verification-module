-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2019 at 05:57 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificate`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate_details`
--

DROP TABLE IF EXISTS `certificate_details`;
CREATE TABLE IF NOT EXISTS `certificate_details` (
  `certificate_no` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_type` varchar(15) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `date_of_completion` date NOT NULL,
  `duration_of_course` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate_details`
--

INSERT INTO `certificate_details` (`certificate_no`, `student_name`, `course_name`, `course_type`, `grade`, `date_of_completion`, `duration_of_course`, `DOB`, `email`) VALUES
(12, 'dfjfkaj', 'k;ldk;s', 'dkdslk', 'a', '2019-06-13', 30, '2019-06-03', 's@gmail.com'),
(12, 'ghg', 'jdsjf', 'fajdj', 's', '2019-06-12', 45, '2019-06-05', 'sdfdsaf'),
(12, 'ghg', 'jdsjf', 'fajdj', 's', '2019-06-12', 45, '2019-06-05', 'sdfdsaf'),
(558, 'gaurav sawardekar', 'java', 'regular', 'A', '2019-06-02', 30, '2019-06-02', 'gaurav@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `password`) VALUES
('gaurav', '123'),
('gaurav', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
