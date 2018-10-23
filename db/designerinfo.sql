-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 10:53 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivyproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `designerinfo`
--

CREATE TABLE `designerinfo` (
  `designerfName` varchar(40) NOT NULL,
  `designersName` varchar(40) NOT NULL,
  `designerusername` varchar(40) NOT NULL,
  `designeremail` varchar(40) NOT NULL,
  `designerPhonenumber` int(15) NOT NULL,
  `designercounty` varchar(40) NOT NULL,
  `designerconstituency` varchar(40) NOT NULL,
  `designerPassword` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designerinfo`
--

INSERT INTO `designerinfo` (`designerfName`, `designersName`, `designerusername`, `designeremail`, `designerPhonenumber`, `designercounty`, `designerconstituency`, `designerPassword`) VALUES
('sylvia', 'yvonne', 'syl', 'sylviayvonne65@gmail.com', 745673456, 'nairobi', 'kakamega', '506cccc52c98e5d37d34b4228a0f5863');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
