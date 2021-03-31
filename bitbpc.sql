-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 03:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitbpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbatvite`
--

CREATE TABLE `tbatvite` (
  `ID` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbawar`
--

CREATE TABLE `tbawar` (
  `ID` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbconte`
--

CREATE TABLE `tbconte` (
  `ID` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbnews`
--

CREATE TABLE `tbnews` (
  `ID` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbpage`
--

CREATE TABLE `tbpage` (
  `ID` int(5) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbprofessor`
--

CREATE TABLE `tbprofessor` (
  `ID` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbqa`
--

CREATE TABLE `tbqa` (
  `Q` varchar(200) NOT NULL,
  `A` varchar(200) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbatvite`
--
ALTER TABLE `tbatvite`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbawar`
--
ALTER TABLE `tbawar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbconte`
--
ALTER TABLE `tbconte`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbnews`
--
ALTER TABLE `tbnews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbpage`
--
ALTER TABLE `tbpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbprofessor`
--
ALTER TABLE `tbprofessor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbqa`
--
ALTER TABLE `tbqa`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
