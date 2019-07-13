-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 10:31 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certi_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `name` varchar(300) NOT NULL,
  `c_number` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_type` varchar(200) NOT NULL,
  `duration` int(11) NOT NULL,
  `c_date` date NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`name`, `c_number`, `c_name`, `c_type`, `duration`, `c_date`, `number`, `email`) VALUES
('', 0, '', '', 0, '0000-00-00', 0, ''),
('', 0, '', '', 0, '0000-00-00', 0, ''),
('', 0, '', '', 0, '0000-00-00', 0, ''),
('tejas', 123, 'java', 'Crarsh Course', 12, '2019-12-31', 2147483647, 'gdg@ggs.gg'),
('tejas', 123, 'java', 'Full Course', 12, '2016-12-30', 2147483647, 'gdg@ggs.gg'),
('tejas', 123, 'java', 'Crarsh Course', 12, '2019-06-05', 2147483647, 'gdg@ggs.gg'),
('tejas', 123, 'java', 'Full Course', 12, '2019-12-29', 2147483647, ''),
('tejas', 123, 'java', 'Full Course', 12, '2019-12-31', 2147483647, 'gdg@ggs.gg'),
('tejas', 123, 'java', 'Crarsh Course', 12, '2018-11-30', 2147483647, 'gdg@ggs.gg'),
('tejas', 0, '', 'Internship', 0, '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `password`) VALUES
('tt', 'ttt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
