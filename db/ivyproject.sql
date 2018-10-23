-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 02:52 PM
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
-- Table structure for table `shopperinfo`
--

CREATE TABLE `shopperinfo` (
  `shopperID` int(20) NOT NULL,
  `shopperfName` varchar(40) NOT NULL,
  `shoppersName` varchar(40) NOT NULL,
  `shopperusername` varchar(40) NOT NULL,
  `shopperemail` varchar(40) NOT NULL,
  `shopperPhonenumber` varchar(15) NOT NULL,
  `shopperCounty` varchar(40) NOT NULL,
  `shopperConstituency` varchar(40) NOT NULL,
  `shopperPassword` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopperinfo`
--

INSERT INTO `shopperinfo` (`shopperID`, `shopperfName`, `shoppersName`, `shopperusername`, `shopperemail`, `shopperPhonenumber`, `shopperCounty`, `shopperConstituency`, `shopperPassword`) VALUES
(6, ':pkjhgjv', 'oiuhyugy', 'pijhu', 'jobokello5@gmail.com', '567987654', 'nairobi', 'Embakasi', '9a102318a80b87454b1f1b33bf5223c8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopperinfo`
--
ALTER TABLE `shopperinfo`
  ADD PRIMARY KEY (`shopperID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopperinfo`
--
ALTER TABLE `shopperinfo`
  MODIFY `shopperID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
