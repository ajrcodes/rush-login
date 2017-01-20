-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2017 at 08:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asig`
--

-- --------------------------------------------------------

--
-- Table structure for table `firstRoundEvent1`
--

CREATE TABLE `firstRoundEvent1` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firstRoundEvent2`
--

CREATE TABLE `firstRoundEvent2` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firstRoundEvent3`
--

CREATE TABLE `firstRoundEvent3` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rushee`
--

CREATE TABLE `rushee` (
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `year` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNum` varchar(20) NOT NULL,
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rusheeFirstRound`
--

CREATE TABLE `rusheeFirstRound` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rusheeSecondRound`
--

CREATE TABLE `rusheeSecondRound` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rusheeThirdRound`
--

CREATE TABLE `rusheeThirdRound` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondRoundEvent1`
--

CREATE TABLE `secondRoundEvent1` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondRoundEvent2`
--

CREATE TABLE `secondRoundEvent2` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondRoundEvent3`
--

CREATE TABLE `secondRoundEvent3` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thirdRoundEvent1`
--

CREATE TABLE `thirdRoundEvent1` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thirdRoundEvent2`
--

CREATE TABLE `thirdRoundEvent2` (
  `uvaid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firstRoundEvent1`
--
ALTER TABLE `firstRoundEvent1`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `email` (`uvaid`);

--
-- Indexes for table `firstRoundEvent2`
--
ALTER TABLE `firstRoundEvent2`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `email` (`uvaid`);

--
-- Indexes for table `firstRoundEvent3`
--
ALTER TABLE `firstRoundEvent3`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `email` (`uvaid`);

--
-- Indexes for table `rushee`
--
ALTER TABLE `rushee`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `uvaid` (`uvaid`);

--
-- Indexes for table `rusheeFirstRound`
--
ALTER TABLE `rusheeFirstRound`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `uvaid` (`uvaid`);

--
-- Indexes for table `rusheeSecondRound`
--
ALTER TABLE `rusheeSecondRound`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `uvaid` (`uvaid`);

--
-- Indexes for table `rusheeThirdRound`
--
ALTER TABLE `rusheeThirdRound`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `uvaid` (`uvaid`);

--
-- Indexes for table `secondRoundEvent1`
--
ALTER TABLE `secondRoundEvent1`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `email` (`uvaid`);

--
-- Indexes for table `secondRoundEvent2`
--
ALTER TABLE `secondRoundEvent2`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `email` (`uvaid`);

--
-- Indexes for table `secondRoundEvent3`
--
ALTER TABLE `secondRoundEvent3`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `email` (`uvaid`);

--
-- Indexes for table `thirdRoundEvent1`
--
ALTER TABLE `thirdRoundEvent1`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `uvaid` (`uvaid`);

--
-- Indexes for table `thirdRoundEvent2`
--
ALTER TABLE `thirdRoundEvent2`
  ADD PRIMARY KEY (`uvaid`),
  ADD UNIQUE KEY `uvaid` (`uvaid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
