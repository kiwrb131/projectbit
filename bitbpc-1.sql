-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 11:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`ID`, `Name`, `Password`) VALUES
(1, 'a', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbatvite`
--

CREATE TABLE `tbatvite` (
  `ID` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL,
  `Atvite_1` varchar(50) NOT NULL,
  `Atvite_2` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbawar`
--

CREATE TABLE `tbawar` (
  `ID` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL,
  `Awar_1` varchar(50) NOT NULL,
  `Awar_2` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbcon`
--

CREATE TABLE `tbcon` (
  `ID` int(5) NOT NULL,
  `Addres` varchar(200) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Li` text NOT NULL,
  `Facebook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbcon`
--

INSERT INTO `tbcon` (`ID`, `Addres`, `Phone`, `Li`, `Facebook`) VALUES
(1, 'aswd', 0, 'wdsawd', 'sawdsa'),
(2, 'asdasd', 0, 'asdas', 'asdasd'),
(3, 'sedasdsdw', 452346456, 'asdawdsd', 'sfsdas');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `ID` int(5) NOT NULL,
  `tex` text NOT NULL,
  `ne` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`ID`, `tex`, `ne`) VALUES
(1, '100', 'ถุงสูญญากาศ ขนาด 1 กก. '),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, 'asdas', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbcouse`
--

CREATE TABLE `tbcouse` (
  `ID` int(5) NOT NULL,
  `Namefullth` varchar(100) NOT NULL,
  `Nameshotth` varchar(100) NOT NULL,
  `Namefulleng` varchar(100) NOT NULL,
  `Nameshoteng` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Credit` varchar(5) NOT NULL,
  `Qualifications` varchar(200) NOT NULL,
  `Course` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbimg`
--

CREATE TABLE `tbimg` (
  `ID` int(5) NOT NULL,
  `Environmentimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbnews`
--

CREATE TABLE `tbnews` (
  `ID` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Date` text NOT NULL,
  `Newimg` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbpage`
--

CREATE TABLE `tbpage` (
  `ID` int(5) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `Topic` varchar(30) NOT NULL,
  `Tittle` varchar(40) NOT NULL,
  `Text` text NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbpage`
--

INSERT INTO `tbpage` (`ID`, `Logo`, `Topic`, `Tittle`, `Text`, `Phone`) VALUES
(1, 'Apps-preferences-desktop-gaming.ico', '', '', 'asdawd', 15263),
(2, 'Apps-preferences-desktop-gaming.ico', '', '', 'aswdsd', 4151),
(3, 'Ampeross-Qetto-Steam.ico', '', '', 'aswdsad', 1545),
(4, 'App.ico', '', '', 'asdawd', 122),
(5, 'audio-folder.ico', '', '', 'asawd', 422),
(6, 'App.ico', '', '', 'dsawdsd', 4122452),
(7, 'App.ico', 'asdwd', 'asdwd', '', 0),
(8, 'audio-folder.ico', 'asdwd', 'asdwd', 'asdwd', 0),
(9, 'audio-folder.ico', 'asdwd', 'asdwd', 'asdwd', 522325);

-- --------------------------------------------------------

--
-- Table structure for table `tbprofessor`
--

CREATE TABLE `tbprofessor` (
  `ID` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Professorimg` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbqa`
--

CREATE TABLE `tbqa` (
  `ID` int(5) NOT NULL,
  `Q` varchar(200) NOT NULL,
  `A` varchar(200) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbqa`
--

INSERT INTO `tbqa` (`ID`, `Q`, `A`, `Status`) VALUES
(1, 'Hello', 'sdsdsdsdsd', 0),
(2, 'asdw', 'daswdwdsadwd', 1),
(3, 'asdw', 'asdasd', 0),
(4, 'asdasd', 'asdasd', 0);

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
-- Indexes for table `tbcon`
--
ALTER TABLE `tbcon`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbcouse`
--
ALTER TABLE `tbcouse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbimg`
--
ALTER TABLE `tbimg`
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
