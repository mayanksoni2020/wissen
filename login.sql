-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2019 at 06:13 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatdata`
--

CREATE TABLE `chatdata` (
  `ID1` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `bot` tinyint(1) NOT NULL,
  `chattime` datetime NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logindata`
--

CREATE TABLE `logindata` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindata`
--

INSERT INTO `logindata` (`ID`, `email`, `password`) VALUES
(1, 'mayank@gmail.com', 'abc'),
(2, 'mayank1@gmail.com', 'abc1'),
(3, 'mayank2@gmail.com', 'abc2'),
(4, 'mayank3@gmail.com', 'abc3'),
(5, 'mayank4@gmail.com', 'abc4'),
(6, 'mayank5@gmail.com', 'abc5'),
(7, 'mayank6@gmail.com', 'abc6'),
(8, 'mayank7@gmail.com', 'abc7'),
(9, 'mayank8@gmail.com', 'abc8'),
(10, 'mayank9@gmail.com', 'abc9');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `optid` int(11) NOT NULL,
  `opt` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`optid`, `opt`, `text`) VALUES
(1, 'wissen', 'A student division dealing with organization of events related to computer science.'),
(2, 'people', 'CEO- ABC<br>\r\nMD - BAC'),
(3, 'past events', 'Hackathons, coding events'),
(4, 'upcoming events', 'more coding events'),
(5, 'contact', 'email:abc@gmail.com'),
(6, 'location', 'division of student affairs, block -,room -, LPU '),
(7, 'feedback', 'send your feedback at abc1@gmail.com'),
(8, 'join us', 'email us your details on abc2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatdata`
--
ALTER TABLE `chatdata`
  ADD PRIMARY KEY (`ID1`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `logindata`
--
ALTER TABLE `logindata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`optid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatdata`
--
ALTER TABLE `chatdata`
  MODIFY `ID1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logindata`
--
ALTER TABLE `logindata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chatdata`
--
ALTER TABLE `chatdata`
  ADD CONSTRAINT `chatdata_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `logindata` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
