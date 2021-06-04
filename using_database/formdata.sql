-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2021 at 08:00 AM
-- Server version: 5.7.31
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpinter`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

DROP TABLE IF EXISTS `formdata`;
CREATE TABLE IF NOT EXISTS `formdata` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`ID`, `name`, `email`, `phone`, `gender`) VALUES
(1, 'Parth', 'parthvmpatel', '8225851303', 'male'),
(2, 'pk', 'pk@gmail.com', '829364629', 'male'),
(8, 'radha', 'radha@gmail.com', '7385292538', 'female'),
(6, 'pa', 'jcsnj@gmail.com', '328238', 'male'),
(7, 'pa', 'jcsnj@gmail.com', '328238', 'male'),
(9, 'krishna', 'krishna@gmail.com', '9347445832', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
