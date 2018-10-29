-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2018 at 12:19 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `designerinfo`;
CREATE TABLE IF NOT EXISTS `designerinfo` (
  `designerID` int(10) NOT NULL AUTO_INCREMENT,
  `designerfName` varchar(40) NOT NULL,
  `designersName` varchar(40) NOT NULL,
  `designerusername` varchar(40) NOT NULL,
  `designeremail` varchar(40) NOT NULL,
  `designerPhonenumber` int(15) NOT NULL,
  `designercounty` varchar(40) NOT NULL,
  `designerconstituency` varchar(40) NOT NULL,
  `designerPassword` varchar(40) NOT NULL,
  PRIMARY KEY (`designerID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

DROP TABLE IF EXISTS `dispatch`;
CREATE TABLE IF NOT EXISTS `dispatch` (
  `dispatchID` int(10) NOT NULL AUTO_INCREMENT,
  `clothName` varchar(40) NOT NULL,
  `trpFee` int(10) NOT NULL,
  `shopperID` int(10) NOT NULL,
  `trpAgentID` int(10) NOT NULL,
  `shopperLattitude` varchar(50) NOT NULL,
  `shopperLongitude` varchar(50) NOT NULL,
  `deliveryStatus` varchar(20) NOT NULL,
  PRIMARY KEY (`dispatchID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(10) NOT NULL AUTO_INCREMENT,
  `clothName` varchar(40) NOT NULL,
  `clothDescription` varchar(400) NOT NULL,
  `orderPrice` int(10) NOT NULL,
  `shopperID` int(10) NOT NULL,
  `DesignerID` int(10) NOT NULL,
  `designerStatus` varchar(20) NOT NULL,
  `trpAgentStatus` varchar(20) NOT NULL,
  `shopperStatus` varchar(20) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

DROP TABLE IF EXISTS `refunds`;
CREATE TABLE IF NOT EXISTS `refunds` (
  `refundID` int(10) NOT NULL,
  `orderID` int(10) NOT NULL,
  `clothName` varchar(40) NOT NULL,
  `shopperID` int(10) NOT NULL,
  `refundAmount` int(10) NOT NULL,
  `refundStatus` varchar(20) NOT NULL,
  `reason` varchar(200) NOT NULL,
  PRIMARY KEY (`refundID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopperinfo`
--

DROP TABLE IF EXISTS `shopperinfo`;
CREATE TABLE IF NOT EXISTS `shopperinfo` (
  `shopperID` int(20) NOT NULL AUTO_INCREMENT,
  `shopperfName` varchar(40) NOT NULL,
  `shoppersName` varchar(40) NOT NULL,
  `shopperusername` varchar(40) NOT NULL,
  `shopperemail` varchar(40) NOT NULL,
  `shopperPhonenumber` varchar(15) NOT NULL,
  `shopperCounty` varchar(40) NOT NULL,
  `shopperConstituency` varchar(40) NOT NULL,
  `shopperPassword` varchar(40) NOT NULL,
  PRIMARY KEY (`shopperID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trpagentinfo`
--

DROP TABLE IF EXISTS `trpagentinfo`;
CREATE TABLE IF NOT EXISTS `trpagentinfo` (
  `trpAgentID` int(11) NOT NULL AUTO_INCREMENT,
  `trpAgentfName` varchar(40) NOT NULL,
  `trpAgentsName` varchar(40) NOT NULL,
  `trpAgentusername` varchar(40) NOT NULL,
  `trpAgentemail` varchar(40) NOT NULL,
  `trpAgentPhonenumber` int(15) NOT NULL,
  `trpAgentcounty` varchar(40) NOT NULL,
  `trpAgentconstituency` varchar(40) NOT NULL,
  `trpAgentPassword` varchar(40) NOT NULL,
  PRIMARY KEY (`trpAgentID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wages`
--

DROP TABLE IF EXISTS `wages`;
CREATE TABLE IF NOT EXISTS `wages` (
  `wageID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `designerID` int(11) NOT NULL,
  `trpAgentID` int(11) NOT NULL,
  `trpAgentWage` int(11) NOT NULL,
  `designerWage` int(11) NOT NULL,
  `wageStatus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
