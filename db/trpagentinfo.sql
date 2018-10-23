-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 10:51 PM
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
-- Table structure for table `trpagentinfo`
--

CREATE TABLE `trpagentinfo` (
  `trpAgentfName` varchar(40) NOT NULL,
  `trpAgentsName` varchar(40) NOT NULL,
  `trpAgentusername` varchar(40) NOT NULL,
  `trpAgentemail` varchar(40) NOT NULL,
  `trpAgentPhonenumber` int(15) NOT NULL,
  `trpAgentcounty` varchar(40) NOT NULL,
  `trpAgentconstituency` varchar(40) NOT NULL,
  `trpAgentPassword` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trpagentinfo`
--

INSERT INTO `trpagentinfo` (`trpAgentfName`, `trpAgentsName`, `trpAgentusername`, `trpAgentemail`, `trpAgentPhonenumber`, `trpAgentcounty`, `trpAgentconstituency`, `trpAgentPassword`) VALUES
('job', 'opiyo', 'jobu', 'jobokello5@gmail.com', 745673456, 'mombasa', 'kakamega', ''),
('job', 'opiyo', 'jobu', 'jobokello5@gmail.com', 745673456, 'mombasa', 'kakamega', '510e2e92b99a002cd9b5a61caf19c54c'),
('job', 'opiyo', 'jobu', 'jobokello5@gmail.com', 745673456, 'mombasa', 'kakamega', '7c51a5e6ea3214af970a86df89793b19'),
('sam', 'nyang', 'samnyang', 'sam@gmail.com', 745673456, 'mombasa', 'kakamega', '2d3c7cd7e9224d7100570660d4530455');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
